<div class="row-fluid">
    <?php echo form_open(current_url(),
        [
            'id'     => 'edit-form',
            'role'   => 'form',
            'method' => 'PATCH',
        ]
    ); ?>


    <?php echo $this->toolbarWidget->render(); ?>

    <?php echo $this->formWidget->render(); ?>


    <?php echo form_close(); ?>

</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/system/views/settings/edit.blade.php ENDPATH**/ ?>