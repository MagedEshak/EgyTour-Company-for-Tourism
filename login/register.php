<?php include('inc/header.php'); ?>

<?php

if (isset($_SESSION['user_name'])) {
    header("location:index.php");
}
?>

<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2">Register</h1>
        </div>
        <div class="col-sm-6 mx-auto">

            <!-- if sign up Successfully -->
            <?php if (isset($_SESSION['successSignUp'])): ?>

            <div class="alert alert-success text-center">
                <?php echo $_SESSION['successSignUp']; ?>
            </div>

            <?php endif; ?>

            <?php unset($_SESSION['successSignUp']); ?>
            <!--end sign up Successfully-->

            <!-- if empty data -->
            <?php if (isset($_SESSION['Erorr'])): ?>

            <div class="alert alert-danger text-center">
                <?php echo $_SESSION['Erorr']; ?>
            </div>

            <?php endif; ?>

            <?php unset($_SESSION['Erorr']); ?>
            <!--end empty data -->


            <!-- form -->
            <div class="border p-5 my-3">
                <form method="POST" action="handler/regist.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="Email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="MobileNumber" placeholder="Your Mobile">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="Password" placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <input name="registSubmit" type="submit" class="btn btn-block btn-primary" value="Registration">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>