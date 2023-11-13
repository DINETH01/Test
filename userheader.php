<header class="header">

   <div class="flex">

      <a href="#" class="logo">Signature cuisine</a>

      <nav class="navbar">
        
         <a href="products.php">View Food</a>
         <a href="admindashboard.php">Reservation Table</a>
         <a href="index1.php">Home</a>
   
      </nav>

      <?php
      
      $select_rows = mysqli_query($conn, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

   

      <div id="menu-btn" class="fas fa-bars"></div>

   </div>

</header>