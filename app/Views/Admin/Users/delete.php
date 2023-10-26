<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.deleus') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Users.deleus') ?></h1>

<p class="subtitle"><?= lang('Users.yousure') ?></p>

<?= form_open("/admin/users/delete/" . $user->id) ?>

    <button class="button is-primary is-light is-rounded"><?= lang('Users.by') ?></button>
    <a class="button is-link is-light is-rounded" href="<?= site_url('/admin/users/show/' . $user->id)?>"><?= lang('Users.bcnl') ?></a>

</form>

<?= $this->endSection() ?>