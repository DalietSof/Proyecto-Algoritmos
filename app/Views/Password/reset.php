<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Password.passreset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1><?= lang('Password.passreset') ?></h1>

<?php if (session()->has('errors')) : ?>
    <ul>
        <?php foreach(session('errors') as $error): ?>
            <li><?= $error ?></li>
        <?php endforeach ?>
    </ul>
<?php endif ?>

<?= form_open("/password/processreset/$token") ?>

    <div>
        <label for="password"><?= lang('Password.pass') ?></label>
        <input type="password" name="password">
    </div>

    <div>
        <label for="password_confirmation"><?= lang('Password.repeat') ?></label>
        <input type="password" name="password_confirmation">
    </div>

    <button><?= lang('Password.resetpass') ?></button>

</form>

<?= $this->endSection() ?>
