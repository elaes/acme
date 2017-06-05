
@extends('template')
 
@section('contenu')
    <div class="col-sm-offset-4 col-sm-4">
        <br>
        <div class="panel panel-primary">   
            <div class="panel-heading">Fiche produit</div>
            <div class="panel-body"> 
                <p>Nom : {{ $product->name }}</p>
                <p>Description : {{ $product->description }}</p>
            </div>
        </div>              
        <a href="javascript:history.back()" class="btn btn-primary">
            <span class="glyphicon glyphicon-circle-arrow-left"></span> Retour
        </a>
    </div>
@endsection