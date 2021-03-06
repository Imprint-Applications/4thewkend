<div id="carte-modal" class="modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title"><?php echo app('translator')->get('system::lang.updates.text_title_carte'); ?></h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body wrap-none">
                <div class="panel panel-light panel-carte">
                    <div id="carte-details">
                        <?php echo $this->makePartial('updates/carte_info', ['carteInfo' => $carteInfo]); ?>

                    </div>
                    <div class="panel-footer">
                        <?php echo form_open(current_url(),
                            [
                                'id' => 'carte-form',
                                'role' => 'form',
                                'method' => 'POST',
                            ]
                        ); ?>

                        <div class="input-group">
                            <input type="text"
                                   class="form-control"
                                   name="carte_key"
                                   placeholder="Enter your carte key...">
                            <span class="input-group-btn">
                                <a
                                    class="btn btn-outline-default btn-carte-help"
                                    onclick="$('#carte-help').slideToggle()"
                                >
                                    <i class="fa fa-question-circle"></i>
                                </a>
                                <button
                                    id="update-carte"
                                    class="btn btn-primary"
                                    type="button"><i class="fa fa-arrow-right"></i></button>
                            </span>
                        </div>
                        <?php echo form_close(); ?>

                        <div
                            id="carte-help"
                            class="wrap-horizontal"
                            style="display: <?php echo e($carteInfo ? 'none' : 'block'); ?>;"><?php echo sprintf(lang('system::lang.updates.help_carte_key'), 'https://tastyigniter.com/signin'); ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/nt3vgab2/public_html/tasty.4thewkend.com/app/system/views/updates/carte.blade.php ENDPATH**/ ?>