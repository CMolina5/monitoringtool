<?php
session_start();
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
        $this->Image('assets/img/UniFAST_HEADER.jpg', 25, 2, 160,);
        $this->SetFont('Arial', 'B', 8);
        $this->Cell(190, 5, '', 0, 1);
        $this->Cell(190, 5, '', 0, 1);
        $this->Cell(190, 5, '', 0, 1);
        $this->Cell(190, 5, '', 0, 1);
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


//A4 width : 219mm
//default margin : 10mm each side
//writable horizontal : 219-(10*2)=190mm

$pdf = new PDF();
$pdf->SetAutoPageBreak(true, 15);
$pdf->AddPage();
//Cell(width , height , text , border , end line , [align] )
//table header
//set font to arial, bold, 7pt

$pdf->SetFont('Arial', 'B', 12);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, strtoUpper($_SESSION['hei_name']), 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetWidths(array(80, 110));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetWidths(array(80, 110));
$pdf->SetAligns(array('L', 'L'));
$pdf->row(array('Academic Year', $_SESSION['ac_year']));
if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $fhe1 . " ," . $tes1 . " ," . $tdp1));
} else if ($fhe == 'yes' and $tes == 'yes' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $fhe1 . " ," . $tes1));
} else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $fhe1));
} else if ($fhe == 'yes' and $tes == 'no' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $fhe1 . " ," . $tdp1));
} else if ($fhe == 'no' and $tes == 'yes' and $tdp == 'no') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $tes1));
} else if ($fhe == 'no' and $tes == 'no' and $tdp == 'yes') {
    $fhe1 = 'Free Higher Education';
    $tes1 = 'Tertiary Education Subsidy';
    $tdp1 = 'Tulong Dunong Program';
    $pdf->row(array('Type of RA No. 10931 Beneficiaries', $tdp));
}

$pdf->Ln();

//PART I. HIGHER EDUCATION INSTITUTION PROFILE
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 8, 'PART I. HIGHER EDUCATION INSTITUTION PROFILE', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//normal row height = 5.
//I.A BASIC INFORMATION
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'I.A BASIC INFORMATION', 1, 1, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetWidths(array(80, 110));
$pdf->SetAligns(array('L', 'L'));
$pdf->row(array('HEI Code/Unique Institutional Identifier (UII)', $_SESSION['hei_uii']));
$pdf->row(array('Type of HEI', $_SESSION['hei_it']));
if ($_SESSION['hei_it'] == 'Private HEI') {
    $pdf->row(array('Private HEI located in city/municipality with no SUC/LUC?', $_SESSION['hei_pnsl']));
}
$pdf->row(array('HEI Campus', $_SESSION['hei_ct']));
$pdf->row(array('HEI Address', iconv('UTF-8', 'windows-1252', $_SESSION['hei_address'])));
$pdf->row(array('Region', $_SESSION['hei_region_nir']));
$pdf->row(array('Province', $_SESSION['hei_prov_name']));
$pdf->row(array('Official Email Address', $hei_email));
$pdf->row(array('Alternative Email Address', $hei_alt_email));
$pdf->row(array('Contact No.', $hei_contact_no));
$pdf->row(array('Alternative Contact No.', $hei_alt_contact_no));
$pdf->Ln();

$pdf->row(array('Name of the Head of HEI', $hei_head_name));
$pdf->row(array('Full Designation', $hei_head_designation));
$pdf->row(array('Email Address', $hei_head_email_add));
$pdf->row(array('Alternative Email Address', $hei_head_alt_email_add));
$pdf->row(array('Contact No.', $hei_head_contact_no));
$pdf->row(array('Alternative Contact No.', $hei_head_alt_contact_no));
$pdf->Ln();

