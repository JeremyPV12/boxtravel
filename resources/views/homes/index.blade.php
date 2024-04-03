@extends('templates.template')

@section('title','PAGINA PRINCIPAL DE CLIENTES')

@section('body')
    <h1>Esta es la pagina principal de clientes</h1>
    <h2><a href="{{route('personas.index')}}">Regresar</a></h2>
@endsection