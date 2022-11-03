<?php
session_start();
include_once '../db_connection.php';
include 'inc_template.php';

$uid = mysqli_real_escape_string($conn, $_SESSION['degree_program_id']);
//1st Semester
$total_fhe_1sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_1yr_male']);
$total_fhe_1sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_1yr_female']);
$total_fhe_1sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_2yr_male']);
$total_fhe_1sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_2yr_female']);
$total_fhe_1sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_3yr_male']);
$total_fhe_1sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_3yr_female']);
$total_fhe_1sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_4yr_male']);
$total_fhe_1sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_4yr_female']);
$total_fhe_1sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_5yr_male']);
$total_fhe_1sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_5yr_female']);
$total_fhe_1sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_6yr_male']);
$total_fhe_1sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_1sem_6yr_female']);

//2nd Semester
$total_fhe_2sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_1yr_male']);
$total_fhe_2sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_1yr_female']);
$total_fhe_2sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_2yr_male']);
$total_fhe_2sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_2yr_female']);
$total_fhe_2sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_3yr_male']);
$total_fhe_2sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_3yr_female']);
$total_fhe_2sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_4yr_male']);
$total_fhe_2sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_4yr_female']);
$total_fhe_2sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_5yr_male']);
$total_fhe_2sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_5yr_female']);
$total_fhe_2sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_6yr_male']);
$total_fhe_2sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_2sem_6yr_female']);

$total_fhe_graduated_male = mysqli_real_escape_string($conn, $_POST['total_fhe_graduated_male']);
$total_fhe_graduated_female = mysqli_real_escape_string($conn, $_POST['total_fhe_graduated_female']);
$total_fhe_exceeded_mrr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_exceeded_mrr_male']);
$total_fhe_exceeded_mrr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_exceeded_mrr_female']);

//1st Semester
if (empty($total_fhe_1sem_1yr_male)) {
    $total_fhe_1sem_1yr_male = 0;
}
if (empty($total_fhe_1sem_1yr_female)) {
    $total_fhe_1sem_1yr_female = 0;
}
if (empty($total_fhe_1sem_2yr_male)) {
    $total_fhe_1sem_2yr_male = 0;
}
if (empty($total_fhe_1sem_2yr_female)) {
    $total_fhe_1sem_2yr_female = 0;
}
if (empty($total_fhe_1sem_3yr_male)) {
    $total_fhe_1sem_3yr_male = 0;
}
if (empty($total_fhe_1sem_3yr_female)) {
    $total_fhe_1sem_3yr_female = 0;
}
if (empty($total_fhe_1sem_4yr_male)) {
    $total_fhe_1sem_4yr_male = 0;
}
if (empty($total_fhe_1sem_4yr_female)) {
    $total_fhe_1sem_4yr_female = 0;
}
if (empty($total_fhe_1sem_5yr_male)) {
    $total_fhe_1sem_5yr_male = 0;
}
if (empty($total_fhe_1sem_5yr_female)) {
    $total_fhe_1sem_5yr_female = 0;
}
if (empty($total_fhe_1sem_6yr_male)) {
    $total_fhe_1sem_6yr_male = 0;
}
if (empty($total_fhe_1sem_6yr_female)) {
    $total_fhe_1sem_6yr_female = 0;
}

//2nd Semester
if (empty($total_fhe_2sem_1yr_male)) {
    $total_fhe_2sem_1yr_male = 0;
}
if (empty($total_fhe_2sem_1yr_female)) {
    $total_fhe_2sem_1yr_female = 0;
}
if (empty($total_fhe_2sem_2yr_male)) {
    $total_fhe_2sem_2yr_male = 0;
}
if (empty($total_fhe_2sem_2yr_female)) {
    $total_fhe_2sem_2yr_female = 0;
}
if (empty($total_fhe_2sem_3yr_male)) {
    $total_fhe_2sem_3yr_male = 0;
}
if (empty($total_fhe_2sem_3yr_female)) {
    $total_fhe_2sem_3yr_female = 0;
}
if (empty($total_fhe_2sem_4yr_male)) {
    $total_fhe_2sem_4yr_male = 0;
}
if (empty($total_fhe_2sem_4yr_female)) {
    $total_fhe_2sem_4yr_female = 0;
}
if (empty($total_fhe_2sem_5yr_male)) {
    $total_fhe_2sem_5yr_male = 0;
}
if (empty($total_fhe_2sem_5yr_female)) {
    $total_fhe_2sem_5yr_female = 0;
}
if (empty($total_fhe_2sem_6yr_male)) {
    $total_fhe_2sem_6yr_male = 0;
}
if (empty($total_fhe_2sem_6yr_female)) {
    $total_fhe_2sem_6yr_female = 0;
}


