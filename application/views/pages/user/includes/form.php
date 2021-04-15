<div class="form-group">
    <label>Nome:</label>
    <?= form_input('nome', $user->nome ?? '',['class' => 'form-control']); ?>
</div>
<div class="form-group mb-2">
    <label>Email:</label>
    <?= form_input('email', $user->email ?? '',['class' => 'form-control']); ?>
</div>
