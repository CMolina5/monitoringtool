<?php
require('assets/fpdf182/mc_table.php');
header("Content-type: application/pdf; charset=utf-8");

class PDF extends PDF_MC_Table
{
    function Header()
    {
        if ($this->PageNo()==1){
        //logo
        $this->Image('assets/img/UniFAST_HEADER.jpg', 95, 2, -200);
        $this->Cell(336, 25, '', 0, 0);
        $this->Ln();
        }
    }
    function Footer()
    {
        $this->SetY(-10);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 5, 'Page ' . $this->PageNo(), 0, 0, 'C');
    }
    function cellMultiColor($stringParts)
    {
        $currentPointerPosition = 0;
        foreach ($stringParts as $part) {
            // Set the pointer to the end of the previous string part
            $this->_pdf->SetX($currentPointerPosition);

            // Get the color from the string part
            $this->_pdf->SetTextColor($part['color'][0], $part['color'][1], $part['color'][2]);

            $this->_pdf->Cell($this->_pdf->GetStringWidth($part['text']), 10, $part['text']);

            // Update the pointer to the end of the current string part
            $currentPointerPosition += $this->_pdf->GetStringWidth($part['text']);
        }
    }
}




//A4 width : 336mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=190mm
//Font Body : 9
//Font Title : 11
//Font Header : 16

