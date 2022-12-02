    <?php
    if(!isset($_SESSION)){
        session_start();
    }
    $connect=mysqli_connect("localhost:3315", "root", "", "wad_modul4_adhwa");
    $email=$_POST['email'];
    $password=$_POST['password'];
    $dt_username="SELECT * FROM user_adhwa WHERE email='$email'";
    $executeQuery=mysqli_query($connect, $dt_username);
    if(mysqli_num_rows($executeQuery)>0){
        $result=mysqli_fetch_assoc($executeQuery);
        $result_check=$result['password'];
        if($password==$result_check){
            $_SESSION['email']=$result['email'];
            $_SESSION['message']='Anda berhasil login !';
            header('location:../pages/Home-Adhwa.php');
            exit();
        }else{
            $_SESSION['message']='Password anda salah, silahkan coba lagi !';
            header('location:../pages/Login-Adhwa.php');
            exit();
        }
    }
    $_SESSION['message']='Gagal Login';
    header('location:../pages/Login-Adhwa.php');
    exit();
    ?>