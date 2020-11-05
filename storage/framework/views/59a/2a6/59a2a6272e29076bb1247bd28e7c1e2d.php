<?php if ($paymentGateways) { ?>
    <div class="row payments">
        <div class="col-sm-8">
            <div class="form-group">
                <label for=""><?= lang('igniter.cart::default.checkout.label_payment_method'); ?></label><br/>
                <input type="hidden" name="payment" value=""/>
                <div
                    data-toggle="payments"
                    class="progress-indicator-container"
                >
                    <div class="list-group">
                        <?php foreach ($paymentGateways as $paymentGateway) { ?>
                            <?php
                            $paymentIsSelected = ($order->payment == $paymentGateway->code);
                            $paymentIsNotApplicable = !$paymentGateway->isApplicable($order->order_total, $paymentGateway);
                            ?>
                            <div
                                class="list-group-item<?= $paymentIsSelected ? ' bg-light' : '' ?><?= $paymentIsNotApplicable ? ' disabled' : '' ?>"
                            >
                                <div
                                    class="custom-control custom-radio"
                                    data-checkout-control="choose-payment"
                                    data-payment-code="<?= $paymentGateway->code; ?>"
                                >
                                    <input
                                        type="radio"
                                        id="payment-<?= $paymentGateway->code ?>"
                                        class="custom-control-input"
                                        name="payment"
                                        value="<?= $paymentGateway->code ?>"
                                        <?= $paymentIsSelected ? 'checked="checked"' : '' ?>
                                        <?= $paymentIsNotApplicable ? 'disabled="disabled"' : '' ?>
                                        autocomplete="off"
                                    />
                                    <label
                                        class="custom-control-label d-block"
                                        for="payment-<?= $paymentGateway->code ?>"
                                    ><?= $paymentGateway->name; ?></label>
                                    <?php if (strlen($paymentGateway->description)) { ?>
                                        <p class="hide small font-weight-normal mb-0">
                                            <?= $paymentGateway->description; ?>
                                        </p>
                                    <?php } ?>
                                    <?php if ($paymentIsNotApplicable) { ?>
                                        <p class="small font-weight-normal mb-0">
                                            <em>
                                                <?= sprintf(
                                                    lang('igniter.payregister::default.alert_min_order_total'),
                                                    currency_format($paymentGateway->order_total),
                                                    lang('igniter.payregister::default.text_this_payment')
                                                ); ?>
                                            </em>
                                        </p>
                                    <?php } ?>
                                    <?php if ($paymentGateway->hasApplicableFee()) { ?>
                                        <p class="small font-weight-normal mb-0">
                                            <em>
                                                <?= sprintf(
                                                    lang('igniter.payregister::default.alert_order_fee'),
                                                    $paymentGateway->getFormattedApplicableFee(),
                                                    lang('igniter.payregister::default.text_this_payment')
                                                ); ?>
                                            </em>
                                        </p>
                                    <?php } ?>
                                </div>
                                <?php if ($paymentIsSelected) { ?>
                                    <?= $paymentGateway->renderPaymentForm($this->controller); ?>
                                <?php } ?>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <?= form_error('payment', '<span class="text-danger">', '</span>'); ?>
            </div>
        </div>
    </div>
<?php } ?>
