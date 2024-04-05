@extends('templates.template')

@section('title','PAGINA PRINCIPAL DE CLIENTES')

@section('body')
    <h1>Esta es la pagina principal de clientes</h1>
   <h1><a href="{{route('personas.index')}}">Ir a Persona</a></h1>
@endsection