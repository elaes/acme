@extends('template')
 
@section('contenu')
    <br>
    <div class="col-sm-offset-3 col-sm-6">
        @if(session()->has('ok'))
            <div class="alert alert-success alert-dismissible">{!! session('ok') !!}</div>
        @endif
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Liste des produits</h3>
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{!! $product->id !!}</td>
                            <td class="text-primary"><strong>{!! $product->name !!}</strong></td>
                            <td>{!! link_to_route('product.show', 'Voir', [$product->id], ['class' => 'btn btn-success btn-block']) !!}</td>
                            <td>{!! link_to_route('product.edit', 'Modifier', [$product->id], ['class' => 'btn btn-warning btn-block']) !!}</td>
                            <td>
                                {!! Form::open(['method' => 'DELETE', 'route' => ['product.destroy', $product->id]]) !!}
                                    {!! Form::submit('Supprimer', ['class' => 'btn btn-danger btn-block', 'onclick' => 'return confirm(\'Vraiment supprimer cet utilisateur ?\')']) !!}
                                {!! Form::close() !!}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        {!! link_to_route('product.create', 'Ajouter un produit', [], ['class' => 'btn btn-info pull-right']) !!}
        {!! $products->links() !!}
    </div>
@endsection