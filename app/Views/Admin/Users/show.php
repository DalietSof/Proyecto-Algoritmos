<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.usr') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Users.usr') ?></h1>

<a href="<?= site_url("/admin/users") ?>">&laquo; <?= lang('Users.backi') ?></a>

<div class="content mt-4">

<dl>
    <dt class="has-text-weight-bold"><?= lang('Users.nme') ?></dt>
    <dd><?= esc($user->name) ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Users.ml') ?></dt>
    <dd><?= esc($user->email) ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Users.act') ?></dt>
    <dd><?= $user->is_active ? 'yes' : 'no' ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Users.admin') ?></dt>
    <dd><?= $user->is_admin ? 'yes' : 'no' ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Users.creat') ?></dt> 
    <dd><?= $user->created_at ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Users.upat') ?></dt> 
    <dd><?= $user->updated_at ?></dd>
</dl>
</div>

<a class="button is-link is-light is-rounded" href="<?= site_url('/admin/users/edit/' . $user->id) ?>"><?= lang('Users.bedi') ?></a>

<?php if ($user->id != current_user()->id): ?>

    <a class="button is-link is-light is-danger is-rounded" href="<?= site_url('/admin/users/delete/' . $user->id) ?>"><?= lang('Users.bdele') ?></a>

<?php endif; ?>    

<?= $this->endSection() ?>






