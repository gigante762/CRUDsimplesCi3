<?php if ($this->session->flashdata('message')): ?> 
    <div class="alert alert-success">
        <?= $this->session->flashdata('message') ?>
    </div>
<?php endif ?> 