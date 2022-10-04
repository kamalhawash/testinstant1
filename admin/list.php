<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../general/config.php";
include "../general/functions.php";


?>






<main id="main" class="main">

<div class="pagetitle">
  <h1> List admin </h1>
  <nav>
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/easyadmin/index.html">Home</a></li>
      <li class="breadcrumb-item">Tables</li>
      <li class="breadcrumb-item active">General</li>
    </ol>
  </nav>
</div><!-- End Page Title -->
<section class="section">
  <div class="row">
    <div class="col-lg-6">

      <div class="card">
        <div class="card-body">
          <h5 class="card-title">Default Table</h5>

          <!-- Default Table -->
          <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>

              </tr>
            </thead>
            <tbody>
                <?php 
                foreach($s as $data){
                ?>
              <tr>
              <th scope="row"><?=$data['id'] ?> </th>
                <td><?=$data['name'] ?> </td>
                <td><?=$data['email'] ?> </td>
                <td><img src="/easyadmin/admin/upload/<? echo $row['image'] ?>" class="rounded-circle"></td>
                <td> <a href="/easyadmin/admin/list.php?delete=<?= $data['id'] ?>" class ="btn btn-danger"> Delete </a></td>
                <td> <a href="/easyadmin/admin/update.php?edit=<?= $data['id'] ?>" class ="btn btn-primary"> Update </a></td>

              </tr>
              <?php } ?>
             
            </tbody>
          </table>
          <!-- End Default Table Example -->
        </div>
      </div>


      </div>
      </div>
    </section>
    </main>

























    <?php 
include "../shared/footer.php";
include "../shared/script.php";
?>

