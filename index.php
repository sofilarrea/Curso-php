<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="blog" content="making my first blog with php" />
        <title>Clean Blog - With PHP</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/style.css" rel="stylesheet" />
    </head>
  <body>
  <?php include('db.php') ?> <!-- Conection db -->
  <?php 'Hola' ?>
  <h3>ess joda</h3>
  <div class="container">
      <div class="row d-flex justify-content-center ">
        <div class="col-sm-6">
          <div class="card shadow-lg" style="border-radius: 0;" data-aos="flip-left">
            <?php if(isset($_SESSION['message'])){ ?> <!-- If session message exist, show this message -->
              <div class="alert alert-success" role="alert">
              <h4 class="alert-heading"><?php echo $_SESSION['message']; ?></h4>
              <?php session_unset(); } ?> <!-- Close session -->
          </div>
            <div class="card-body p-5 text-center">
              <!-- Send data to save_blog.php -->
              <form action="save_blog.php" method="POST">
                <div class="form-group">
                  <input type="text" name="Title" class="form-control" placeholder="Blog Title" autofocus>
                </div>
                <div class="form-group">
                  <textarea name="content" rows="2" class="form-control" placeholder="Blog Content"></textarea>
                </div>
                <div class="form-group">
                  <input type="text" name="author" class="form-control" placeholder="Blog Author">
                </div>
                <input type="submit" name="save-blog" class="btn btn-success btn-block" value="Save Blog">
              </form>
            </div>
          </div>
        </div>

      <!-- Show data from db  in a table -->
      <div class="col-sm-6">
      <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Date</th>
              <th scope="col">Title</th>
              <th scope="col">Content</th>
              <th scope="col">Author</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $query = "SELECT * FROM blogs"; // Select all data from blogs table
              $result_blogs = mysqli_query($conn, $query); // Execute query
              while($row = mysqli_fetch_assoc($result_blogs)){ ?> <!-- While data exist, show this data -->
                <tr>
                  <td><?php echo $row['id'] ?></td>
                  <td><?php echo $row['date'] ?></td>
                  <td><?php echo $row['title'] ?></td>
                  <td><?php echo $row['content'] ?></td>
                  <td><?php echo $row['author'] ?></td>
                </tr>
            <?php }

            ?>
            <!-- Show data from db in a table -->
            <tr>
              <th scope="row"><?php echo $row['id']; ?> </th>
              <td><?php echo $row['date']; ?></td>
              <td><?php echo $row['title']; ?></td>
              <td><?php echo $row['content']; ?></td>
              <td><?php echo $row['author']; ?></td>
              <td><a href="edit.php? id=<?php echo $row['id']; ?>" class="btn btn-primary">Edit</a></td>
              <td><a href="" class="btn btn-danger">Delete</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>



  <h1>la re concha de la zsklafjñls</h1>



    <!--Bootstrap Script -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
