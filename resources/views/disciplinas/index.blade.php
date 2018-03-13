@extends('master')
    @section('content')
        <a href="disciplinas/create">Criar uma nova disciplina</a>
        <ul>
        @foreach($disciplinas as $disciplina)
            <li>
                <a href="/disciplinas/{{ $disciplina->id }}">
                    {{ $disciplina->titulo }}
                </a> - 
                <a href="/disciplinas/{{ $disciplina->id }}/edit"> Editar </a> - 
                <form method="POST" action="/disciplinas/{{ $disciplina->id }}">
                    {{ csrf_field() }}
                    {{ method_field('delete') }}
                    <button type="submit">Apagar</button>
                </form>
            </li>
        @endforeach
        </ul>
    @endsection
