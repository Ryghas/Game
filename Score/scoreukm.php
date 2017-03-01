<?php 
 if($_SERVER['REQUEST_METHOD']='POST'){
 
 //Getting values
 $NAMA = $_POST['nama'];
 $SCORE = $_POST['score'];
 
 //Creating an sql query
 $sql = "INSERT INTO ukm (username,score) VALUES ('$NAMA','$SCORE')";
 
 //Importing our db connection script
 require_once('koneksi.php');
 
 //Executing query to database
 if(mysqli_query($con,$sql)){
 echo 'Score Save Successfully';
 }else{
 echo 'Could Not Save Score';
 }
 
 //Closing the database 
 mysqli_close($con);
 }