<?php 

include "../includes/db.php";
include "../includes/function.php";
include "includes/admin_navbar.php";




 if (isset($_POST['add_book'])) {
 
 
     $book_name = $_POST['book_name'];
      $book_author = $_POST['book_author'];
    $lib_id = $_POST['lib_id'];
     $book_img = $_FILES['image']['name'];
     $post_image_temp = $_FILES['image']['tmp_name'];
      $book_des = $_POST['book_des'];
     $book_status = $_POST['book_status'];
     $cat_id = $_POST['cat_id'];
   
 

     move_uploaded_file($post_image_temp, "../images/$book_img");

 //if (!empty($book_name) && !empty($book_author) && empty($book_des) ) {
   //insert query
   $query = "INSERT INTO books (book_name, book_author, lib_id, book_img, book_des, book_status, cat_id) ";
  $query .="VALUES( '{$book_name}' ,'{$book_author}', '{$lib_id}' , '{$book_img}' , '{$book_des}', '{$book_status}', '{$cat_id}' ) "; 

  $create_query = mysqli_query($connection, $query);
     if (!$create_query) {
            die("Query failed" .mysqli_error($connection));
         }
}

 
 ?>

 
<div class="container">
<div class="row"> 
<div class="col-lg-8">

  <br>
  <br>
   <form action="" method="post" >    
                 <div class="form-group">
                  <h4><em>Add new Book</em></h4>
                  <h4><?php //echo $message; ?></h4>
                  <hr>
                    <label>Book Name</label>
                    <input type="text" name="book_name" class="form-control">
                  </div>
                   <div class="form-group">
                    <label>Book Author</label>
                    <input type="text" name="book_author" class="form-control">
                  </div>

                  <div class="form-group">
                  <label>Library Id</label>
                  <input type="number" name="lib_id" class="form-control">
                  </div>
                   <div class="form-group">
                  <label>Book Image</label>
                 <input type="file" class="form-control" name="image">
                  </div>
                  
                   <div class="form-group">
                  <label>Book Status</label>
                  <input type="text" name="book_status" class="form-control">
                  </div> 
                 <div class="form-group">
                  <label>Book Category Id</label>
                  <input type="number" name="cat_id" class="form-control">
                  </div> 
                  


                   <div class="form-group">
                    <label>Book Description</label>
                    <textarea class="form-control" name="book_des" col="30" row="10"></textarea>
                  </div>
                  <div class="form-group">
                       <input class="btn btn-primary" type="submit" name="add_book" value="Add Library"> 
                   </div>
            </form>  
 </div>                   
 </div> 
 </div>           