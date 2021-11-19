
<?php 

require ('../dashboard/includes/_base.php'); 
require ('../dashboard/includes/_functions.php');    

?>

    <!-- Checkout Section Begin -->
    <section class="checkout spad">
        <div class="container">
          
            <div class="checkout__form" style="background-color:white;border-radius:5px; margin-top:-60px;">
                <h4 style="font-family:candara;">A propos de Bambino Boss</h4>
                <form action="#">
                    <div class="row">
                        <div class="col-lg-8 col-md-6">
                        <?php
                        $to =$_POST['www.kawedeezechiele@gmail.com'];
                        $from = "kawedeezechiele@gmail.com";
                        $name ='BambinoBoss';
                        $subject = 'bienvenus sur nos News letters';
                        $number = '+243977743843';
                        $cmessage = 'merci pour votre souscription';
                        $headers = "From: $from";
                        $headers = "From: " . $from . "\r\n";
                        $headers .= "Reply-To: ". $from . "\r\n";
                        $headers .= "MIME-Version: 1.0\r\n";
                        $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
                        $csubject = "You have a message from your Bitmap Photography.";
                        $logo = 'img/hero/BambinoVrai.jpg';
                        $link = '#';
                        $body = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
                        $body .= "<table style='width: 100%;'>";
                        $body .= "<thead style='text-align: center;'><tr><td style='border:none;' colspan='2'>";
                        // $body .= "<a href='{$link}'><img src='{$logo}' alt=''></a><br><br>";
                        $body .= "</td></tr></thead><tbody><tr>";
                        $body .= "<td style='border:none;'><strong>Name:</strong> {$name}</td>";
                        $body .= "<td style='border:none;'><strong>Email:</strong> {$from}</td>";
                        $body .= "</tr>";
                        $body .= "<tr><td style='border:none;'><strong>Subject:</strong> {$csubject}</td></tr>";
                        $body .= "<tr><td></td></tr>";
                        $body .= "<tr><td colspan='2' style='border:none;'>{$cmessage}</td></tr>";
                        $body .= "</tbody></table>";
                        $body .= "</body></html>";
                        if (mail($to, $subject, $body, $headers)) {
                            echo '<b class="text-primary text-center alert alert-success"> Email envoyé avec succes';
                        }else{
                            echo '<b class="text-primary text-center alert alert-success">erreur du systeme de messagerie';
                        }
                        ?>                                  
                        </div>
                    
                    </div>
                </form>
            </div>
        </div>
    </section>