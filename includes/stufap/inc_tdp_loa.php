<?php

$sql = "SELECT * FROM tbl_loa WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]' AND program='TDP'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($ac_calendar == 'Trimester with Summer') {
    echo "
<table id='tbl_tdp_loa' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'><input type='checkbox' name='main_tdp_loa_checkbox'></th>
            <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>REASONS FOR LOA</th>
            <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
            <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
            <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>3RD TERM</th>
            <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>SUMMER/MIDYEAR</th>
        </tr>
        <tr>
            <th class='text-center' style='background-color: #668EBD;'>MALE</th>
            <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
            <th class='text-center' style='background-color: #668EBD;'>MALE</th>
            <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
            <th class='text-center' style='background-color: #668EBD;'>MALE</th>
            <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
            <th class='text-center' style='background-color: #668EBD;'>MALE</th>
            <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
        </tr>
    </thead>
    <tbody>
";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program = $row['program'];
            $reason = $row['reason'];
            $total_loa_1st_male = $row['total_loa_1st_male'];
            $total_loa_1st_female = $row['total_loa_1st_female'];
            $total_loa_2nd_male = $row['total_loa_2nd_male'];
            $total_loa_2nd_female = $row['total_loa_2nd_female'];
            $total_loa_3rd_male = $row['total_loa_3rd_male'];
            $total_loa_3rd_female = $row['total_loa_3rd_female'];
            $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
            $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];

            echo "
        <tr>
            <td class='text-center'><input type='checkbox' id='$uid' name='tdp_loa_checkbox' value='$uid'></td>
            <td>" . strtoUpper($reason) . "</td>
            <td data-name='total_loa_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_male</td>
            <td data-name='total_loa_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_female</td>
            <td data-name='total_loa_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_male</td>
            <td data-name='total_loa_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_female</td>
            <td data-name='total_loa_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_3rd_male</td>
            <td data-name='total_loa_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_3rd_female</td>
            <td data-name='total_loa_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_summer_midyear_male</td>
            <td data-name='total_loa_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_summer_midyear_female</td>
        </tr>
            ";
        }
    }
    echo "
    </tbody>
</table>
";
} else if ($ac_calendar == 'Trimester') {
    echo "
    <table id='tbl_tdp_loa' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'><input type='checkbox' name='main_tdp_loa_checkbox'></th>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>REASONS FOR LOA</th>
                <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>3RD TERM</th>
            </tr>
            <tr>
                <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
            </tr>
        </thead>
        <tbody>
    ";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program = $row['program'];
            $reason = $row['reason'];
            $total_loa_1st_male = $row['total_loa_1st_male'];
            $total_loa_1st_female = $row['total_loa_1st_female'];
            $total_loa_2nd_male = $row['total_loa_2nd_male'];
            $total_loa_2nd_female = $row['total_loa_2nd_female'];
            $total_loa_3rd_male = $row['total_loa_3rd_male'];
            $total_loa_3rd_female = $row['total_loa_3rd_female'];

            echo "
            <tr>
                <td class='text-center'><input type='checkbox' id='$uid' name='tdp_loa_checkbox' value='$uid'></td>
                <td>" . strtoUpper($reason) . "</td>
                <td data-name='total_loa_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_male</td>
                <td data-name='total_loa_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_female</td>
                <td data-name='total_loa_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_male</td>
                <td data-name='total_loa_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_female</td>
                <td data-name='total_loa_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_3rd_male</td>
                <td data-name='total_loa_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_3rd_female</td>
            </tr>
                ";
        }
    }
    echo "
        </tbody>
    </table>
    ";
} else if ($ac_calendar == 'Semester with Summer') {
    echo "
        <table id='tbl_tdp_loa' class='table-bordered tbl-style stripe' style='width: 100%;'>
            <thead>
                <tr>
                    <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'><input type='checkbox' name='main_tdp_loa_checkbox'></th>
                    <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>REASONS FOR LOA</th>
                    <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                    <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                    <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>SUMMER/MIDYEAR</th>
                </tr>
                <tr>
                    <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                    <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                    <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                    <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                    <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                    <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                </tr>
            </thead>
            <tbody>
        ";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program = $row['program'];
            $reason = $row['reason'];
            $total_loa_1st_male = $row['total_loa_1st_male'];
            $total_loa_1st_female = $row['total_loa_1st_female'];
            $total_loa_2nd_male = $row['total_loa_2nd_male'];
            $total_loa_2nd_female = $row['total_loa_2nd_female'];
            $total_loa_summer_midyear_male = $row['total_loa_summer_midyear_male'];
            $total_loa_summer_midyear_female = $row['total_loa_summer_midyear_female'];

            echo "
                <tr>
                    <td class='text-center'><input type='checkbox' id='$uid' name='tdp_loa_checkbox' value='$uid'></td>
                    <td>" . strtoUpper($reason) . "</td>
                    <td data-name='total_loa_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_male</td>
                    <td data-name='total_loa_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_female</td>
                    <td data-name='total_loa_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_male</td>
                    <td data-name='total_loa_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_female</td>
                    <td data-name='total_loa_summer_midyear_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_summer_midyear_male</td>
                    <td data-name='total_loa_summer_midyear_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_summer_midyear_female</td>
                </tr>
                    ";
        }
    }
    echo "
            </tbody>
        </table>
        ";
} else {
    echo "
            <table id='tbl_tdp_loa' class='table-bordered tbl-style stripe' style='width: 100%;'>
                <thead>
                    <tr>
                        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'><input type='checkbox' name='main_tdp_loa_checkbox'></th>
                        <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>REASONS FOR LOA</th>
                        <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>1ST TERM</th>
                        <th class='text-center' colspan='2' style='background-color: #3C70AB; color:#ffff;'>2ND TERM</th>
                    </tr>
                    <tr>
                        <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                        <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                        <th class='text-center' style='background-color: #668EBD;'>MALE</th>
                        <th class='text-center' style='background-color: #668EBD;'>FEMALE</th>
                    </tr>
                </thead>
                <tbody>
            ";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $program = $row['program'];
            $reason = $row['reason'];
            $total_loa_1st_male = $row['total_loa_1st_male'];
            $total_loa_1st_female = $row['total_loa_1st_female'];
            $total_loa_2nd_male = $row['total_loa_2nd_male'];
            $total_loa_2nd_female = $row['total_loa_2nd_female'];

            echo "
                    <tr>
                        <td class='text-center'><input type='checkbox' id='$uid' name='tdp_loa_checkbox' value='$uid'></td>
                        <td>" . strtoUpper($reason) . "</td>
                        <td data-name='total_loa_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_male</td>
                        <td data-name='total_loa_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_1st_female</td>
                        <td data-name='total_loa_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_male</td>
                        <td data-name='total_loa_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_loa_2nd_female</td>
                    </tr>
                        ";
        }
    }
    echo "
                </tbody>
            </table>
            ";
}
