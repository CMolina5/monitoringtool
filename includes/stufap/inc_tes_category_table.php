<?php

$sql = "SELECT * FROM tbl_tes_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($ac_calendar == 'Trimester with Summer') {
    echo "
<table id='tbl_tes_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tes_category_checkbox'></th>
            <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>TES CATEGORY</th>
            <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
            <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
            <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>3RD TERM</th>
            <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>SUMMER/MIDYEAR</th>
        </tr>
        <tr>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
            
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>

            <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>

            <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
            <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
        </tr>
        <tr>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
         
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>

            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
            <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        </tr>
    </thead>
    <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $tes_category = $row['tes_category'];

            $total_tes_1st_male = $row['total_tes_1st_male'];
            $total_tes_1st_female = $row['total_tes_1st_female'];
            $total_pwd_1st_male = $row['total_pwd_1st_male'];
            $total_pwd_1st_female = $row['total_pwd_1st_female'];
            $total_ip_1st_male = $row['total_ip_1st_male'];
            $total_ip_1st_female = $row['total_ip_1st_female'];
            $total_with_board_1st_male = $row['total_with_board_1st_male'];
            $total_with_board_1st_female = $row['total_with_board_1st_female'];

            $total_tes_2nd_male = $row['total_tes_2nd_male'];
            $total_tes_2nd_female = $row['total_tes_2nd_female'];
            $total_pwd_2nd_male = $row['total_pwd_2nd_male'];
            $total_pwd_2nd_female = $row['total_pwd_2nd_female'];
            $total_ip_2nd_male = $row['total_ip_2nd_male'];
            $total_ip_2nd_female = $row['total_ip_2nd_female'];
            $total_with_board_2nd_male = $row['total_with_board_2nd_male'];
            $total_with_board_2nd_female = $row['total_with_board_2nd_female'];

            $total_tes_3rd_male = $row['total_tes_3rd_male'];
            $total_tes_3rd_female = $row['total_tes_3rd_female'];
            $total_pwd_3rd_male = $row['total_pwd_3rd_male'];
            $total_pwd_3rd_female = $row['total_pwd_3rd_female'];
            $total_ip_3rd_male = $row['total_ip_3rd_male'];
            $total_ip_3rd_female = $row['total_ip_3rd_female'];
            $total_with_board_3rd_male = $row['total_with_board_3rd_male'];
            $total_with_board_3rd_female = $row['total_with_board_3rd_female'];

            $total_tes_summer_midyear_male = $row['total_tes_summer_midyear_male'];
            $total_tes_summer_midyear_female = $row['total_tes_summer_midyear_female'];
            $total_pwd_summer_midyear_male = $row['total_pwd_summer_midyear_male'];
            $total_pwd_summer_midyear_female = $row['total_pwd_summer_midyear_female'];
            $total_ip_summer_midyear_male = $row['total_ip_summer_midyear_male'];
            $total_ip_summer_midyear_female = $row['total_ip_summer_midyear_female'];
            $total_with_board_summer_midyear_male = $row['total_with_board_summer_midyear_male'];
            $total_with_board_summer_midyear_female = $row['total_with_board_summer_midyear_female'];

            echo "<tr>
        <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tes_category_checkbox' value='$uid'></td>
        <td>$tes_category</td>
        <td data-name='total_tes_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_male</td>
        <td data-name='total_tes_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_female</td>
        <td data-name='total_pwd_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_male</td>
        <td data-name='total_pwd_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_female</td>
        <td data-name='total_ip_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_male</td>
        <td data-name='total_ip_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_female</td>
        <td data-name='total_with_board_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_male</td>
        <td data-name='total_with_board_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_female</td>

        <td data-name='total_tes_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_male</td>
        <td data-name='total_tes_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_female</td>
        <td data-name='total_pwd_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_male</td>
        <td data-name='total_pwd_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_female</td>
        <td data-name='total_ip_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_male</td>
        <td data-name='total_ip_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_female</td>
        <td data-name='total_with_board_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_male</td>
        <td data-name='total_with_board_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_female</td>

        <td data-name='total_tes_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_3rd_male</td>
        <td data-name='total_tes_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_3rd_female</td>
        <td data-name='total_pwd_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_3rd_male</td>
        <td data-name='total_pwd_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_3rd_female</td>
        <td data-name='total_ip_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_3rd_male</td>
        <td data-name='total_ip_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_3rd_female</td>
        <td data-name='total_with_board_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_3rd_male</td>
        <td data-name='total_with_board_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_3rd_female</td>

        <td data-name='total_tes_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_summer_midyear_male</td>
        <td data-name='total_tes_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_summer_midyear_female</td>
        <td data-name='total_pwd_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_summer_midyear_male</td>
        <td data-name='total_pwd_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_summer_midyear_female</td>
        <td data-name='total_ip_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_summer_midyear_male</td>
        <td data-name='total_ip_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_summer_midyear_female</td>
        <td data-name='total_with_board_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_summer_midyear_male</td>
        <td data-name='total_with_board_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_summer_midyear_female</td>

    </tr>";
        }
    }
    echo "</tbody>