$pdf = new PDF('L','mm','legal');
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();
//Cell(width , height , text , border , end line , [align] )
//table header
//set font to arial, bold, 7pt
$pdf->SetFont('Arial', 'B', 20);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'BICOL STATE COLLEGE OF APPLIED SCIENCE AND TECHNOLOGY', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(28, 5,'Academic Year:',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(311, 5,'2022 - 2023', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(62, 5,'Type of RA No. 10931 Beneficiaries:', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(281, 5,'FHE, TES, TDP', 0, 0, 'L', true);
$pdf->Ln();

//PART I. HIGHER EDUCATION INSTITUTION PROFILE
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetWidths(array(168, 168));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(336, 8, 'PART I. HIGHER EDUCATION INSTITUTION PROFILE', 0, 0, 'C', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->Ln();
//normal row height = 5.
//I.A BASIC INFORMATION
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(336, 5, 'I.A BASIC INFORMATION', 0, 0, 'L', true);
$pdf->Ln();



//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(77, 5, 'HEI Code/Unique Institutional Identifier (UII):', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(91, 5, '05012',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(18, 5, 'Province:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(150, 5, 'CAMARINES SUR', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Type of HEI:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(146, 5, 'SUC',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(41, 5, 'Official Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(127, 5, 'biscast@biscast.edu.ph', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(95, 5, 'Private HEI located in city/municipality w/ no SUC/LUC?', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(73, 5, 'N/A',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(47, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(121, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(24, 5, 'HEI Campus:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(144, 5, 'MAIN',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(23, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(145, 5, '09123456789', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(24, 5, 'HEI Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(144, 5, 'PEÑAFRANCIA AVENUE, CITY OF NAGA, CAMARINES SUR',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(126, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 5, 'Region:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(153, 5, '05 - BICOL REGION', 0, 0, 'L', true);
$pdf->Cell(168, 5, '', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(43, 5, 'Name of the Head of HEI:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(125, 5, 'jUAN T. DELA CRUZ',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(122, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(29, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(139, 5, 'HEI PRESIDENT',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(146, 5, '09123456789', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(141, 5, 'jtdelacruz@biscast.edu.ph',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(126, 5, '', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();

//I.B PROGRAM ADMINISTRATION
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(336, 5, 'I.B PROGRAM ADMINISTRATION', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

//FHE
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(63, 5, 'Name of Personnel In-charge of FHE:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(105, 5, 'YUUKI FLORES',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(138, 5, 'TEACHER I',0 , 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(141, 5, 'yflores@biscast.edu.ph',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(122, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(146, 5, '09123456789', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(126, 5, '', 0, 0, 'L', true);
$pdf->Ln();
//END

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

//TES
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(47, 5, 'Name of TES Focal Person:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(121, 5, 'ANA MILLARY SIBUG',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(138, 5, 'TEACHER II',0 , 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(141, 5, 'amsibug@biscast.edu.ph',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(122, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(146, 5, '09123456789', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(126, 5, '', 0, 0, 'L', true);
$pdf->Ln();
//END

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

//TDP
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(63, 5, 'Name of Personnel In-charge of TDP:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(105, 5, 'SHAINE P. ABANTE',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(138, 5, 'TEACHER III',0 , 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','', 9);
$pdf->Cell(141, 5, 'sabante@biscast.edu.ph',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(122, 5, '', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(146, 5, '09123456789', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial','' , 9);
$pdf->Cell(126, 5, '', 0, 0, 'L', true);
$pdf->Ln();
//END
$pdf->AddPage();

//I.C DEMOGRAPHIC INFORMATION
$pdf->SetLineWidth(0.1);
$pdf->SetDrawColor(105,105,105);
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(336, 5, 'I.C DEMOGRAPHIC INFORMATION', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(35, 5,'Academic Calendar:',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(311, 5,'2022 - 2023', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

// ENROLLMENT PERIOD
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetLineWidth(0.1);
$pdf->SetDrawColor(105,105,105);
$pdf->Cell(336, 5, 'ENROLLMENT PERIOD', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(84, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(84, 5, '10/01/2022 - 11/30/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/01/2022 - 11/30/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/01/2022 - 11/30/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/01/2022 - 11/30/2022', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//end

// OPENING OF CLASSES
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetLineWidth(0.1);
$pdf->SetDrawColor(105,105,105);
$pdf->Cell(336, 5, 'OPENING OF CLASSES', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(84, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(84, 5, '10/05/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/06/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/07/2022', 1, 0, 'C', true);
$pdf->Cell(84, 5, '10/08/2022', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//end

// TOTAL NO. OF UNDERGRADUATE STUDENTS
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'TOTAL NO. OF UNDERGRADUATE STUDENTS', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '4', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '5', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '6', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '7', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '8', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//end

// TOTAL NO. OF FOREIGN STUDENTS
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'TOTAL NO. OF FOREIGN STUDENTS', 0, 0, 'L', true);
$pdf->Ln();


$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '9', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '10', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '11', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '12', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '13', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '14', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '15', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '16', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//end

// TOTAL NO. OF SECOND COURSERS
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell($totalWidth, 5, 'TOTAL NO. OF SECOND COURSERS', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '17', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '18', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '19', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '20', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '21', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '22', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '23', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '24', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//end

//I.D PROGRAM OFFERINGS
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(336, 5, 'I.D PROGRAM OFFERINGS', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(111, 5,"No. of Bachelor Degree Programs Offered in the Academic Year:",0 , 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(225, 5,'3', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(152, 5,'No. of Programs Issued with Government Recognition/Certificate of Program Compliance:',0 , 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(184, 5,'3', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(336, 5, 'List of all bachelor degree programs offered for the Academic Year with the Government Recognition and Certificate of Program Compliance Nos. for each program', 0, 0, 'L', true);

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(50, 5, 'PROGRAM CODE', 1, 0, 'C', true);
$pdf->Cell(50, 5, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'GOVERNMENT RECOGNITION NO.', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'CERTIFICATE OF PROGRAM COMPLIANCE NO.', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'UPLOADED IN THE TES PORTAL', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 5, '610', 1, 0, 'C', true);
$pdf->Cell(50, 5, 'BSIT', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'YES', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 5, '604', 1, 0, 'C', true);
$pdf->Cell(50, 5, 'BEED', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'YES', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 5, '610', 1, 0, 'C', true);
$pdf->Cell(50, 5, 'BSBM', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '123', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, 'YES', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 5, '', 1, 0, 'C', true);
$pdf->Cell(50, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(50, 5, '', 1, 0, 'C', true);
$pdf->Cell(50, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Cell(78.66666666666667, 5, '', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//End

//I.E OTHER LOCALLY AND NATIONALLY-FUNDED STUFAPS
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(336, 5, 'I.E OTHER LOCALLY- AND NATIONALLY-FUNDED STUFAPS', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'List of all locally- and nationally-funded StuFAPs availed in the institution, and number of beneficiaries per year level', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(42, 10, 'STUFAP', 1, 0, 'C', true);
$pdf->Cell(42, 10, 'LOCAL/NATIONAL', 1, 0, 'C', true);
$pdf->Cell(252, 5, 'YEAR LEVEL', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Cell(84, 0, '', 0, 0, 'C', true);
$pdf->Cell(42, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(42, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(42, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(42, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(42, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(42, 5, '6TH', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(42, 5, 'DOST', 1, 0, 'L', true);
$pdf->Cell(42, 5, 'NATIONAL', 1, 0, 'C', true);
$pdf->Cell(42, 5, '1', 1, 0, 'C', true);
$pdf->Cell(42, 5, '2', 1, 0, 'C', true);
$pdf->Cell(42, 5, '3', 1, 0, 'C', true);
$pdf->Cell(42, 5, '4', 1, 0, 'C', true);
$pdf->Cell(42, 5, '5', 1, 0, 'C', true);
$pdf->Cell(42, 5, '6', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(42, 5, '', 1, 0, 'L', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Cell(42, 5, '', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//END
$pdf->AddPage();

//Part2 STUFAP
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(336, 8, 'PART II. UNIFIED STUFAP PROFILE', 0, 0, 'C', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

//II.A FREE HIGHER EDUCATION
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(336, 5, 'II.A FREE HIGHER EDUCATION', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(336, 5, 'TOTAL FHE BENEFICIARIES', 1, 1, 'C', true);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 10, 'SEX', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 0, '', 0, 0, 'C', true);
$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);
$pdf->Ln();

//FIRST ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(336, 5, 'Degree Program: BSIT', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
//END
//SECOND ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(336, 5, 'Degree Program: BEED', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->Cell(107, 5, 'GRADUATED BENEFICIARIES', 1, 0, 'C', true);
$pdf->Cell(107, 5, 'MRR', 1, 0, 'C', true);
$pdf->Cell(107, 5, 'ESTIMATED NUMBER OF GRADUATING STUDENTS', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);;
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);;
$pdf->Cell(107, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

// NO. OF FHE BENEFICIARIES WHO OPTED OUT OF FHE
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell($totalWidth, 5, 'NO. OF FHE BENEFICIARIES WHO OPTED OUT OF FHE', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//end

// NO. OF FHE BENEFICIARIES WHO VOLUNTARILY CONTRIBUTED FOR FHE
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell($totalWidth, 5, 'NO. OF FHE BENEFICIARIES WHO VOLUNTARILY CONTRIBUTED FOR FHE', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 5, '', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, '1', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//end

// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(176, 10, 'REASONS FOR LEAVE OF ABSENCE (LOA)', 1, 0, 'C', true);
$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//FIRST ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries Who Dropped', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(176, 10, 'REASONS FOR DROPPING', 1, 0, 'C', true);

$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//FIRST ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
//I.B TERTIARY EDUCATION SUBSIDY
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(336, 5, 'II.B TERTIARY EDUCATION SUBSIDY', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(65, 5,'No. of Students Who Applied for TES:',0 , 0, 'L', true);

$pdf->Cell(311, 5,'24', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

//TES CATEGORY
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(336, 5, 'TOTAL TES GRANTEES', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Cell(20, 10, 'SEX', 1, 0, 'C', true);
$pdf->Cell(79, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(79, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(79, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(79, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 0, '', 0, 0, 'C', true);
$pdf->Cell(19.75, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'W/ BOARD', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'W/ BOARD', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'W/ BOARD', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, 'W/ BOARD', 1, 0, 'C', true);
$pdf->Ln();

//FIRST ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(336, 5, 'ESGPPA', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '1', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '2', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '3', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '4', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '5', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '6', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '7', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '8', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '9', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '10', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '11', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '12', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '13', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '14', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '15', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '16', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '1', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '2', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '3', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '4', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '5', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '6', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '7', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '8', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '9', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '10', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '11', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '12', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '13', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '14', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '15', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '16', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(336, 5, 'PNSL', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(336, 5, 'LISTAHANAN', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(336, 5, '4Ps', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'L', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);

$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
$pdf->Cell(19.75, 5, '', 1, 0, 'C', true);
//END

$pdf->Ln();
$pdf->Ln();
//DEGREE PROGRAM
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(156, 10, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(90, 5, 'NO. OF TES GRANTEES WHO EXCEEDED THE MRR', 1, 0, 'C', true);
$pdf->Cell(90, 5, 'ESTIMATED NUMBER OF GRADUATING STUDENTS', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(156, 0, '', 0, 0, 'C', true);
$pdf->Cell(45, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(45, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(45, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(45, 5, 'FEMALE', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIRST ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 255, 255, 255 );
$pdf->Cell(156, 5, 'BACHELOR OF SCIENCE IN ELECTRICAL ENGINEERING', 1, 0, 'L', true);
$pdf->Cell(45, 5, '1', 1, 0, 'C', true);
$pdf->Cell(45, 5, '2', 1, 0, 'C', true);
$pdf->Cell(45, 5, '3', 1, 0, 'C', true);
$pdf->Cell(45, 5, '4', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 255, 255, 255 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Fifth ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 255, 255, 255 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Fifth ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 214, 234, 248 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Fifth ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor( 255, 255, 255 );
$pdf->Cell(156, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
$pdf->Cell(45, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TES Grantees on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(176, 10, 'REASONS FOR LEAVE OF ABSENCE (LOA)', 1, 0, 'C', true);

$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//FIRST ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TES Grantees Who Dropped', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(176, 10, 'REASONS FOR DROPPING', 1, 0, 'C', true);

$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//First ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Second ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Third ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//Fourth ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
//I.C TULONG DUNONG PROGRAM
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(336, 5, 'II.C TULONG DUNONG PROGRAM', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(336, 5, 'TOTAL TDP GRANTEES', 1, 1, 'C', true);

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(15, 10, 'SEX', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);

$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 0, '', 0, 0, 'C', true);
$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '1ST', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2ND', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3RD', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5TH', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '6TH', 1, 0, 'C', true);
$pdf->Ln();

//FIRST ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(336, 5, 'BACHELOR OF SCIENCE IN ELECTRICAL ENGINEERING', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);

$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '6', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '7', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '8', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '9', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '10', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '11', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '12', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '13', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '14', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '15', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '16', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '17', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '18', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '19', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '20', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '21', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '22', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '23', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '24', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(13.375, 5, '1', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '2', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '3', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '4', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '5', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '6', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '7', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '8', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '9', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '10', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '11', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '12', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '13', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '14', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '15', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '16', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '17', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '18', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '19', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '20', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '21', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '22', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '23', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '24', 1, 0, 'C', true);
$pdf->Ln();
//END
//SECOND ROW
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(336, 5, '', 1, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);

$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(  255, 255, 255  );
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);


$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Cell(13.375, 5, '', 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//End
// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TDP Grantees on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);

$pdf->Cell(176, 10, 'REASONS FOR LEAVE OF ABSENCE (LOA)', 1, 0, 'C', true);

$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//FIRST ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->Ln();
// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TDP Grantees Who Dropped', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(176, 10, 'REASONS FOR DROPPING', 1, 0, 'C', true);
$pdf->Cell(40, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(40, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(176, 0, '', 0, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(20, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();
//FIRST ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//SECOND ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//THIRD ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FOURTH ROW
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
//FIFTH ROW
$pdf->SetFillColor(   214, 234, 248   );
$pdf->Cell(176, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->SetFillColor(   255, 255, 255   );
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
$pdf->Cell(20, 5, '', 1, 0, 'C', true);
//END
$pdf->Ln();
$pdf->AddPage();

//PART3 COMPLIANCE TO GUIDELINES AND MOA
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(336, 8, 'PART III. COMPLIANCE TO GUIDELINES AND MOA', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST AND HEI 
$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(336, 5, 'III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST, AND HEI ', 0, 0, 'L', true);
$pdf->Ln();

//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'The HEI certifies its compliance/noncompliance with the following information:', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(321, 5, 'Conducted orientation to students about FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Provided guidance and financial counseling programs to the qualified enrolled students to enable them to avail of FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Submitted to the UniFAST the Certification of Tuition and Other School Fees (TOSF) signed by the HEI Head',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 171,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$pdf->Cell(321, 5, 'Maintained a bank account intended only for FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Issued official receipt on time for every amount received from CHED concerning FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Reverted to CHED excess fund transfer',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 63,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$pdf->Cell(321, 5, 'Submitted reports on time regarding the implementation of FHE, TES, and/or TDP as required', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Submitted to the UniFAST the list of qualified students and FHE beneficiaries on time', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Implemented a voluntary opt-out and/or voluntary contribution mechanism for FHE', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Submitted to the UniFAST on time the list of students who voluntarily opted out from FHE',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 140,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Submitted to the UniFAST on time the list of students who voluntarily contributed to the SUC/LUC',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 153,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$pdf->Cell(321, 5, 'Signed the TES Sharing Agreement between the HEI and TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Disseminated continuously information to qualified TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Submitted TES liquidation reports within the prescribed period', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Returned excess or unutilized Administrative Support Cost (ASC) to the UniFAST', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Issued individual Notice of Award (NOA) to qualified TDP-TES applicants', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Submitted to the CHED Regional Office (RO) the signed NOA of qualified TDP-TES grantees and other billing requirements', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Submitted to the CHEDRO the payroll for the release of TDP-TES benefits', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Submitted TDP-TES liquidation reports within the prescribed period', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 11);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(336, 5, 'III.B COMPLIANCE TO TES SHARING AGREEMENT', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'The HEI certifies its compliance/noncompliance with the following information:', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(321, 5, 'Received from the UniFAST the exact amount of TES for the term', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Released the amount intended for the TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);

$pdf->SetFont('Arial', '', 10);
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Released to the grantees the difference in TES amount if the share of the private HEI is greater than the actual TOSF of the grantees',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 209,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321,5,'Obliged the grantees to pay the difference in TES amount if the share of the private HEI is less than the actual TOSF of the grantees',1,0,'L');
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->SetTextColor(255,0,0);
$pdf->SetXY($oldx + 208,$oldy);
$pdf->Write(5,"(if applicable)");
$pdf->SetTextColor(0,0,0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(321, 5, 'Released the full amount of the TES to the grantees who have fully paid the TOSF for the term', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Cell(321, 5, 'Released to the grantees their share within two (2) weeks upon the receipt of fund transfer for TES', 1, 0, 'L', true);
$pdf->Cell(15, 5, 'YES', 1, 1, 'C', true);
$pdf->Ln();
//End
$pdf->AddPage();
//PART IV. UNIFAST EXPERIENCE
$pdf->SetFont('Arial', 'B', 16);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->Cell(336, 8, "PART IV. UNIFAST STAKEHOLDERS' EXPERIENCE", 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, '1. Best Practices in the Implementation of RA No. 10931 Programs', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(26, 25, '', 0, 0, 'L', true);
$pdf->Cell(310, 25, 'Sample data here', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, '2. Challenges/Concerns in the Implementation of RA No. 10931', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(26, 25, '', 0, 0, 'L', true);
$pdf->Cell(310, 25, 'Sample data here', 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END
$pdf->SetFont('Arial', 'B', 13);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, '3. Recommendations for the Improvement of Program Implementation', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(26, 25, '', 0, 0, 'L', true);
$pdf->Cell(310, 25, 'Sample data here', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();


//end of data rows

$pdf->SetFont('Arial', 'B', 16);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(336, 8, 'DATA PRIVACY NOTICE', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2, '', 'LRT', 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 14);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2, '', 'LR', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(336, 5.5, '    In submitting this monitoring tool, I agree to the details being collected for the purposes of monitoring and evaluation of the programs under Republic', 'LR', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(336, 5, '    Act No. 10931. I understand that:', 'LR', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 5, '', 'L', 0, 'L', true);
$pdf->Cell(316, 5, '1. All collected data shall be used for intended use only;', 'R', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 5, '', 'L', 0, 'L', true);
$pdf->Cell(316, 5, '2. The information will only be accessed by the UniFAST. All collected data will be held securely and will not be distributed to', "R", 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 5, '', 'L', 0, 'L', true);
$pdf->Cell(316, 5, '    unauthorized or third parties; and', 'R', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 5, '', 'L', 0, 'L', true);
$pdf->Cell(316, 5, '3. When collected information is no longer required for the intended purposes, all data will be disposed of by the UniFAST', 'R', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 5, '', 'L', 0, 'L', true);
$pdf->Cell(155, 5, '    in accordance with Republic Act No. 10173, otherwise known as the Data Privacy Act of 2012.', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 14);
$pdf->Cell(161, 5, 'Data Privacy Act of 2012.', 'R', 0, 'L', true);
$pdf->Ln();
$pdf->Cell(20, 3, '', 'LB', 0, 'L', true);
$pdf->Cell(316, 3, '', 'RB', 0, 'L', true);



//Signatory Part
$pdf->addPage();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(336, 5, 'Prepared by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
// if($fhe=='yes'){
$pdf->Cell(63.33, 5, 'YUUKI FLORES', 0, 0, 'L', true);
// }
// if($tes=='yes'){
$pdf->Cell(63.33, 5, 'ANA MILLARY SIBUG', 0, 0, 'L', true);
// }
// if($tdp=='yes'){
$pdf->Cell(63.33, 5, 'SHAINE ABANTE', 0, 0, 'L', true);
// }
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
// if($fhe=='yes'){
$pdf->Cell(63.33, 5, 'Personnel In-charge of FHE', 0, 0, 'L', true);
// }
// if($tes=='yes'){
$pdf->Cell(63.33, 5, 'TES Focal Person', 0, 0, 'L', true);
// }
// if($tdp=='yes'){
$pdf->Cell(63.33, 5, 'Personnel In-charge of TDP', 0, 0, 'L', true);
// }
$pdf->Ln();
// if($fhe=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
// }
// if($tes=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
// }
// if($tdp=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
// }
$pdf->Ln();
$pdf->Ln(); 
$pdf->Ln(); 
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(336, 5, 'Reviewed by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(63.33, 5, 'NAME OF REGISTRAR HERE', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, 'NAME OF RC HERE', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, '', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(63.33, 5, 'HEI Registrar', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, 'UniFAST Regional Coordinator', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, '', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
$pdf->Cell(63.33, 5, '', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(336, 5, 'Submitted by/Conforme:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(336, 5, 'JUAN T. DELA CRUZ', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(336, 5, 'HEI President/Authorized Representative', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(95, 5, 'Date:', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(336, 5, 'Officially Received By:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5, 'NAME OF CEPS HERE', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(336, 5, 'Chief Education Program Specialist', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(95, 5, 'Date:', 0, 0, 'L', true);



$pdf->Output('BICOL STATE COLLEGE OF APPLIED SCIENCE AND TECHNOLOGY 2022-2023 (HEI Monitoring Tool)' . '.pdf', 'F');

header('Content-type: application/pdf');
header('Content-disposition: attachment; filename =' . 'BICOL STATE COLLEGE OF APPLIED SCIENCE AND TECHNOLOGY 2022-2023 (HEI Monitoring Tool)' . '.pdf');
readFIle('BICOL STATE COLLEGE OF APPLIED SCIENCE AND TECHNOLOGY 2022-2023 (HEI Monitoring Tool)' . '.pdf');
unlink('BICOL STATE COLLEGE OF APPLIED SCIENCE AND TECHNOLOGY 2022-2023 (HEI Monitoring Tool)' . '.pdf');
