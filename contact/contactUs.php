<?php
                                        
    include_once 'controller/website/mail.php';

    try {
        if (isset($_POST['sendmail'])) {
            $subject = $_POST['subject'];
            $message = $_POST['message'];
         
            $mail = new mail();

            $mail->sendMail($subject, $message);
        }
    } catch (\Throwable $th) {
        echo '<script>alert("Some thing went wrong!!!");</script>';
    }

?>

<section id="contact-us" class="contact-us section">
        <div class="container">
                <div class="contact-head">
                    <div class="row">
                        <div class="col-lg-8 col-12">
                            <div class="form-main">
                                <div class="title">
                                    <h4>Get in touch</h4>
                                    <h3>Write us a message</h3>
                                </div>
                                <form class="form" method="POST">
                                    <div class="row">
                                        <!-- <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Your Name<span>*</span></label>
                                                <input name="name" type="text" required>
                                            </div>
                                        </div> -->
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Your Subjects<span>*</span></label>
                                                <input type="text" name="subject" required>
                                            </div>
                                        </div>
                                        <!-- <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Your Email<span>*</span></label>
                                                <input name="email" type="email" placeholder="">
                                            </div>	
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="form-group">
                                                <label>Your Phone<span>*</span></label>
                                                <input name="company_name" type="text" placeholder="">
                                            </div>	
                                        </div> -->
                                        <div class="col-12">
                                            <div class="form-group message">
                                                <label>Your message<span>*</span></label>
                                                <textarea placeholder="" name="message" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn" name="sendmail">Send Message</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-12">
                            <div class="single-head">
                                <div class="single-info">
                                    <i class="fa fa-phone"></i>
                                    <h4 class="title">Call us Now:</h4>
                                    <ul>
                                        <li>Contact Number 1</li>
                                        <li>Contact Number 2</li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-envelope-open"></i>
                                    <h4 class="title">Email:</h4>
                                    <ul>
                                        <li><a href="mailto:info@yourwebsite.com">info@gmail.com</a></li>
                                        <li><a href="mailto:info@yourwebsite.com">support@gmail.com</a></li>
                                    </ul>
                                </div>
                                <div class="single-info">
                                    <i class="fa fa-location-arrow"></i>
                                    <h4 class="title">Our Address:</h4>
                                    <ul>
                                        <li>Store Address</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>