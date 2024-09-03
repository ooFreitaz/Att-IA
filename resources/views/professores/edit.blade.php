<!-- resources/views/professores/edit.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Editar Professor</title>
</head>
<body>
    <h1>Editar Professor</h1>
    <form action="{{ route('professores.update', $professor->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" value="{{ $professor->nome }}" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value="{{ $professor->email }}" required>
        <br>
        <button type="submit">Salvar</button>
    </form>
    <a href="{{ route('professores.index') }}">Voltar</a>
</body>
</html>
