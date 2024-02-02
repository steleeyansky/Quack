<?php 

namespace Quack\Form\Mail;

class Mailer {
    public function sendCertificateEmail($to, $downloadLink) {
        $subject = "Congratulations on your certificate!";
        $body = "Congratulations for filling up our form! Please find below a link where you can download your certificate: 
            <a href='" . esc_url($downloadLink) . "'>Download PDF</a>";
        $headers = array('Content-Type: text/html; charset=UTF-8');
        
        
        if(!wp_mail($to, $subject, $body, $headers)) {
            error_log('Email sending failed.');
        }
    }

}
