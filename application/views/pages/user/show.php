<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('/users') ?> ">Usuários</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url("users/{$user->id}") ?> "><?= $user->nome ?></a></li>

</ol>
<h1>Usuários </h1>

<div class="card">
    <div class="card-header">
        <h4>Usuario <i><?= $user->nome ?></i> </h4>
    </div>
    <div class="card-body">

        <p><b>Nome: </b><?= $user->nome ?></p>
        <p><b>Email: </b><?= $user->email ?></p>
        <p><b>Ultima atualização: </b><?= $user->ultimaAtualizacao ?></p>
        <p><b>Data de Cadastro</b><?= $user->dataCadastro ?></p>

    </div>
    <div class="card-footer">
        <a href="<?= base_url("users/edit/{$user->id}") ?>" class="btn btn-primary">Editar</a>
    </div>
</div>