<?php include('includes/header.php'); ?>
<?php include
('db.php');

$id = $_GET['id']; //Get the id from the url
$query = "DELETE * FROM blogs WHERE id = $id"; // Select the data from the table //
$result = mysqli_query($conn, $query); // Execute query //
?>
