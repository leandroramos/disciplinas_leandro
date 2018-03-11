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
        <li> {{ $disciplina->titulo }} </li>
    @endforeach
    </ul>
</body>
</html>
