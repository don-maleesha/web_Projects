<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "THE_Institute";

//create the connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

//check connection
if (!$conn) {

    die("Connection Failes " . mysqli_connect_error());
}

if (isset($_POST['submit'])) {
    # code...

    $nic = $_POST['nic'];
    $fullName = $_POST['full_name'];
    $initials = $_POST['name_with_initials'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $address = $_POST['permanent_address'];
    $contact = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $subjects = $_POST['subjects'];
    $grade = $_POST['grade'];

    $selectedSubjects = implode(',', $subjects);

    $sql = "INSERT INTO student_details(nic, full_name, name_with_initials, age, email, permanent_address, contact_number, gender, subjects, grade)
            VALUES('$nic', '$fullName', '$initials', '$age', '$email', '$address', '$contact', '$gender', '$selectedSubjects', '$grade')";

    $reuslt = mysqli_query($conn, $sql);

    if ($reuslt) {
        # code...
        echo "Done";

    } else {

        die ("Connection Failed" . mysqli_connect_error());

    }
}
