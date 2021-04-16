<ol class="breadcrumb">
    <?php $this->load->view('pages/user/includes/breadcrumb-item') ?>
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
            <?php $this->load->view('pages/user/includes/table') ?>
        <?php else : ?>
            <h5 class="text-center">Não há usuários para pesquisa <i><?= $this->input->get('filter') ?></i></h5>
        <?php endif ?>
    </div>
</div>