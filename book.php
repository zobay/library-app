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

            <!-- Blog Post Content Column -->
            <div class="col-lg-6">
  <?php 
     if (isset($_GET['b_id'])) {
        $book_id = $_GET['b_id'];
      }           
      
            

    $query = "SELECT * FROM books WHERE book_id = $book_id ";
    $search_query = mysqli_query($connection, $query);

   
       

             while ($row = mysqli_fetch_assoc($search_query)) {
                $book_id = $row["book_id"];  
                $book_name = $row["book_name"];
                $book_img = $row["book_img"];
                $book_author = $row["book_author"];  
                $book_des = $row["book_des"];
                $book_status = $row["book_status"];
                $lib_id = $row["lib_id"];  
                $cat_id = $row["cat_id"]; 
               }      
         ?> 

              

                <!-- First Blog Post -->
               <!-- Book name, author!-->   

<?php 
 $query = "SELECT * FROM libraries WHERE lib_id = $lib_id";
    $search_query = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($search_query)) {
                $lib_id = $row["lib_id"];
                $lib_name = $row["lib_name"];  
              
         ?>  
           <!-- published by!-->
    <?php 
       }
     ?> 
            <!-- description!-->     
                <hr>
                 <img class="img-responsive"  src="img/<?php echo $book_img; ?> " alt="">
                <hr>
               

                <hr>

<?php 
$query = "SELECT * FROM categories WHERE cat_id = $cat_id";
    $search_query = mysqli_query($connection, $query);

      while ($row = mysqli_fetch_assoc($search_query)) {
                $cat_id = $row["cat_id"];
                $cat_name = $row["cat_name"];     
   
}
  ?>

                <!-- Blog Comments -->


<?php 

 ?>

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
       <p class="lead">
         Category: <a href="index.php"><?php echo $cat_name ?></a>
      </p>
      <hr>
      Book is: <em><?php echo $book_status ?></em>
      <hr>
      <h6>Description</h6>
      <p><?php echo $book_des ?></p>
      <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
     </div>
    </div>
    </div>
    <!-- /.container -->

  </section>
