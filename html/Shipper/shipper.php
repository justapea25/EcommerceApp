<?php
  session_start();

  if (!isset($_SESSION['user_data']) || $_SESSION["user_data"]["role"] != "Shipper" ) {
      header('location: login.php');
  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  </head>
  <body class="bg-light">
    <div class ="container ">
      <h1 class="text-start">Orders List</h1>
    </div>
    <div class="container bg-white rounded-1 py-4">
        <div class="card mx-5 my-3 text-start">
          <h5 class="card-header">
            <div class="row">
              <div class="col-md-10">
                Order 10
              </div>
              <div class="col-md-2 text-end">
                Status: <span class="text-success">Active</span> 
              </div>
            </div>
          </h5>
          <div class="card-body">
            <ul>
              <li class="list-group-item"><label>Customer: </label>
                  Hoang Dang
              </li>
              <li class="list-group-item"><label>Date: </label>
                  10/10/2022
              </li>
              <li class="list-group-item"><label>Location: </label>
                  112 Nguyen Thuong Hien, Hai Ba Trung, Ha Noi
              </li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal">View Order</a>
            </div>
          </div>
        </div>

        <div class="card mx-5 my-2 text-start">
          <h5 class="card-header">
            <div class="row">
              <div class="col-md-10">
                Order 10
              </div>
              <div class="col-md-2 text-end">
                Status: <span class="text-success">Active</span> 
              </div>
            </div>
          </h5>
          <div class="card-body">
            <ul>
              <li class="list-group-item"><label>Customer:</label>
                  Minh Dau
              </li>
              <li class="list-group-item"><label>Date: </label>
                  11/10/2022
              </li>
              <li class="list-group-item"><label>Location: </label>
                  12 Nguyen Thuong Hien, Hai Ba Trung, Ha Noi
              </li>
            </ul>
            <div class="text-center">
              <a href="#" class="btn btn-light border" data-bs-toggle="modal" data-bs-target="#exampleModal">View Order</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Order 10</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <ul class="list-group list-group-flush info-list">
              <li class="list-group-item"><label>Customer: </label>
                  Hoang Dang
              </li>
              <li class="list-group-item"><label>Date: </label>
                  10/10/2022
              </li>
              <li class="list-group-item"><label>Location: </label>
                  112 Nguyen Thuong Hien, Hai Ba Trung, Ha Noi
              </li>
              <li class="list-group-item"><label>Items: </label>
                <div class="container">
                  <div class="row">
                    <div class="col-md-7">
                      <div class="card mb-3" style="min-width: 400px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="../../img/watch.png" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">iWatch</h5>
                              <p class="card-text"><small class="text-muted">$200</small></p>
                              <p class="card-text">ID: 2482934728</p>
                              <p class="card-text">Quantity: 2</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3" style="min-width: 400px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="../../img/productImage/iphone.png" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">iPhone</h5>
                              <p class="card-text"><small class="text-muted">$1300</small></p>
                              <p class="card-text">ID: 4441144728</p>
                              <p class="card-text">Quantity: 1</p>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="card mb-3" style="min-width: 400px;">
                        <div class="row g-0">
                          <div class="col-md-4">
                            <img src="../../img/macbook.jpeg" class="img-fluid rounded-start" alt="...">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                              <h5 class="card-title">Macbook</h5>
                              <p class="card-text"><small class="text-muted">$2000</small></p>
                              <p class="card-text">ID: 5551144728</p>
                              <p class="card-text">Quantity: 1</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-5" style="min-width: 300px;">
                      <div class="container">
                        <div class="card">
                          <div class="card-header text-center">
                            <h4>Summary</h4> 
                          </div>
                          <div class="card-body">
                            <ul class="list-group list-group-flush">
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Price
                                <span">$300</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Delivery
                                <span>$10</span>
                              </li>
                              <li class="list-group-item d-flex justify-content-between align-items-center">
                                Total
                                <span>$310</span>
                              </li>
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-danger">Canceled</button>
            <button type="button" class="btn btn-success">Delivered</button>
          </div>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  </body>
</html>