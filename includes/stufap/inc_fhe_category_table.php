<?php

$sql = "SELECT * FROM tbl_fhe_category WHERE hei_uii='$_SESSION[hei_uii]' AND ac_year='$_SESSION[ac_year]'";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($ac_calendar == 'Trimester with Summer') {
    echo "
<table id='tbl_fhe_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
    <thead>
        <tr>
            <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_fhe_category_checkbox'></th>
            <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>FHE CATEGORY</th>
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
    <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $fhe_category = $row['fhe_category'];
            $total_fhe_1st_male = $row['total_fhe_1st_male'];
            $total_fhe_1st_female = $row['total_fhe_1st_female'];
            $total_fhe_2nd_male = $row['total_fhe_2nd_male'];
            $total_fhe_2nd_female = $row['total_fhe_2nd_female'];
            $total_fhe_3rd_male = $row['total_fhe_3rd_male'];
            $total_fhe_3rd_female = $row['total_fhe_3rd_female'];
            $total_fhe_sum_mid_male = $row['total_fhe_sum_mid_male'];
            $total_fhe_sum_mid_female = $row['total_fhe_sum_mid_female'];

            echo "<tr>
        <td class='text-center'><input type='checkbox' id='$uid' name='fhe_category_checkbox' value='$uid' data-toggle='tooltip' title='Select'></td>
        <td>$fhe_category</td>
        <td data-name='total_fhe_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_male</td>
        <td data-name='total_fhe_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_female</td>
        <td data-name='total_fhe_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_male</td>
        <td data-name='total_fhe_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_female</td>
        <td data-name='total_fhe_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3rd_male</td>
        <td data-name='total_fhe_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3rd_female</td>
        <td data-name='total_fhe_sum_mid_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_male</td>
        <td data-name='total_fhe_sum_mid_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_female</td>
        </tr>";
        }
    }
    echo "</tbody>
</table>
";
} else if ($ac_calendar == 'Trimester') {
    echo "
    <table id='tbl_fhe_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_fhe_category_checkbox'></th>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>FHE CATEGORY</th>
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
        <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $fhe_category = $row['fhe_category'];
            $total_fhe_1st_male = $row['total_fhe_1st_male'];
            $total_fhe_1st_female = $row['total_fhe_1st_female'];
            $total_fhe_2nd_male = $row['total_fhe_2nd_male'];
            $total_fhe_2nd_female = $row['total_fhe_2nd_female'];
            $total_fhe_3rd_male = $row['total_fhe_3rd_male'];
            $total_fhe_3rd_female = $row['total_fhe_3rd_female'];

            echo "<tr>
            <td class='text-center'><input type='checkbox' id='$uid' name='fhe_category_checkbox' value='$uid' data-toggle='tooltip' title='Select'></td>
            <td>$fhe_category</td>
            <td data-name='total_fhe_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_male</td>
            <td data-name='total_fhe_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_female</td>
            <td data-name='total_fhe_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_male</td>
            <td data-name='total_fhe_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_female</td>
            <td data-name='total_fhe_3rd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3rd_male</td>
            <td data-name='total_fhe_3rd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_3rd_female</td>
            </tr>";
        }
    }
    echo "</tbody>
    </table>
    ";
} else if ($ac_calendar == 'Semester with Summer') {
    echo "
        <table id='tbl_fhe_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
            <thead>
                <tr>
                    <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_fhe_category_checkbox'></th>
                    <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>FHE CATEGORY</th>
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
            <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $fhe_category = $row['fhe_category'];
            $total_fhe_1st_male = $row['total_fhe_1st_male'];
            $total_fhe_1st_female = $row['total_fhe_1st_female'];
            $total_fhe_2nd_male = $row['total_fhe_2nd_male'];
            $total_fhe_2nd_female = $row['total_fhe_2nd_female'];
            $total_fhe_sum_mid_male = $row['total_fhe_sum_mid_male'];
            $total_fhe_sum_mid_female = $row['total_fhe_sum_mid_female'];

            echo "<tr>
                <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='fhe_category_checkbox' value='$uid'></td>
                <td>$fhe_category</td>
                <td data-name='total_fhe_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_male</td>
                <td data-name='total_fhe_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_female</td>
                <td data-name='total_fhe_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_male</td>
                <td data-name='total_fhe_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_female</td>
                <td data-name='total_fhe_sum_mid_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_male</td>
                <td data-name='total_fhe_sum_mid_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_sum_mid_female</td>
                </tr>";
        }
    }
    echo "</tbody>
        </table>
        ";
} else {
    echo "
    <table id='tbl_fhe_category' class='table-bordered tbl-style stripe' style='width: 100%;'>
        <thead>
            <tr>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;' data-toggle='tooltip' title='Select All'><input type='checkbox' name='main_fhe_category_checkbox'></th>
                <th class='text-center' rowspan='2' style='background-color: #3C70AB; color:#ffff;'>FHE CATEGORY</th>
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
        <tbody>";

    if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $uid = $row['uid'];
            $ac_year = $row['ac_year'];
            $fhe_category = $row['fhe_category'];
            $total_fhe_1st_male = $row['total_fhe_1st_male'];
            $total_fhe_1st_female = $row['total_fhe_1st_female'];
            $total_fhe_2nd_male = $row['total_fhe_2nd_male'];
            $total_fhe_2nd_female = $row['total_fhe_2nd_female'];

            echo "<tr>
            <td class='text-center' data-toggle='tooltip' title='Select'><input type='checkbox' id='$uid' name='fhe_category_checkbox' value='$uid'></td>
            <td>$fhe_category</td>
            <td data-name='total_fhe_1st_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_male</td>
            <td data-name='total_fhe_1st_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_1st_female</td>
            <td data-name='total_fhe_2nd_male' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_male</td>
            <td data-name='total_fhe_2nd_female' class='beneficiaries text-center' data-type='number' data-pk='$uid'>$total_fhe_2nd_female</td>
            </tr>";
        }
    }
    echo "</tbody>
    </table>
    ";
    display($ac_calendar);
}
