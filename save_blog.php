<?php   include('db.php');


  if(isset($_POST['save_blog'])){
      $title = $_POST['title'];
      $content = $_POST['content'];
      $author = $_POST['author'];
      $query = "INSERT INTO blogs(title, description,author) VALUES ('$title', '$description', '$author')"; // Insert data in db blogs
      $result = mysqli_query($conn, $query); // Execute query
      if(!$result){
        die("Query Failed"); // If query failed, show this message
      }

      $_SESSION['message'] = 'Blog Saved Successfully'; // If query success, show this message
      $_SESSION['message_type'] = 'success'; // If query success, show this message
      header("Location: index.php"); // Redirect to index.php!!
  }

?>
