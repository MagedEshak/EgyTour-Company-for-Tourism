<?php include('inc/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-12 ">
            <h1 class="text-center display-4 border my-5 p-2">Change Password</h1>
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
                <form method="POST" action="handler/change.php">
                    <div class="form-group">
                        <input type="text" class="form-control" name="oldPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="confirmNewPassword" placeholder="Confirm New Password">
                    </div>
                    <div class="form-group">
                        <input name="change" type="submit" class="btn btn-block btn-primary" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>