<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Disciplinas</title>
</head>
<body>
    <a href="disciplinas/create">Criar uma nova disciplina</a>
    <ul>
    @foreach($disciplinas as $disciplina)
        <li>
            <a href="/disciplinas/{{ $disciplina->id }}">
                {{ $disciplina->titulo }}
            </a>
        </li>
    @endforeach
    </ul>
</body>
</html>
