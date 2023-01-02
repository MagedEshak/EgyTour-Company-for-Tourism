<?php include('inc/header.php'); ?>
<?php

 if (isset($_SESSION['user_name'])) {
     header("location:index.php");
 }
 ?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2"> Login</h1>
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="border p-5 my-3">



             
                <?php if (isset($_SESSION['Erorr'])): ?>

                <div class="alert alert-danger text-center">
                    <?php echo $_SESSION['Erorr']; ?>
                </div>

                <?php endif; ?>

                <?php unset($_SESSION['Erorr']); ?>
               
                <!-- start form -->
                <form action="handler/login.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <input name="loginSubmit" type="submit" class="btn btn-block btn-primary" value="Login">
                    </div>
                </form>
                <!-- end form -->
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>