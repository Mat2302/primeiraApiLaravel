@extends('layouts.main')

@section('title', 'Minas Tênis Clube')

@section('content')
    <h1>Some title</h1>
    <img src="/img/minasLogo.svg" alt="Logo">

    @if(10>5)
        <p>teste if e endif</p>
    @endif

    @if($name == 'Joana')
        <p>O nome é Joana</p>
    @elseif($name == 'Thaísa')
        <p>O nome é {{ $name }}</p>
    @else
        <p>Burro</p>
    @endif

    @for($i = 0; $i < count($arr); $i++)
        <p>{{ $arr[$i] }} - {{ $i }}</p>
    @endfor

    @foreach($names as $name)
        <p>{{ $loop->index }}</p>
        <p>{{ $name }}</p>
    @endforeach

    @php
        $team = 'Santos';
        echo $team;
    @endphp

    <!-- Comentário do HTML -->
    {{-- Comentário do Blade --}}
@endsection