<?php 

namespace Quack\Form\Controllers;

use Quack\Form\Validation\FormValidator;
use Quack\Form\Repositories\FormRepository;
use Quack\Form\Mail\Mailer;
use Quack\Form\Mail\PdfGenerator; 
use Exception;

class FormSubmissionController {
    private $validator;
    private $repository;
    private $mailer;

    public function __construct() {
        $this->validator = new FormValidator();
        $this->repository = new FormRepository();
        $this->mailer = new Mailer();
    }

    public function handleFormSubmission() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $errors = [];
            $formData = array_map('sanitize_text_field', $_POST); 
            try {
                if ($this->validator->validateAll($formData, $errors)) {
                    $pdfPath = PdfGenerator::generatePdf($formData);
                    $uploadDir = wp_upload_dir(); 
                    $pdfUrl = $uploadDir['baseurl'] . '/' . $pdfPath; 
                    $entryId = $this->repository->insert($formData);
                    if ($entryId) {
                        $downloadLink = $this->createDownloadLink($pdfUrl); 
                        $this->mailer->sendCertificateEmail($formData['email'], $downloadLink);
                    } else {
                        throw new Exception('Failed to save form data.');
                    }
                } else {
                    
                    throw new Exception('Form validation failed: ' . implode(' ', $errors));
                }
            } catch (Exception $e) {
               
                error_log($e->getMessage());
                
            }
        }
    }

    private function createDownloadLink($pdfUrl) {
       
        return $pdfUrl;
    }
}