if($fhe=='yes'){
$pdf->row(array('Name of Personnel In-charge of FHE', $fhe_focal_name));
$pdf->row(array('Full Designation', $fhe_focal_designation));
$pdf->row(array('Email Address', $fhe_focal_email_add));
$pdf->row(array('Alternative Email Address', $fhe_focal_alt_email_add));
$pdf->row(array('Contact No.', $fhe_focal_contact_no));
$pdf->row(array('Alternative Contact No.', $fhe_focal_alt_contact_no));
$pdf->Ln();
}

if($tes=='yes'){
$pdf->row(array('Name of TES Focal Person', $tes_focal_name));
$pdf->row(array('Full Designation', $tes_focal_designation));
$pdf->row(array('Email Address', $tes_focal_email_add));
$pdf->row(array('Alternative Email Address', $tes_focal_alt_email_add));
$pdf->row(array('Contact No.', $tes_focal_contact_no));
$pdf->row(array('Alternative Contact No.', $tes_focal_alt_contact_no));
$pdf->Ln();
}

if($tdp=='yes'){
$pdf->row(array('Name of Personnel In-charge of TDP', $tdp_focal_name));
$pdf->row(array('Full Designation', $tdp_focal_designation));
$pdf->row(array('Email Address', $tdp_focal_email_add));
$pdf->row(array('Alternative Email Address', $tdp_focal_alt_email_add));
$pdf->row(array('Contact No.', $tdp_focal_contact_no));
$pdf->row(array('Alternative Contact No.', $tdp_focal_alt_contact_no));
$pdf->Ln();
}
$pdf->Ln();
//End

//I.B DEMOGRAPHIC INFORMATION
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'I.B DEMOGRAPHIC INFORMATION', 1, 1, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->row(array('Academic Calendar', $ac_calendar));
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'ENROLLMENT PERIOD', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $enrollment_period_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $enrollment_period_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $enrollment_period_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $enrollment_period_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $enrollment_period_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $enrollment_period_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $enrollment_period_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}



$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'OPENING OF CLASSES', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $opening_of_classes_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $opening_of_classes_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $opening_of_classes_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $opening_of_classes_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $opening_of_classes_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $opening_of_classes_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $opening_of_classes_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'TOTAL NO. OF UNDERGRADUATE STUDENTS', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_undergraduate_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_undergraduate_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_undergraduate_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_undergraduate_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_undergraduate_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_undergraduate_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_undergraduate_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'TOTAL NO. OF FOREIGN STUDENTS', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_foreign_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_foreign_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_foreign_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_foreign_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_foreign_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_foreign_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_foreign_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'TOTAL NO. OF SECOND COURSERS', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_second_courser_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_second_courser_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_second_courser_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_second_courser_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_second_courser_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_second_courser_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_second_courser_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}
$pdf->Ln();

//End

