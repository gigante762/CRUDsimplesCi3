<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?> ">Usuários</a></li>
    <li class="breadcrumb-item active"><a href="<?= base_url() ?> ">Perfis</a></li>
</ol>
<h1>Usuários <a href="<?= base_url() ?> " class="btn btn-dark">ADD <i class="far fa-plus-square"></i></a></h1>

<div class="card">
    <div class="card-header">
        <form action="<?= base_url() ?> " method="post" class="form form-inline">
            <?php $this->load->view('pages/user/includes/form') ?>
            <input type="text" name='filter' placeholder="Nome" class="form-control mx-1" value="<?= base_url() ?> $filters['filter'] ?? '' }}" required>
            <button class="btn btn-info"><i class="fas fa-search"></i> Persquisar</button>


        </form>
    </div>
    <div class="card-body">

        <table class="table table-condesed">
            <thead>
                <tr>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Ultima atualização</td>
                    <td>Data de Criação</td>
                    <td width="250">Ações</td>
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
                            <a href="{{ route('profiles.edit', $profile->id) }}" class="btn btn-primary">Editar</a>
                            <a href="{{ route('profiles.permissions', $profile->id) }}" class="btn btn-primary"><i class="fas fa-lock"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- <div class="card-footer">
        <?php if (isset($filters)) : ?>
            {!! $profiles->appends($filters)->links() !!}
        <?php else : ?>
            {!! $profiles->links() !!}
        <?php endif ?>
    </div> -->
</div>