@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')
<h1>Esta é a página home</h1>


<img src="/images/banner.jpeg" alt="banner">s

@if ($nome == 'Pedro')
    <p>O nome é Pedro</p>
@elseif ($nome == 'Bruno')
    <p>O nome é {{ $nome }} e ele tem {{ $idade }} anos e ele trabalha como {{ $profissao }}</p>
@else
    <p>O nome não é Pedro</p>
@endif

@endsection
