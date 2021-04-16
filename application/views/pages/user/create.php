<ol class="breadcrumb">
    <?php $this->load->view('pages/user/includes/breadcrumb-item') ?>
    <li class="breadcrumb-item active"><a href="<?= base_url('users/create') ?> ">Novo</a></li>
</ol>
<h1>Criar novo usuário </h1>

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">

        <?= validation_errors('<div class="text-danger">', '</div>'); ?>
        <?= form_open('users/store'); ?>
        <?php $this->load->view('pages/user/includes/form') ?>
        <button type="submit" class="btn btn-success">Criar</button>
        </form>

    </div>

</div>