<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once FCPATH . 'vendor/tecnickcom/tcpdf/tcpdf.php';

class PdfGenerator
{
    protected $pdf;

    public function __construct()
    {
        
        $this->pdf = new TCPDF();
      
    }

    public function generatePDF($pdfData, $filename = 'output.pdf')
    {
        $this->pdf->SetCreator('CodeIgniter PDF');
        $this->pdf->SetAuthor('Your Name');
        $this->pdf->SetTitle('Sample PDF Document');
        $this->pdf->SetSubject('Testing TCPDF in CodeIgniter');
        $this->pdf->SetKeywords('TCPDF, CodeIgniter, PDF');

        $this->pdf->AddPage();
       
        $this->pdf->writeHTML($pdfData, true, true, true, true, '');

        $this->pdf->Output($filename, 'D');
    }
}
