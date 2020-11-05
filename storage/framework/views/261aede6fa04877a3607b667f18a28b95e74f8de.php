<div
    id="<?php echo e($this->getId('areas')); ?>"
    class="map-areas"
    aria-multiselectable="true"
    data-control="areas"
>
    <?php $__currentLoopData = $mapAreas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mapArea): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php echo $this->makePartial('maparea/area', ['area' => $mapArea]); ?>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/formwidgets/maparea/areas.blade.php ENDPATH**/ ?>