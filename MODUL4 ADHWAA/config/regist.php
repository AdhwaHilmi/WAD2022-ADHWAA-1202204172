    <?php
    if(!isset($_SESSION)){
        session_start();
    }
    $connect = mysqli_connect("localhost:3315", "root","", "wad_modul4_adhwa");
    $email = $_POST['email'];
    $name = $_POST['nama'];
    $NoHp = $_POST['NoHp'];
    $Password = $_POST['password'];
    $dt_username="SELECT * FROM user_adhwa WHERE email='email'";
    $executeQuery=mysqli_query($connect, $dt_username);
    if(mysqli_num_rows($executeQuery)>0){
        $result=mysqli_fetch_assoc($executeQuery);
        $result_check=$result['email'];
        if($email==$result_check){
            header('location:../pages/Regist-Adhwa.php');
        }   
        }else {
            $sql = "INSERT INTO user_adhwa (nama, email, password, no_hp) VALUES ('$name', '$email', '$Password', '$NoHp')";
            if (mysqli_query($connect, $sql)) {
                header('location:../pages/Login-Adhwa.php');
            }else{
                header('location:../pages/Regist-Adhwa.php');
            }
        }
    ?>