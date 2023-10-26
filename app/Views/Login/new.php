<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Login.log') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Login.log') ?></h1>

<div class="container">

<?= form_open("/login/create") ?>

    <div class="field">
        <label class="label" for="email"><?= lang('Login.mail') ?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <div class="field">
        <label class="label" for="password"><?= lang('Login.passw') ?></label>
        <input class="input" type="password" name="password">
    </div>

    <div class="field">
        <label class="checkbox" for="remember_me">
            <input type="checkbox" id="remember_me" name="remember_me"
                <?php if (old('remember_me')): ?>checked<?php endif; ?>> <?= lang('Login.remember') ?>
        </label>
    </div>

<div class="field is-grouped">
        <div class="control">
            <button class="button is-primary is-light is-rounded"><?= lang('Login.log_in') ?></button>

            <a class="button is-link is-light is-rounded" href="<?= site_url("/password/forgot") ?>"><?= lang('Login.bforgotpass') ?></a>
        </div>

    </form>

</div>

<?= $this->endSection() ?>