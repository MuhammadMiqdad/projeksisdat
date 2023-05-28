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
      z-index: 1;
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

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 20px;
    }

    .card {
      border: none;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      background-color: #fff;
      transition: all 0.3s ease;
    }

    .card:hover {
      transform: translateY(-5px);
    }

    .card-title {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .card-img-top {
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }

    .card-text {
      font-size: 14px;
    }

    .card-footer {
      border-top: none;
      text-align: center;
    }

    .list-group-item {
      display: flex;
      justify-content: space-between;
      align-items: center;
      font-size: 14px;
      padding: 10px;
      margin-bottom: 5px;
      background-color: #fff;
      border: 1px solid #e9e9e9;
    }

    .badge {
      background-color: #6c757d;
      color: #fff;
    }

    .sidebar {
      background-color: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
    }

    .sidebar h4 {
      font-size: 20px;
      margin-bottom: 20px;
      text-align: center;
    }

    .form-label {
      font-weight: bold;
    }

    .form-control {
      border-radius: 5px;
    }

    .btn-primary {
      background-color: #007bff;
      border-color: #007bff;
    }

    .btn-primary:hover {
      background-color: #0069d9;
      border-color: #0062cc;
    }

    .btn-secondary {
      background-color: #6c757d;
      border-color: #6c757d;
      color: #fff;
    }

    .btn-secondary:hover {
      background-color: #5a6268;
      border-color: #545b62;
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
                    <button class="btn btn-outline-success" type="submit"><i class="fas fa-search" style="color: #ffffff;"></i></button>
                    <a href="cart.php" class="cart-icon">
                      <i class="fas fa-shopping-cart"></i>
                    </a>                    
                </form>
            </div>
        </div>
    </nav>

  <div class="container mt-5">
    <div class="row">
      <div class="col-lg-4">
        <div class="card mb-3">
          <img src="image/indomi.jpg" class="card-img-top" alt="Item Image">
          <div class="card-body">
            <h5 class="card-title">SOSRO</h5>
            <p class="card-text">Sosro Teh Botol Original Minuman Teh [200 mL]
              <br>
              <small>Rp. 2300</small>
            </p>
          </div>
          <div class="card-footer">
            <button class="btn btn-primary" onclick="addToCart('Sosro', 2300)">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="sidebar">
          <h4>Shopping Cart</h4>
          <ul class="list-group" id="listKeranjang">
          </ul>
          <div class="mt-4">
            <div class="mb-3">
              <label for="totalPembayaran" class="form-label">Total Payment</label>
              <input type="text" class="form-control" id="totalPembayaran" readonly>
            </div>
            <div class="mb-3">
              <label for="diskon" class="form-label">Discount</label>
              <input type="text" class="form-control" id="diskon">
            </div>
            <div class="text-center">
              <button class="btn btn-secondary" onclick="updateTotalPembayaran()">Update Total</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
  <script>
    // JavaScript code for calculating and updating the total pembayaran
    const listKeranjang = document.getElementById('listKeranjang');
    const totalPembayaran = document.getElementById('totalPembayaran');
    const diskonInput = document.getElementById('diskon');

    let keranjangItems = []; // Array to store the cart items

    function addToCart(itemName, price) {
      const existingItem = keranjangItems.find(item => item.name === itemName);

      if (existingItem) {
        // Check if stock is available
        if (existingItem.quantity < existingItem.stock) {
          // If the item already exists in the cart and stock is available, increase the quantity
          existingItem.quantity++;
        } else {
          // If the stock is not available, show an alert message or handle it as needed
          alert('The stock is not sufficient for this item.');
          return;
        }
      } else {
        // If it's a new item, add it to the cart
        const newItem = { name: itemName, price: price, quantity: 1, stock: 15 }; // Adjust the stock value as needed
        keranjangItems.push(newItem);
      }

      updateCartDisplay();
      updateTotalPembayaran();
    }


    function updateCartDisplay() {
      // Clear the existing items in the cart display
      listKeranjang.innerHTML = '';

      // Create new list items for each cart item
      keranjangItems.forEach(item => {
        const listItem = document.createElement('li');
        listItem.classList.add('list-group-item');
        listItem.innerHTML = `
          <span>${item.name}</span>
          <span>${item.quantity} x Rp ${item.price}</span>
          <span class="badge">Rp ${item.quantity * item.price}</span>
        `;
        listKeranjang.appendChild(listItem);
      });
    }

    function updateTotalPembayaran() {
      // Calculate the total pembayaran
      let total = 0;
      keranjangItems.forEach(item => {
        total += item.price * item.quantity;
      });

      // Apply the discount if available
      const diskon = parseInt(diskonInput.value);
      if (!isNaN(diskon)) {
        total -= (total*diskon)/100;
      }

      // Update the total pembayaran display
      totalPembayaran.value = 'Rp ' + total;
    }

  </script>
</body>

</html>
