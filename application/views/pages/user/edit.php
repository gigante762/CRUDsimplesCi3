<ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?= base_url() ?> ">Usuários</a></li>
    <li class="breadcrumb-item"><a href="<?= base_url("users/{$user->id}") ?> "><?= $user->nome ?></a></li>
    <li class="breadcrumb-item active"><a href="<?= base_url() ?> ">Editar</a></li>
</ol>
<h1>Editar usuário <i><?= $user->nome ?></i></h1>

<div class="card">
    <div class="card-header">
    </div>
    <div class="card-body">
        <?= validation_errors(); ?>
        <?= form_open("users/update/{$user->id}"); ?>
            <?php $this->load->view('pages/user/includes/form') ?>
        <button type="submit" class="btn btn-success">Salvar</button>
        </form>
        <div style='text-align: right;'>
            <?= form_open("users/destroy/{$user->id}"); ?>
                <button class="btn btn-sm btn-danger">Deletar</button>
            </form>
        </div>
    </div>

</div>