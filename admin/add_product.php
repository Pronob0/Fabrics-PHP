<?php 
require "inc/head.php"; 
require "inc/security.php";
require "inc/db.php";



 if (isset($_POST['submit'])) {

  
// upload folder target
    $fnum=$_FILES['image']['name'];
    $target = "./product_image/".$fnum;
    move_uploaded_file($_FILES['image']['tmp_name'], $target);

    $name =  $_POST['name'];
    $category = $_POST['category'];
    $rate =$_POST['rate'];
    $image = $_FILES['image']['name'];


    $sql = "INSERT INTO product VALUES ( ' ','$name', '$category', '$rate', '$image')";
    $run_sql=mysqli_query($con, $sql);

      if ($run_sql) {
      echo "<script> alert('New product added..!!') </script>";
      echo "<script> location = 'add_product.php' </script>";
    }


  }
// moving uploaded file to targated folder
?>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <?php require "inc/sidebar.php"; ?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php require "inc/topbar.php"; ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">
          <h3>Add New Product</h3>
          
          <form action="" method="post" enctype="multipart/form-data">


            <div class="form-group">
              <label for="name">Name: </label>
              <input name="name" type="text" class="form-control" id="name" placeholder="Product Name" required>
            </div>


            <div class="form-group">
              <label for="category">Category</label>
              <select name="category" class="form-control" id="category" required>
                <option>Select Product Category</option>
                <option value="Denim">Denim Fabrics</option>
                <option value="Batik">Batik fabrics</option>
                <option value="Cotton">Cotton fabrics</option>
                <option value="Corduroy">Corduroy Fabrics</option>
                <option value="Rayon">Rayon Fabrics</option>
                <option value="Lynen">Lynen fabrics</option>
                <option value="Tribal">Tribal fabrics</option>
                <option value="Oxford">Oxford Fabrics</option>
                <option value="Polyster">Polyster fabrics</option>
                <option value="Silk">Silk Fabrics</option>
                <option value="Drill fabrics">Drill Fabrics</option>
                <option value="Wool">Wool Fabrics</option>
              </select>
            </div>




            <div class="form-group">
              <label for="rate">Rate: </label>
              <input name="rate" type="number" class="form-control" id="rate" placeholder="Product rate per yads" required>
            </div>

            <div class="form-group">
              <label for="image">Image:</label>
              <input name="image" type="file" class="form-control-file" id="image">
            </div>


            <div class="form-group">
              <input class="btn btn-success" name="submit" type="submit" value="Submit">
            </div>

          </form>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php require 'inc/footer.php';?>