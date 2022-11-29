<?php

session_start();
if (empty($_SESSION["hei_uii"])) {
    header("Location:./index.php");
}
require('assets/fpdf182/mc_table.php');
include_once 'includes/db_connection.php';
include 'includes/masterlist/inc_template.php';
include 'includes/heiprofile/inc_template.php';
include 'includes/stufap/inc_template.php';
include 'includes/compliance/inc_template.php';
include 'includes/experience/inc_template.php';
header("Content-type: application/pdf; charset=utf-8");



class PDF extends PDF_MC_Table
{
    function Header()
    {
        //logo
        $this->Image('assets/img/UniFAST_HEADER.jpg', 95, 2, -200);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(336, 15, '', 0, 1);
        $this->Ln();
    }
    function Footer()
    {

        $this->SetY(-15);
        $this->SetFont('Arial', '', 8);
        $this->Cell(0, 10, 'Page ' . $this->PageNo(), 0, 0, 'C');
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

$pdf = new PDF('L', 'mm', 'legal');
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();
//Cell(width , height , text , border , end line , [align] )
//table header
//set font to arial, bold, 7pt
$pdf->SetFont('Arial', 'B', 15);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, strtoUpper($_SESSION['hei_name']), 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(28, 5, 'Academic Year:', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(311, 5, $_SESSION['ac_year'], 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(62, 5, 'Type of RA No. 10931 Beneficiaries:', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $fhe1 . " ," . $tes1 . " ," . $tdp1, 0, 0, 'L', true);
} else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $fhe1 . " ," . $tes1, 0, 0, 'L', true);
} else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $fhe1, 0, 0, 'L', true);
} else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $fhe1 . " ," . $tdp1, 0, 0, 'L', true);
} else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $tes1, 0, 0, 'L', true);
} else if ($fhe == 'no' and $tes == 'no' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->Cell(281, 5, $tdp1, 0, 0, 'L', true);
}
$pdf->Ln();

