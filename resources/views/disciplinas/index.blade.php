<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Disciplinas</title>
</head>
<body>
    @foreach($disciplinas as $disciplina)
        <h1> {{ $disciplina->titulo }} </h1>
    @endforeach
</body>
</html>
