
<div class="container">
    <div class="row py-4">
        <div class="col col-sm-8">
            <?= component('localBox'); ?>

            <div class="card my-1">
                <div class="card-body">
                    <?= partial('account::welcome'); ?>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <?= component('checkout'); ?>
                </div>
            </div>
        </div>

        <div class="col-sm-4">
            <?= partial('cartBox/container'); ?>
        </div>
    </div>
</div>