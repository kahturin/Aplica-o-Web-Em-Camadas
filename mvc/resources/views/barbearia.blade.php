@extends('layouts.testando')
@section('title', 'Barbearia')
@section('sidebar')
    @parent
    <p>Serviços disponíveis</p>
@endsection
@section('content')
    <header>
    <h1>Olá, {{$nome}}! Seja bem-vinda.</h1>
    </header>

    <main>
        <ul class="produtos">
            <li>
            @if($mostrar)

            @foreach($produtos as $produto)
                <p class="servicos">produto #{{$produto['id']}}: {{$produto['texto']}}</p>
            @endforeach

                <h2>#1 Cabelo</h2>
                <p class="preco">25,00 R$</p>
            </li>
            <li>
                <h2>#2 Barba</h2>
                <p class="preco"> 18,00 R$</p>
            </li>
            <li>
                <h2> #3 Cabelo+Barba</h2>
                <p class="preco">35,00 R$</p>
            </li>
        </ul>


        @else
             o aviso não será exibido
        @endif


@endsection
