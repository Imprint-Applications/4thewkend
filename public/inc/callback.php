<div class="container-fluid text-center">
                <div class="row">
                    <div class="col col-12 col-md-6 my-auto" id="callbackCol">
                        <div>
                            <h2 class="section-heading pt-5 p-2 pb-2 text-center" style="color: #74CC34;" data-aos="fade-right">request a call back</h2>
                            <div class="sub-heading p-2 pb-3">
                                <p id="whiteSubRight" class="sub-title text-center" data-aos="fade-right" data-aos-delay="1000">The Team</p>
                                <hr id="divider-1">
                                <p id="whiteSubRight" class="sub-title text-center" data-aos="fade-right" data-aos-delay="1500">About Us</p>
                                <hr id="divider-1">
                                <p id="whiteSubRight" class="sub-title text-center" data-aos="fade-right" data-aos-delay="2000">Values</p>
                            </div>
                            <div class="mx-auto service-box">
                                <p class="text-muted left mb-0 pt-2 p-2 pb-4 text-center" id="whiteSubLeft" data-aos="fade-right" data-aos-delay="2500">Now you've got to know us, come in and tell us over a warm cuppa how we can help you put an imprint on your business?</p>
                            </div><button class="btn d-flex btn-contact btn-outline-green mt-4 mb-4 rounded-0" type="button" data-aos="fade-right" data-aos-delay="3000">contact us</button></div>
                    </div>
                    <div class="col col-12 col-md-6 p-2 my-auto">
                    <?php 
                           if(isset($_SESSION['status']) && $_SESSION['status'] !='')
                           {
                               ?>
                                <script defer>
                                swal({
                                    title: "<?php echo $_SESSION['status']; ?>",
                                    // text: "Your message has been received. We will contact you shortly.",
                                    icon: "<?php echo $_SESSION['status_code'];?>",
                                    button: "Great!",
                                });
                                </script>
                               <?php
                               unset($_SESSION['status']);
                           }
                    ?>
                        <div class="callBackForm">
                            <form id="callbackForm" method="POST" action="request.php">
                            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                <input class="form-control btn-outline-green text-center mb-4 p-2" name="requestName" type="text" placeholder="Your Name" data-aos="fade-left" data-aos-delay="1500">
                                <input class="form-control btn-outline-green text-center mb-4 p-2" name="requestNumber" type="tel" placeholder="Your Contact Number" data-aos="fade-left" data-aos-delay="2000">
                                <a href="https://www.imprintapplications.com/contact.html" class="buttonLink" data-sitekey="6Le0eMwZAAAAAG-lTVL11JleWhnO9xkJ2hQITdW0" data-callback="captchaSubmit" data-aos="fade-left" data-aos-delay="2500">
                                    <button class="btn btn-block btn-contact btn-outline-green rounded-0 mt-5" type="submit">request</button>
                                </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
