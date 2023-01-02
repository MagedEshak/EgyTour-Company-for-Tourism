<?php

include('inc/header.php');

$bo_sql = "SELECT * FROM booking";
$bo_result = $connection->query($bo_sql);

?>




<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h1 class="text-center display-4 border my-5 ">My Profile Data</h1>


            <?php if (isset($_SESSION['Booking_Submitted'])): ?>
            <p style="text-align:center;"><label style="color:#4CAF50 !important; font-size: 30px;"><i
                        class="fa fa-calendar-check-o" style="color:#4CAF50 !important; font-size: 30px;"></i>
                    <?php echo ($_SESSION['Booking_Submitted']); ?>
                </label>
                <?php endif; ?>
                <?php unset($_SESSION['Booking_Submitted']); ?>


            <?php if (isset($_SESSION['updated'])): ?>

            <div class="alert alert-success text-center">
                <?php echo $_SESSION['updated']; ?>
            </div>

            <?php endif; ?>

            <?php unset($_SESSION['updated']); ?>


            <div>
                <?php if (isset($_SESSION['user_email'])): ?>
                <h2> Id :
                    <?php echo $_SESSION['user_id'] ?>
                </h2>
                <h2> Name :
                    <?php echo $_SESSION['user_name'] ?>
                </h2>
                <h2> Email :
                    <?php echo $_SESSION['user_email'] ?>
                </h2>
                <h2> Mobile :
                    <?php echo $_SESSION['user_phone'] ?>
                </h2>
                <hr>

                <?php foreach ($bo_result as $row) { ?>
                <h2> Booking Id :
                    <?php echo $row['id'] ?>
                </h2>

                <h2> From :
                    <?php echo $row['dateFrom'] ?>
                </h2>
                <h2> To :
                    <?php echo $row['dateTo'] ?>
                </h2>
                <h2> The number of people :
                    <?php echo $row['adults'] ?>
                </h2>
                <h2> Total Price :
                    <?php echo $row['price'] ?>
                </h2>
                <hr>
                <?php } ?>

                <?php else: ?>

                <div class="alert alert-danger text-center">
                    Data Not Founded
                </div>
                <?php endif; ?>
            </div>
            <hr>

        </div>
    </div>
</div>

<?php include('inc/footer.php'); ?>