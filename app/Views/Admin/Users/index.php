<?= $this->extend('layouts/default') ?>

<?= $this->section('title') ?><?= lang('Users.users') ?><?= $this->endSection() ?>

<?= $this->section('content') ?>

    <h1 class="title"><?= lang('Users.users') ?></h1>

    <a class="button is-primary is-light is-rounded" href="<?= site_url("/admin/users/new") ?>"><?= lang('Users.nwu') ?></a>
    
    <?php if ($users): ?>

        <table class="table">
            <thead>
                <tr>
                    <th><?= lang('Users.nme') ?></th>
                    <th><?= lang('Users.ml') ?></th>
                    <th><?= lang('Users.actd') ?></th>
                    <th><?= lang('Users.admin') ?></th>
                    <th><?= lang('Users.creat') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>

                    <tr>
                        <td>
                            <a href="<?= site_url("/admin/users/show/" . $user->id) ?>">
                                <?= esc($user->name) ?>
                            </a>
                        </td>
                        <td><?= esc($user->email) ?></td>
                        <td><?= $user->is_active ? 'yes' : 'no' ?></td>
                        <td><?= $user->is_admin ? 'yes' : 'no' ?></td>
                        <td><?= $user->created_at ?></td>
                    </tr>

                <?php endforeach; ?>
            </tbody>
        </table>

    <?= $pager->simpleLinks() ?>

    <?php else: ?>

        <p><?= lang('Users.noufound') ?></p>

    <?php endif; ?>

<?= $this->endSection() ?>