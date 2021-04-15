<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Página não encontrada</title>
</head>
<body>
    <div class="container text-center my-5">
        <h3>OPS...</h3>
        <h5>A página procurada não foi encontrada.</h5>
        <div class="container">
            <?= anchor('/users', 'Encontre alguns usuários',"class='btn btn-dark'") ?>
        </div>
    </div>
    <style>
    </style>
</body>
</html>