<!-- resources/views/disciplinas/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Disciplina</title>
</head>
<body>
    <h1>Editar Disciplina</h1>
    <form action="{{ route('disciplinas.update', $disciplina->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $disciplina->nome }}" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('disciplinas.index') }}">Voltar</a>
</body>
</html>
