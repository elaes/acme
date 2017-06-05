<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ProductRequest;
use App\Repositories\ProductRepository;
use app\Product;

class ProductController extends Controller
{
    protected $productRepository;
    protected $nbrPerPage = 4;
    
    public function __construct(ProductRepository $productRepository){
        $this->productRepository = $productRepository;
    }
    
    public function index()
    {
        $products = $this->productRepository->getPaginate($this->nbrPerPage);
        
        return view('index', compact('products'));
    }
    
    public function create()
    {
        return view('create');
    }
    
    public function store(ProductRequest $request)
    {
        $product = $this->productRepository->store($request->all());
        
        return redirect()->route('product.index')->withOk("Le produit " . $product->name . " a été créé.");
    }
    
    public function show(Product $product)
    {
        return view('show',  compact('product'));
    }
    
    public function edit(Product $product)
    {
        return view('edit',  compact('product'));
    }
    
    public function update(ProductRequest $request, Product $product)
    {
        $this->productRepository->update($product, $request->all());
        
        return redirect()->route('product.index')->withOk("Le produit " . $request->name . " a été modifié.");
    }
    
    public function destroy(Product $product)
    {
        $this->productRepository->destroy($product);
        
        return back();
    }
    
    public function jsonData(Request $request){
        if ($param = $request->input('s')){
            return response()->json($this->productRepository->search($param));
        }
        return response()->json($this->productRepository->getPaginate($this->nbrPerPage));
    }
}