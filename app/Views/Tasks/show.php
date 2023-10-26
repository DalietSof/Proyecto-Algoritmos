<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.tarea') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Tasks.tarea') ?></h1>

<a href="<?= site_url("/tasks") ?>">&laquo; <?= lang('Tasks.indexback') ?></a>

<div class="content mt-4"> 

<dl>
    <dt class="has-text-weight-bold"><?= lang('Tasks.id') ?></dt>
    <dd><?= $task->id ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Tasks.des') ?></dt>
    <dd><?= esc($task->description) ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Tasks.cdesde') ?></dt> 
    <dd><?= $task->created_at->humanize() ?></dd>

    <dt class="has-text-weight-bold"><?= lang('Tasks.adesde') ?></dt> 
    <dd><?= $task->updated_at->humanize() ?></dd>
</dl>
</div>

<a class="button is-link is-light is-rounded" href="<?= site_url('/tasks/edit/' . $task->id) ?>"><?= lang('Tasks.bedit') ?></a>
<a class="button is-link is-light is-danger is-rounded" href="<?= site_url('/tasks/delete/' . $task->id) ?>"><?= lang('Tasks.bdelete') ?></a>

<?= $this->endSection() ?>