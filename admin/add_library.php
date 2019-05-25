<?php 

include "../includes/db.php";
include "../includes/function.php";
include "includes/admin_navbar.php";




 if (isset($_POST['add_library'])) {
 
   $lib_name = $_POST['lib_name'];
   $lib_des = $_POST['lib_des'];

if (!empty($lib_name) && !empty($lib_des)) {
  
    $query = "INSERT INTO libraries (lib_name, lib_des) ";
  $query .="VALUES( '{$lib_name}' ,'{$lib_des}') "; 
  $create_query = mysqli_query($connection, $query);
     confirmQuery( $create_query);
  header("Location: ../libraries.php"); 
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
                  <h4><em>Add new library</em></h4>
                  <hr>
                    <label>Library Name</label>
                    <input type="text" name="lib_name" class="form-control">
                  </div>
                   <div class="form-group">
                    <label>Library descriprion</label>
                    <textarea class="form-control" name="lib_des" col="30" row="10"></textarea>
                  </div>
                  <div class="form-group">
                       <input class="btn btn-primary" type="submit" name="add_library" value="Add Library"> 
                   </div>
            </form>  
 </div>                   
 </div> 
 </div>           