<?php   include('db.php');


  if(isset($_POST['save_blog'])){
      $title = $_POST['title'];
      $content = $_POST['content'];
      $author = $_POST['author'];
      $query = "INSERT INTO blogs(title, description,author) VALUES ('$title', '$description', '$author')";
    // $result = mysqli_query($conn, $query);
    // if(!$result){
    //   die("Query Failed");
    // }

    // $_SESSION['message'] = 'Blog Saved Successfully';
    // $_SESSION['message_type'] = 'success';
    // header("Location: index.php");
  }



  echo $title = $_POST['title'];
?>
