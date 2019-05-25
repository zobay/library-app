 <?php 
 include "includes/db.php";
 include "includes/header.php";
 include "includes/function.php";
 ?>


<?php 
require_once 'includes/lib_navbar.php';
 ?>

 <section id="services">
      <div class="container">

        <header class="section-header wow fadeInUp">
          <h3>Libraries</h3>
          <p>Here all libraries are available</p>
        </header>

        <div class="row">
        <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">
          
          <?php 
         

   $query = "SELECT * FROM libraries";
                $select_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_query)) {
                $lib_id = $row["lib_id"];  
                $lib_name = $row["lib_name"];
                $lib_des = $row["lib_des"];  
                 
                  echo "<h4><a href='library.php?l_id=$lib_id; '>{$lib_name}</a></h4>";
                  echo "Library Id: <button> {$lib_id} </button>";
                  echo "<p>{$lib_des}</p>";
                   
          ?>
        </div>  
   <div class="col-lg-4 col-md-6 box wow bounceInUp" data-wow-duration="1.4s">  <?php 
        }  
       ?>
     </div>  
  </div>
 


      </div>
    </section><!-- #services -->
<?php 
 include "includes/fotter2.php";
 ?>
