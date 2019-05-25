<?php 
 include "includes/db.php";
 include "includes/header.php";
 ?>
<?php 
require_once 'includes/lib_navbar.php';
 ?>
     
 <section id="about">
    <!-- Page Content -->
    <div class="container">

        <div class="row">
            
 <?php 
if (isset($_POST['searching'])) {
    $search = $_POST['search'];
    

  
   $query = "SELECT * FROM libraries WHERE lib_name LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);

    if (!$search_query) {
        die("databse failed");
    }
        $count = mysqli_num_rows($search_query);
        if ($count == 0) {
          echo "<h2>No result found</h2>";        
          }else{

             while ($row = mysqli_fetch_assoc($search_query)) {
                $lib_id = $row["lib_id"]; 
                $lib_name = $row["lib_name"];  
                $lib_des = $row["lib_des"];
  
?>

<?php  
   $query = "SELECT * FROM books WHERE lib_id = $lib_id";
   $select_all_books= mysqli_query($connection, $query);
   $count_books = mysqli_num_rows($select_all_books);  
?>

     <div class="col-lg-8">
       <hr>
       <h2>
          <a href=""><?php echo $lib_name ?></a>
       </h2>
      <hr>
      <p class="lead">
     <?php echo $lib_des ?>
      </p>
       <hr>
      <p class="lead">
     <?php echo "Total Book:" .$count_books ?>
      </p>
     </div>
    </div>
    </div>
    <!-- /.container -->

<?php 
     }
   }  
 }
 ?>

  </section>
