@extends('layouts.externo')
@section('title', 'Quadro de Avisos da Empresa')
@section('sidebar')
    @parent
    <p>^ ^ Barra superior adicionada do layout pai/mãe ^ ^ </p>
@endsection
@section('content')
    <p>Quadro de Avisos da Empresa</p>
    <br><br>
    <p>Olá, {{$nome}}! Veja abaixo os avisos da semana.</p>

    @if($mostrar)

        @foreach($avisos as $aviso)
            <p>aviso #{{$aviso['id']}}: {{$aviso['texto']}}</p>
        @endforeach

        <?php
            $varTeste = 'olá mundo';

            foreach($avisos as $aviso){

                echo "<p>aviso #{$aviso['id']}: {$aviso['texto']}</p>";
            }
        ?>

@else
             o aviso não será exibido
         @endif
Var de teste: {{$varTeste}}

@endsection
