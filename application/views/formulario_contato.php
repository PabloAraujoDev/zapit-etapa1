<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Contato</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body class="container">

    <h2>Formulário de Contato</h2>
    <form method="post" action="<?= base_url('index.php/contato/enviar') ?>">
        <div class="form-group">
            <label for="nome">Nome:</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" class="form-control" name="email" id="email" required>
        </div>
        <div class="form-group">
            <label for="mensagem">Mensagem:</label>
            <textarea class="form-control" name="mensagem" id="mensagem" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
    </form>

</body>
</html>
