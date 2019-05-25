
<?php 
 include "includes/db.php";
 include "includes/header.php";
 ?>
<?php 
require_once 'includes/book_navbar.php';
 ?>
 <section id="about">
      <div class="container">

        <header class="section-header">
          <h3>About Us</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </header>

        <div class="row about-cols">
         <div class="col-md-4 col-md-6 wow fadeInUp">
          <div class="about-col">   
              
                <?php 
                 $query = "SELECT * FROM books";
                    $select_query = mysqli_query($connection, $query);
                   while ($row = mysqli_fetch_assoc($select_query)) {
                $book_id = $row["book_id"];  
                $book_name = $row["book_name"];
                $book_img = $row["book_img"];
                $book_author = $row["book_author"];  
                $book_des = $row["book_des"]; 
                $lib_id = $row["lib_id"];
              ?>
        <div class="img">
       
          <img class="text-center" src="img/<?php echo $book_img; ?>" alt="" class="img-fluid"> 
           <div class="icon"><i class="ion-ios-speedometer-outline"></i></div> 
        </div>   

    <h2>
       <a href="book.php?b_id=<?php echo $book_id; ?>"><?php echo $book_name ?></a>
      </h2>
        
       <p class="text-center"><span ><?php echo  $book_author ?> </span> </p>
              <hr>
         <p><?php echo $book_des ?></p> 
         </div>
         </div>

         <div class="col-lg-4 col-md-6 box wow fadeInUp" data-wow-duration="1.4s">
          <div class="about-col">  

     <?php     
       }
        ?>    
             
            </div>
          </div >
        </div >
      </div>
     
    </section><!-- #about -->

    <?php 
include "includes/fotter2.php";
 ?>
