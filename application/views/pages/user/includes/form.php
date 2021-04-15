<div class="form-group">
    <label>Nome:</label>
    <?= form_input('nome', $user->nome ?? set_value('nome'),['class' => 'form-control']); ?>
    <small class="text-danger"><?= form_error('nome'); ?></small>
</div>
<div class="form-group mb-2">
    <label>Email:</label>
    <?= form_input('email', $user->email ?? set_value('email'),['class' => 'form-control']); ?>
    <small class="text-danger"><?= form_error('email'); ?></small>
</div>
