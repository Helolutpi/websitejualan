<?php

    session_start();
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="login.php"</script>';
    }
?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

       

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
                    Shop
                </a>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href="#home dashboard.php" class="nav__link active-link">Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <a href="profil.php" class="nav__link">Profil</a>
                        </li>
                        <li class="nav__item">
                            <a href="#products data-kategori.php" class="nav__link">Data Category</a>
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
           

            <section class="section">
               

                

        <div class="home__data">
            <h2 class="section__title">Hi, Welcome <?php echo $_SESSION['a_global']->admin_name ?></h2>
   
        </div>
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