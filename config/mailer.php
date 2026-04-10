<?php
require_once __DIR__ . '/../vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class MailerConfig {
    private $mail;
    
    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->setupSMTP();
    }
    
    private function setupSMTP() {
        $this->mail->isSMTP();
        $this->mail->Host       = 'smtp.gmail.com'; 
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = 'rahulkumarmaurya464@gmail.com';
        $this->mail->Password   = 'frlfnvswuqjulcfx';
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $this->mail->Port       = 587;
        $this->mail->setFrom('cresentvilla@yahoo.com', 'Cresent Villa');
    }
    public function getMailer() {
        return $this->mail;
    }
}
?>