<?php

    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="index.php"</script>';
    }
    $query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."'");
    $d = mysqli_fetch_object($query);

?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

           <!--======= BOX ICON ======-->
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>

        <!--=============== BOXICONS ===============-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">

        <!--=============== SWIPER CSS ===============--> 
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--=============== CSS ===============-->
        <link rel="stylesheet" href="assets/css/welcome.css">

        <title>Shop</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="dashboard.php" class="nav__logo">
                    PROFIL
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="dashboard.php" class="nav__link ">Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <a href="profil.php" class="nav__link active-link">Profil</a>
                        </li>
                        <li class="nav__item">
                            <a href=" data-kategori.php" class="nav__link">Data Category</a>
                        </li>
                        <li class="nav__item">
                            <a href="#new data-produk.php" class="nav__link">Products</a>
                        </li>
                        <li class="nav__item">
                            <a href=" keluar.php" class="nav__link">Logout</a>
                        </li>
                       
                        
                        
                    </ul>


                    <div class="nav__close" id="nav-close">
                        <i class='bx bx-x' ></i>
                    </div>
                </div>

                <div class="nav__btns">
                    <!-- Theme change button -->
                    <i class='bx bx-moon change-theme' id="theme-button"></i>

                    <div class="nav__shop" id="cart-shop">
                        <i class='bx bx-shopping-bag' ></i>
                    </div>

                    <div class="nav__toggle" id="nav-toggle">
                        <i class='bx bx-grid-alt' ></i>
                    </div>
                    
                    
                </div>
            </nav>
        </header>






        <!--==================== CART ====================-->
        <div class="cart" id="cart">
            <i class='bx bx-x cart__close' id="cart-close"></i>

            <h2 class="cart__title-center">My Cart</h2>

            <div class="cart__container">
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/barang1.jpg" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Cart 1</h3>
                        <span class="cart__price">Harga</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
                
                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/barang2.jpg" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Cart 2</h3>
                        <span class="cart__price">Harga</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>

                <article class="cart__card">
                    <div class="cart__box">
                        <img src="assets/img/barang3.jpg" alt="" class="cart__img">
                    </div>

                    <div class="cart__details">
                        <h3 class="cart__title">Cart 3</h3>
                        <span class="cart__price">Harga</span>

                        <div class="cart__amount">
                            <div class="cart__amount-content">
                                <span class="cart__amount-box">
                                    <i class='bx bx-minus' ></i>
                                </span>

                                <span class="cart__amount-number">1</span>

                                <span class="cart__amount-box">
                                    <i class='bx bx-plus' ></i>
                                </span>
                            </div>

                            <i class='bx bx-trash-alt cart__amount-trash' ></i>
                        </div>
                    </div>
                </article>
            </div>

            <div class="cart__prices">
                <span class="cart__prices-item">3 items</span>
                <span class="cart__prices-total">$2880</span>
            </div>
        </div>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
           

        <section class="section section__form">
            <div class="home__data">
                <h2 class="section__title">Hi, Welcome <?php echo $_SESSION['a_global']->admin_name ?></h2>

            </div>
            <form action="" method="POST"class="form__content">
            
                <h1 class="form__title">CHANGE PROFIL</h1>
                <div class="form__div form__div-one focus">
                    <div class="form__icon">
                     <i class="bx bx-user-circle"></i>
                    </div>

                    <div class="form__div-input">
                     <label for="" class="form__label">Nama Lengkap</label>
                     <input type="text" name="nama" class="form__input" value="<?php echo $d->admin_name?>" required>
                    </div>
                </div>
                <div class="form__div form__div-one focus">
                    <div class="form__icon">
                        <i class="bx bx-lock"></i>
                    </div>

                    <div class="form__div-input">
                     <label for="" class="form__label">Username</label>
                     <input type="text" name="user" class="form__input" value="<?php echo $d->username?> "required>
                    </div>
                </div>
              
                <div class="form__div form__div-one focus">
                    <div class="form__icon">
                        <i class="bx bx-lock"></i>
                    </div>

                    <div class="form__div-input">
                     <label for="" class="form__label">Nomor Hp</label>
                     <input type="text" name="hp" class="form__input" value="<?php echo $d->admin_telp?> "required>
                    </div>
                </div>
             
                <div class="form__div form__div-one focus">
                    <div class="form__icon">
                        <i class="bx bx-lock"></i>
                    </div>

                    <div class="form__div-input">
                     <label for="" class="form__label">Email</label>
                     <input type="email" name="email" class="form__input" value="<?php echo $d->admin_email?>"required>
                    </div>
                </div>
             
                <div class="form__div form__div-one focus">
                    <div class="form__icon">
                        <i class="bx bx-lock"></i>
                    </div>

                    <div class="form__div-input">
                     <label for="" class="form__label">Alamat</label>
                     <input type="text" name="alamat" class="form__input" value="<?php echo $d->admin_address?>" required>
                    </div>
                </div>
                <input type="submit" name="submit" class="form__button" value="Submit">


                
            </form>
            <?php
                if (isset($_POST['submit'])){
                    $nama = ucwords ($_POST['nama']);
                    $user = $_POST['user'];
                    $hp = $_POST['hp'];
                    $email = $_POST['email'];
                    $alamat = ucwords ($_POST['alamat']);

                    $update = mysqli_query($conn, "UPDATE tb_admin SET 
                            admin_name = '".$nama."',
                            username = '".$user."',
                            admin_telp = '".$hp."',
                            admin_email = '".$email."',
                            admin_address = '".$alamat."'
                            WHERE admin_id = '".$d->admin_id."'");
                    
                    if($update){
                        echo'<script>alert("Ubah Data Berhasil")</script>';
                        echo'<script>window.location="profil.php"</script>';
                    }else{
                        echo 'gagal' .mysqli_error($conn);
                    }
                }
            ?>


<form action="" method="POST"class="form__content">
            
            <h1 class="form__title">CHANGE PASSWORD</h1>
            <div class="form__div form__div-one focus">
                <div class="form__icon">
                 <i class="bx bx-user-circle"></i>
                </div>

                <div class="form__div-input">
                 <label for="" class="form__label">New Password</label>
                 <input type="password" name="pass1" class="form__input" required>
                </div>
            </div>
            <div class="form__div form__div-one focus">
                <div class="form__icon">
                    <i class="bx bx-lock"></i>
                </div>

                <div class="form__div-input">
                 <label for="" class="form__label">Confirm Password</label>
                 <input type="password" name="pass2" class="form__input" required>
                </div>
            </div>
          
            <input type="submit" name="ubah_password" class="form__button" value="Change Pasword">


            
        </form>
        <?php
            if (isset($_POST['ubah_password'])){
               
                $pass1 = $_POST['pass1'];
                $pass2 = $_POST['pass2'];
                
                if($pass2 != $pass1){
                    echo '<script>alert("Password Not Matched!! Please Try Again ")</script>';
                }else{
                    $u_pass = mysqli_query($conn, "UPDATE tb_admin SET 
                        password = '".MD5($pass1)."'
                        WHERE admin_id = '".$d->admin_id."'");
                    
                    if($u_pass){
                        echo'<script>alert("Ubah Data Berhasil")</script>';
                        echo'<script>window.location="profil.php"</script>';
                    }else{
                        echo 'gagal' .mysqli_error($conn);
                    }
                }
               
            }
        ?>

    
        </section>
            <!--==================== NEW ===========
            <section class="new section container" id="new">
                <h2 class="section__title">
                    New Arrivals
                </h2>
                
                <div class="new__container">
                    <div class="swiper new-swiper">
                        <div class="swiper-wrapper">
                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/barang1.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Barang 1</h3>
                                    <span class="new__price">Harga</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/barang2.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Barang 2</h3>
                                    <span class="new__price">Harga</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/barang3.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Barang 3</h3>
                                    <span class="new__price">Harga</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>

                            <article class="new__card swiper-slide">
                                <span class="new__tag">New</span>
        
                                <img src="assets/img/6909521.jpg" alt="" class="new__img">
        
                                <div class="new__data">
                                    <h3 class="new__title">Barang 4</h3>
                                    <span class="new__price">Harga</span>
                                </div>
        
                                <button class="button new__button">ADD TO CART</button>
                            </article>      
                            
                            
                            
                        </div>
                    </div>
                </div>
            </section>=========-->



        <!--=============== SCROLL UP ===============-->
        <a href="#" class="scrollup" id="scroll-up"> 
            <i class='bx bx-up-arrow-alt scrollup__icon' ></i>
        </a>

        <!--=============== SWIPER JS ===============-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--=============== MAIN JS ===============-->
        <script src="assets/js/welcome.js"></script>
        
    </body>
</html>