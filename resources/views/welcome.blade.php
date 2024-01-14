<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        <link rel="stylesheet" href="/css/styles.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body>
        <h1>Esta é a página home</h1>
        <img src="/images/banner.jpeg" alt="banner">
        @if(10 > 15)
            <p>Condiçao verdadeira</p>
        @endif

        <p>{{ $nome }}</p>

        @if ($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif ($nome == "Bruno")
        <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e ele trabalha como {{ $profissao }}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for ($i = 0; $i < count($arr); $i++)
            <p>{{ $arr[$i] }}</p>
            @if ($i == 2)
                <p>O i é 2</p>
            @endif
        @endfor

        @php
            $name = "Bruno";
            echo $name;
        @endphp

        @foreach ($nomes as $nome)
            <p>{{ $loop->index }}</p>
            <p>{{ $nome }}</p>
        @endforeach

        <div>
            <span>
                <a href="/contatos">voltar para contatos</a>
            </span>
            <span>
                <a href="/produtos">voltar para produtos</a>
            </span>
        </div>
    </body>
</html>