</table>
";
} else if ($ac_calendar == 'Trimester') {
    echo "
    <table id='tbl_tes_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tes_category_checkbox'></th>
                <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>TES CATEGORY</th>
                <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>3RD TERM</th>
            </tr>
            <tr>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
                
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
    
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
            </tr>
            <tr>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
             
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
    
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
            </tr>
        </thead>
        <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $tes_category = $row['tes_category'];

            $total_tes_1st_male = $row['total_tes_1st_male'];
            $total_tes_1st_female = $row['total_tes_1st_female'];
            $total_pwd_1st_male = $row['total_pwd_1st_male'];
            $total_pwd_1st_female = $row['total_pwd_1st_female'];
            $total_ip_1st_male = $row['total_ip_1st_male'];
            $total_ip_1st_female = $row['total_ip_1st_female'];
            $total_with_board_1st_male = $row['total_with_board_1st_male'];
            $total_with_board_1st_female = $row['total_with_board_1st_female'];

            $total_tes_2nd_male = $row['total_tes_2nd_male'];
            $total_tes_2nd_female = $row['total_tes_2nd_female'];
            $total_pwd_2nd_male = $row['total_pwd_2nd_male'];
            $total_pwd_2nd_female = $row['total_pwd_2nd_female'];
            $total_ip_2nd_male = $row['total_ip_2nd_male'];
            $total_ip_2nd_female = $row['total_ip_2nd_female'];
            $total_with_board_2nd_male = $row['total_with_board_2nd_male'];
            $total_with_board_2nd_female = $row['total_with_board_2nd_female'];

            $total_tes_3rd_male = $row['total_tes_3rd_male'];
            $total_tes_3rd_female = $row['total_tes_3rd_female'];
            $total_pwd_3rd_male = $row['total_pwd_3rd_male'];
            $total_pwd_3rd_female = $row['total_pwd_3rd_female'];
            $total_ip_3rd_male = $row['total_ip_3rd_male'];
            $total_ip_3rd_female = $row['total_ip_3rd_female'];
            $total_with_board_3rd_male = $row['total_with_board_3rd_male'];
            $total_with_board_3rd_female = $row['total_with_board_3rd_female'];

            echo "<tr>
            <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tes_category_checkbox' value='$uid'></td>
            <td>$tes_category</td>
            <td data-name='total_tes_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_male</td>
            <td data-name='total_tes_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_female</td>
            <td data-name='total_pwd_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_male</td>
            <td data-name='total_pwd_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_female</td>
            <td data-name='total_ip_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_male</td>
            <td data-name='total_ip_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_female</td>
            <td data-name='total_with_board_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_male</td>
            <td data-name='total_with_board_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_female</td>
    
            <td data-name='total_tes_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_male</td>
            <td data-name='total_tes_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_female</td>
            <td data-name='total_pwd_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_male</td>
            <td data-name='total_pwd_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_female</td>
            <td data-name='total_ip_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_male</td>
            <td data-name='total_ip_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_female</td>
            <td data-name='total_with_board_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_male</td>
            <td data-name='total_with_board_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_female</td>
    
            <td data-name='total_tes_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_3rd_male</td>
            <td data-name='total_tes_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_3rd_female</td>
            <td data-name='total_pwd_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_3rd_male</td>
            <td data-name='total_pwd_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_3rd_female</td>
            <td data-name='total_ip_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_3rd_male</td>
            <td data-name='total_ip_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_3rd_female</td>
            <td data-name='total_with_board_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_3rd_male</td>
            <td data-name='total_with_board_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_3rd_female</td>
    
        </tr>";
        }
    }
    echo "</tbody>
    </table>
    ";
} else if ($ac_calendar == 'Semester with Summer') {
    echo "
        <table id='tbl_tes_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
            <thead>
                <tr>
                    <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tes_category_checkbox'></th>
                    <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>TES CATEGORY</th>
                    <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                    <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                    <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>SUMMER/MIDYEAR</th>
                </tr>
                <tr>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
                    
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
        
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                    <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
                </tr>
                <tr>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                 
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
        
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                    <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                </tr>
            </thead>
            <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $tes_category = $row['tes_category'];

            $total_tes_1st_male = $row['total_tes_1st_male'];
            $total_tes_1st_female = $row['total_tes_1st_female'];
            $total_pwd_1st_male = $row['total_pwd_1st_male'];
            $total_pwd_1st_female = $row['total_pwd_1st_female'];
            $total_ip_1st_male = $row['total_ip_1st_male'];
            $total_ip_1st_female = $row['total_ip_1st_female'];
            $total_with_board_1st_male = $row['total_with_board_1st_male'];
            $total_with_board_1st_female = $row['total_with_board_1st_female'];

            $total_tes_2nd_male = $row['total_tes_2nd_male'];
            $total_tes_2nd_female = $row['total_tes_2nd_female'];
            $total_pwd_2nd_male = $row['total_pwd_2nd_male'];
            $total_pwd_2nd_female = $row['total_pwd_2nd_female'];
            $total_ip_2nd_male = $row['total_ip_2nd_male'];
            $total_ip_2nd_female = $row['total_ip_2nd_female'];
            $total_with_board_2nd_male = $row['total_with_board_2nd_male'];
            $total_with_board_2nd_female = $row['total_with_board_2nd_female'];

            $total_tes_summer_midyear_male = $row['total_tes_summer_midyear_male'];
            $total_tes_summer_midyear_female = $row['total_tes_summer_midyear_female'];
            $total_pwd_summer_midyear_male = $row['total_pwd_summer_midyear_male'];
            $total_pwd_summer_midyear_female = $row['total_pwd_summer_midyear_female'];
            $total_ip_summer_midyear_male = $row['total_ip_summer_midyear_male'];
            $total_ip_summer_midyear_female = $row['total_ip_summer_midyear_female'];
            $total_with_board_summer_midyear_male = $row['total_with_board_summer_midyear_male'];
            $total_with_board_summer_midyear_female = $row['total_with_board_summer_midyear_female'];

            echo "<tr>
                <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tes_category_checkbox' value='$uid'></td>
                <td>$tes_category</td>
                <td data-name='total_tes_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_male</td>
                <td data-name='total_tes_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_female</td>
                <td data-name='total_pwd_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_male</td>
                <td data-name='total_pwd_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_female</td>
                <td data-name='total_ip_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_male</td>
                <td data-name='total_ip_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_female</td>
                <td data-name='total_with_board_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_male</td>
                <td data-name='total_with_board_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_female</td>
        
                <td data-name='total_tes_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_male</td>
                <td data-name='total_tes_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_female</td>
                <td data-name='total_pwd_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_male</td>
                <td data-name='total_pwd_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_female</td>
                <td data-name='total_ip_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_male</td>
                <td data-name='total_ip_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_female</td>
                <td data-name='total_with_board_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_male</td>
                <td data-name='total_with_board_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_female</td>
        
                <td data-name='total_tes_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_summer_midyear_male</td>
                <td data-name='total_tes_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_summer_midyear_female</td>
                <td data-name='total_pwd_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_summer_midyear_male</td>
                <td data-name='total_pwd_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_summer_midyear_female</td>
                <td data-name='total_ip_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_summer_midyear_male</td>
                <td data-name='total_ip_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_summer_midyear_female</td>
                <td data-name='total_with_board_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_summer_midyear_male</td>
                <td data-name='total_with_board_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_summer_midyear_female</td>
        
            </tr>";
        }
    }
    echo "</tbody>
        </table>
        ";
} else {
    echo "
            <table id='tbl_tes_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
                <thead>
                    <tr>
                        <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_tes_category_checkbox'></th>
                        <th class='text-center' rowspan='3' style='background-color: #3C70AB; color:#ffff;'>TES CATEGORY</th>
                        <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                        <th class='text-center' colspan='8' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                    </tr>
                    <tr>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
                        
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>TOTAL GRANTEES</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>PWD</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>IP</th>
                        <th class='text-center' colspan='2' style='background-color: #668EBD;'>WITH BOARD EXAM</th>
                    </tr>
                    <tr>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                     
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>MALE</th>
                        <th class='text-center' style='background-color: #8AB7EB;'>FEMALE</th>
                    </tr>
                </thead>
                <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $tes_category = $row['tes_category'];

            $total_tes_1st_male = $row['total_tes_1st_male'];
            $total_tes_1st_female = $row['total_tes_1st_female'];
            $total_pwd_1st_male = $row['total_pwd_1st_male'];
            $total_pwd_1st_female = $row['total_pwd_1st_female'];
            $total_ip_1st_male = $row['total_ip_1st_male'];
            $total_ip_1st_female = $row['total_ip_1st_female'];
            $total_with_board_1st_male = $row['total_with_board_1st_male'];
            $total_with_board_1st_female = $row['total_with_board_1st_female'];

            $total_tes_2nd_male = $row['total_tes_2nd_male'];
            $total_tes_2nd_female = $row['total_tes_2nd_female'];
            $total_pwd_2nd_male = $row['total_pwd_2nd_male'];
            $total_pwd_2nd_female = $row['total_pwd_2nd_female'];
            $total_ip_2nd_male = $row['total_ip_2nd_male'];
            $total_ip_2nd_female = $row['total_ip_2nd_female'];
            $total_with_board_2nd_male = $row['total_with_board_2nd_male'];
            $total_with_board_2nd_female = $row['total_with_board_2nd_female'];

            echo "<tr>
                    <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='tes_category_checkbox' value='$uid'></td>
                    <td>$tes_category</td>
                    <td data-name='total_tes_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_male</td>
                    <td data-name='total_tes_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_1st_female</td>
                    <td data-name='total_pwd_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_male</td>
                    <td data-name='total_pwd_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_1st_female</td>
                    <td data-name='total_ip_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_male</td>
                    <td data-name='total_ip_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_1st_female</td>
                    <td data-name='total_with_board_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_male</td>
                    <td data-name='total_with_board_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_1st_female</td>
            
                    <td data-name='total_tes_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_male</td>
                    <td data-name='total_tes_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_tes_2nd_female</td>
                    <td data-name='total_pwd_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_male</td>
                    <td data-name='total_pwd_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_pwd_2nd_female</td>
                    <td data-name='total_ip_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_male</td>
                    <td data-name='total_ip_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_ip_2nd_female</td>
                    <td data-name='total_with_board_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_male</td>
                    <td data-name='total_with_board_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_with_board_2nd_female</td>
            
                </tr>";
        }
    }
    echo "</tbody>
            </table>
            ";
}
