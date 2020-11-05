<?php if($this->previewMode): ?>
    <div class="form-control-static"><?php echo $value; ?></div>
<?php else: ?>
    <div
        class="field-richeditor size-<?php echo e($size); ?>"
        data-control="rich-editor"
        data-height="<?php echo e($size == 'small' ? 150 : 300); ?>">
        <textarea
            name="<?php echo e($name); ?>"
            id="<?php echo e($this->getId('textarea')); ?>"
            class="form-control"
        ><?php echo trim($value); ?></textarea>
    </div>
<?php endif; ?>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/formwidgets/richeditor/richeditor.blade.php ENDPATH**/ ?>