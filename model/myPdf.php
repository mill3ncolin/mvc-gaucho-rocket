<?php
require_once "third-party/fpdf/fpdf.php";
class myPdf extends FPDF
{
function Header()
{
 $this->Image('/public/imagenes/logo.png');
 $this->SetFont('Arial','',10,5,90);
 $this->Cell(140);
 $this->Cell(30,15,utf);

}

}