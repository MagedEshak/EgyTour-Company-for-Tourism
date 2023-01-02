<?php include('inc/header.php'); ?>


<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border p-3 my-5 "> My Profile </h1>
        </div>
       
        <?php if (isset($_SESSION['deleted'])): ?>

        <div class="alert alert-success text-center">
            <?php echo $_SESSION['deleted']; ?>
        </div>

        <?php endif; ?>

        <?php unset($_SESSION['deleted']); ?>
 
    </div>
</div>

<?php include('inc/footer.php'); ?>