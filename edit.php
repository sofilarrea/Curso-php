<!-- Render header -->
<?php include('includes/header.php');
include('db.php'); // Include db.php

$id = $_GET['id']; //Get the id from the url
$query = "SELECT * FROM blogs WHERE id = $id"; // Select the data from the table //
$result = mysqli_query($conn, $query); // Execute query //

if(mysqli_num_rows($result) == 1){ //If the query return 1 row, show this data //
  $row = mysqli_fetch_array($result); // Fetch the data //

  // Save the data in variables //
  $title = $row['title'];
  $content = $row['content'];
  $author = $row['author'];
}
?>
<div class="card-body p-5 text-center">
  <!-- Send data to save_blog.php -->
  <form action="edit_blog.php? id=<?php echo $id ?> " method="POST">
    <div class="form-group">
      <input type="text" name="Title"  value="<?php echo $title ?>" class="form-control" placeholder="Blog Title" autofocus>
    </div>
    <div class="form-group">
      <textarea name="content" rows="2" class="form-control"value="<?php echo $content ?>"  placeholder="Blog Content"></textarea>
    </div>
    <div class="form-group">
      <input type="text" name="author" class="form-control" value="<?php echo $author ?>"  placeholder="Blog Author">
    </div>
    <input type="submit" name="edit-blog" class="btn btn-success btn-block" value="Edit Blog">
  </form>
</div>
