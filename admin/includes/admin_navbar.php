<?php 

 
 ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Home</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="library.php">Libraries <span class="sr-only">(current)</span></a>
      </li>
       
    </ul>
<?php 
if (isset($_POST['searching'])) {
    $search = $_POST['search'];
    echo $search;


  
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
                 $book_id = $row["book_id"];  
                $book_name = $row["book_name"];
                $book_img = $row["book_img"];
                $book_author = $row["book_author"];  
                $book_des = $row["book_des"]; 
                $lib_id = $row["lib_id"];
                 header("Location: ../new.php");    
      }
  }  
}

?>


    <form action=""  method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" name="search" placeholder="Search" aria-label="Search">
     <input class="btn btn-primary" type="submit" name="searching" value="Search"> 
    </form>
  </div>
</nav>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>