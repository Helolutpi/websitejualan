<?php

    session_start();
    include 'db.php';
    if($_SESSION['status_login'] != true){
        echo '<script>window.location="index.php"</script>';
    }
?>




<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--=============== BOOTSTRAP 5 ===============-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
                
                <p class="nav__logo1">data category</p>

                <div class="nav__menu" id="nav-menu">
                    <ul class="nav__list">
                        <li class="nav__item">
                            <a href=" dashboard.php" class="nav__link ">Dashboard</a>
                        </li>
                        <li class="nav__item">
                            <a href="profil.php" class="nav__link">Profil</a>
                        </li>
                        <li class="nav__item">
                            <a href="data-kategori.php" class="nav__link active-link">Data Category</a>
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

                <div class="nav__btns1">
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
        <a href="tambah-kategori.php">
        <button class="button1 ">Tambah Barang</button></a>
        </section>

<section class="section__table">
        <table class="table   ">
            <thead >
            <tr class="table__title" >
                <th scope="col">No</th>
                <th  scope="col">Category</th>
                <th scope="col">Action</th>
                
            </tr>
            </thead>
  <tbody>
      <?php
        $no = 1;
        $kategori = mysqli_query($conn, "SELECT * FROM tb_category ORDER BY category_id DESC");
        while($row = mysqli_fetch_array($kategori)){
      ?>
    <tr class="table__title" >
      <th width="60px"scope="row"><?php echo $no++?></th>
      <td><?php echo $row['category_name']?></td>
      <td>
          <a  href="edit-kategori.php?id=<?php echo $row['category_id'] ?>">Edit</a> || <a class="table__link" href="proses-hapus.php?idk=<?php echo $row['category_id']?>">Detele</a>
      </td>
    </tr>
    <?php } ?>
    
  </tbody>
</table>
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