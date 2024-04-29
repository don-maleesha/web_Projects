<!DOCTYPE html>
<html>
    <head>
        <title>Recruiting Form</title>
        <link rel="stylesheet" type="text/css" href="homePage.css">
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

        <div>
            <form action="">
                <label for="nic">NIC</label><br>
                <input type="text" id="nic" name="nic"><br>
                <label for="fullName">Name</label><br>
                <input type="text" id="fullName" name="full_name"><br>
                <label for="initials">Name with Initials</label><br>
                <input type="text" id="initials" name="name_with_initials"><br>
                <label for="age">Age</label><br>
                <input type="text" id="age" name="age"><br>
                <label for="email">Email</label><br>
                <input type="text" id="email" name="email"><br>
                <label for="address">Address</label>
                <input type="text" id="address" name="address"><br>
                <label for="contact">Contact Number</label><br>
                <input type="text" id="contact" name="contact_number"><br>
                <label for="gender">Gender</label>
                <label for="gender">Male</label>
                <label for="gender">Female</label>
                <input type="radio" id="gender" checked name="gender">
                <input type="radio" id="gender" name="gender"><br>
                <label for="subjects">Select Subjects</label><br>
                <label for="subjects">Sinhala</label>
                <input type="checkbox" id="subjects" name="subjects">
                <label for="subjects">English</label>
                <input type="checkbox" id="subjects" name="subjects">
                <label for="subjects">Mathematics</label>
                <input type="checkbox" id="subjects" name="subjects">
                <label for="subjects">Science</label>
                <input type="checkbox" id="subjects" name="subjects">
                <label for="subjects">Accounting and Bussiness Studeis</label>
                <input type="checkbox" id="subjects" name="subjects">
                <label for="subjects">Information Communication Technology</label>
                <input type="checkbox" id="subjects" name="subjects"><br>
                <label for="grade">Select your grade</label>
                <select name="grade" id="grade">
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8" selected>8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select><br>
                <input type="submit"><br>
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
    </body>
</html>