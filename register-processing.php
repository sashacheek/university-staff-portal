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

if (isset($_POST['first_name'])) {
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

    // if ($result2->num_rows > 0) {
    //     while($row = $result2->fetch_assoc()) {
    //         $dept = $row['deptName'];
    //         $dept_options .= "<option value='$dept'>$dept</option>";
    //     }   
    // }

}
?>