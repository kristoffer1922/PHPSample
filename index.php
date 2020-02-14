<?php
  include 'action.php';
  
  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
    />

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">CRUD</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">Pricing</a></li>
          </ul>

          <ul class="nav navbar-nav navbar-right">
            <li>
              <form class="navbar-form navbar-left" action="/action.php">
                <div class="form-group">
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Search"
                  />
                </div>
                <button type="submit" class="btn btn-default">Search</button>
              </form>
            </li>

            <li>
              <a href="#"
                ><span class="glyphicon glyphicon-user"></span> Sign Up</a
              >
            </li>
            <li>
              <a href="#"
                ><span class="glyphicon glyphicon-log-in"></span> Login</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row justify-content-center">
        <div class="col-md-12">
          <h3 class="text-center text-dark">CRUD using PHP</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3 class="text-center text-info">Add Record</h3>

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
  </body>
</html>
