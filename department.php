<?php
    include 'connection.php';

    if (isset($_POST['dept-name'])) {
        $deptId = $_POST['dept-id'];
        $deptName = $_POST['dept-name'];
        $deptPhone = $_POST['dept-phone'];
        $deptEmail = $_POST['dept-email'];
        $deptOffice = $_POST['dept-office'];
    
        $sqlUpdate = "UPDATE departments SET deptName = '$deptName', deptPhone = '$deptPhone', deptOffice = '$deptOffice', deptEmail = '$deptEmail' WHERE deptID = $deptId";
        $result = $conn->query($sqlUpdate);
        header("Location: dashboard.php");
        exit();
    }

    echo '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
<div class="dash-wrapper">
<header>
<h1>University Staff</h1>
</header>';


$deptId = $_GET['deptid'];

$sql = "SELECT deptName, deptPhone, deptEmail, deptOffice FROM departments WHERE deptId = '$deptId'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $deptEntry = "";

    while($row = $result->fetch_assoc()) {
        $deptName = $row['deptName'];
        $deptPhone = $row['deptPhone'];
        $deptEmail = $row['deptEmail'];
        $deptOffice = $row['deptOffice'];

        $deptEntry .= "<h2 class='deptheading'>$deptName</h2>";
        $deptEntry .= "<div class='departments'>";
        
        $deptEntry .= "<div class=dept-entry>";
        $deptEntry .= "<form method='post' id='update' name='update' action='department.php'>";

        $deptEntry .= "<div>";
        $deptEntry .= "<label for='dept-name' class='dept-label'>Name</label>";
        $deptEntry .= "<input type='input' id='dept-name' name='dept-name' value='$deptName' class='dept-input'></input>";
        $deptEntry .= "</div>";
        $deptEntry .= "<div>";
        $deptEntry .= "<label for='dept-phone' class='dept-label'>Phone</label>";
        $deptEntry .= "<input type='input' id='dept-phone' name='dept-phone' value='$deptPhone' class='dept-input'></input>";
        $deptEntry .= "</div>";
        $deptEntry .= "<div>";
        $deptEntry .= "<label for='dept-email' class='dept-label'>Email</label>";
        $deptEntry .= "<input type='input' id='dept-email' name='dept-email' value='$deptEmail' class='dept-input'></input>";
        $deptEntry .= "</div>";
        $deptEntry .= "<div>";
        $deptEntry .= "<label for='dept-office' class='dept-label'>Office</label>";
        $deptEntry .= "<input type='input' id='dept-office' name='dept-office' value='$deptOffice' class='dept-input'></input>";
        $deptEntry .= "</div>";
        $deptEntry .= "<div>";
        $deptEntry .= "<input type='submit' id='update-button' name='update-button' value='Update' class='button'></input>";
        $deptEntry .= "</div>";
        $deptEntry .= "<div>";
        $deptEntry .= "<input type='input' id='dept-id' name='dept-id' value='$deptId' class='hidden'></input>";
        $deptEntry .= "</div>";


        $deptEntry .= "</form>";
        $deptEntry .= "</div>";
    }
    $deptEntry .= "</div>";
    echo $deptEntry;
}

$sql2 = "SELECT persFName, persLName, deptName FROM persons JOIN departments ON persons.persDept = departments.deptId";
$result2 = $conn->query($sql2);
if ($result2->num_rows > 0) {
    $persEntry = "<h2 class='deptheading'>Staff</h2>";
    $persEntry .= "<div class='staff'>"; 
    while($row = $result2->fetch_assoc()) {
        $persFName = $row["persFName"];
        $persLName = $row["persLName"];
        $persName = $persFName . " " . $persLName . " -";
        $persDept = $row["deptName"];

        $persEntry .= "<div class=dept-entry>";
        
        $persEntry.= "<h3>$persName</h3>";
        $persEntry .= "<h3>$persDept</h3>";
        $persEntry .= "</div>";
    }
    $persEntry .= "</div>";
    echo $persEntry;
}

echo '</div>
</body>
</html>';
?>