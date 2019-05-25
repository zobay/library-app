<?php 
 include "includes/db.php";
 include "includes/header.php";
 ?>
<?php 
require_once 'includes/lib_navbar.php';
 ?>

<section id="about">
 <div class="container">

        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-6">



<?php 
if (isset($_POST['searching'])) {
    $search = $_POST['search'];
    

  
   $query = "SELECT * FROM books WHERE book_name LIKE '%$search%' ";
    $search_query = mysqli_query($connection, $query);

    if (!$search_query) {
        die("databse failed");
    }
        $count = mysqli_num_rows($search_query);
        if ($count == 0) {
          echo "<h2>No result found</h2>";        
          }else{

             while ($row = mysqli_fetch_assoc($search_query)) {
                 $b_id = $row["book_id"];  
                $book_name = $row["book_name"];
                $book_img = $row["book_img"];
                $book_author = $row["book_author"];  
                $book_des = $row["book_des"]; 
                $lib_id = $row["lib_id"];
               
      }


?>
 <hr>
      <img class="img-responsive"  src="img/<?php echo $book_img; ?> " alt="">
<hr>
               

  <hr>

</div>





   
      <div class="col-lg-6">
       <hr>
       <h2>
          <a href="post.php?b_id=<?php echo $book_id; ?>"><?php echo $book_name ?></a>
       </h2>
      <hr>
      <p class="lead">
      by <a href="index.php"><?php echo $book_author ?></a>
      </p>
       <hr>
      <p class="lead">
         Published by <a href="index.php"><?php echo $lib_name ?></a>
      </p>
      <hr>
      <h6>Description</h6>
      <p><?php echo $book_des ?></p>
      <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
     </div>


<?php 

  }  
}
 ?>


</div>
</div>

<?php 
 include "includes/fotter2.php";
 ?>
</section>
  
