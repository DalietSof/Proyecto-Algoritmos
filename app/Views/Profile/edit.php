<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profile.editp') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?= lang('Profile.editp') ?></h1>

    <?php if (session()->has('errors')): ?>
        <ul>
            <?php foreach(session('errors') as $error): ?>
                <li><?= $error?></li>
            <?php endforeach ?>
        </ul>
<?php endif ?>

<?= form_open("/profile/update") ?>
    
    <div>
            <label for="name"><?= lang('Profile.nom') ?></label>
            <input type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
    </div>

    <div class="field is-grouped mt-4">
    <div class="control">
            <label for="email"><?= lang('Profile.mai') ?></label>
            <input type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
    </div>
    </div>

    <button class="button is-primary is-light is-rounded"><?= lang('Profile.bsave') ?></button>
    <a class="button is-danger is-light is-rounded" href="<?= site_url("/profile/show") ?>"><?= lang('Profile.bcancel') ?></a>

</form>

<?= $this->endSection() ?>