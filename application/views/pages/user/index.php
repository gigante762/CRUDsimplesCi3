<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?> ">Usuários</a></li>

</ol>
<h1>Usuários <a href="<?= base_url('users/create') ?> " class="btn btn-dark">Novo <i class="far fa-plus-square"></i></a></h1>

<div class="card">
    <div class="card-header">
        <form action="<?= base_url('users/search'); ?>" class="form form-inline">
            <input type="text" name='filter' placeholder="Nome" class="form-control mx-1" value="">
            <button class="btn btn-info"> Persquisar</button>
        </form>
    </div>
    <div class="card-body">

        <?php $this->load->view('includes/alerts') ?>

        <?php if ($users) : ?>
            <table class="table table-condesed">
                <thead>
                    <tr>
                        <td>Nome</td>
                        <td>Email</td>
                        <td>Ultima atualização</td>
                        <td>Data de Criação</td>
                        <td width="50">Ações</td>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr style="width: 10px;">
                            <td><?= $user->nome ?></td>
                            <td><?= $user->email ?></td>
                            <td><?= $user->dataCadastro ?></td>
                            <td><?= $user->ultimaAtualizacao ?></td>
                            <td>
                                <a href="<?= base_url("users/{$user->id}"); ?>" class="btn btn-warning">Ver</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
    </div>
<?php else : ?>
    <h5 class="text-center">Não há usuários cadastrados no sistema</h5>
<?php endif ?>