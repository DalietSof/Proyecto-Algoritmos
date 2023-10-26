<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.adiuser') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?= lang('Users.ediuser') ?></h1>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error?></li>
            <?php endforeach ?>
        </ul>
<?php endif ?>

<?= form_open("/admin/users/update/" . $user->id) ?>
    
    <?= $this->include('Admin/Users/form') ?>

    <button class="button is-primary is-light is-rounded"><?= lang('Users.bsv') ?></button>
    <a class="button is-link is-light is-rounded" href="<?= site_url("/admin/users/show/" . $user->id) ?>"><?= lang('Users.bcnl') ?></a>
    </form>

<?= $this->endSection() ?>