<div
    class="filter-scope py-2"
    data-scope-name="<?php echo e($scope->scopeName); ?>">
    <div class="custom-control custom-checkbox">
        <input
            type="checkbox"
            id="<?php echo e($scope->getId()); ?>"
            class="custom-control-input"
            name="<?php echo e($this->getScopeName($scope)); ?>"
            value="1"
            <?php echo $scope->value ? 'checked' : ''; ?>

            <?php echo $scope->disabled ? 'disabled="disabled"' : ''; ?>

        >
        <label
            class="custom-control-label justify-content-start"
            for="<?php echo e($scope->getId()); ?>"
        ><?php echo app('translator')->get($scope->label); ?></label>
    </div>
</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/widgets/filter/scope_checkbox.blade.php ENDPATH**/ ?>