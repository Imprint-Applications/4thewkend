<?php if($outsideTabs->hasFields()): ?>
    <?php echo $this->makePartial('form/form_section', ['tabs' => $outsideTabs]); ?>

<?php endif; ?>

<?php if($primaryTabs->hasFields()): ?>
    <?php echo $this->makePartial('form/form_section', ['tabs' => $primaryTabs]); ?>

<?php endif; ?>

<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/widgets/form/form.blade.php ENDPATH**/ ?>