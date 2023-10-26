<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Tasks.editt') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?= lang('Tasks.editt') ?></h1>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error?></li>
            <?php endforeach ?>
        </ul>
<?php endif ?>

<?= form_open("/tasks/update/" . $task->id) ?>
    
    <?= $this->include('Tasks/form') ?>

    <button class="button is-primary is-light is-rounded"><?= lang('Tasks.bsave') ?></button>
    <a class="button is-link is-light is-rounded" href="<?= site_url("/tasks/show/" . $task->id) ?>"><?= lang('Tasks.bcancel') ?></a>
    </form>

<?= $this->endSection() ?>