//I.C PROGRAM OFFERINGS
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'I.C PROGRAM OFFERINGS', 1, 1, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetWidths(array(165, 25));
$pdf->SetAligns(array('L', 'C'));
$pdf->row(array('No. of bachelors degree programs offered in the Academic Year', $total_programs_offered));
$pdf->row(array('No. of programs issued with Government Recognition/Certificate of Program Compliance', $total_with_gr_no_and_copc_no));
$pdf->Ln();

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->MultiCell(190, 5, 'List of all bachelor degree programs offered for the Academic Year with the Government Recognition and Certificate of Program Compliance Nos. for each program.', 0, 0, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(192, 192, 192);
$pdf->Cell(30, 5, 'PROGRAM CODE', 1, 0, 'C', true);
$pdf->Cell(59, 5, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(38, 5, 'GOV RECOGNITION NO.', 1, 0, 'C', true);
$pdf->Cell(38, 5, 'COPC NO.', 1, 0, 'C', true);
$pdf->Cell(25, 5, 'IN THE PORTAL', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(30, 59, 38, 38, 25));
$pdf->SetAligns(array('C', 'L', 'C', 'C', 'C'));
//Degree Programs
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

$pdf->Ln();
$pdf->Ln();
//End
$pdf->addPage();
//Part2 STUFAP
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 8, 'PART II. UNIFIED STUFAP PROFILE', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

if($fhe=='yes'){
//I.A FREE HIGHER EDUCATION
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'II.A FREE HIGHER EDUCATION', 1, 1, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(50, 15, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(80, 5, 'TOTAL FHE BENEFICIARIES', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 6.5);
$pdf->Cell(35, 10, 'GRADUATED BENEFICIARIES', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(25, 10, 'MRR', 1, 0, 'C', true);
$pdf->Cell(0, 5, '', 0, 1,);

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(50, 5, '', 0, 0,);
$pdf->Cell(18.5, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(18.5, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(18.535, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(24.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(50, 5, '', 0, 0,);
$pdf->SetFont('Arial', 'B', 6);
$pdf->Cell(9.25, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(9.25, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(9.25, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(9.25, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(9.25, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(9.25, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(12.25, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(12.25, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(12.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(12.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(50, 9.25, 9.25, 9.25, 9.25, 9.25, 9.25, 12.25, 12.25, 17.5, 17.5, 12.5, 12.5));
$pdf->SetAligns(array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'));
//FHE Table
$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {    
        $program_name1 = $row['program_name'];
        $total_fhe_1st_male = $row['total_fhe_1st_male'];
        $total_fhe_1st_female = $row['total_fhe_1st_female'];
        $total_fhe_2nd_male = $row['total_fhe_2nd_male'];
        $total_fhe_2nd_female = $row['total_fhe_2nd_female'];
        $total_fhe_3rd_male = $row['total_fhe_3rd_male'];
        $total_fhe_3rd_female = $row['total_fhe_3rd_female'];
        $total_fhe_summer_midyear_male = $row['total_fhe_summer_midyear_male'];
        $total_fhe_summer_midyear_female = $row['total_fhe_summer_midyear_female'];
        $total_fhe_graduated_male = $row['total_fhe_graduated_male'];
        $total_fhe_graduated_female = $row['total_fhe_graduated_female'];
        $total_fhe_exceeded_mrr_male = $row['total_fhe_exceeded_mrr_male'];
        $total_fhe_exceeded_mrr_female = $row['total_fhe_exceeded_mrr_female'];
        $pdf->row(array(strtoUpper($program_name1), $total_fhe_1st_male, $total_fhe_1st_female, $total_fhe_2nd_male, $total_fhe_2nd_female, $total_fhe_3rd_male, $total_fhe_3rd_female, $total_fhe_summer_midyear_male, $total_fhe_summer_midyear_female, $total_fhe_graduated_male, $total_fhe_graduated_female, $total_fhe_exceeded_mrr_male, $total_fhe_exceeded_mrr_female));
    }
}
$pdf->Ln();
$pdf->Ln();


$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries Who Opted Out of FHE', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_opt_out_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_opt_out_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_opt_out_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_opt_out_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_opt_out_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_opt_out_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_opt_out_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries Who Voluntarily Contributed for FHE', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_vol_cont_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_vol_cont_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_vol_cont_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_vol_cont_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_vol_cont_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_vol_cont_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_vol_cont_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}

$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if( $ac_calendar=='Trimester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(47.5, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_loa_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_loa_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_loa_3rd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(47.5, 5, $total_fhe_loa_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Trimester'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '3RD TERM', 1, 0, 'C', true);
    $pdf->Ln();
    
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_3rd, 1, 0, 'C', true);
    $pdf->Ln();
}else if($ac_calendar=='Semester with Summer'){
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(63.33, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_2nd, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(63.33, 5, $total_fhe_loa_summer_midyear, 1, 0, 'C', true);
    $pdf->Ln();
}else{
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '1ST TERM', 1, 0, 'C', true);
    $pdf->SetFillColor(236, 240, 241);
    $pdf->Cell(95, 5, '2ND TERM', 1, 0, 'C', true);
    $pdf->Ln();

    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_loa_1st, 1, 0, 'C', true);
    $pdf->SetFillColor(255, 255, 255);
    $pdf->Cell(95, 5, $total_fhe_loa_2nd, 1, 0, 'C', true);
    $pdf->Ln();
}

$pdf->Ln();

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'No. of FHE Beneficiaries Who Dropped', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(100, 5, 'REASONS FOR DROPPING', 1, 0, 'C', true);
$pdf->Cell(20, 5, '1ST TERM', 1, 0, 'C', true);
$pdf->Cell(20, 5, '2ND TERM', 1, 0, 'C', true);
$pdf->Cell(20, 5, '3RD TERM', 1, 0, 'C', true);
$pdf->Cell(30, 5, 'SUMMER/MIDYEAR', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(100, 20, 20, 20, 30));
$pdf->SetAligns(array('L', 'C', 'C', 'C', 'C'));

    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_dropout_1st = $row['total_dropout_1st'];
        $total_dropout_2nd = $row['total_dropout_2nd'];
        $total_dropout_3rd = $row['total_dropout_3rd'];
        $total_dropout_summer_midterm = $row['total_dropout_summer_midterm'];
        $pdf->row(array(strtoUpper($reason),$total_dropout_1st, $total_dropout_2nd, $total_dropout_3rd, $total_dropout_summer_midterm));
    }
    $pdf->SetFont('Arial', 'B', 7);
    $sql = "SELECT SUM(total_dropout_1st) AS total_1st, SUM(total_dropout_2nd) AS total_2nd, SUM(total_dropout_3rd) AS total_3rd, SUM(total_dropout_summer_midterm) AS total_summer_midterm FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='FHE'";
    $result = mysqli_query($conn, $sql);
    $resultCheck = mysqli_num_rows($result);
    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $total_1st = $row['total_1st'];
            $total_2nd = $row['total_2nd'];
            $total_3rd = $row['total_3rd'];
            $total_summer_midterm = $row['total_summer_midterm'];
            $pdf->row(array('TOTAL',$total_1st, $total_2nd, $total_3rd, $total_summer_midterm));
        }
$pdf->Ln();
}
$pdf->Ln();
}
//End
}
if($tes=='yes'){
//I.B TERTIARY EDUCATION SUBSIDY
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'II.B TERTIARY EDUCATION SUBSIDY', 1, 1, 'L', true);
$pdf->SetFont('Arial', '', 8);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(100, 5, 'No. of Students Who Applied for TES', 1, 0, 'L', true);
$pdf->Cell(90, 5, $total_tes_applicant, 1, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(50, 10, 'TES CATEGORY', 1, 0, 'C', true);
$pdf->Cell(70, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->Cell(70, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Cell(0, 5, '', 0, 1,);

$pdf->Cell(50, 5, '', 0, 0,);
$pdf->Cell(17.5, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'W/ BOARD', 1, 0, 'C', true);

$pdf->Cell(17.5, 5, 'TOTAL', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'PWD', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'IP', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'W/ BOARD', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(50, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5));
$pdf->SetAligns(array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'));
$sql = "SELECT * FROM tbl_tes_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $tes_category = $row['tes_category'];
        $total_tes_1st = $row['total_tes_1st'];
        $total_pwd_1st = $row['total_pwd_1st'];
        $total_ip_1st = $row['total_ip_1st'];
        $total_with_board_1st = $row['total_with_board_1st'];
        $total_tes_2nd = $row['total_tes_2nd'];
        $total_pwd_2nd = $row['total_pwd_2nd'];
        $total_ip_2nd = $row['total_ip_2nd'];
        $total_with_board_2nd = $row['total_with_board_2nd'];
        $pdf->row(array($tes_category, $total_tes_1st, $total_pwd_1st, $total_ip_1st, $total_with_board_1st, $total_tes_2nd, $total_pwd_2nd, $total_ip_2nd, $total_with_board_2nd));
    }
}

$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(80, 10, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(110, 5, 'NO. TES GRANTEES WHO EXCEEDED THE MRR', 1, 0, 'C', true);
$pdf->Cell(0, 5, '', 0, 1,);

$pdf->Cell(80, 5, '', 0, 0,);
$pdf->Cell(55, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(55, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(80, 55, 55));
$pdf->SetAligns(array('L', 'C', 'C'));
$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tes_exceeded_mrr_male > 0 OR total_tes_exceeded_mrr_female > 0) ";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $uid = $row['uid'];
        $ac_year = $row['ac_year'];
        $program_name_tes = $row['program_name'];
        $total_tes_exceeded_mrr_male=$row['total_tes_exceeded_mrr_male'];
        $total_tes_exceeded_mrr_female=$row['total_tes_exceeded_mrr_female'];
            $pdf->row(array($program_name_tes, $total_tes_exceeded_mrr_male, $total_tes_exceeded_mrr_female));
    }
}
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TES Grantees on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(95, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(95, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(95, 5, $total_tes_loa_1st, 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(95, 5, $total_tes_loa_2nd, 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TES Grantees Who Dropped', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(100, 5, 'REASONS FOR DROPPING', 1, 0, 'C', true);
$pdf->Cell(45, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->Cell(45, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(100, 45, 45));
$pdf->SetAligns(array('L', 'C', 'C'));
    while ($row = mysqli_fetch_assoc($result)) {
        $reason = $row['reason'];
        $total_dropout_1st = $row['total_dropout_1st'];
        $total_dropout_2nd = $row['total_dropout_2nd'];
        $pdf->row(array(strtoUpper($reason),$total_dropout_1st, $total_dropout_2nd));
    }
$pdf->SetFont('Arial', 'B', 7);
$sql = "SELECT SUM(total_dropout_1st) AS total_1st, SUM(total_dropout_2nd) AS total_2nd FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TES'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_1st_tes = $row['total_1st'];
        $total_2nd_tes = $row['total_2nd'];
        $pdf->row(array('TOTAL',$total_1st_tes, $total_2nd_tes));
    }
}
$pdf->Ln();
}
$pdf->Ln();
}
//End

if($tdp=='yes'){
//I.C TULONG DUNONG PROGRAM
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'II.C TULONG DUNONG PROGRAM', 1, 1, 'L', true);

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(50, 15, 'DEGREE PROGRAM', 1, 0, 'C', true);
$pdf->Cell(70, 5, 'TOTAL TDP GRANTEES', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 6.5);
$pdf->Cell(35, 10, 'GRADUATED GRANTEES', 1, 0, 'C', true);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(35, 10, 'MRR', 1, 0, 'C', true);
$pdf->Cell(0, 5, '', 0, 1,);

$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(50, 5, '', 0, 0,);
$pdf->Cell(35, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->Cell(35, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 7);
$pdf->Cell(50, 5, '', 0, 0,);
$pdf->Cell(17.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'MALE', 1, 0, 'C', true);
$pdf->Cell(17.5, 5, 'FEMALE', 1, 0, 'C', true);
$pdf->Ln();

$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(50, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5, 17.5));
$pdf->SetAligns(array('L', 'C', 'C', 'C', 'C', 'C', 'C', 'C', 'C'));
//FHE Table
$sql = "SELECT * FROM tbl_degree_programs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND (total_tdp_1st_male > 0 OR total_tdp_1st_female > 0 OR total_tdp_2nd_male > 0 OR total_tdp_2nd_female > 0)";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {    
        $program_name2 = $row['program_name'];
        $total_tdp_1st_male = $row['total_tdp_1st_male'];
        $total_tdp_1st_female = $row['total_tdp_1st_female'];
        $total_tdp_2nd_male = $row['total_tdp_2nd_male'];
        $total_tdp_2nd_female = $row['total_tdp_2nd_female'];
        $total_tdp_graduated_male = $row['total_tdp_graduated_male'];
        $total_tdp_graduated_female = $row['total_tdp_graduated_female'];
        $total_tdp_exceeded_mrr_male = $row['total_tdp_exceeded_mrr_male'];
        $total_tdp_exceeded_mrr_female = $row['total_tdp_exceeded_mrr_female'];
        
        $pdf->row(array(strtoUpper($program_name2), $total_tdp_1st_male, $total_tdp_1st_female, $total_tdp_2nd_male, $total_tdp_2nd_female, $total_tdp_graduated_male, $total_tdp_graduated_female, $total_tdp_exceeded_mrr_male, $total_tdp_exceeded_mrr_female));
    }
}
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TDP Grantees on Leave of Absence (LOA)', 0, 0, 'L', true);
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 8);
$pdf->SetFillColor(236, 240, 241);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(95, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(95, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(95, 5, $total_tdp_loa_1st, 1, 0, 'C', true);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(95, 5, $total_tdp_loa_2nd, 1, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$sql = "SELECT * FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
$pdf->SetFont('Arial', 'B', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'No. of TDP Grantees Who Dropped', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFillColor(236, 240, 241);
$pdf->Cell(100, 5, 'REASONS FOR DROPPING', 1, 0, 'C', true);
$pdf->Cell(45, 5, '1ST SEMESTER', 1, 0, 'C', true);
$pdf->Cell(45, 5, '2ND SEMESTER', 1, 0, 'C', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 7);
$pdf->SetWidths(array(100, 45, 45));
$pdf->SetAligns(array('L', 'C', 'C'));
    while ($row = mysqli_fetch_assoc($result)) {    
        $reason = $row['reason'];
        $total_dropout_1st = $row['total_dropout_1st'];
        $total_dropout_2nd = $row['total_dropout_2nd'];
        $pdf->row(array(strtoUpper($reason),$total_dropout_1st, $total_dropout_2nd));
    }
$pdf->SetFont('Arial', 'B', 7);
$sql = "SELECT SUM(total_dropout_1st) AS total_1st, SUM(total_dropout_2nd) AS total_2nd FROM tbl_drop_outs WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);
if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $total_1st_tdp = $row['total_1st'];
        $total_2nd_tdp = $row['total_2nd'];
        $pdf->row(array('TOTAL',$total_1st_tdp, $total_2nd_tdp));
    }
}
$pdf->Ln();
//End
}
$pdf->Ln();
}
$pdf->addPage();
//PART3 COMPLIANCE TO GUIDELINES AND MOA

$pdf->SetFont('Arial', 'B', 10);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 8, 'PART III. COMPLIANCE TO GUIDELINES AND MOA', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

//III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST AND HEI 
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 5, 'III.A COMPLIANCE TO THE FHE, TES AND TDP GUIDELINES, AND THE MOA BETWEEN CHED, UNIFAST, AND HEI ', 1, 1, 'L', true);

$cnt=1;

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'The HEI certifies its compliance/noncompliance with the following information:', 1, 1, 'L', true);
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(175, 15));
$pdf->SetAligns(array('L', 'C'));
$pdf->row(array($cnt++.'. Conducted orientation to students about FHE, TES, and/or TDP',$question_1));
$pdf->row(array($cnt++.'. Provided guidance and financial counseling programs to the qualified enrolled students to enable them to avail of FHE, TES, and/or TDP',$question_2));
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->row(array($cnt++.'. Submitted to the UniFAST the Certification of Tuition and Other School Fees (TOSF) signed by the HEI Head',$question_3));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 140, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();
$pdf->row(array($cnt++.'. Maintained a bank account intended only for FHE, TES, and/or TDP',$question_4));
$pdf->row(array($cnt++.'. Issued an official receipt for every amount received from CHED concerning FHE, TES, and/or TDP',$question_5));
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->row(array($cnt++.'. Reverted to CHED excess fund transfer',$question_6));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 53, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();
$pdf->row(array($cnt++.'. Submitted reports regarding the implementation of FHE, TES, and/or TDP as required',$question_7));
if($fhe=='yes'){
$pdf->row(array($cnt++.'. Submitted to the UniFAST the list of qualified students and FHE beneficiaries',$question_8));
$pdf->row(array($cnt++.'. Implemented a voluntary opt-out and/or voluntary contribution mechanism for FHE',$question_9));
}
if($_SESSION['hei_it']=='SUC' OR $_SESSION['hei_it']=='LUC'){
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->row(array($cnt++.'. Submitted to the UniFAST the list of students who voluntarily opted out from FHE',$question_10));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 107, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->row(array($cnt++.'. Submitted to the UniFAST the list of students who voluntarily contributed to the SUC/LUC',$question_11));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 117, $oldy);
$pdf->Write(5, "(if applicable)");
}
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

if($tes=='yes'){
$pdf->row(array($cnt++.'. Signed the TES Sharing Agreement between the HEI and TES grantees',$question_12));
$pdf->row(array($cnt++.'. Disseminated information to qualified TES grantees',$question_13));
$pdf->row(array($cnt++.'. Submitted TES liquidation reports within the prescribed period',$question_14));
}
if($tes=='yes' OR $tdp=='yes'){
$pdf->row(array($cnt++.'. Returned excess or unutilized Administrative Support Cost (ASC) to the UniFAST',$question_15));
}
if($tdp=='yes'){
$pdf->row(array($cnt++.'. Issued individual Notice of Award (NOA) to qualified TDP-TES applicants',$question_16));
$pdf->row(array($cnt++.'. Submitted to the CHED Regional Office (RO) the signed NOA of qualified TDP-TES grantees and other billing requirements',$question_17));
$pdf->row(array($cnt++.'. Submitted to the CHEDRO the payroll for the release of TDP-TES benefits',$question_18));
$pdf->row(array($cnt++.'. Submitted TDP-TES liquidation reports within the prescribed period',$question_19));
}

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetFillColor(192, 192, 192);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetDrawColor(50, 50, 100);

if($tes=='yes'){
$pdf->Ln();
$pdf->Cell(190, 5, 'III.B COMPLIANCE TO TES SHARING AGREEMENT', 1, 1, 'L', true);

$cnt2=1;

$pdf->SetFont('Arial', 'I', 8);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, 'The HEI certifies its compliance/noncompliance with the following information:', 1, 1, 'L', true);
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(175, 15));
$pdf->SetAligns(array('L', 'C'));
$pdf->row(array($cnt2++.'. Received from the UniFAST the exact amount of TES for the term',$question_20));
$pdf->row(array($cnt2++.'. Released the amount intended for the TES grantees',$question_21));
if ($_SESSION['hei_it'] == 'Private HEI') {
$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->SetFont('Arial', '', 7.3);
$pdf->row(array($cnt2++.'. Released to the grantees the difference in TES amount if the share of the private HEI is greater than the actual TOSF of the grantees',$question_22));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 155, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();

$oldx = $pdf->GetX();
$oldy = $pdf->GetY();
$pdf->row(array($cnt2++.'. Obliged the grantees to pay the difference in TES amount if the share of the private HEI is less than the actual TOSF of the grantees',$question_23));
$pdf->SetTextColor(255, 0, 0);
$pdf->SetXY($oldx + 155, $oldy);
$pdf->Write(5, "(if applicable)");
$pdf->SetTextColor(0, 0, 0);
$pdf->Ln();
}

$pdf->SetFont('Arial', '', 8);
$pdf->row(array($cnt2++.'. Released the full amount of the TES to the grantees who have fully paid the TOSF for the term',$question_24));
$pdf->row(array($cnt2++.'. Released to the grantees their share within two (2) weeks upon the receipt of fund transfer for TES',$question_25));

//End
}
$pdf->Ln();

if($_SESSION['ac_year']=='2022-2023'){
$pdf->addPage();
//PART IV. UNIFAST EXPERIENCE
$pdf->SetFont('Arial', 'B', 10);
$pdf->SetWidths(array(95, 95));
$pdf->SetAligns(array('L', 'L'));
$pdf->SetFillColor(0, 0, 128);
$pdf->SetTextColor(255, 255, 255);
$pdf->SetDrawColor(50, 50, 100);
$pdf->Cell(190, 8, 'PART IV. UNIFAST EXPERIENCE', 0, 0, 'C', true);
$pdf->Ln();
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, '1. Good Practices in the Implementation of RA No. 10931 Programs', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 8);
$pdf->SetWidths(array(190));
$pdf->SetAligns(array('L'));
$pdf->row(array($question_26));
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, '2. Challenges/Concerns in the Implementation of RA No. 10931', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 8);
$pdf->row(array($question_27));
$pdf->Ln();

$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Cell(190, 5, '3. Recommendations for the Improvement of Program Implementation', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 8);
$pdf->row(array($question_28));
$pdf->Ln();
}

$pdf->addPage();
$pdf->SetFont('Arial', 'B', 9);
$pdf->SetTextColor(0, 0, 0);
$pdf->SetFillColor(255, 255, 255);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5, 'Prepared by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
if($fhe=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($fhe_focal_name), 0, 0, 'L', true);
}
if($tes=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($tes_focal_name), 0, 0, 'L', true);
}
if($tdp=='yes'){
$pdf->Cell(63.33, 5, strtoUpper($tdp_focal_name), 0, 0, 'L', true);
}
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
if($fhe=='yes'){
$pdf->Cell(63.33, 5, 'Personnel In-charge of FHE', 0, 0, 'L', true);
}
if($tes=='yes'){
$pdf->Cell(63.33, 5, 'TES Focal Person', 0, 0, 'L', true);
}
if($tdp=='yes'){
$pdf->Cell(63.33, 5, 'Personnel In-charge of TDP', 0, 0, 'L', true);
}
$pdf->Ln();
if($fhe=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
}
if($tes=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
}
if($tdp=='yes'){
$pdf->Cell(63.33, 5, 'Date:', 0, 0, 'L', true);
}
$pdf->Ln();
$pdf->Ln(); 
$pdf->Ln(); 
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(190, 5, 'Reviewed by:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(63.33, 5, strtoUpper('Name Here'), 0, 0, 'L', true);
$pdf->Cell(63.33, 5, strtoUpper('Name Here'), 0, 0, 'L', true);
$pdf->Cell(63.33, 5, '', 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
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
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(190, 5, 'Submitted by/Conforme:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(190, 5, strtoUpper($hei_head_name), 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 5, 'HEI President/Authorized Representative', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(95, 5, 'Date:', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->Ln();
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(190, 5, 'Officially Received By:', 0, 1, 'L', true);
$pdf->Ln();
$pdf->Ln();
$pdf->Cell(95, 5, strtoUpper('Name Here'), 0, 0, 'L', true);
$pdf->Ln();
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(190, 5, 'Chief Education Program Specialist', 0, 0, 'L', true);
$pdf->Ln();
$pdf->Cell(95, 5, 'Date:', 0, 0, 'L', true);

//end of data rows
$pdf->Output($_SESSION['hei_name']."-".$_SESSION['ac_year'] . '.pdf', 'F');

header('Content-type: application/pdf');
header('Content-disposition: attachment; filename =' . $_SESSION['hei_name']."-".$_SESSION['ac_year'] . '.pdf');
readFIle($_SESSION['hei_name']."-".$_SESSION['ac_year'] . '.pdf');
unlink($_SESSION['hei_name']."-".$_SESSION['ac_year'] . '.pdf');
