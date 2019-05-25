 <header id="header">
    <div class="container-fluid">

      <div id="logo" class="pull-left">
        <h1><a href="#intro" class="scrollto">BizPage</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#intro">Home</a></li>
          <li><a href="books.php">Books</a></li>
          <li><a href="libraries.php">Libraries</a></li>
          <li class="menu-has-children"><a href="">Libraries</a>
            <?php 
 $query = "SELECT * FROM libraries";
    $search_query = mysqli_query($connection, $query);
   while ($row = mysqli_fetch_assoc($search_query)) {
                $lib_id = $row["lib_id"];
                $lib_name = $row["lib_name"];  
              
         ?> 
            <ul>
              <li><a href="#"><?php echo $lib_name ?></a></li>
              <li><a href="#"><?php echo $lib_name ?></a></li>
             
            </ul>
<?php 
  }
 ?>

          </li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- #header -->
