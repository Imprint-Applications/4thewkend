
<?= partial('nav/local_tabs', ['activeTab' => 'menus']); ?>

<div class="panel">
    <div class="d-block d-sm-none">
        <div class="panel-body categories">
            <?= component('categories'); ?>
        </div>
    </div>

    <?= component('localMenu') ?>
</div>