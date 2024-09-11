<?php
include 'connection.php';

$sql = 'SELECT deptName FROM departments';
$result = $conn->query($sql);

$dept_options = "";

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $dept = $row['deptName'];
        $dept_options .= "<option value='$dept'>$dept</option>";
    }
}

if (isset($_POST['first-name'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $firstName = $_POST['first-name'];
    $lastName = $_POST['last-name'];
    $phoneNumber = $_POST['phone-number'];
    $office = $_POST['office-location'];
    $department = $_POST['department'];
    $deptId = 0;

    $sql1 = "SELECT deptId FROM departments WHERE '$department' = deptName";
    $result1 = $conn->query($sql1);
    if ($result1->num_rows > 0) {
        while($row = $result1->fetch_assoc()) {
            $deptId = $row['deptId'];
        }
    }

    $sql2 = "INSERT INTO persons VALUES (DEFAULT, '$email', '$password', '$firstName', '$lastName', '$phoneNumber', '$office', '$deptId')";
    $result2 = $conn->query($sql2);

    if ($result2) {
        echo "<h1>SUCCESS</h1>";
    }
    else {
        echo "<h1>ERROR</h1>";
    }

    // if ($result2->num_rows > 0) {
    //     while($row = $result2->fetch_assoc()) {
    //         $dept = $row['deptName'];
    //         $dept_options .= "<option value='$dept'>$dept</option>";
    //     }   
    // }

}



echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='style.css'>
    <title>Document</title>
</head>
<body>
    <div class='wrapper'>
        <header>
            <h1>University Staff</h1>
        </header>
        <main>
            <div class='login-top'><h2>Register</h2></div>
            <form action='register.php' method='post' class='staff-forms' id='register' name='register'>
                <div></div>
                <div>
                    <label for='email'>Email</label>
                    <input type='text' id='email' name='email'>
                    <span id='email-error' class='message error'></span>
                </div>
                <div>
                    <label for='password'>Password</label>
                    <input type='password' id='password' name='password'>
                    <span id='password-error' class='message error'></span>
                </div>
                <div>
                    <label for='first-name'>First Name</label>
                    <input type='text' id='first-name' name='first-name'>
                    <span id='first-error' class='message error'></span>
                </div>
                <div>
                    <label for='last-name'>Last Name</label>
                    <input type='text' id='last-name' name='last-name'>
                    <span id='last-error' class='message error'></span>
                </div>
                <div>
                    <label for='phone-number'>Phone Number</label>
                    <input type='text' id='phone-number' name='phone-number'>
                    <span id='phone-error' class='message error'></span>
                </div>
                <div>
                    <label for='office-location'>Office Location</label>
                    <input type='text' id='office-location' name='office-location'>
                    <span id='office-error' class='message error'></span>
                </div>
                <div>
                    <label for='department'>Department</label>
                    <select name='department' id='department'>
                    $dept_options
                    </select>
                    <span id='dept-error' class='message error'></span>
                </div>
                <div><span id='login-error'></span></div>
                <div>
                    <label for='validate-button'></label>
                    <a class='button' href='login.php'>Log in</a>>
                    <input type='submit' id='register-button' name='register-button' class='button' value='Register'>
                </div>
            </form>
        </main>
    </div>
    <script src='validation.js'></script>
</body>
</html>";

?>