<?php
    include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Damnz Market</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <style>
        .navbar {
            background-color: #0d2329 !important;
        }

        .navbar-nav li:hover {
            background-color: #426c60;
            transition: background-color 0.3s;
        }

        .navbar-nav li:hover a {
            color: rgb(5, 5, 5);
            transition: color 0.3s;
        }

        .navbar-nav .nav-link {
            color: #ffffff !important;
        }

        .cart-icon {
            font-size: 20px;
            color: #ffffff;
            margin-left: 10px;
        }

    </style>
</head>
<body style="background-image: url('image/bg.jpg');">
    <nav class="navbar navbar-expand-lg bg-primary" position="statics" display="flex">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="image/logodamnz.png" alt="Damnz Market" width="150">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                    <li class="nav-item">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">FOOD</a></li>
                            <li><a class="dropdown-item" href="#">DRINK</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="#">OTHERS</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit"><i class="fa-solid fa-magnifying-glass" style="color: #ffffff;"></i></button>
                    <a href="cart.php" class="cart-icon">
                      <i class="fas fa-shopping-cart"></i>
                    </a>                    
                </form>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
      <div class="row mb-3">
          <div class="col">
              <div class="dropdown">
                  <button class="btn btn-secondary dropdown-toggle" type="button" id="sortDropdown" data-bs-toggle="dropdown" aria-expanded="false">
                      Sort By
                  </button>
                  <ul class="dropdown-menu" aria-labelledby="sortDropdown">
                      <li><a class="dropdown-item" href="#">Name</a></li>
                      <li><a class="dropdown-item" href="#">Price</a></li>
                      <li><a class="dropdown-item" href="#">Stock</a></li>
                  </ul>
              </div>
          </div>
<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card h-100">
        <h5 class="card-title">AQUA</h5>
        <img src="image/aqua.jpg" class="card-img-top" alt="..." style="width: 200px;">
        <div class="card-body">
          <p class="card-text">
            Aqua 600 ml air mineral
            <br>
            <small>Rp. 4000</small>        
        </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Stock : 2578</small>
          <a href="kelola_aqua.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
            <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
        </a>
        <style>
            .card-footer {
                display: flex;
                justify-content: space-between;
            }
        </style>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <h5 class="card-title">INDOMIE</h5>
        <img src="image/indomi.jpg" class="card-img-top img-fluid" alt="..." style="width: 200px;">
        <div class="card-body">
          <p class="card-text">Indomie Goreng
            <br>
            <small>Rp. 3200</small>
          </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Stock : 1273</small>
          <a href="kelola_indomie.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
            <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
        </a>
        <style>
            .card-footer {
                display: flex;
                justify-content: space-between;
            }
        </style>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card h-100">
        <h5 class="card-title">SOSRO</h5>
        <img src="image/teh.webp" class="card-img-top img-fluid" alt="..." style="width: 200px;">
        <div class="card-body">
          <p class="card-text">
            Sosro Teh Botol Original Minuman Teh [200 mL]
            <br>
            <small>Rp. 2300</small>
          </p>
        </div>
        <div class="card-footer">
          <small class="text-body-secondary">Stock : 320</small>
          <a href="kelola_sosro.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
            <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
        </a>
        <style>
            .card-footer {
                display: flex;
                justify-content: space-between;
            }
        </style>
        </div>
      </div>
    </div>
  </div>
  <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
      <div class="col">
        <div class="card h-100">
          <h5 class="card-title">FANTA</h5>
          <img src="image/fanta.jpg" class="card-img-top" alt="..." style="width: 200px;">
          <div class="card-body">
            <p class="card-text">
              Fanta Strawberry Minuman Soda 1000ml/1L
              <br>
              <small>Rp. 13.900</small>        
          </p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Stock : 100</small>
            <a href="kelola_fanta.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
              <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
          </a>
            <style>
                .card-footer {
                    display: flex;
                    justify-content: space-between;
                }
            </style>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card h-100">
          <h5 class="card-title">COCA-COLA</h5>
          <img src="image/coca-cola.webp" class="card-img-top img-fluid" alt="..." style="width: 200px;">
          <div class="card-body">
            <p class="card-text">Coca-Cola Minuman Soda 1,5 Liter
              <br>
              <small>Rp. 25.500</small>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Stock : 125</small>
            <a href="kelola+cocacola.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
              <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
          </a>
            <style>
                .card-footer {
                    display: flex;
                    justify-content: space-between;
                }
            </style>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <h5 class="card-title">SPRITE</h5>
          <img src="image/sprite.png" class="card-img-top img-fluid" alt="..." style="width: 200px;">
          <div class="card-body">
            <p class="card-text">
              Sprite Lemon Lime 1,5 Liter
              <br>
              <small>Rp. 15.500</small>
            </p>
          </div>
          <div class="card-footer">
            <small class="text-body-secondary">Stock : 362</small>
            <a href="kelola_sprite.php" type="button" class="btn btn-secondary" style="font-size: 15px; padding: 3px 10px;">
                <i class="fa-solid fa-cart-shopping fa-beat"  style="color: #dbdbdb;"></i>
            </a>
            <style>
                .card-footer {
                    display: flex;
                    justify-content: space-between;
                }
            </style>
          </div>
        </div>
      </div>
    </div>
  

  <script src="./js/bootstrap.bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/00cb234d5f.js" crossorigin="anonymous"></script>
</body>
</html>