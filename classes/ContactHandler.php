<?php
require_once __DIR__ . '/../config/mailer.php';

class ContactHandler {
    private $mailer;
    private $response;
    
    public function __construct() {
        $this->response = ['status' => 'error', 'message' => '', 'errors' => []];
        $mailerConfig = new MailerConfig();
        $this->mailer = $mailerConfig->getMailer();
    }
    
    public function validateInput($data) {
        $errors = [];
        
        if (empty($data['name']) || strlen($data['name']) < 4) {
            $errors['name'] = ['Name must be at least 4 characters'];
        }
        
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = ['Valid email is required'];
        }
        
        if (empty($data['mobile_number']) || !preg_match('/^[0-9]{10}$/', $data['mobile_number'])) {
            $errors['mobile_number'] = ['Valid 10-digit mobile number is required'];
        }
        
        if (empty($data['message'])) {
            $errors['message'] = ['Message cannot be empty'];
        }
        
        return $errors;
    }
    
    public function sendEmail($formData) {
        try {
            $errors = $this->validateInput($formData);
            
            if (!empty($errors)) {
                $this->response['errors'] = $errors;
                return $this->response;
            }
            $this->mailer->addAddress('rahulkumarmaurya464@gmail.com'); 
            $this->mailer->isHTML(true);
            $this->mailer->Subject = 'New Contact Form Message from ' . $formData['name'];
            
            $emailBody = "
            <html>
            <body>
                <h3>New Contact Form Submission</h3>
                <p><strong>Name:</strong> {$formData['name']}</p>
                <p><strong>Email:</strong> {$formData['email']}</p>
                <p><strong>Mobile Number:</strong> {$formData['mobile_number']}</p>
                <p><strong>Message:</strong></p>
                <p>{$formData['message']}</p>
            </body>
            </html>
            ";
            
            $this->mailer->Body = $emailBody;
            $this->mailer->AltBody = "Name: {$formData['name']}\nEmail: {$formData['email']}\nMobile: {$formData['mobile_number']}\nMessage: {$formData['message']}";
            
            $this->mailer->send();
            
            $this->response['status'] = 'success';
            $this->response['message'] = 'Your message has been sent successfully!';
            
        } catch (Exception $e) {
            $this->response['message'] = "Message could not be sent. Mailer Error: {$this->mailer->ErrorInfo}";
        }
        
        return $this->response;
    }
}
?>