<?php

    include "dbcon.php";

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Recruiting Form</title>
        <link rel="stylesheet" type="text/css" href="homePage.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
        <link rel="js" href="homePage.js">
    </head>
    <body>
        <!-- header-->
        <div id="divId1">
            <img src="images/Designer (1).jpeg" alt="institute logo">
            <div>
                <header>THE Institute</header>
                <p>Thilaka Higher Education Institute.</p>
            </div>
        </div>

        <!--form-->

        <div id="divId3">
            <form action="dbcon.php" method="POST">
                <label for="nic">NIC</label><br>
                <input type="text" id="nic" name="nic" class="formItems"><br>
                <label for="fullName">Full Name</label><br>
                <input type="text" id="fullName" name="full_name" class="formItems"><br>
                <label for="initials">Name with Initials</label><br>
                <input type="text" id="initials" name="name_with_initials" class="formItems"><br>
                <label for="age">Age</label><br>
                <input type="text" id="age" name="age" class="formItems"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email" class="formItems"><br>
                <label for="address">Address</label><br>
                <input type="text" id="address" name="permanent_address" class="formItems"><br>
                <label for="contact">Contact Number</label><br>
                <input type="text" id="contact" name="contact_number" class="formItems"><br>
                <label>Gender</label><br>
                <input type="radio" id="male" checked name="gender">
                <label for="male">Male</label>
                <input type="radio" id="female" name="gender">
                <label for="female">Female</label><br>
                <label>Select Subjects</label><br>
                <label for="sinhala" class="subjects">Sinhala</label>
                <input type="checkbox" id="sinhala" name="subjects[]"><br>
                <label for="english" class="subjects">English</label>
                <input type="checkbox" id="english" name="subjects[]"><br>
                <label for="maths" class="subjects">Mathematics</label>
                <input type="checkbox" id="maths" name="subjects[]"><br>
                <label for="science" class="subjects">Science</label>
                <input type="checkbox" id="science" name="subjects[]"><br>
                <label for="commerce" class="subjects">Accounting and Business Studeis</label>
                <input type="checkbox" id="commerce" name="subjects[]"><br>
                <label for="ict" class="subjects">Information Communication Technology</label>
                <input type="checkbox" id="ict" name="subjects[]"><br>
                <label for="grade">Select your grade</label>
                <select name="grade" id="grade">
                    <option value="6" selected>6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select><br>
                <input type="submit" value="submit" class="submit" class="submit" onclick="submitted()"><br>
            </form>
        </div>

        <!-- footer -->
        <div>
            <footer>
                <address>65B, Mahavihara Mawatha, Anuradhapura, Sri Lanka.</address>
                <a href="mailto:THI@edu.com?subject=Feedback&body=Hello%20there,">Email</a>
                <p>&copy; Thilaka Higher education Institute 2021</p>
            </footer>
        </div>

        <!-- js rewind -->

    </body>
</html>