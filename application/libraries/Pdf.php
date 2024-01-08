
<?php
defined('BASEPATH') or exit('No direct script access allowed');

require_once APPPATH . '/third_party/fpdf/fpdf.php'; 

class Pdf extends FPDF
{
    public function __construct()
    {
        parent::__construct();
    }

    public function generatePDF()
    {
        // Logika pembuatan PDF Anda di sini
        $this->AddPage();
        $this->SetFont('Arial', 'B', 16);
        $this->Cell(40, 10, 'Hello World!');
        $this->Output();
    }
}
