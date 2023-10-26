<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profileimage.deletei') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profileimage.deletei') ?></h1>

<p class="subtitle mt-4"><?= lang('Profileimage.sure') ?></p>

<?= form_open("/profileimage/delete") ?>

<div class="field is-grouped mt-4">
    <div class="control">
        <button class="button is-primary is-light is-rounded"><?= lang('Profileimage.byes') ?></button>
    </div>

    <div class="control">    
        <a class="button is-danger is-light is-rounded" href="<?= site_url("/profile/show") ?>"><?= lang('Profileimage.bcancel') ?></a>
    </div>
    
</form>
</div>
<?= $this->endSection() ?>