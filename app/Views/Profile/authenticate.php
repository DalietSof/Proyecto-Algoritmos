<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profile.editp') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profile.editp') ?></h1>

<p class="subtitle mt-4"><?= lang('Profile.passconti') ?></p>

<?= form_open("/profile/processauthenticate") ?>

    <div>
        <label for="password"><?= lang('Profile.pass') ?></label>
        <input type="password" name="password">
    </div>

<div class="field is-grouped mt-4">
    <div class="control">
        <button class="button is-primary is-light is-rounded"><?= lang('Profile.bsend') ?></button>
    </div>

    <div class="control">
        <a class="button is-danger is-light is-rounded" href="<?= site_url('/profile/show') ?>"><?= lang('Profile.bcancel') ?></a>
    </div>
</form>
</div>
<?= $this->endSection() ?>










