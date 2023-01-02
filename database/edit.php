<?php

//connection with mysql
include('connection.php');

if (isset($_POST['Close'])) {

    header("location:../admin/tabels.php");
    die();
}

#########################################################################################

if (isset($_POST['edit_user'])) {

    $user_id = $_POST['user_id'];
    $new_user_name = $_POST['user_name'];
    $new_user_email = $_POST['user_email'];
    $new_user_phone = $_POST['user_phone'];

    $quiery = "SELECT * FROM `users` WHERE `id`=?";
    $stmt = $connection->prepare($quiery, []);
    $stmt->execute([$user_id]);

    $data = $stmt->fetchObject(); 

    if ($data) {
        $check = $user_id == $data->id;

        if ($check) {
          
                $quiery = "UPDATE `users` SET `name`=?, `email`=?, `phone`=? WHERE `id`=?";
                $stmt = $connection->prepare($quiery, []);
                $stmt->execute([$new_user_name, $new_user_email, $new_user_phone, $user_id]);

                $_SESSION['data_updated'] = "Your Data has been Updated successfully";
                header("location:../admin/tabels.php");
                die();
      
        }

    } else {
        $_SESSION['data_error'] = "This ID does not exist";
        header("location:../admin/tables/users/edit_user.php");
        die();

    }
}
##################################################################################


if (isset($_POST['edit_trip'])) {

    $trip_id = $_POST['trip_id'];
    $Trip_picture_name1 = $_FILES['Trip_Pic']['name'];
    $Trip_picture_name2 = $_FILES['picture2']['name'];
    $Trip_picture_name3 = $_FILES['picture3']['name'];
    $Trip_picture_name4 = $_FILES['picture4']['name'];
    $name = $_POST['trip'];
    $address = $_POST['address'];
    $description = $_POST['descrition'];
    $trip_price = $_POST['trip_price'];

    $quiery = "SELECT * FROM `inserttrip` WHERE `id`=?";
    $stmt = $connection->prepare($quiery, []);
    $stmt->execute([$trip_id]);

    $data = $stmt->fetchObject();

    if ($data) {
        $check = $trip_id == $data->id;

        if ($check) {
            $quiery = "UPDATE `inserttrip` SET photo=? ,photo2=? , photo3=?, photo4=?, trip=?, address=?, descrition=?, trip_price=? WHERE `id`=?";
            $stmt = $connection->prepare($quiery, []);
            $stmt->execute([
                $Trip_picture_name1,
                $Trip_picture_name2,
                $Trip_picture_name3,
                $Trip_picture_name4,
                $name,
                $address,
                $description,
                $trip_price,
                $trip_id
            ]);

            $_SESSION['data_updated'] = "Your Data has been Updated successfully";
            header("location:../admin/tabels.php");
            die();
        }

    } else {
        $_SESSION['data_error'] = "This ID does not exist";
        header("location:../admin/tables/trips/edit_trip.php");
        die();
    }
}

