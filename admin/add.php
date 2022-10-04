<?php
include "../shared/head.php";
include "../shared/header.php";
include "../shared/aside.php";
include "../general/config.php";
include "../general/functions.php";



?>





<main id="main" class="main">
  <h1> Add new admin </h1>

<div class="container p-5"> 
    <div class="card p-5">
        <div class="card-body ">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group mt-5">
                    <label for="">admin Name</label>
                    <input name="name" type="text" class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="">Password</label>
                    <input name="password" type="text" class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="">Email</label>
                    <input name="email" type="text" class="form-control">
                </div>
                <div class="form-group mt-5">
                    <label for="">Image</label>
                    <input name="image" type="file" class="form-control">
                </div>
               
                <button name="send" class = "btn btn-info mt-5"> Send Data </button>
            </form>
        </div>
    </div>
</div>

</main>



























<?php 
include "../shared/footer.php";
include "../shared/script.php";
?>

