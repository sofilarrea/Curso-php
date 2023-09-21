<?php   include('db.php');


  if(isset($_POST['edit_blog'])){
      $id = $_GET['id']; //Get the id from the url
      $title = $_POST['title'];
      $content = $_POST['content'];
      $author = $_POST['author'];
      $query = "UPDATE blogs SET title = '$title', description = '$description', author = '$author' WHERE id = $id"; // Insert data in db blogs
      $result = mysqli_query($conn, $query); // Execute query
      if(!$result){
        die("Query Failed"); // If query failed, show this message
      }

      $_SESSION['message'] = 'Blog Edit Successfully'; // If query success, show this message
      $_SESSION['message_type'] = 'info'; // If query success, show this message
      header("Location: index.php"); // Redirect to index.php!!
  }

?>
