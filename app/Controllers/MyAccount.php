<?php

namespace App\Controllers;
class MyAccount extends BaseController
{
    public function index()
    {
        $data = [
            'request' => $this->request,
            'peserta' => $this->peserta->getNisn($this->session->username),
            'session' => $this->session
        ];
        return view('myaccount/index',$data);
    }
    public function idcard()
    {
        $data = [
        'peserta' => $this->peserta->getNisn($this->session->username)
        ];
        return view('myaccount/id_card',$data);
    }
    public function sertifikat()
    {
        ob_end_clean();
        $pdf = new \FPDF('L', 'mm','A4');
        $pdf->AddPage();
        $pdf->Image('public/background_certificate.png',0,0,297,210);
        $pdf->SetFont('Arial','BU',30);
        $pdf->Cell(3,98,'',0,1,'C');
        $pdf->Cell(3,4,'',0,0,'C');
        $pdf->SetFont('Arial','BU',40);
        $pdf->Cell(270,10,$this->peserta->getNisn($this->session->username)[0]['nama'],0,1,'C');
        $this->response->setHeader('Content-Type', 'application/pdf');
        $pdf->Output('Laporan.pdf','I');
    }
}
