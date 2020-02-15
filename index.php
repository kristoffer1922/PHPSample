<?php
  include 'action.php';
  
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

  </head>
  <body>

    <nav class="navbar navbar-expand bg-dark navbar-dark">
      <div class="container-fluid">
        <div class="navbar-header">
          

          <ul class="navbar-nav navbar-header">
          <a class="navbar-brand" href="#">CRUD</a>
            <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Features</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Pricing</a></li>
          </ul>

        </div>

          <ul class="nav navbar-right">
            <li>
            <form class="form-inline" action="/action_page.php">
              <input class="form-control mr-sm-2" type="text" placeholder="Search">
              <button class="btn btn-success" type="submit">Search</button>
            </form>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row justify-content-center mt-3">
        <div class="col-md-12">
          <h3 class="text-center text-dark">CRUD using PHP</h3>
        </div>
      </div>

      <!-- -->
      <div class="row">
        <!-- left --> 
        <div class="col-md-4">

          <h3 class="text-center text-info">Add Record</h3>

        
            <?php 
                if (isset($_SESSION['response'])){
              ?>
            <div class="alert alert-<?= $_SESSION['res_type']; ?>  alert-dismissible fade show">
              <button type="button" class="close" data-dismiss="alert">
                &times;
              </button>
              <?= $_SESSION['response']; ?>
                </div>
            <?php } 
            unset($_SESSION['response']); 
              ?>
            
          <form action="action.php" method="post" enctype="multipart/form-data">
            <div class="form-group">
              <input
                type="text"
                name="name"
                class="form-control"
                placeholder="Enter name"
                required
              />
            </div>

            <div class="form-group">
              <input
                type="email"
                name="email"
                class="form-control"
                placeholder="Enter email"
                required
              />
            </div>

            <div class="form-group">
              <input
                type="tel"
                name="phone"
                class="form-control"
                placeholder="Enter phone"
                required
              />
            </div>

            <div class="form-group">
              <input type="file" name="image" class="custom-file" />
            </div>

            <div class="form-group">
              <input
                type="submit"
                name="add"
                class="btn btn-primary btn-block"
                value="Add Record"
              />
            </div>
          </form>
     </div>

        <div class="col-md-8">
          <h3 class="text-center text-info">Records</h3>

          <table class="table table-hover table-bordered">
            <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td><img src="" width="25" alt="" /></td>

                <td>John Doe</td>
                <td>JohnDoe@gmail.com</td>
                <td>0855544477</td>
                <td>
                  <a href="#" class="btn btn-primary"> Details </a>
                  <a href="#" class="btn btn-danger"> Delete </a>
                  <a href="#" class="btn btn-success"> Edit </a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script src="main.js"></script>
  </body>
 
</html>
