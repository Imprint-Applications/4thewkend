<li
    id="<?php echo e($item->getId()); ?>"
    class="nav-item">
    <a <?php echo $item->getAttributes(); ?>>
        <i class="fa <?php echo e($item->icon); ?>"></i>
        <?php if($item->badge): ?>
            <span class="label <?php echo e($item->badge); ?>"></span>
        <?php endif; ?>
        <?php if($item->label): ?>
            <span><?php echo app('translator')->get($item->label); ?></span>
        <?php endif; ?>
    </a>
</li>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/widgets/menu/item_link.blade.php ENDPATH**/ ?>