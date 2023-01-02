<?php include('inc/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2">Delete Account</h1>
        </div>
        <div class="col-sm-6 mx-auto">

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
                <form action="handler/delete.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="email" placeholder="Your Email">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" placeholder="Your Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="ConfirmPassword"
                            placeholder="Confirm Your Password">
                    </div>
                    <div class="form-group">
                        <input name="delete" type="submit" class="btn btn-block btn-primary" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>