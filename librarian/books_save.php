<?php 
/*This is where the data that was submitted from the add_books.php and will be saved to the database*/
include('dbcon.php');
if (isset($_POST['submit'])){
$book_title=$_POST['book_title'];
$category_id=$_POST['category_id'];
$author=$_POST['author'];
$book_copies=$_POST['book_copies'];
$book_pub=$_POST['book_pub'];
$publisher_name=$_POST['publisher_name'];
$isbn=$_POST['isbn'];
$copyright_year=$_POST['copyright_year'];
/* $date_receive=$_POST['date_receive']; */
/* $date_added=$_POST['date_added']; */
$status=$_POST['status'];




								
mysqli_query($conn,"insert into book (book_title,category_id,author,book_copies,book_pub,publisher_name,isbn,copyright_year,date_added,status)
 values('$book_title','$category_id','$author','$book_copies','$book_pub','$publisher_name','$isbn','$copyright_year',NOW(),'$status')")or die(mysqli_error());
 
 
header('location:books.php');
}
?>	