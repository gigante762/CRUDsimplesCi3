<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url('users') ?> ">Usuários</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url('/search' . $this->input->get('filter')) ?> ">Pesquisar</a></li>

</ol>
<h1>Persquisa <i><?= $this->input->get('filter') ?></i> </h1>

<div class="card">
    <div class="card-header">
        <form action="<?= base_url('users/search'); ?>" class="form-inline">
            <input type="text" name='filter' placeholder="Nome" class="form-control" value="">
            <button class="btn btn-info"> Persquisar</button>
        </form>
    </div>
    <div class="card-body">
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

<?php else: ?>
    <h5 class="text-center">Não há usuários para pesquisa <i><?= $this->input->get('filter') ?></i></h5>
<?php endif ?>