<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!--======= BOX ICON ======-->
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

   <!--======= CSS ======-->
   <link rel="stylesheet" href="assets/css/styles.css">
  
  <title>Login Form</title>
</head>
<body id="box-login">
<div class="l-form">
        <div class="shape1"></div>
        <div class="shape2"></div>
    

    <div class="form">
        
        <img src="assets/img/imglogin.svg" alt="" class="form__img">

        <form action="" method="POST" class="form__content">
            <h1 class="form__title">Welcome</h1>

            <div class="form__div form__div-one ">
                <div class="form__icon">
                    <i class="bx bx-user-circle"></i>
                </div>

                <div class="form__div-input">
                    <label for="" class="form__label">Username</label>
                    <input type="text" name="user" class="form__input" >
                </div>
            </div>


            <div class="form__div">
                <div class="form__icon">
                    <i class="bx bx-lock"></i>
                </div>

                <div class="form__div-input">
                    <label for="" class="form__label">Password</label>
                    <input type="password" name="pass" class="form__input" >
                </div>
            </div>

            <a href="registerpage.php" class="form__forgot">Belum Punya AKun?</a>

            <input type="submit" name="submit" value = "Login" class="form__button">
            
            

        </form>
        <?php
            if(isset($_POST['submit'])){
                session_start();
                include 'db.php';
                $user = $_POST['user'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM tb_admin WHERE username = '".$user."' AND password = '".MD5($pass)."'");
                if (mysqli_num_rows($cek) > 0){
                    $d = mysqli_fetch_object($cek);
                    $_SESSION['status_login'] = true;
                    $_SESSION['a_global'] = $d;
                    $_SESSION['id'] = $d->admin_id;
                    echo'<script>window.location="dashboard.php"</script>';
                }else{
                    echo '<script>alert("Username atau Password salah!")</script>';
                }
            }
        ?>
    </div>
</div>


    <!--======= MAIN JS ======-->
    <script src="assets/js/main.js"> </script>
</body>
</html>