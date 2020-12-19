<?php 

$active = "Contact Us";
include("includes/header.php");

//PHP Mailer Begins
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'vendor/autoload.php';

//PHP Mailer Ends

?>

    <div id="content"> <!-- content begins -->
        <div class="container"> <!-- container begins -->
            <div class="col-md-12"> <!-- col-md-12 begins -->

                <ul class="breadcrumb"> <!-- breadcrumb begins -->
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        Contact Us
                    </li>
                </ul> <!-- breadcrumb ends -->

            </div> <!-- col-md-12 ends -->

            <div class="col-md-3"> <!-- col-md-3 begins -->

            <?php
                include("includes/sidebar.php");
            ?>

            </div> <!-- col-md-3 ends -->

            <div class="col-md-9"> <!-- col-md-9 begins -->

                <div class="box" style="background: #f7f7f7"> <!-- box begins --> <!-- i made a change here to be reviewed -->
                
                    <div class="box-header"> <!-- box-header begins -->

                        <center> <!-- center begins -->
                            <h2>Feel free to contact us</h2>
                            <p class="text-muted"> <!-- text-muted begins -->
                                Feel free to contact us 24/7 in case of any queries.
                            </p> <!-- text-muted ends -->
                        </center> <!-- center ends -->

                        <form action="contact.php" method="post"> <!-- form begins -->
                        
                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Name</label>
                                <input type="text" class="form-control" name="name" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Subject</label>
                                <input type="text" class="form-control" name="subject" required>
                            
                            </div> <!-- form-group ends -->

                            <div class="form-group"> <!-- form-group begins -->
                            
                                <label>Message</label>
                                <textarea name="message" class="form-control"></textarea>
                            
                            </div> <!-- form-group ends -->

                            <div class="text-center"> <!-- text-center begins -->
                            
                                <button type="submit" name="submit" class="btn btn-primary"> <!-- btn btn-primary begins -->
                                
                                    <i class="fa fa-user-md"></i> Send Message
                                
                                </button> <!-- btn btn-primary ends -->

                            </div> <!-- text-center ends -->
                        
                        </form> <!-- form ends -->

                        <?php
                        if(isset($_POST['submit'])){
                            $sender_name = $_POST['name'];
                            $sender_email = $_POST['email'];
                            $sender_subject = $_POST['subject'];
                            $sender_message = $_POST['message'];
                            $receiver_email = "ayurandnaturals@gmail.com";

                            $mail = new PHPMailer(); // create a new object
                            $mail->isSMTP(); // enable SMTP
                            $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
                            $mail->SMTPAuth = true; // authentication enabled
                            $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for GMail
                            $mail->Host = "smtp.gmail.com";
                            $mail->Port = 465; // or 587
                            $mail->IsHTML(true);
                            $mail->Username = "ayurandnaturals@gmail.com";
                            $mail->Password = "ttlshiwwya^^9447";
                            $mail->addReplyTo($sender_email, $sender_name);
                            $mail->setFrom($sender_email,$sender_name);
                            $mail->Subject = $sender_subject;
                            $mail->Body = $sender_message;
                            
                            $mail->AddAddress($receiver_email,'Ayur & Naturals');
                            $mail->Send();

                            //Auto reply part
                            $auto_reply = new PHPMailer(); // create a new object
                            $auto_reply->IsSMTP(); // enable SMTP
                            $auto_reply->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
                            $auto_reply->SMTPAuth = true; // authentication enabled
                            $auto_reply->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
                            $auto_reply->Host = "smtp.gmail.com";
                            $auto_reply->Port = 465; // or 587
                            $auto_reply->IsHTML(true);

                            $auto_reply->Username = "ayurandnaturals@gmail.com";
                            $auto_reply->Password = "ttlshiwwya^^9447";
                            $auto_reply->SetFrom($receiver_email);
                            $auto_reply->Subject = 'Your email has been recieved';
                            $auto_reply->Body = 'Thank you for contacting us. We typically reply within 2 business days.';
                            
                            $auto_reply->AddAddress($sender_email);
                            // $mail->AddAddress("4566@mbcpeermade.com");
                            $auto_reply->Send();

                            echo "<h2 align='center'>Your message was succesfully sent</h2>";

                        }
                        ?>

                    </div> <!-- box-header ends -->

                </div> <!-- box ends -->

            </div> <!-- col-md-9 ends -->

        </div> <!-- container ends -->
    </div> <!-- content ends -->

    <?php
        include("includes/footer.php");
    ?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>

</body>
</html>