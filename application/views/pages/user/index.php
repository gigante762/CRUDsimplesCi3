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
            <?php $this->load->view('pages/user/includes/table') ?>
        <?php else : ?>
            <h5 class="text-center">Não há usuários cadastrados no sistema</h5>
        <?php endif ?>
    </div>
</div>