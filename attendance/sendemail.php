<?php

require 'vendor/autoload.php';

class SendEmail
{
    public static function SendMail($to, $subject, $content)
    {
        $key = 'SG.thisissomekey';
        $email = new \SendGrid\Mail\Mail();
        $email->setFrom("some_email@email.com", "Admin Sender");
        $email->setSubject($subject);
        $email->addTo($to);
        $email->addContent("text/plain", $content);

        $sendgrid = new \SendGrid($key);

        try {
            $response = $sendgrid->send($email);
            return $response;
        } catch(Exception $e) {
            echo 'Email exception Caught : '. $e->getMessage() ."\n";
            return false;
        }
    }
}
