<!-- resources/views/disciplinas/create.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Criar Disciplina</title>
</head>
<body>
    <h1>Criar Disciplina</h1>
    <form action="{{ route('disciplinas.store') }}" method="POST">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('disciplinas.index') }}">Voltar</a>
</body>
</html>
