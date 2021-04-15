<?php if ($errors = validation_errors() ): ?>
    <div class="alert alert-warning">
        <?= $errors/ ?>
    </div>
<?php endif ?>

<?php if (session('message')): ?> 
    <div class="alert alert-info">
        {{session('message')}}
    </div>
<?php endif; ?> 

<?php if (session('warning')): ?>
    <div class="alert alert-warning">
        {{session('warning')}}
    </div>
<?php endif ?>

<?php if (session('error')): ?>
    <div class="alert alert-danger">
        {{session('error')}}
    </div>
<?php endif; ?>