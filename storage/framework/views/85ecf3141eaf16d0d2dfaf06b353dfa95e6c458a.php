<div
    data-control="map-view"
    data-map-height="<?php echo e($mapHeight); ?>"
    data-map-zoom="<?php echo e($mapZoom); ?>"
    data-map-center='<?php echo json_encode($mapCenter, 15, 512) ?>'
    data-map-shape-selector="<?php echo e($shapeSelector); ?>"
    data-map-editable-shape="<?php echo e(!$previewMode); ?>"
>
    <div class="map-view"></div>
</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/admin/formwidgets/mapview/mapview.blade.php ENDPATH**/ ?>