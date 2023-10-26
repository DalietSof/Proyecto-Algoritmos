<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Password.forgotpass') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Password.forgotpass') ?></h1>

<?= form_open("/password/processforgot") ?>

    <div class="field">
        <label class="label" for="email"><?= lang('Password.email') ?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email') ?>">
    </div>

    <button class="button is-primary is-light is-rounded"><?= lang('Password.bSend') ?></button>

</form>

<?= $this->endSection() ?> 