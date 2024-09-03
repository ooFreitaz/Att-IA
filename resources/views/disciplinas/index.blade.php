<!-- resources/views/disciplinas/index.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Disciplinas</title>
</head>
<body>
    <h1>Disciplinas</h1>
    <a href="{{ route('disciplinas.create') }}">Adicionar Disciplina</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($disciplinas as $disciplina)
                <tr>
                    <td>{{ $disciplina->id }}</td>
                    <td>{{ $disciplina->nome }}</td>
                    <td>
                        <a href="{{ route('disciplinas.edit', $disciplina->id) }}">Editar</a>
                        <form action="{{ route('disciplinas.destroy', $disciplina->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
