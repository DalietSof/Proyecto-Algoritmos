<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.newt') ?><?= $this->endSection()?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Tasks.newt') ?></h1>

<div class="container"> 

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/tasks/create") ?>

    <?= $this->include('Tasks/form') ?>

<div class="field is-grouped mt-4">
    <div class="control">
        <button class="button is-primary is-light is-rounded"><?= lang('Tasks.bsave') ?></button>
    </div>
    <div class="control">
        <a class="button is-danger is-light is-rounded" href="<?= site_url("/tasks") ?>"><?= lang('Tasks.bcancel') ?></a>
    </div>
</div>
    



</form>
</div>
<?= $this->endSection() ?>