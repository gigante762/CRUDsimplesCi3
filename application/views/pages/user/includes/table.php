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