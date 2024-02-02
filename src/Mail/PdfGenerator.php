<?php

namespace Quack\Form\Mail;

use TCPDF;

class PdfGenerator
{
    public static function generatePdf($formData)
    {
        $pdf = new TCPDF();


        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetTitle('User Certificate');


        $pdf->AddPage();


        $html = "<h1>Congratulations</h1><p>You have successfully submitted the form.</p>";
        foreach ($formData as $key => $value) {
            $keyFormatted = ucwords(str_replace('_', ' ', $key));
            $html .= "<p>{$keyFormatted}: " . htmlspecialchars($value, ENT_HTML5, 'UTF-8') . "</p>";
        }

        $pdf->writeHTML($html, true, false, true, false, '');


        $upload_dir = wp_upload_dir();
        $pdfFilePath = $upload_dir['path'] . '/' . uniqid() . '.pdf';

        // Save the PDF
        $pdf->Output($pdfFilePath, 'F');


        return str_replace($upload_dir['basedir'], '', $pdfFilePath);
    }
}
