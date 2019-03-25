<?php
  include('connection.php');
  $message = $_POST['msg'];
  echo $message;
  $query = "INSERT INTO tasks (task) VALUES ('$message')";
  if(isset($_POST['submit']))
  {
  	mysqli_query($conn , $query);
  }

  $query1 = "SELECT * FROM tasks ";
  $tasks = mysqli_query($conn , $query1);

?>