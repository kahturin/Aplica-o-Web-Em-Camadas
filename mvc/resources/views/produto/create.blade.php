<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Novo Produto</title>
</head>
<body>
    <form action="{{ route('registrar_produto') }}" method="POST">
        @csrf
        <label for="">Nome</label>
        <input type="text" name="nome">
        <label for="">Custo</label>
        <input type="text" name="custo">
        <label for="">Preço</label>
        <input type="text" name="preco">
        <label for="">Quantidade</label>
        <input type="text" name="quantidade">
        <button>Salvar</button>
    </form>
</body>
</html>
