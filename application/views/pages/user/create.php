<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?> ">Usuários</a></li>
    <li class="breadcrumb-item active"><a href="<?= base_url() ?> ">Novo</a></li>
</ol>
<h1>Criar novo usuário </h1>

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">

        <?= validation_errors(); ?>
        <?= form_open('users/store'); ?>
        <?php $this->load->view('pages/user/includes/form') ?>
        <button type="submit" class="btn btn-success">Criar</button>
        </form>

    </div>

</div>