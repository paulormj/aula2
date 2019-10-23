@extends('layouts.app')

@section('title', 'Boa Tarde')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
<h1>Boa tarde! bem vindo</h1>
<h2>Boa tarde! {{$nome}}</h2>
@endsection  