if (empty($total_fhe_graduated_male)) {
    $total_fhe_graduated_male = 0;
}
if (empty($total_fhe_graduated_female)) {
    $total_fhe_graduated_female = 0;
}
if (empty($total_fhe_exceeded_mrr_male)) {
    $total_fhe_exceeded_mrr_male = 0;
}
if (empty($total_fhe_exceeded_mrr_female)) {
    $total_fhe_exceeded_mrr_female = 0;
}

if ($ac_calendar == 'Trimester') {
    //3rd Semester
    $total_fhe_3sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_1yr_male']);
    $total_fhe_3sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_1yr_female']);
    $total_fhe_3sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_2yr_male']);
    $total_fhe_3sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_2yr_female']);
    $total_fhe_3sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_3yr_male']);
    $total_fhe_3sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_3yr_female']);
    $total_fhe_3sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_4yr_male']);
    $total_fhe_3sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_4yr_female']);
    $total_fhe_3sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_5yr_male']);
    $total_fhe_3sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_5yr_female']);
    $total_fhe_3sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_6yr_male']);
    $total_fhe_3sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_6yr_female']);

    //3rd Semester
    if (empty($total_fhe_3sem_1yr_male)) {
        $total_fhe_3sem_1yr_male = 0;
    }
    if (empty($total_fhe_3sem_1yr_female)) {
        $total_fhe_3sem_1yr_female = 0;
    }
    if (empty($total_fhe_3sem_2yr_male)) {
        $total_fhe_3sem_2yr_male = 0;
    }
    if (empty($total_fhe_3sem_2yr_female)) {
        $total_fhe_3sem_2yr_female = 0;
    }
    if (empty($total_fhe_3sem_3yr_male)) {
        $total_fhe_3sem_3yr_male = 0;
    }
    if (empty($total_fhe_3sem_3yr_female)) {
        $total_fhe_3sem_3yr_female = 0;
    }
    if (empty($total_fhe_3sem_4yr_male)) {
        $total_fhe_3sem_4yr_male = 0;
    }
    if (empty($total_fhe_3sem_4yr_female)) {
        $total_fhe_3sem_4yr_female = 0;
    }
    if (empty($total_fhe_3sem_5yr_male)) {
        $total_fhe_3sem_5yr_male = 0;
    }
    if (empty($total_fhe_3sem_5yr_female)) {
        $total_fhe_3sem_5yr_female = 0;
    }
    if (empty($total_fhe_3sem_6yr_male)) {
        $total_fhe_3sem_6yr_male = 0;
    }
    if (empty($total_fhe_3sem_6yr_female)) {
        $total_fhe_3sem_6yr_female = 0;
    }

    $sql = "UPDATE tbl_degree_programs
    SET 
    total_fhe_1sem_1yr_male='$total_fhe_1sem_1yr_male', 
    total_fhe_1sem_1yr_female='$total_fhe_1sem_1yr_female',
    total_fhe_1sem_2yr_male='$total_fhe_1sem_2yr_male', 
    total_fhe_1sem_2yr_female='$total_fhe_1sem_2yr_female',
    total_fhe_1sem_3yr_male='$total_fhe_1sem_3yr_male', 
    total_fhe_1sem_3yr_female='$total_fhe_1sem_3yr_female',
    total_fhe_1sem_4yr_male='$total_fhe_1sem_4yr_male', 
    total_fhe_1sem_4yr_female='$total_fhe_1sem_4yr_female',
    total_fhe_1sem_5yr_male='$total_fhe_1sem_5yr_male', 
    total_fhe_1sem_5yr_female='$total_fhe_1sem_5yr_female',
    total_fhe_1sem_6yr_male='$total_fhe_1sem_6yr_male', 
    total_fhe_1sem_6yr_female='$total_fhe_1sem_6yr_female',

    total_fhe_2sem_1yr_male='$total_fhe_2sem_1yr_male', 
    total_fhe_2sem_1yr_female='$total_fhe_2sem_1yr_female',
    total_fhe_2sem_2yr_male='$total_fhe_2sem_2yr_male', 
    total_fhe_2sem_2yr_female='$total_fhe_2sem_2yr_female',
    total_fhe_2sem_3yr_male='$total_fhe_2sem_3yr_male', 
    total_fhe_2sem_3yr_female='$total_fhe_2sem_3yr_female',
    total_fhe_2sem_4yr_male='$total_fhe_2sem_4yr_male', 
    total_fhe_2sem_4yr_female='$total_fhe_2sem_4yr_female',
    total_fhe_2sem_5yr_male='$total_fhe_2sem_5yr_male', 
    total_fhe_2sem_5yr_female='$total_fhe_2sem_5yr_female',
    total_fhe_2sem_6yr_male='$total_fhe_2sem_6yr_male', 
    total_fhe_2sem_6yr_female='$total_fhe_2sem_6yr_female',

    total_fhe_3sem_1yr_male='$total_fhe_3sem_1yr_male', 
    total_fhe_3sem_1yr_female='$total_fhe_3sem_1yr_female',
    total_fhe_3sem_2yr_male='$total_fhe_3sem_2yr_male', 
    total_fhe_3sem_2yr_female='$total_fhe_3sem_2yr_female',
    total_fhe_3sem_3yr_male='$total_fhe_3sem_3yr_male', 
    total_fhe_3sem_3yr_female='$total_fhe_3sem_3yr_female',
    total_fhe_3sem_4yr_male='$total_fhe_3sem_4yr_male', 
    total_fhe_3sem_4yr_female='$total_fhe_3sem_4yr_female',
    total_fhe_3sem_5yr_male='$total_fhe_3sem_5yr_male', 
    total_fhe_3sem_5yr_female='$total_fhe_3sem_5yr_female',
    total_fhe_3sem_6yr_male='$total_fhe_3sem_6yr_male', 
    total_fhe_3sem_6yr_female='$total_fhe_3sem_6yr_female',

    total_fhe_graduated_male='$total_fhe_graduated_male', 
    total_fhe_graduated_female='$total_fhe_graduated_female', 
    total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', 
    total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'

    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Trimester with Summer') {
    //3rd Semester
    $total_fhe_3sem_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_1yr_male']);
    $total_fhe_3sem_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_1yr_female']);
    $total_fhe_3sem_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_2yr_male']);
    $total_fhe_3sem_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_2yr_female']);
    $total_fhe_3sem_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_3yr_male']);
    $total_fhe_3sem_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_3yr_female']);
    $total_fhe_3sem_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_4yr_male']);
    $total_fhe_3sem_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_4yr_female']);
    $total_fhe_3sem_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_5yr_male']);
    $total_fhe_3sem_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_5yr_female']);
    $total_fhe_3sem_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_6yr_male']);
    $total_fhe_3sem_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_3sem_6yr_female']);

    //Summer Midyear
    $total_fhe_sum_mid_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_1yr_male']);
    $total_fhe_sum_mid_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_1yr_female']);
    $total_fhe_sum_mid_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_2yr_male']);
    $total_fhe_sum_mid_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_2yr_female']);
    $total_fhe_sum_mid_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_3yr_male']);
    $total_fhe_sum_mid_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_3yr_female']);
    $total_fhe_sum_mid_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_4yr_male']);
    $total_fhe_sum_mid_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_4yr_female']);
    $total_fhe_sum_mid_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_5yr_male']);
    $total_fhe_sum_mid_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_5yr_female']);
    $total_fhe_sum_mid_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_6yr_male']);
    $total_fhe_sum_mid_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_6yr_female']);

    //Summer Midyear
    if (empty($total_fhe_sum_mid_1yr_male)) {
        $total_fhe_sum_mid_1yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_1yr_female)) {
        $total_fhe_sum_mid_1yr_female = 0;
    }
    if (empty($total_fhe_sum_mid_2yr_male)) {
        $total_fhe_sum_mid_2yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_2yr_female)) {
        $total_fhe_sum_mid_2yr_female = 0;
    }
    if (empty($total_fhe_sum_mid_3yr_male)) {
        $total_fhe_sum_mid_3yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_3yr_female)) {
        $total_fhe_sum_mid_3yr_female = 0;
    }
    if (empty($total_fhe_sum_mid_4yr_male)) {
        $total_fhe_sum_mid_4yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_4yr_female)) {
        $total_fhe_sum_mid_4yr_female = 0;
    }
    if (empty($total_fhe_sum_mid_5yr_male)) {
        $total_fhe_sum_mid_5yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_5yr_female)) {
        $total_fhe_sum_mid_5yr_female = 0;
    }
    if (empty($total_fhe_sum_mid_6yr_male)) {
        $total_fhe_sum_mid_6yr_male = 0;
    }
    if (empty($total_fhe_sum_mid_6yr_female)) {
        $total_fhe_sum_mid_6yr_female = 0;
    }

    $sql = "UPDATE tbl_degree_programs
    SET 
    total_fhe_1sem_1yr_male='$total_fhe_1sem_1yr_male', 
    total_fhe_1sem_1yr_female='$total_fhe_1sem_1yr_female',
    total_fhe_1sem_2yr_male='$total_fhe_1sem_2yr_male', 
    total_fhe_1sem_2yr_female='$total_fhe_1sem_2yr_female',
    total_fhe_1sem_3yr_male='$total_fhe_1sem_3yr_male', 
    total_fhe_1sem_3yr_female='$total_fhe_1sem_3yr_female',
    total_fhe_1sem_4yr_male='$total_fhe_1sem_4yr_male', 
    total_fhe_1sem_4yr_female='$total_fhe_1sem_4yr_female',
    total_fhe_1sem_5yr_male='$total_fhe_1sem_5yr_male', 
    total_fhe_1sem_5yr_female='$total_fhe_1sem_5yr_female',
    total_fhe_1sem_6yr_male='$total_fhe_1sem_6yr_male', 
    total_fhe_1sem_6yr_female='$total_fhe_1sem_6yr_female',

    total_fhe_2sem_1yr_male='$total_fhe_2sem_1yr_male', 
    total_fhe_2sem_1yr_female='$total_fhe_2sem_1yr_female',
    total_fhe_2sem_2yr_male='$total_fhe_2sem_2yr_male', 
    total_fhe_2sem_2yr_female='$total_fhe_2sem_2yr_female',
    total_fhe_2sem_3yr_male='$total_fhe_2sem_3yr_male', 
    total_fhe_2sem_3yr_female='$total_fhe_2sem_3yr_female',
    total_fhe_2sem_4yr_male='$total_fhe_2sem_4yr_male', 
    total_fhe_2sem_4yr_female='$total_fhe_2sem_4yr_female',
    total_fhe_2sem_5yr_male='$total_fhe_2sem_5yr_male', 
    total_fhe_2sem_5yr_female='$total_fhe_2sem_5yr_female',
    total_fhe_2sem_6yr_male='$total_fhe_2sem_6yr_male', 
    total_fhe_2sem_6yr_female='$total_fhe_2sem_6yr_female',

    total_fhe_3sem_1yr_male='$total_fhe_3sem_1yr_male', 
    total_fhe_3sem_1yr_female='$total_fhe_3sem_1yr_female',
    total_fhe_3sem_2yr_male='$total_fhe_3sem_2yr_male', 
    total_fhe_3sem_2yr_female='$total_fhe_3sem_2yr_female',
    total_fhe_3sem_3yr_male='$total_fhe_3sem_3yr_male', 
    total_fhe_3sem_3yr_female='$total_fhe_3sem_3yr_female',
    total_fhe_3sem_4yr_male='$total_fhe_3sem_4yr_male', 
    total_fhe_3sem_4yr_female='$total_fhe_3sem_4yr_female',
    total_fhe_3sem_5yr_male='$total_fhe_3sem_5yr_male', 
    total_fhe_3sem_5yr_female='$total_fhe_3sem_5yr_female',
    total_fhe_3sem_6yr_male='$total_fhe_3sem_6yr_male', 
    total_fhe_3sem_6yr_female='$total_fhe_3sem_6yr_female',

    total_fhe_sum_mid_1yr_male='$total_fhe_sum_mid_1yr_male', 
    total_fhe_sum_mid_1yr_female='$total_fhe_sum_mid_1yr_female',
    total_fhe_sum_mid_2yr_male='$total_fhe_sum_mid_2yr_male', 
    total_fhe_sum_mid_2yr_female='$total_fhe_sum_mid_2yr_female',
    total_fhe_sum_mid_3yr_male='$total_fhe_sum_mid_3yr_male', 
    total_fhe_sum_mid_3yr_female='$total_fhe_sum_mid_3yr_female',
    total_fhe_sum_mid_4yr_male='$total_fhe_sum_mid_4yr_male', 
    total_fhe_sum_mid_4yr_female='$total_fhe_sum_mid_4yr_female',
    total_fhe_sum_mid_5yr_male='$total_fhe_sum_mid_5yr_male', 
    total_fhe_sum_mid_5yr_female='$total_fhe_sum_mid_5yr_female',
    total_fhe_sum_mid_6yr_male='$total_fhe_sum_mid_6yr_male', 
    total_fhe_sum_mid_6yr_female='$total_fhe_sum_mid_6yr_female',

    total_fhe_graduated_male='$total_fhe_graduated_male', 
    total_fhe_graduated_female='$total_fhe_graduated_female', 
    total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', 
    total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'

    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester with Summer') {
    //Summer Midyear
    $total_fhe_sum_mid_1yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_1yr_male']);
    $total_fhe_sum_mid_1yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_1yr_female']);
    $total_fhe_sum_mid_2yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_2yr_male']);
    $total_fhe_sum_mid_2yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_2yr_female']);
    $total_fhe_sum_mid_3yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_3yr_male']);
    $total_fhe_sum_mid_3yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_3yr_female']);
    $total_fhe_sum_mid_4yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_4yr_male']);
    $total_fhe_sum_mid_4yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_4yr_female']);
    $total_fhe_sum_mid_5yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_5yr_male']);
    $total_fhe_sum_mid_5yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_5yr_female']);
    $total_fhe_sum_mid_6yr_male = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_6yr_male']);
    $total_fhe_sum_mid_6yr_female = mysqli_real_escape_string($conn, $_POST['total_fhe_sum_mid_6yr_female']);
    
    $sql = "UPDATE tbl_degree_programs
    SET 
    total_fhe_1sem_1yr_male='$total_fhe_1sem_1yr_male', 
    total_fhe_1sem_1yr_female='$total_fhe_1sem_1yr_female',
    total_fhe_1sem_2yr_male='$total_fhe_1sem_2yr_male', 
    total_fhe_1sem_2yr_female='$total_fhe_1sem_2yr_female',
    total_fhe_1sem_3yr_male='$total_fhe_1sem_3yr_male', 
    total_fhe_1sem_3yr_female='$total_fhe_1sem_3yr_female',
    total_fhe_1sem_4yr_male='$total_fhe_1sem_4yr_male', 
    total_fhe_1sem_4yr_female='$total_fhe_1sem_4yr_female',
    total_fhe_1sem_5yr_male='$total_fhe_1sem_5yr_male', 
    total_fhe_1sem_5yr_female='$total_fhe_1sem_5yr_female',
    total_fhe_1sem_6yr_male='$total_fhe_1sem_6yr_male', 
    total_fhe_1sem_6yr_female='$total_fhe_1sem_6yr_female',

    total_fhe_2sem_1yr_male='$total_fhe_2sem_1yr_male', 
    total_fhe_2sem_1yr_female='$total_fhe_2sem_1yr_female',
    total_fhe_2sem_2yr_male='$total_fhe_2sem_2yr_male', 
    total_fhe_2sem_2yr_female='$total_fhe_2sem_2yr_female',
    total_fhe_2sem_3yr_male='$total_fhe_2sem_3yr_male', 
    total_fhe_2sem_3yr_female='$total_fhe_2sem_3yr_female',
    total_fhe_2sem_4yr_male='$total_fhe_2sem_4yr_male', 
    total_fhe_2sem_4yr_female='$total_fhe_2sem_4yr_female',
    total_fhe_2sem_5yr_male='$total_fhe_2sem_5yr_male', 
    total_fhe_2sem_5yr_female='$total_fhe_2sem_5yr_female',
    total_fhe_2sem_6yr_male='$total_fhe_2sem_6yr_male', 
    total_fhe_2sem_6yr_female='$total_fhe_2sem_6yr_female',

    total_fhe_sum_mid_1yr_male='$total_fhe_sum_mid_1yr_male', 
    total_fhe_sum_mid_1yr_female='$total_fhe_sum_mid_1yr_female',
    total_fhe_sum_mid_2yr_male='$total_fhe_sum_mid_2yr_male', 
    total_fhe_sum_mid_2yr_female='$total_fhe_sum_mid_2yr_female',
    total_fhe_sum_mid_3yr_male='$total_fhe_sum_mid_3yr_male', 
    total_fhe_sum_mid_3yr_female='$total_fhe_sum_mid_3yr_female',
    total_fhe_sum_mid_4yr_male='$total_fhe_sum_mid_4yr_male', 
    total_fhe_sum_mid_4yr_female='$total_fhe_sum_mid_4yr_female',
    total_fhe_sum_mid_5yr_male='$total_fhe_sum_mid_5yr_male', 
    total_fhe_sum_mid_5yr_female='$total_fhe_sum_mid_5yr_female',
    total_fhe_sum_mid_6yr_male='$total_fhe_sum_mid_6yr_male', 
    total_fhe_sum_mid_6yr_female='$total_fhe_sum_mid_6yr_female',

    total_fhe_graduated_male='$total_fhe_graduated_male', 
    total_fhe_graduated_female='$total_fhe_graduated_female', 
    total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', 
    total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'

    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
} else if ($ac_calendar == 'Semester') {
    $sql = "UPDATE tbl_degree_programs
     SET 
    total_fhe_1sem_1yr_male='$total_fhe_1sem_1yr_male', 
    total_fhe_1sem_1yr_female='$total_fhe_1sem_1yr_female',
    total_fhe_1sem_2yr_male='$total_fhe_1sem_2yr_male', 
    total_fhe_1sem_2yr_female='$total_fhe_1sem_2yr_female',
    total_fhe_1sem_3yr_male='$total_fhe_1sem_3yr_male', 
    total_fhe_1sem_3yr_female='$total_fhe_1sem_3yr_female',
    total_fhe_1sem_4yr_male='$total_fhe_1sem_4yr_male', 
    total_fhe_1sem_4yr_female='$total_fhe_1sem_4yr_female',
    total_fhe_1sem_5yr_male='$total_fhe_1sem_5yr_male', 
    total_fhe_1sem_5yr_female='$total_fhe_1sem_5yr_female',
    total_fhe_1sem_6yr_male='$total_fhe_1sem_6yr_male', 
    total_fhe_1sem_6yr_female='$total_fhe_1sem_6yr_female',

    total_fhe_2sem_1yr_male='$total_fhe_2sem_1yr_male', 
    total_fhe_2sem_1yr_female='$total_fhe_2sem_1yr_female',
    total_fhe_2sem_2yr_male='$total_fhe_2sem_2yr_male', 
    total_fhe_2sem_2yr_female='$total_fhe_2sem_2yr_female',
    total_fhe_2sem_3yr_male='$total_fhe_2sem_3yr_male', 
    total_fhe_2sem_3yr_female='$total_fhe_2sem_3yr_female',
    total_fhe_2sem_4yr_male='$total_fhe_2sem_4yr_male', 
    total_fhe_2sem_4yr_female='$total_fhe_2sem_4yr_female',
    total_fhe_2sem_5yr_male='$total_fhe_2sem_5yr_male', 
    total_fhe_2sem_5yr_female='$total_fhe_2sem_5yr_female',
    total_fhe_2sem_6yr_male='$total_fhe_2sem_6yr_male', 
    total_fhe_2sem_6yr_female='$total_fhe_2sem_6yr_female',

    total_fhe_graduated_male='$total_fhe_graduated_male', 
    total_fhe_graduated_female='$total_fhe_graduated_female', 
    total_fhe_exceeded_mrr_male='$total_fhe_exceeded_mrr_male', 
    total_fhe_exceeded_mrr_female='$total_fhe_exceeded_mrr_female'
    WHERE uid='$uid' ";
    $result = mysqli_query($conn, $sql);
}

include "inc_fhe_programs_table.php";
