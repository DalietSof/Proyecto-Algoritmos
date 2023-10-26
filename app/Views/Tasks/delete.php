<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.dt') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Tasks.dt') ?></h1>

<p><?= lang('Tasks.sure?') ?></p>

<?= form_open("/tasks/delete/" . $task->id) ?>

    <button class="button is-primary is-light is-rounded"><?= lang('Tasks.byes') ?></button>
    <a class="button is-link is-light is-rounded" href="<?= site_url('/tasks/show/' . $task->id) ?>"><?= lang('Tasks.bcancel') ?></a>

</form>

<?= $this->endSection() ?>
