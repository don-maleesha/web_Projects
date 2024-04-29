<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "THE_Institute";

    //create the connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //check connection
    if (!$conn) {

        die ("Connection Failes " . mysqli_connect_error());

    }

    $nic = mysqli_real_escape_string($conn, $_POST['nic']);
    $fullName = mysqli_real_escape_string($conn, $_POST['full_name']);
    $initials = mysqli_real_escape_string($conn, $_POST['name_with_initials']);
    $age = mysqli_real_escape_string($conn, $_POST['age']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $address = mysqli_real_escape_string($conn, $_POST['permanent_address']);
    $contact = mysqli_real_escape_string($conn, $_POST['contact_number']);
    $gender = mysqli_real_escape_string($conn, $_POST['gender']);
    $subjects = mysqli_real_escape_string($conn, $_POST['subjects']);
    $grade = mysqli_real_escape_string($conn, $_POST['grade']);

    $sql = "INSERT INTO student_details(nic, full_name, name_with_initials, age, email, permanent_address, contact_number, gender, subjects)
            VALUES('$nic', '$fullName' '$initials', '$age', '$email', '$address', '$contact', '$gender', '$subjects', '$grade')";

    if (mysqli_query($conn, $sql) === TRUE) {

        echo "<script>alert('Deatils Added');window.location.href='homePage.php;</script>";

    } else {

        echo "Error: " . $sql2 . "<br>" . mysqli_error($conn);

    }

    mysqli_close($conn);

?>