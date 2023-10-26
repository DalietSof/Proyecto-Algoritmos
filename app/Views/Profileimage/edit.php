<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Profileimage.Editi') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

<h1 class="title"><?= lang('Profileimage.Editi') ?></h1>

<?= form_open_multipart("/profileimage/update") ?>

    <div class="file">
        <label class="file-label">
            <input class="file-input" type="file" name="image">
            <span class="file-cta">
            <span class="file-icon">
                <i class="fas fa-upload"></i>
            </span>
            <span class="file-label">
            <?= lang('Profileimage.subir') ?>
            </span>
            </span>
        </label>
    </div>

    <div class="field is-grouped mt-4">
        <div class="control">                
            <button class="button is-primary is-light is-rounded"><?= lang('Profileimage.bUpload') ?></button>
        </div>
        <div class="control">
        <a class="button is-link is-light is-rounded" href="<?= site_url("/profile/show") ?>"><?= lang('Profileimage.bcancel') ?></a>
        </div>

</form>

<?= $this->endSection() ?>