//PART I. HIGHER EDUCATION INSTITUTION PROFILE
$pdf->SetFont('Arial', 'B', 12);
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
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(91, 5, $_SESSION['hei_uii'], 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(18, 5, 'Province:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(150, 5, $_SESSION['hei_prov_name'], 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Type of HEI:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(146, 5, $_SESSION['hei_it'], 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(41, 5, 'Official Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(127, 5, $hei_email, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(95, 5, 'Private HEI located in city/municipality w/ no SUC/LUC?', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(73, 5, 'N/A', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(47, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(121, 5, $hei_alt_email, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(24, 5, 'HEI Campus:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(144, 5, $_SESSION['hei_ct'], 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(23, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(145, 5, $hei_head_contact_no, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(24, 5, 'HEI Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(144, 5, $_SESSION['hei_address'], 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(126, 5, $hei_alt_contact_no, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 5, 'Region:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(153, 5, $_SESSION['hei_region_nir'], 0, 0, 'L', true);
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
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(125, 5, $hei_head_name, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(29, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(139, 5, $hei_head_designation, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(141, 5, $hei_head_email_add, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(122, 5, $hei_head_alt_email_add, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(146, 5, $hei_head_contact_no, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(126, 5, $hei_head_alt_contact_no, 0, 0, 'L', true);
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
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(105, 5, $fhe_focal_name, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(138, 5, $fhe_focal_designation, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(141, 5, $fhe_focal_email_add, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(122, 5, $fhe_focal_alt_email_add, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(146, 5, $fhe_focal_contact_no, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(126, 5, $fhe_focal_alt_contact_no, 0, 0, 'L', true);
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
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(121, 5, $tes_focal_name, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(138, 5, $tes_focal_designation, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(141, 5, $tes_focal_email_add, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(122, 5, $tes_focal_alt_email_add, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(146, 5, $tes_focal_contact_no, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(126, 5, $tes_focal_alt_contact_no, 0, 0, 'L', true);
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
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(105, 5, $tdp_focal_name, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(30, 5, 'Full Designation:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(138, 5, $tdp_focal_designation, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 5, 'Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(141, 5, $tdp_focal_email_add, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(46, 5, 'Alternative Email Address:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(122, 5, $tdp_focal_alt_email_add, 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(22, 5, 'Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(146, 5, $tdp_focal_contact_no, 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(42, 5, 'Alternative Contact No.:', 0, 0, 'L', true);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(126, 5, $tdp_focal_alt_contact_no, 0, 0, 'L', true);
$pdf->Ln();
//END
$pdf->AddPage();

//I.C DEMOGRAPHIC INFORMATION
$pdf->SetLineWidth(0.1);
$pdf->SetDrawColor(105, 105, 105);
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
$pdf->Cell(35, 5, 'Academic Calendar:', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(311, 5, $ac_calendar, 0, 0, 'L', true);
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
$pdf->SetDrawColor(105, 105, 105);
$pdf->Cell(336, 5, 'ENROLLMENT PERIOD', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(84, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(84, 5, $enrollment_period_1st, 1, 0, 'C', true);
$pdf->Cell(84, 5, $enrollment_period_2nd, 1, 0, 'C', true);
$pdf->Cell(84, 5,  $enrollment_period_3rd, 1, 0, 'C', true);
$pdf->Cell(84, 5, $enrollment_period_summer_midyear, 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();
//end

// OPENING OF CLASSES
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->SetLineWidth(0.1);
$pdf->SetDrawColor(105, 105, 105);
$pdf->Cell(336, 5, 'OPENING OF CLASSES', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(84, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(84, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(84, 5, $opening_of_classes_1st, 1, 0, 'C', true);
$pdf->Cell(84, 5, $opening_of_classes_2nd, 1, 0, 'C', true);
$pdf->Cell(84, 5, $opening_of_classes_3rd, 1, 0, 'C', true);
$pdf->Cell(84, 5, $opening_of_classes_summer_midyear, 1, 0, 'C', true);
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
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(80.25, 5, $total_undergraduate_1st_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_2nd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_3rd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_summer_midyear_male, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_undergraduate_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_undergraduate_1st_male + $total_undergraduate_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_2nd_male + $total_undergraduate_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_3rd_male + $total_undergraduate_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_undergraduate_summer_midyear_male + $total_undergraduate_summer_midyear_female, 1, 0, 'C', true);
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
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_foreign_1st_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_2nd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_3rd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_summer_midyear_male, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_foreign_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(80.25, 5, $total_foreign_1st_male + $total_foreign_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_2nd_male + $total_foreign_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_3rd_male + $total_foreign_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_foreign_summer_midyear_male + $total_foreign_summer_midyear_female, 1, 0, 'C', true);

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
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_second_courser_1st_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_2nd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_3rd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_summer_midyear_male, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_second_courser_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(80.25, 5, $total_second_courser_1st_male + $total_second_courser_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_2nd_male + $total_second_courser_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_3rd_male + $total_second_courser_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_second_courser_summer_midyear_male + $total_second_courser_summer_midyear_female, 1, 0, 'C', true);
//end
$pdf->addPage();
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
$pdf->Cell(111, 5, "No. of Bachelor Degree Programs Offered in the Academic Year:", 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(225, 5, $total_programs_offered, 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(152, 5, 'No. of Programs Issued with Government Recognition/Certificate of Program Compliance:', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'I', 9);
$pdf->Cell(184, 5, $total_with_gr_no_and_copc_no, 0, 0, 'L', true);
$pdf->Ln();
//SPACING
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 2.5, '', 0, 0, 'C', true);
$pdf->Ln();
//END

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'List of all bachelor degree programs offered for the Academic Year with the Government Recognition and Certificate of Program Compliance Nos. for each program', 0, 0, 'L', true);
$pdf->Ln();

// $pdf->SetFont('Arial', 'I', 8);
// $pdf->SetTextColor(0, 0, 0);
// $pdf->SetFillColor(255, 255, 255);
// $pdf->MultiCell(336, 5, 'List of all bachelor degree programs offered for the Academic Year with the Government Recognition and Certificate of Program Compliance Nos. for each program', 0, 0, 'L', true);

// $pdf->SetFont('Arial', 'B', 9);
// $pdf->SetFillColor(236, 240, 241);
// $pdf->Cell(50, 5, 'PROGRAM CODE', 1, 0, 'C', true);
// $pdf->Cell(50, 5, 'DEGREE PROGRAM', 1, 0, 'C', true);
// $pdf->Cell(78.66666666666667, 5, 'GOVERNMENT RECOGNITION NO.', 1, 0, 'C', true);
// $pdf->Cell(78.66666666666667, 5, 'CERTIFICATE OF PROGRAM COMPLIANCE NO.', 1, 0, 'C', true);
// $pdf->Cell(78.66666666666667, 5, 'UPLOADED IN THE TES PORTAL', 1, 0, 'C', true);
// $pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetWidths(array(44.4, 134.4, 53.4, 53.4, 50.4));
$pdf->SetAligns(array('C', 'C', 'C', 'C', 'C'));
$pdf->row(array('PROGRAM CODE', 'DEGREE PROGRAM', 'GOVERNMENT RECOGNITION NO.', 'CERTIFICATE OF PROGRAM COMPLIANCE NO.', 'UPLOADED IN THE TES PORTAL'));
//Degree Programs
$pdf->SetFont('Arial', '', 9);
$pdf->SetWidths(array(44.4, 134.4, 53.4, 53.4, 50.4));
$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C'));
$sql = "SELECT * FROM tbl_degree_programs 
WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'
ORDER BY program_name ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $program_code = $row['program_code'];
        $program_name = $row['program_name'];
        $gr_no = $row['gr_no'];
        $copc_no = $row['copc_no'];
        $in_the_portal = $row['in_the_portal'];

        $pdf->row(array($program_code, strtoUpper($program_name), $gr_no, $copc_no, strtoUpper($in_the_portal)));
    }
}
$pdf->addPage();
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

//Other StuFAPs
$pdf->SetFont('Arial', '', 10);
$pdf->SetWidths(array(42, 42, 42, 42, 42, 42, 42, 42));
$pdf->SetAligns(array('C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'));
$sql = "SELECT *, SUM(total_stufap_1st) AS grand_total_stufap_1st, SUM(total_stufap_2nd) AS grand_total_stufap_2nd, SUM(total_stufap_3rd) AS grand_total_stufap_3rd, SUM(total_stufap_4th) AS grand_total_stufap_4th, SUM(total_stufap_5th) AS grand_total_stufap_5th, SUM(total_stufap_6th) AS grand_total_stufap_6th 
FROM tbl_hei_other_funded_stufaps 
WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'
ORDER BY stufap_name ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $stufap_name = $row['stufap_name'];
        $stufap_type = $row['stufap_type'];
        $total_stufap_1st = $row['total_stufap_1st'];
        $total_stufap_2nd = $row['total_stufap_2nd'];
        $total_stufap_3rd = $row['total_stufap_3rd'];
        $total_stufap_4th = $row['total_stufap_4th'];
        $total_stufap_5th = $row['total_stufap_5th'];
        $total_stufap_6th = $row['total_stufap_6th'];
        $grand_total_stufap_1st = $row['grand_total_stufap_1st'];
        $grand_total_stufap_2nd = $row['grand_total_stufap_2nd'];
        $grand_total_stufap_3rd = $row['grand_total_stufap_3rd'];
        $grand_total_stufap_4th = $row['grand_total_stufap_4th'];
        $grand_total_stufap_5th = $row['grand_total_stufap_5th'];
        $grand_total_stufap_6th = $row['grand_total_stufap_6th'];

        $pdf->row(array(strtoUpper($stufap_name), strtoUpper($stufap_type), $total_stufap_1st, $total_stufap_2nd, $total_stufap_3rd, $total_stufap_4th, $total_stufap_5th, $total_stufap_6th));
    }
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetWidths(array(84, 42, 42, 42, 42, 42, 42));
    $pdf->SetAligns(array('C', 'C', 'C', 'C', 'C', 'C', 'C'));
    $pdf->row(array('TOTAL', $grand_total_stufap_1st, $grand_total_stufap_2nd, $grand_total_stufap_3rd, $grand_total_stufap_4th, $grand_total_stufap_5th, $grand_total_stufap_6th));
}

//END
$pdf->AddPage();

//Part2 STUFAP
$pdf->SetFont('Arial', 'B', 12);
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

$sql = "SELECT *
FROM tbl_degree_programs 
WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND  (total_fhe_1sem_1yr_male != 0 AND total_fhe_1sem_1yr_female != 0 AND total_fhe_1sem_2yr_male != 0 AND total_fhe_1sem_2yr_female != 0 AND total_fhe_1sem_3yr_male != 0 AND total_fhe_1sem_3yr_female != 0 AND total_fhe_1sem_4yr_male != 0 AND total_fhe_1sem_4yr_female != 0 AND total_fhe_1sem_5yr_male != 0 AND total_fhe_1sem_5yr_female != 0 AND total_fhe_1sem_6yr_male != 0 AND total_fhe_1sem_6yr_female != 0 AND 
total_fhe_2sem_1yr_male != 0 AND total_fhe_2sem_1yr_female != 0 AND total_fhe_2sem_2yr_male != 0 AND total_fhe_2sem_2yr_female != 0 AND total_fhe_2sem_3yr_male != 0 AND total_fhe_2sem_3yr_female != 0 AND total_fhe_2sem_4yr_male != 0 AND total_fhe_2sem_4yr_female != 0 AND total_fhe_2sem_5yr_male != 0 AND total_fhe_2sem_5yr_female != 0 AND total_fhe_2sem_6yr_male != 0 AND total_fhe_2sem_6yr_female != 0 AND
total_fhe_3sem_1yr_male != 0 AND total_fhe_3sem_1yr_female != 0 AND total_fhe_3sem_2yr_male != 0 AND total_fhe_3sem_2yr_female != 0 AND total_fhe_3sem_3yr_male != 0 AND total_fhe_3sem_3yr_female != 0 AND total_fhe_3sem_4yr_male != 0 AND total_fhe_3sem_4yr_female != 0 AND total_fhe_3sem_5yr_male != 0 AND total_fhe_3sem_5yr_female != 0 AND total_fhe_3sem_6yr_male != 0 AND total_fhe_3sem_6yr_female != 0 AND
total_fhe_sum_mid_1yr_male != 0 AND total_fhe_sum_mid_1yr_female != 0 AND total_fhe_sum_mid_2yr_male != 0 AND total_fhe_sum_mid_2yr_female != 0 AND total_fhe_sum_mid_3yr_male != 0 AND total_fhe_sum_mid_3yr_female != 0 AND total_fhe_sum_mid_4yr_male != 0 AND total_fhe_sum_mid_4yr_female != 0 AND total_fhe_sum_mid_5yr_male != 0 AND total_fhe_sum_mid_5yr_female != 0 AND total_fhe_sum_mid_6yr_male != 0 AND total_fhe_sum_mid_6yr_female != 0)

ORDER BY program_name ASC";

$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $program_name = $row['program_name'];
        //1st Semester
        $total_fhe_1sem_1yr_male = $row['total_fhe_1sem_1yr_male'];
        $total_fhe_1sem_2yr_male = $row['total_fhe_1sem_2yr_male'];
        $total_fhe_1sem_3yr_male = $row['total_fhe_1sem_3yr_male'];
        $total_fhe_1sem_4yr_male = $row['total_fhe_1sem_4yr_male'];
        $total_fhe_1sem_5yr_male = $row['total_fhe_1sem_5yr_male'];
        $total_fhe_1sem_6yr_male = $row['total_fhe_1sem_6yr_male'];

        $total_fhe_1sem_1yr_female = $row['total_fhe_1sem_1yr_female'];
        $total_fhe_1sem_2yr_female = $row['total_fhe_1sem_2yr_female'];
        $total_fhe_1sem_3yr_female = $row['total_fhe_1sem_3yr_female'];
        $total_fhe_1sem_4yr_female = $row['total_fhe_1sem_4yr_female'];
        $total_fhe_1sem_5yr_female = $row['total_fhe_1sem_5yr_female'];
        $total_fhe_1sem_6yr_female = $row['total_fhe_1sem_6yr_female'];

        //2nd Semester
        $total_fhe_2sem_1yr_male = $row['total_fhe_2sem_1yr_male'];
        $total_fhe_2sem_2yr_male = $row['total_fhe_2sem_2yr_male'];
        $total_fhe_2sem_3yr_male = $row['total_fhe_2sem_3yr_male'];
        $total_fhe_2sem_4yr_male = $row['total_fhe_2sem_4yr_male'];
        $total_fhe_2sem_5yr_male = $row['total_fhe_2sem_5yr_male'];
        $total_fhe_2sem_6yr_male = $row['total_fhe_2sem_6yr_male'];

        $total_fhe_2sem_1yr_female = $row['total_fhe_2sem_1yr_female'];
        $total_fhe_2sem_2yr_female = $row['total_fhe_2sem_2yr_female'];
        $total_fhe_2sem_3yr_female = $row['total_fhe_2sem_3yr_female'];
        $total_fhe_2sem_4yr_female = $row['total_fhe_2sem_4yr_female'];
        $total_fhe_2sem_5yr_female = $row['total_fhe_2sem_5yr_female'];
        $total_fhe_2sem_6yr_female = $row['total_fhe_2sem_6yr_female'];

        //3rd Semester
        $total_fhe_3sem_1yr_male = $row['total_fhe_3sem_1yr_male'];
        $total_fhe_3sem_2yr_male = $row['total_fhe_3sem_2yr_male'];
        $total_fhe_3sem_3yr_male = $row['total_fhe_3sem_3yr_male'];
        $total_fhe_3sem_4yr_male = $row['total_fhe_3sem_4yr_male'];
        $total_fhe_3sem_5yr_male = $row['total_fhe_3sem_5yr_male'];
        $total_fhe_3sem_6yr_male = $row['total_fhe_3sem_6yr_male'];

        $total_fhe_3sem_1yr_female = $row['total_fhe_3sem_1yr_female'];
        $total_fhe_3sem_2yr_female = $row['total_fhe_3sem_2yr_female'];
        $total_fhe_3sem_3yr_female = $row['total_fhe_3sem_3yr_female'];
        $total_fhe_3sem_4yr_female = $row['total_fhe_3sem_4yr_female'];
        $total_fhe_3sem_5yr_female = $row['total_fhe_3sem_5yr_female'];
        $total_fhe_3sem_6yr_female = $row['total_fhe_3sem_6yr_female'];

        //Summer Midyear
        $total_fhe_sum_mid_1yr_male = $row['total_fhe_sum_mid_1yr_male'];
        $total_fhe_sum_mid_2yr_male = $row['total_fhe_sum_mid_2yr_male'];
        $total_fhe_sum_mid_3yr_male = $row['total_fhe_sum_mid_3yr_male'];
        $total_fhe_sum_mid_4yr_male = $row['total_fhe_sum_mid_4yr_male'];
        $total_fhe_sum_mid_5yr_male = $row['total_fhe_sum_mid_5yr_male'];
        $total_fhe_sum_mid_6yr_male = $row['total_fhe_sum_mid_6yr_male'];

        $total_fhe_sum_mid_1yr_female = $row['total_fhe_sum_mid_1yr_female'];
        $total_fhe_sum_mid_2yr_female = $row['total_fhe_sum_mid_2yr_female'];
        $total_fhe_sum_mid_3yr_female = $row['total_fhe_sum_mid_3yr_female'];
        $total_fhe_sum_mid_4yr_female = $row['total_fhe_sum_mid_4yr_female'];
        $total_fhe_sum_mid_5yr_female = $row['total_fhe_sum_mid_5yr_female'];
        $total_fhe_sum_mid_6yr_female = $row['total_fhe_sum_mid_6yr_female'];

        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(214, 234, 248);
        $pdf->Cell(336, 5, strtoUpper($program_name), 1, 0, 'L', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
        //1st Term Male
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_6yr_male, 1, 0, 'C', true);

        //2nd Term Male
        $pdf->Cell(13.375, 5, $total_fhe_2sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_6yr_male, 1, 0, 'C', true);

        //3rd Term Male
        $pdf->Cell(13.375, 5, $total_fhe_3sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_6yr_male, 1, 0, 'C', true);

        //Summer Midyear Term Male
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_6yr_male, 1, 0, 'C', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);

        $pdf->Cell(13.375, 5, $total_fhe_1sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_2sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_3sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_6yr_female, 1, 0, 'C', true);

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);

        $pdf->Cell(13.375, 5, $total_fhe_1sem_1yr_male + $total_fhe_1sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_2yr_male + $total_fhe_1sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_3yr_male + $total_fhe_1sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_4yr_male + $total_fhe_1sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_5yr_male + $total_fhe_1sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_1sem_6yr_male + $total_fhe_1sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_2sem_1yr_male + $total_fhe_2sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_2yr_male + $total_fhe_2sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_3yr_male + $total_fhe_2sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_4yr_male + $total_fhe_2sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_5yr_male + $total_fhe_2sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_2sem_6yr_male + $total_fhe_2sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_3sem_1yr_male + $total_fhe_3sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_2yr_male + $total_fhe_3sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_3yr_male + $total_fhe_3sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_4yr_male + $total_fhe_3sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_5yr_male + $total_fhe_3sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_3sem_6yr_male + $total_fhe_3sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_1yr_male + $total_fhe_sum_mid_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_2yr_male + $total_fhe_sum_mid_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_3yr_male + $total_fhe_sum_mid_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_4yr_male + $total_fhe_sum_mid_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_5yr_male + $total_fhe_sum_mid_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_fhe_sum_mid_6yr_male + $total_fhe_sum_mid_6yr_female, 1, 0, 'C', true);

        $pdf->Ln();
    }
    $sql = "SELECT *, 
SUM(total_fhe_1sem_1yr_male) AS grand_total_fhe_1sem_1yr_male, 
SUM(total_fhe_1sem_1yr_female) AS grand_total_fhe_1sem_1yr_female, 
SUM(total_fhe_1sem_2yr_male) AS grand_total_fhe_1sem_2yr_male, 
SUM(total_fhe_1sem_2yr_female) AS grand_total_fhe_1sem_2yr_female,
SUM(total_fhe_1sem_3yr_male) AS grand_total_fhe_1sem_3yr_male, 
SUM(total_fhe_1sem_3yr_female) AS grand_total_fhe_1sem_3yr_female,
SUM(total_fhe_1sem_4yr_male) AS grand_total_fhe_1sem_4yr_male, 
SUM(total_fhe_1sem_4yr_female) AS grand_total_fhe_1sem_4yr_female,
SUM(total_fhe_1sem_5yr_male) AS grand_total_fhe_1sem_5yr_male, 
SUM(total_fhe_1sem_5yr_female) AS grand_total_fhe_1sem_5yr_female,
SUM(total_fhe_1sem_6yr_male) AS grand_total_fhe_1sem_6yr_male, 
SUM(total_fhe_1sem_6yr_female) AS grand_total_fhe_1sem_6yr_female,

SUM(total_fhe_2sem_1yr_male) AS grand_total_fhe_2sem_1yr_male, 
SUM(total_fhe_2sem_1yr_female) AS grand_total_fhe_2sem_1yr_female, 
SUM(total_fhe_2sem_2yr_male) AS grand_total_fhe_2sem_2yr_male, 
SUM(total_fhe_2sem_2yr_female) AS grand_total_fhe_2sem_2yr_female,
SUM(total_fhe_2sem_3yr_male) AS grand_total_fhe_2sem_3yr_male, 
SUM(total_fhe_2sem_3yr_female) AS grand_total_fhe_2sem_3yr_female,
SUM(total_fhe_2sem_4yr_male) AS grand_total_fhe_2sem_4yr_male, 
SUM(total_fhe_2sem_4yr_female) AS grand_total_fhe_2sem_4yr_female,
SUM(total_fhe_2sem_5yr_male) AS grand_total_fhe_2sem_5yr_male, 
SUM(total_fhe_2sem_5yr_female) AS grand_total_fhe_2sem_5yr_female,
SUM(total_fhe_2sem_6yr_male) AS grand_total_fhe_2sem_6yr_male, 
SUM(total_fhe_2sem_6yr_female) AS grand_total_fhe_2sem_6yr_female,

SUM(total_fhe_3sem_1yr_male) AS grand_total_fhe_3sem_1yr_male, 
SUM(total_fhe_3sem_1yr_female) AS grand_total_fhe_3sem_1yr_female, 
SUM(total_fhe_3sem_2yr_male) AS grand_total_fhe_3sem_2yr_male, 
SUM(total_fhe_3sem_2yr_female) AS grand_total_fhe_3sem_2yr_female,
SUM(total_fhe_3sem_3yr_male) AS grand_total_fhe_3sem_3yr_male, 
SUM(total_fhe_3sem_3yr_female) AS grand_total_fhe_3sem_3yr_female,
SUM(total_fhe_3sem_4yr_male) AS grand_total_fhe_3sem_4yr_male, 
SUM(total_fhe_3sem_4yr_female) AS grand_total_fhe_3sem_4yr_female,
SUM(total_fhe_3sem_5yr_male) AS grand_total_fhe_3sem_5yr_male, 
SUM(total_fhe_3sem_5yr_female) AS grand_total_fhe_3sem_5yr_female,
SUM(total_fhe_3sem_6yr_male) AS grand_total_fhe_3sem_6yr_male, 
SUM(total_fhe_3sem_6yr_female) AS grand_total_fhe_3sem_6yr_female,

SUM(total_fhe_sum_mid_1yr_male) AS grand_total_fhe_sum_mid_1yr_male, 
SUM(total_fhe_sum_mid_1yr_female) AS grand_total_fhe_sum_mid_1yr_female, 
SUM(total_fhe_sum_mid_2yr_male) AS grand_total_fhe_sum_mid_2yr_male, 
SUM(total_fhe_sum_mid_2yr_female) AS grand_total_fhe_sum_mid_2yr_female,
SUM(total_fhe_sum_mid_3yr_male) AS grand_total_fhe_sum_mid_3yr_male, 
SUM(total_fhe_sum_mid_3yr_female) AS grand_total_fhe_sum_mid_3yr_female,
SUM(total_fhe_sum_mid_4yr_male) AS grand_total_fhe_sum_mid_4yr_male, 
SUM(total_fhe_sum_mid_4yr_female) AS grand_total_fhe_sum_mid_4yr_female,
SUM(total_fhe_sum_mid_5yr_male) AS grand_total_fhe_sum_mid_5yr_male, 
SUM(total_fhe_sum_mid_5yr_female) AS grand_total_fhe_sum_mid_5yr_female,
SUM(total_fhe_sum_mid_6yr_male) AS grand_total_fhe_sum_mid_6yr_male, 
SUM(total_fhe_sum_mid_6yr_female) AS grand_total_fhe_sum_mid_6yr_female

FROM tbl_degree_programs 
WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";

    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            //Grand Total
            $grand_total_fhe_1sem_1yr_male = $row['grand_total_fhe_1sem_1yr_male'];
            $grand_total_fhe_1sem_1yr_female = $row['grand_total_fhe_1sem_1yr_female'];
            $grand_total_fhe_1sem_2yr_male = $row['grand_total_fhe_1sem_2yr_male'];
            $grand_total_fhe_1sem_2yr_female = $row['grand_total_fhe_1sem_2yr_female'];
            $grand_total_fhe_1sem_3yr_male = $row['grand_total_fhe_1sem_3yr_male'];
            $grand_total_fhe_1sem_3yr_female = $row['grand_total_fhe_1sem_3yr_female'];
            $grand_total_fhe_1sem_4yr_male = $row['grand_total_fhe_1sem_4yr_male'];
            $grand_total_fhe_1sem_4yr_female = $row['grand_total_fhe_1sem_4yr_female'];
            $grand_total_fhe_1sem_5yr_male = $row['grand_total_fhe_1sem_5yr_male'];
            $grand_total_fhe_1sem_5yr_female = $row['grand_total_fhe_1sem_5yr_female'];
            $grand_total_fhe_1sem_6yr_male = $row['grand_total_fhe_1sem_6yr_male'];
            $grand_total_fhe_1sem_6yr_female = $row['grand_total_fhe_1sem_6yr_female'];

            $grand_total_fhe_2sem_1yr_male = $row['grand_total_fhe_2sem_1yr_male'];
            $grand_total_fhe_2sem_1yr_female = $row['grand_total_fhe_2sem_1yr_female'];
            $grand_total_fhe_2sem_2yr_male = $row['grand_total_fhe_2sem_2yr_male'];
            $grand_total_fhe_2sem_2yr_female = $row['grand_total_fhe_2sem_2yr_female'];
            $grand_total_fhe_2sem_3yr_male = $row['grand_total_fhe_2sem_3yr_male'];
            $grand_total_fhe_2sem_3yr_female = $row['grand_total_fhe_2sem_3yr_female'];
            $grand_total_fhe_2sem_4yr_male = $row['grand_total_fhe_2sem_4yr_male'];
            $grand_total_fhe_2sem_4yr_female = $row['grand_total_fhe_2sem_4yr_female'];
            $grand_total_fhe_2sem_5yr_male = $row['grand_total_fhe_2sem_5yr_male'];
            $grand_total_fhe_2sem_5yr_female = $row['grand_total_fhe_2sem_5yr_female'];
            $grand_total_fhe_2sem_6yr_male = $row['grand_total_fhe_2sem_6yr_male'];
            $grand_total_fhe_2sem_6yr_female = $row['grand_total_fhe_2sem_6yr_female'];

            $grand_total_fhe_3sem_1yr_male = $row['grand_total_fhe_3sem_1yr_male'];
            $grand_total_fhe_3sem_1yr_female = $row['grand_total_fhe_3sem_1yr_female'];
            $grand_total_fhe_3sem_2yr_male = $row['grand_total_fhe_3sem_2yr_male'];
            $grand_total_fhe_3sem_2yr_female = $row['grand_total_fhe_3sem_2yr_female'];
            $grand_total_fhe_3sem_3yr_male = $row['grand_total_fhe_3sem_3yr_male'];
            $grand_total_fhe_3sem_3yr_female = $row['grand_total_fhe_3sem_3yr_female'];
            $grand_total_fhe_3sem_4yr_male = $row['grand_total_fhe_3sem_4yr_male'];
            $grand_total_fhe_3sem_4yr_female = $row['grand_total_fhe_3sem_4yr_female'];
            $grand_total_fhe_3sem_5yr_male = $row['grand_total_fhe_3sem_5yr_male'];
            $grand_total_fhe_3sem_5yr_female = $row['grand_total_fhe_3sem_5yr_female'];
            $grand_total_fhe_3sem_6yr_male = $row['grand_total_fhe_3sem_6yr_male'];
            $grand_total_fhe_3sem_6yr_female = $row['grand_total_fhe_3sem_6yr_female'];

            $grand_total_fhe_sum_mid_1yr_male = $row['grand_total_fhe_sum_mid_1yr_male'];
            $grand_total_fhe_sum_mid_1yr_female = $row['grand_total_fhe_sum_mid_1yr_female'];
            $grand_total_fhe_sum_mid_2yr_male = $row['grand_total_fhe_sum_mid_2yr_male'];
            $grand_total_fhe_sum_mid_2yr_female = $row['grand_total_fhe_sum_mid_2yr_female'];
            $grand_total_fhe_sum_mid_3yr_male = $row['grand_total_fhe_sum_mid_3yr_male'];
            $grand_total_fhe_sum_mid_3yr_female = $row['grand_total_fhe_sum_mid_3yr_female'];
            $grand_total_fhe_sum_mid_4yr_male = $row['grand_total_fhe_sum_mid_4yr_male'];
            $grand_total_fhe_sum_mid_4yr_female = $row['grand_total_fhe_sum_mid_4yr_female'];
            $grand_total_fhe_sum_mid_5yr_male = $row['grand_total_fhe_sum_mid_5yr_male'];
            $grand_total_fhe_sum_mid_5yr_female = $row['grand_total_fhe_sum_mid_5yr_female'];
            $grand_total_fhe_sum_mid_6yr_male = $row['grand_total_fhe_sum_mid_6yr_male'];
            $grand_total_fhe_sum_mid_6yr_female = $row['grand_total_fhe_sum_mid_6yr_female'];
        }
    }
    //Grand Total
    //FIRST ROW
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(214, 234, 248);
    $pdf->Cell(336, 5, 'GRAND TOTAL', 1, 0, 'L', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
    //1st Term Male
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_6yr_male, 1, 0, 'C', true);

    //2nd Term Male
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_6yr_male, 1, 0, 'C', true);

    //3rd Term Male
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_6yr_male, 1, 0, 'C', true);

    //Summer Midyear Term Male
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_6yr_male, 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFont('Arial', 'B', 9);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_1yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_2yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_3yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_4yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_5yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_6yr_female, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_1yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_2yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_3yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_4yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_5yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_6yr_female, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_1yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_2yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_3yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_4yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_5yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_6yr_female, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_1yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_2yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_3yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_4yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_5yr_female, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_6yr_female, 1, 0, 'C', true);

    $pdf->Ln();
    //Grand Total
    $pdf->SetFont('Arial', 'B', 10);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_1yr_female + $grand_total_fhe_1sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_2yr_female + $grand_total_fhe_1sem_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_3yr_female + $grand_total_fhe_1sem_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_4yr_female + $grand_total_fhe_1sem_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_5yr_female + $grand_total_fhe_1sem_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_1sem_6yr_female + $grand_total_fhe_1sem_6yr_male, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_1yr_female + $grand_total_fhe_2sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_2yr_female + $grand_total_fhe_2sem_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_3yr_female + $grand_total_fhe_2sem_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_4yr_female + $grand_total_fhe_2sem_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_5yr_female + $grand_total_fhe_2sem_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_2sem_6yr_female + $grand_total_fhe_2sem_6yr_male, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_1yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_2yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_3yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_4yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_5yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_3sem_6yr_female + $grand_total_fhe_3sem_1yr_male, 1, 0, 'C', true);

    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_1yr_female + $grand_total_fhe_sum_mid_1yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_2yr_female + $grand_total_fhe_sum_mid_2yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_3yr_female + $grand_total_fhe_sum_mid_3yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_4yr_female + $grand_total_fhe_sum_mid_4yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_5yr_female + $grand_total_fhe_sum_mid_5yr_male, 1, 0, 'C', true);
    $pdf->Cell(13.375, 5, $grand_total_fhe_sum_mid_6yr_female + $grand_total_fhe_sum_mid_6yr_male, 1, 0, 'C', true);

    $pdf->Ln();
}

//END
$pdf->addPage();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(336, 5, 'TOTAL FHE BENEFICIARIES', 1, 1, 'C', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 5, 'SEX', 1, 0, 'C', true);
$pdf->Cell(160.5, 5, 'GRADUATED BENEFICIARIES', 1, 0, 'C', true);
$pdf->Cell(160.5, 5, 'EXCEEDED THE MAXIMUM RESIDENCY RULE', 1, 0, 'C', true);
$pdf->Ln();

$sql = "SELECT * FROM tbl_degree_programs 
WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_fhe_graduated_male != 0 AND total_fhe_graduated_female != 0 AND total_fhe_exceeded_mrr_male != 0 AND total_fhe_exceeded_mrr_female != 0)
ORDER BY program_name ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $program_name = $row['program_name'];
        $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
        $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
        $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
        $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(214, 234, 248);
        $pdf->Cell(336, 5, strtoUpper($program_name), 1, 0, 'L', true);
        $pdf->Ln();

        $pdf->SetFillColor(236, 240, 241);
        $pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $total_fhe_graduated_male, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $total_fhe_exceeded_mrr_male, 1, 0, 'C', true);;
        $pdf->Ln();
        $pdf->SetFillColor(236, 240, 241);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $total_fhe_graduated_female, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $total_fhe_exceeded_mrr_female, 1, 0, 'C', true);;
        $pdf->Ln();

        $pdf->SetFillColor(236, 240, 241);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $total_fhe_graduated_male + $total_fhe_graduated_female, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $total_fhe_exceeded_mrr_male + $total_fhe_exceeded_mrr_female, 1, 0, 'C', true);;
        $pdf->Ln();
    }
    $sql = "SELECT *, 
    SUM(total_fhe_graduated_male) AS grand_total_fhe_graduated_male,
    SUM(total_fhe_graduated_female) AS grand_total_fhe_graduated_female,
    SUM(total_fhe_exceeded_mrr_male) AS grand_total_fhe_exceeded_mrr_male,
    SUM(total_fhe_exceeded_mrr_female) AS grand_total_fhe_exceeded_mrr_female
    FROM tbl_degree_programs 
    WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_fhe_graduated_male != 0 AND total_fhe_graduated_female != 0 AND total_fhe_exceeded_mrr_male != 0 AND total_fhe_exceeded_mrr_female != 0)
    ORDER BY program_name ASC";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $grand_total_fhe_graduated_male = $row['grand_total_fhe_graduated_male'];
            $grand_total_fhe_graduated_female = $row['grand_total_fhe_graduated_female'];
            $grand_total_fhe_exceeded_mrr_male = $row['grand_total_fhe_exceeded_mrr_male'];
            $grand_total_fhe_exceeded_mrr_female = $row['grand_total_fhe_exceeded_mrr_female'];
        }
    }
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(214, 234, 248);
        $pdf->Cell(336, 5, 'GRAND TOTAL', 1, 0, 'L', true);
        $pdf->Ln();

        $pdf->SetFillColor(236, 240, 241);
        $pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $grand_total_fhe_graduated_male, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $grand_total_fhe_exceeded_mrr_male, 1, 0, 'C', true);;
        $pdf->Ln();
        $pdf->SetFillColor(236, 240, 241);
        $pdf->SetFont('Arial', 'B', 9);
        $pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $grand_total_fhe_graduated_female, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $grand_total_fhe_exceeded_mrr_female, 1, 0, 'C', true);;
        $pdf->Ln();

        $pdf->SetFillColor(236, 240, 241);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(160.5, 5, $grand_total_fhe_graduated_male + $grand_total_fhe_graduated_female, 1, 0, 'C', true);
        $pdf->Cell(160.5, 5, $grand_total_fhe_exceeded_mrr_male + $grand_total_fhe_exceeded_mrr_female, 1, 0, 'C', true);;
        $pdf->Ln();
}

$pdf->addPage();

// NO. OF FHE BENEFICIARIES WHO OPTED OUT OF FHE
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell($totalWidth, 5, 'NO. OF FHE BENEFICIARIES WHO OPTED OUT OF FHE', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->Cell(15, 5, 'SEX', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_1st_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_2nd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_3rd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_summer_midyear_male, 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_1st_male + $total_fhe_opt_out_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_2nd_male + $total_fhe_opt_out_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_3rd_male + $total_fhe_opt_out_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_opt_out_summer_midyear_male + $total_fhe_opt_out_summer_midyear_female, 1, 0, 'C', true);
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
$pdf->Cell(15, 5, 'SEX', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(80.25, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_1st_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_2nd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_3rd_male, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_summer_midyear_male, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
$pdf->SetFont('Arial', '', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFillColor(236, 240, 241);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(15, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_1st_male + $total_fhe_vol_cont_1st_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_2nd_male + $total_fhe_vol_cont_2nd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_3rd_male + $total_fhe_vol_cont_3rd_female, 1, 0, 'C', true);
$pdf->Cell(80.25, 5, $total_fhe_vol_cont_summer_midyear_male + $total_fhe_vol_cont_summer_midyear_female, 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//end


// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF FHE BENEFICIARIES WHO DROPPED', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_dropout_1st_male = $row['total_dropout_1st_male'];
        $total_dropout_1st_female = $row['total_dropout_1st_female'];
        $total_dropout_2nd_male = $row['total_dropout_2nd_male'];
        $total_dropout_2nd_female = $row['total_dropout_2nd_female'];
        $total_dropout_3rd_male = $row['total_dropout_3rd_male'];
        $total_dropout_3rd_female = $row['total_dropout_3rd_female'];
        $total_dropout_sum_mid_male = $row['total_dropout_sum_mid_male'];
        $total_dropout_sum_mid_female = $row['total_dropout_sum_mid_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(20, 5, $total_dropout_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

//END
$sql = "SELECT SUM(total_dropout_1st_male) AS total_1st_male, SUM(total_dropout_1st_female) AS total_1st_female, SUM(total_dropout_2nd_male) AS total_2nd_male ,SUM(total_dropout_2nd_female) AS total_2nd_female, SUM(total_dropout_3rd_male) AS total_3rd_male, SUM(total_dropout_3rd_female) AS total_3rd_female, SUM(total_dropout_sum_mid_male) AS total_sum_mid_male, SUM(total_dropout_sum_mid_female) AS total_sum_mid_female
FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_1st_male = $row['total_1st_male'];
        $total_1st_female = $row['total_1st_female'];
        $total_2nd_male = $row['total_2nd_male'];
        $total_2nd_female = $row['total_2nd_female'];
        $total_3rd_male = $row['total_3rd_male'];
        $total_3rd_female = $row['total_3rd_female'];
        $total_sum_mid_male = $row['total_sum_mid_male'];
        $total_sum_mid_female = $row['total_sum_mid_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_female, 1, 0, 'C', true);

//END
$pdf->Ln();
$pdf->Ln();

// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF FHE BENEFICIARIES ON LEAVE OF ABSENCE (LOA)', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

$sql = "SELECT SUM(total_loa_1st_male) AS total_loa_1st_male, SUM(total_loa_1st_female) AS total_loa_1st_female, SUM(total_loa_2nd_male) AS total_loa_2nd_male ,SUM(total_loa_2nd_female) AS total_loa_2nd_female, SUM(total_loa_3rd_male) AS total_loa_3rd_male, SUM(total_loa_3rd_female) AS total_loa_3rd_female, SUM(total_loa_summer_midyear_male) AS total_loa_summer_midyear_male, SUM(total_loa_summer_midyear_female) AS total_loa_summer_midyear_female
FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

//END
$pdf->addPage();


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
$pdf->Cell(65, 5, 'No. of Students Who Applied for TES:', 0, 0, 'L', true);

$total_tes_applicant = $total_tes_applicant_male + $total_tes_applicant_female;

$pdf->Cell(311, 5, $total_tes_applicant, 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_tes_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tes_category = $row['tes_category'];

        //1st Semester
        $total_tes_1st_male = $row['total_tes_1st_male'];
        $total_pwd_1st_male = $row['total_pwd_1st_male'];
        $total_ip_1st_male = $row['total_ip_1st_male'];
        $total_with_board_1st_male = $row['total_with_board_1st_male'];

        $total_tes_1st_female = $row['total_tes_1st_female'];
        $total_pwd_1st_female = $row['total_pwd_1st_female'];
        $total_ip_1st_female = $row['total_ip_1st_female'];
        $total_with_board_1st_female = $row['total_with_board_1st_female'];

        //2nd Semester
        $total_tes_2nd_male = $row['total_tes_2nd_male'];
        $total_pwd_2nd_male = $row['total_pwd_2nd_male'];
        $total_ip_2nd_male = $row['total_ip_2nd_male'];
        $total_with_board_2nd_male = $row['total_with_board_2nd_male'];

        $total_tes_2nd_female = $row['total_tes_2nd_female'];
        $total_pwd_2nd_female = $row['total_pwd_2nd_female'];
        $total_ip_2nd_female = $row['total_ip_2nd_female'];
        $total_with_board_2nd_female = $row['total_with_board_2nd_female'];

        //3rd Semester
        $total_tes_3rd_male = $row['total_tes_3rd_male'];
        $total_pwd_3rd_male = $row['total_pwd_3rd_male'];
        $total_ip_3rd_male = $row['total_ip_3rd_male'];
        $total_with_board_3rd_male = $row['total_with_board_3rd_male'];

        $total_tes_3rd_female = $row['total_tes_3rd_female'];
        $total_pwd_3rd_female = $row['total_pwd_3rd_female'];
        $total_ip_3rd_female = $row['total_ip_3rd_female'];
        $total_with_board_3rd_female = $row['total_with_board_3rd_female'];

        //2nd Semester
        $total_tes_summer_midyear_male = $row['total_tes_summer_midyear_male'];
        $total_pwd_summer_midyear_male = $row['total_pwd_summer_midyear_male'];
        $total_ip_summer_midyear_male = $row['total_ip_summer_midyear_male'];
        $total_with_board_summer_midyear_male = $row['total_with_board_summer_midyear_male'];

        $total_tes_summer_midyear_female = $row['total_tes_summer_midyear_female'];
        $total_pwd_summer_midyear_female = $row['total_pwd_summer_midyear_female'];
        $total_ip_summer_midyear_female = $row['total_ip_summer_midyear_female'];
        $total_with_board_summer_midyear_female = $row['total_with_board_summer_midyear_female'];

        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(214, 234, 248);
        $pdf->Cell(336, 5, $tes_category, 1, 0, 'L', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(20, 5, 'MALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(19.75, 5, $total_tes_1st_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_1st_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_1st_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_1st_male, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_2nd_male, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_3rd_male, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(20, 5, 'FEMALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(19.75, 5, $total_tes_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_1st_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_2nd_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_3rd_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(20, 5, 'TOTAL', 1, 0, 'L', true);
        $pdf->SetFont('Arial', '', 10);
        $pdf->Cell(19.75, 5, $total_tes_1st_male + $total_tes_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_1st_male + $total_pwd_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_1st_male + $total_ip_1st_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_1st_male + $total_with_board_1st_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_2nd_male + $total_tes_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_2nd_male + $total_pwd_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_2nd_male + $total_ip_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_2nd_male + $total_with_board_2nd_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_3rd_male + $total_tes_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_3rd_male + $total_pwd_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_3rd_male + $total_ip_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_3rd_male + $total_with_board_3rd_female, 1, 0, 'C', true);

        $pdf->Cell(19.75, 5, $total_tes_summer_midyear_male + $total_tes_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_pwd_summer_midyear_male + $total_pwd_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_ip_summer_midyear_male + $total_ip_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Cell(19.75, 5, $total_with_board_summer_midyear_male + $total_with_board_summer_midyear_female, 1, 0, 'C', true);
        $pdf->Ln();
    }
}

$pdf->addPage();

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

$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tes_exceeded_mrr_male > 0 OR total_tes_exceeded_mrr_female > 0) ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_name_tes = $row['program_name'];
        $total_tes_exceeded_mrr_male = $row['total_tes_exceeded_mrr_male'];
        $total_tes_exceeded_mrr_female = $row['total_tes_exceeded_mrr_female'];
        $total_tes_est_grad_male = $row['total_tes_est_grad_male'];
        $total_tes_est_grad_female = $row['total_tes_est_grad_female'];

        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(156, 5, $program_name_tes, 1, 0, 'L', true);

        $pdf->Cell(45, 5, $total_tes_exceeded_mrr_male, 1, 0, 'C', true);
        $pdf->Cell(45, 5, $total_tes_exceeded_mrr_female, 1, 0, 'C', true);
        $pdf->Cell(45, 5, $total_tes_est_grad_male, 1, 0, 'C', true);
        $pdf->Cell(45, 5, $total_tes_est_grad_female, 1, 0, 'C', true);
        //END
        $pdf->Ln();
    }
}

$pdf->addPage();

// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF TES BENEFICIARIES WHO DROPPED', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_dropout_1st_male = $row['total_dropout_1st_male'];
        $total_dropout_1st_female = $row['total_dropout_1st_female'];
        $total_dropout_2nd_male = $row['total_dropout_2nd_male'];
        $total_dropout_2nd_female = $row['total_dropout_2nd_female'];
        $total_dropout_3rd_male = $row['total_dropout_3rd_male'];
        $total_dropout_3rd_female = $row['total_dropout_3rd_female'];
        $total_dropout_sum_mid_male = $row['total_dropout_sum_mid_male'];
        $total_dropout_sum_mid_female = $row['total_dropout_sum_mid_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->Cell(20, 5, $total_dropout_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

//END
$sql = "SELECT SUM(total_dropout_1st_male) AS total_1st_male, SUM(total_dropout_1st_female) AS total_1st_female, SUM(total_dropout_2nd_male) AS total_2nd_male ,SUM(total_dropout_2nd_female) AS total_2nd_female, SUM(total_dropout_3rd_male) AS total_3rd_male, SUM(total_dropout_3rd_female) AS total_3rd_female, SUM(total_dropout_sum_mid_male) AS total_sum_mid_male, SUM(total_dropout_sum_mid_female) AS total_sum_mid_female
FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_1st_male = $row['total_1st_male'];
        $total_1st_female = $row['total_1st_female'];
        $total_2nd_male = $row['total_2nd_male'];
        $total_2nd_female = $row['total_2nd_female'];
        $total_3rd_male = $row['total_3rd_male'];
        $total_3rd_female = $row['total_3rd_female'];
        $total_sum_mid_male = $row['total_sum_mid_male'];
        $total_sum_mid_female = $row['total_sum_mid_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_female, 1, 0, 'C', true);

//END
$pdf->Ln();
$pdf->Ln();

// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF TES BENEFICIARIES ON LEAVE OF ABSENCE (LOA)', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

$sql = "SELECT SUM(total_loa_1st_male) AS total_loa_1st_male, SUM(total_loa_1st_female) AS total_loa_1st_female, SUM(total_loa_2nd_male) AS total_loa_2nd_male ,SUM(total_loa_2nd_female) AS total_loa_2nd_female, SUM(total_loa_3rd_male) AS total_loa_3rd_male, SUM(total_loa_3rd_female) AS total_loa_3rd_female, SUM(total_loa_summer_midyear_male) AS total_loa_summer_midyear_male, SUM(total_loa_summer_midyear_female) AS total_loa_summer_midyear_female
FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

//END

$pdf->addPage();

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


$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tdp_1sem_1yr_male > 0 OR total_tdp_2sem_1yr_female > 0 OR total_tdp_2sem_1yr_male > 0 OR total_tdp_2sem_1yr_female > 0) ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_name_tdp = $row['program_name'];

        $total_tdp_1sem_1yr_male = $row['total_tdp_1sem_1yr_male'];
        $total_tdp_1sem_2yr_male = $row['total_tdp_1sem_2yr_male'];
        $total_tdp_1sem_3yr_male = $row['total_tdp_1sem_3yr_male'];
        $total_tdp_1sem_4yr_male = $row['total_tdp_1sem_4yr_male'];
        $total_tdp_1sem_5yr_male = $row['total_tdp_1sem_5yr_male'];
        $total_tdp_1sem_6yr_male = $row['total_tdp_1sem_6yr_male'];

        $total_tdp_2sem_1yr_male = $row['total_tdp_2sem_1yr_male'];
        $total_tdp_2sem_2yr_male = $row['total_tdp_2sem_2yr_male'];
        $total_tdp_2sem_3yr_male = $row['total_tdp_2sem_3yr_male'];
        $total_tdp_2sem_4yr_male = $row['total_tdp_2sem_4yr_male'];
        $total_tdp_2sem_5yr_male = $row['total_tdp_2sem_5yr_male'];
        $total_tdp_2sem_6yr_male = $row['total_tdp_2sem_6yr_male'];

        $total_tdp_3sem_1yr_male = $row['total_tdp_3sem_1yr_male'];
        $total_tdp_3sem_2yr_male = $row['total_tdp_3sem_2yr_male'];
        $total_tdp_3sem_3yr_male = $row['total_tdp_3sem_3yr_male'];
        $total_tdp_3sem_4yr_male = $row['total_tdp_3sem_4yr_male'];
        $total_tdp_3sem_5yr_male = $row['total_tdp_3sem_5yr_male'];
        $total_tdp_3sem_6yr_male = $row['total_tdp_3sem_6yr_male'];

        $total_tdp_sum_mid_1yr_male = $row['total_tdp_sum_mid_1yr_male'];
        $total_tdp_sum_mid_2yr_male = $row['total_tdp_sum_mid_2yr_male'];
        $total_tdp_sum_mid_3yr_male = $row['total_tdp_sum_mid_3yr_male'];
        $total_tdp_sum_mid_4yr_male = $row['total_tdp_sum_mid_4yr_male'];
        $total_tdp_sum_mid_5yr_male = $row['total_tdp_sum_mid_5yr_male'];
        $total_tdp_sum_mid_6yr_male = $row['total_tdp_sum_mid_6yr_male'];

        $total_tdp_1sem_1yr_female = $row['total_tdp_1sem_1yr_female'];
        $total_tdp_1sem_2yr_female = $row['total_tdp_1sem_2yr_female'];
        $total_tdp_1sem_3yr_female = $row['total_tdp_1sem_3yr_female'];
        $total_tdp_1sem_4yr_female = $row['total_tdp_1sem_4yr_female'];
        $total_tdp_1sem_5yr_female = $row['total_tdp_1sem_5yr_female'];
        $total_tdp_1sem_6yr_female = $row['total_tdp_1sem_6yr_female'];

        $total_tdp_2sem_1yr_female = $row['total_tdp_2sem_1yr_female'];
        $total_tdp_2sem_2yr_female = $row['total_tdp_2sem_2yr_female'];
        $total_tdp_2sem_3yr_female = $row['total_tdp_2sem_3yr_female'];
        $total_tdp_2sem_4yr_female = $row['total_tdp_2sem_4yr_female'];
        $total_tdp_2sem_5yr_female = $row['total_tdp_2sem_5yr_female'];
        $total_tdp_2sem_6yr_female = $row['total_tdp_2sem_6yr_female'];

        $total_tdp_3sem_1yr_female = $row['total_tdp_3sem_1yr_female'];
        $total_tdp_3sem_2yr_female = $row['total_tdp_3sem_2yr_female'];
        $total_tdp_3sem_3yr_female = $row['total_tdp_3sem_3yr_female'];
        $total_tdp_3sem_4yr_female = $row['total_tdp_3sem_4yr_female'];
        $total_tdp_3sem_5yr_female = $row['total_tdp_3sem_5yr_female'];
        $total_tdp_3sem_6yr_female = $row['total_tdp_3sem_6yr_female'];

        $total_tdp_sum_mid_1yr_female = $row['total_tdp_sum_mid_1yr_female'];
        $total_tdp_sum_mid_2yr_female = $row['total_tdp_sum_mid_2yr_female'];
        $total_tdp_sum_mid_3yr_female = $row['total_tdp_sum_mid_3yr_female'];
        $total_tdp_sum_mid_4yr_female = $row['total_tdp_sum_mid_4yr_female'];
        $total_tdp_sum_mid_5yr_female = $row['total_tdp_sum_mid_5yr_female'];
        $total_tdp_sum_mid_6yr_female = $row['total_tdp_sum_mid_6yr_female'];

        //FIRST ROW
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(214, 234, 248);
        $pdf->Cell(336, 5, $program_name_tdp, 1, 0, 'L', true);
        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 10);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(15, 5, 'MALE', 1, 0, 'L', true);

        $pdf->Cell(13.375, 5, $total_tdp_1sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_6yr_male, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_2sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_6yr_male, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_3sem_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_6yr_male, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_1yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_2yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_3yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_4yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_5yr_male, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_6yr_male, 1, 0, 'C', true);

        $pdf->Ln();

        $pdf->SetFont('Arial', 'B', 9);
        $pdf->SetFillColor(255, 255, 255);
        $pdf->Cell(15, 5, 'FEMALE', 1, 0, 'L', true);
        $pdf->SetFont('Arial', 'B', 10);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_1sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_2sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_2sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_3sem_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_3sem_6yr_female, 1, 0, 'C', true);

        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_1yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_2yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_3yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_4yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_5yr_female, 1, 0, 'C', true);
        $pdf->Cell(13.375, 5, $total_tdp_sum_mid_6yr_female, 1, 0, 'C', true);

        $pdf->Ln();
        //END
    }
}

$pdf->addPage();

// REASONS FOR DROPPING

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF TDP BENEFICIARIES WHO DROPPED', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_dropout_1st_male = $row['total_dropout_1st_male'];
        $total_dropout_1st_female = $row['total_dropout_1st_female'];
        $total_dropout_2nd_male = $row['total_dropout_2nd_male'];
        $total_dropout_2nd_female = $row['total_dropout_2nd_female'];
        $total_dropout_3rd_male = $row['total_dropout_3rd_male'];
        $total_dropout_3rd_female = $row['total_dropout_3rd_female'];
        $total_dropout_sum_mid_male = $row['total_dropout_sum_mid_male'];
        $total_dropout_sum_mid_female = $row['total_dropout_sum_mid_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->Cell(20, 5, $total_dropout_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_dropout_sum_mid_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

//END
$sql = "SELECT SUM(total_dropout_1st_male) AS total_1st_male, SUM(total_dropout_1st_female) AS total_1st_female, SUM(total_dropout_2nd_male) AS total_2nd_male ,SUM(total_dropout_2nd_female) AS total_2nd_female, SUM(total_dropout_3rd_male) AS total_3rd_male, SUM(total_dropout_3rd_female) AS total_3rd_female, SUM(total_dropout_sum_mid_male) AS total_sum_mid_male, SUM(total_dropout_sum_mid_female) AS total_sum_mid_female
FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_1st_male = $row['total_1st_male'];
        $total_1st_female = $row['total_1st_female'];
        $total_2nd_male = $row['total_2nd_male'];
        $total_2nd_female = $row['total_2nd_female'];
        $total_3rd_male = $row['total_3rd_male'];
        $total_3rd_female = $row['total_3rd_female'];
        $total_sum_mid_male = $row['total_sum_mid_male'];
        $total_sum_mid_female = $row['total_sum_mid_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_sum_mid_female, 1, 0, 'C', true);

//END
$pdf->Ln();
$pdf->Ln();

// REASONS FOR LEAVE OF ABSENCE (LOA)
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'NO. OF TDP BENEFICIARIES ON LEAVE OF ABSENCE (LOA)', 0, 0, 'L', true);
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

$sql = "SELECT * FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP' ORDER BY reason ASC";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];

        $pdf->SetFillColor(255, 255, 255);
        //FIRST ROW
        $pdf->Cell(176, 5, $reason, 1, 0, 'L', true);
        $pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
        $pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

        //END
        $pdf->Ln();
    }
}

$sql = "SELECT SUM(total_loa_1st_male) AS total_loa_1st_male, SUM(total_loa_1st_female) AS total_loa_1st_female, SUM(total_loa_2nd_male) AS total_loa_2nd_male ,SUM(total_loa_2nd_female) AS total_loa_2nd_female, SUM(total_loa_3rd_male) AS total_loa_3rd_male, SUM(total_loa_3rd_female) AS total_loa_3rd_female, SUM(total_loa_summer_midyear_male) AS total_loa_summer_midyear_male, SUM(total_loa_summer_midyear_female) AS total_loa_summer_midyear_female
FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_loa_1st_male = $row['total_loa_1st_male'];
        $total_loa_1st_female = $row['total_loa_1st_female'];
        $total_loa_2nd_male = $row['total_loa_2nd_male'];
        $total_loa_2nd_female = $row['total_loa_2nd_female'];
        $total_loa_3rd_male = $row['total_loa_3rd_male'];
        $total_loa_3rd_female = $row['total_loa_3rd_female'];
        $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
        $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];
    }
}
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(176, 5, 'TOTAL', 1, 0, 'L', true);
$pdf->Cell(20, 5, $total_loa_1st_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_1st_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_2nd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_3rd_female, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_male, 1, 0, 'C', true);
$pdf->Cell(20, 5, $total_loa_summer_midyear_female, 1, 0, 'C', true);

//END
$pdf->AddPage();

//PART3 COMPLIANCE TO GUIDELINES AND MOA
$pdf->SetFont('Arial', 'B', 12);
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
$cnt = 1;

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'The HEI certifies its compliance/noncompliance with the following information:', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(321, 5, $cnt++ . '. Conducted orientation to students about FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_1, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Provided guidance and financial counseling programs to the qualified enrolled students to enable them to avail of FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_2, 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the UniFAST the Certification of Tuition and Other School Fees (TOSF) signed by the HEI Head', 1, 0, 'L');
$pdf->Cell(15, 5, $question_3, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 175, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$pdf->Cell(321, 5, $cnt++ . '. Maintained a bank account intended only for FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_4, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Issued official receipt on time for every amount received from CHED concerning FHE, TES, and/or TDP', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_5, 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt++ . '. Reverted to CHED excess fund transfer', 1, 0, 'L');
$pdf->Cell(15, 5, $question_6, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 67, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$pdf->Cell(321, 5, $cnt++ . '. Submitted reports on time regarding the implementation of FHE, TES, and/or TDP as required', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_7, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the UniFAST the list of qualified students and FHE beneficiaries on time', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_8, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Implemented a voluntary opt-out and/or voluntary contribution mechanism for FHE', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_9, 1, 1, 'C', true);

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the UniFAST on time the list of students who voluntarily opted out from FHE', 1, 0, 'L');
$pdf->Cell(15, 5, $question_10, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 146, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the UniFAST on time the list of students who voluntarily contributed to the SUC/LUC', 1, 0, 'L');
$pdf->Cell(15, 5, $question_11, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 159, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$pdf->Cell(321, 5, $cnt++ . '. Signed the TES Sharing Agreement between the HEI and TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_12, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Disseminated continuously information to qualified TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_13, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Submitted TES liquidation reports within the prescribed period', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_14, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Returned excess or unutilized Administrative Support Cost (ASC) to the UniFAST', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_15, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Issued individual Notice of Award (NOA) to qualified TDP-TES applicants', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_16, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the CHED Regional Office (RO) the signed NOA of qualified TDP-TES grantees and other billing requirements', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_17, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Submitted to the CHEDRO the payroll for the release of TDP-TES benefits', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_18, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt++ . '. Submitted TDP-TES liquidation reports within the prescribed period', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_19, 1, 1, 'C', true);
$pdf->Ln();

$pdf->addPage();

$cnt2 = 1;

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
$pdf->Cell(321, 5, $cnt2++ . '. Received from the UniFAST the exact amount of TES for the term', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_20, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt2++ . '. Released the amount intended for the TES grantees', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_21, 1, 1, 'C', true);

$pdf->SetFont('Arial', '', 10);
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt2++ . '. Released to the grantees the difference in TES amount if the share of the private HEI is greater than the actual TOSF of the grantees', 1, 0, 'L');
$pdf->Cell(15, 5, $question_22, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 213, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->Cell(321, 5, $cnt2++ . '. Obliged the grantees to pay the difference in TES amount if the share of the private HEI is less than the actual TOSF of the grantees', 1, 0, 'L');
$pdf->Cell(15, 5, $question_23, 1, 1, 'C', true);
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 212, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$pdf->SetFont('Arial', '', 10);
$pdf->Cell(321, 5, $cnt2++ . '. Released the full amount of the TES to the grantees who have fully paid the TOSF for the term', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_24, 1, 1, 'C', true);
$pdf->Cell(321, 5, $cnt2++ . '. Released to the grantees their share within two (2) weeks upon the receipt of fund transfer for TES', 1, 0, 'L', true);
$pdf->Cell(15, 5, $question_25, 1, 1, 'C', true);
$pdf->Ln();
//End
$pdf->AddPage();
//PART IV. UNIFAST EXPERIENCE
$pdf->SetFont('Arial', 'B', 12);
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
$pdf->Cell(310, 25, $question_26, 0, 0, 'L', true);
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
$pdf->Cell(310, 25, $question_27, 0, 0, 'L', true);
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
$pdf->Cell(310, 25, $question_28, 0, 0, 'L', true);

$pdf->AddPage();

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
$pdf->Ln();
$pdf->addPage();

//Signatory Part
$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'By signing this accomplished monitoring tool, we attest to the veracity and completeness of the information provided for the specified Academic Year.', 0, 0, 'L', true);
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(336, 5, 'Prepared by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
// if($fhe=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($fhe_focal_name), 0, 0, 'L', true);
// }
// if($tes=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($tes_focal_name), 0, 0, 'L', true);
// }
// if($tdp=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($tdp_focal_name), 0, 0, 'L', true);
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
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(336, 5, 'Reviewed by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(63.33, 5, strtoUpper('Name Here'), 0, 0, 'L', true);
$pdf->Cell(63.33, 5, strtoUpper('Name Here'), 0, 0, 'L', true);
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
$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(336, 5, 'By signing and submitting this accomplished monitoring tool, I hereby certify to the veracity and completeness of the information provided for the specified Academic Year.', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(336, 5, 'Submitted by/Conforme:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(336, 5, strtoUpper($hei_head_name), 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 10);
$pdf->Cell(336, 5, 'HEI President/Authorized Representative', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(95, 5, 'Date:', 0, 0, 'L', true);
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

//end of data rows
$pdf->Output($_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . '.pdf', 'F');

header('Content-type: application/pdf');
header('Content-disposition: attachment; filename =' . $_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . '.pdf');
readFIle($_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . '.pdf');
unlink($_SESSION['hei_name'] . "-" . $_SESSION['ac_year'] . '.pdf');
