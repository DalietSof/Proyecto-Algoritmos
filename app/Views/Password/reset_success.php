<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Password.passreset') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1><?= lang('Password.passreset') ?></h1>

<p><?= lang('Password.resetsucc') ?></p>

<p><a href="<?= site_url("/login") ?>"><?= lang('Password.login') ?></a></p>

<?= $this->endSection() ?> 