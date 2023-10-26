<div class="field">
        <label class="label" for="name"><?= lang('Users.nme') ?></label>
        <input class="input" type="text" name="name" id="name" value="<?= old('name', esc($user->name)) ?>">
</div>

<div class="field">
        <label class="label" for="email"><?= lang('Users.ml') ?></label>
        <input class="input" type="text" name="email" id="email" value="<?= old('email', esc($user->email)) ?>">
</div>

<div class="field">
    <label class="label" for="password"><?= lang('Users.psw') ?></label>
    <input class="input" type="password" name="password"> 
    <?php if ($user->id): ?>
        <p class="help"><?= lang('Users.passexist') ?></p>
    <?php endif; ?>
</div>

<div class="field">
    <label class="label" for="password_confimation"><?= lang('Users.reppass') ?></label>
    <input class="input" type="password" name="password_confirmation">
</div>

<div class="field">
   <label for="is_active">
        <?php if ($user->id == current_user()->id): ?>
            <input type="checkbox" checked disabled> <?= lang('Users.ac') ?>

        <?php else: ?>

            <input type="hidden" name="is_active" value="0">
        
            <input type="checkbox" id="is_active" name="is_active" value="1" 
                    <?php if (old('is_active', $user->is_active)): ?>checked<?php endif; ?>> <?= lang('Users.ac') ?>
        <?php endif; ?>
   </label>
</div>

<div class="field">
   <label for="is_admin">
        <?php if ($user->id == current_user()->id): ?>
            <input type="checkbox" checked disabled> <?= lang('Users.admin') ?>

        <?php else: ?>

            <input type="hidden" name="is_admin" value="0">
        
            <input type="checkbox" id="is_admin" name="is_admin" value="1" 
                    <?php if (old('is_admin', $user->is_admin)): ?>checked<?php endif; ?>> <?= lang('Users.admin') ?>
        <?php endif; ?>
   </label>
</div>