<?php
include_once '../db_connection.php';
session_start();
session_destroy();
if (isset($_POST['login'])){
    session_start();
    $username = mysqli_real_escape_string($conn,$_POST['username']);
    $password = mysqli_real_escape_string($conn,$_POST['password']);

    $sql= "SELECT * FROM tbl_heis_acct WHERE hei_username = '$username'";
    $result= mysqli_query($conn, $sql);
    $resultCheck= mysqli_num_rows($result);

    if ($resultCheck > 0){
        while ($row= mysqli_fetch_assoc($result)){
            $pwdHashed=$row['hei_password'];
            $hei_uii=$row['hei_uii'];
            $hei_name=$row['hei_name'];
            
            $checkPwd=(md5($password)===$pwdHashed);
            if($checkPwd == false){
                header("Location:../../index.php");
                exit();
            }elseif($checkPwd == true){
                $_SESSION['hei_uii']=$hei_uii;
                $_SESSION['hei_name']=$hei_name;
                $_SESSION['alert']='';
                
                $sql= "SELECT * FROM tbl_heis WHERE hei_uii = '$_SESSION[hei_uii]'";
                $result= mysqli_query($conn, $sql);
                $resultCheck= mysqli_num_rows($result);
            
                if ($resultCheck > 0){
                    while ($row= mysqli_fetch_assoc($result)){
                        $hei_psg_region=$row['hei_psg_region'];
                        $hei_name=$row['hei_name'];
                        $hei_it=$row['hei_it'];
                        $hei_ct=$row['hei_ct'];
                        $hei_pnsl=$row['hei_pnsl'];
                        $hei_region_nir=$row['hei_region_nir'];
                        $hei_prov_name=$row['hei_prov_name'];
                        $hei_city_name=$row['hei_city_name'];
                        $hei_street=$row['hei_street'];
                        
                        $_SESSION['hei_psg_region']=$hei_psg_region;
                        $_SESSION['hei_name']=$hei_name;
                        $_SESSION['hei_it']=$hei_it;
                        $_SESSION['hei_ct']=$hei_ct;
                        $_SESSION['hei_pnsl']=$hei_pnsl;
                        $_SESSION['hei_region_nir']=$hei_region_nir;
                        $_SESSION['hei_prov_name']=$hei_prov_name;
                        $_SESSION['hei_city_name']=$hei_city_name;
                        $_SESSION['hei_street']=$hei_street;
                        
                        $_SESSION['hei_address'] = "$hei_street, "."$hei_city_name, "."$hei_prov_name";
                    }
                }

                header("Location:../../home.php");
                exit();
           }
        } 
    }else{
        header("Location:../../index.php");
    }
}



               