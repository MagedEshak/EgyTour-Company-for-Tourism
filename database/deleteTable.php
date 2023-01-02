<?php

//connection with mysql
include('connection.php');


if (isset($_POST['Close'])) {

    header("location:../admin/tabels.php");
    die();
}

#########################################################################################

if (isset($_POST['Delete_Table_Users'])) {

    $Delete_Table_Users = "DELETE FROM users";
    $Delete_Table_Users_stmt = $connection->query($Delete_Table_Users);
    
    $_SESSION['Delete_Table_Users'] = "Users has been deleted";

    header("location:../admin/tabels.php");
    die();
}

#########################################################################################

if (isset($_POST['Delete_Table_contact'])) {

    $Delete_Table_contact = "DELETE FROM contactus";
    $Delete_Table_contact_stmt = $connection->query($Delete_Table_contact);
    $_SESSION['Delete_Table_Users'] = "Users has been deleted";

    header("location:../admin/tabels.php");
    die();
}
#########################################################################################


if (isset($_POST['delete_user'])) {

    $user_id = $_POST['user_id'];

    $Delete_user = "SELECT * FROM users WHERE id=?";
    $Delete_user_stmt = $connection->prepare($Delete_user, []);
    $Delete_user_stmt->execute([$user_id]);

    $data = $Delete_user_stmt->fetchObject();

    if ($data) {
        $check = $user_id == $data->id;

        if ($check) {
            $Delete_user = "DELETE FROM users WHERE id=?";
            $Delete_user_stmt = $connection->prepare($Delete_user, []);
            $Delete_user_stmt->execute([$user_id]);

            $_SESSION['Delete_user'] = "The User has been successfully deleted";

            header("location:../admin/tabels.php");
            die();
        }
    } else {

        $_SESSION['Error_booking'] = "This ID does not exist";

        header("location:../admin/tables/users/delete_user.php");
        die();
    }
}
#########################################################################################


if (isset($_POST['delete_trip'])) {

    $trip_id = $_POST['trip_id'];

    $Delete_trip = "SELECT * FROM inserttrip WHERE id=?";
    $Delete_trip_stmt = $connection->prepare($Delete_trip, []);
    $Delete_trip_stmt->execute([$trip_id]);

    $data = $Delete_trip_stmt->fetchObject();

    if ($data) {
        $check = $trip_id == $data->id;

        if ($check) {
            $Delete_trip = "DELETE FROM inserttrip WHERE id=?";
            $Delete_trip_stmt = $connection->prepare($Delete_trip, []);
            $Delete_trip_stmt->execute([$trip_id]);

            $_SESSION['Delete_trip'] = "The Trip has been successfully deleted";

            header("location:../admin/tabels.php");
            die();
        }
    } else {

        $_SESSION['Error_booking'] = "This ID does not exist";

        header("location:../admin/tables/trips/delete_trip.php");
        die();
    }
}

#########################################################################################


if (isset($_POST['delete_booking'])) {

    $booking_id = $_POST['booking_id'];

    $Delete_booking = "SELECT * FROM booking WHERE id=?";
    $Delete_booking_stmt = $connection->prepare($Delete_booking, []);
    $Delete_booking_stmt->execute([$booking_id]);

    $data = $Delete_booking_stmt->fetchObject();

    if ($data) {
        $check = $booking_id == $data->id;

        if ($check) {
            $Delete_booking = "DELETE FROM booking WHERE id=?";
            $Delete_booking_stmt = $connection->prepare($Delete_booking, []);
            $Delete_booking_stmt->execute([$booking_id]);

            $_SESSION['Delete_booking'] = "The booking has been successfully deleted";

            header("location:../admin/tabels.php");
            die();
        }
    } else {

        $_SESSION['Error_booking'] = "This ID does not exist";

        header("location:../admin/tables/booking/delete_booking.php");
        die();
    }
}