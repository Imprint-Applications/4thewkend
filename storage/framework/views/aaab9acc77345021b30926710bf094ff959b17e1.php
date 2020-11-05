<div
    id="<?php echo e($toolbarId); ?>"
    class="toolbar btn-toolbar <?php echo e($cssClasses); ?>"
>
    <?php if(strlen($buttonsHtml)): ?>
        <div class="toolbar-action">
            <div class="progress-indicator-container">
                <?php echo $buttonsHtml; ?>

            </div>
        </div>
    <?php endif; ?>
</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/widgets/toolbar/toolbar.blade.php ENDPATH**/ ?>