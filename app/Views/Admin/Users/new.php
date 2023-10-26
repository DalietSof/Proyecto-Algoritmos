<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.nwu') ?><?= $this->endSection()?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Users.nwu') ?></h1>

<div class="container">

<?php if (session()->has('errors')): ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>

<?= form_open("/admin/users/create") ?>

    <?= $this->include('Admin/Users/form') ?>

<button class="button is-primary is-light is-rounded"><?= lang('Users.bsv') ?></button>
<a class="button is-link is-light is-rounded" href="<?= site_url("/admin/users") ?>"><?= lang('Users.bcnl') ?></a>

</form>
</div>
<?= $this->endSection() ?>