<?php
    // $invalid_message = "";
    // include "login-template.php";

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

include 'connection.php';

$sql = "SELECT deptName, deptId FROM departments";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $deptEntry = "";
    $deptEntry .= "<h2 class='deptheading'>Departments</h2>";
    $deptEntry .= "<div class='departments'>";

    while($row = $result->fetch_assoc()) {
        $deptName = $row['deptName'];
        $deptId = $row['deptId'];
        $shortName = strtolower(substr($deptName, 0, 4));

        $deptEntry .= "<div class=dept-entry>";
        $deptEntry .= "<form method='get' id='dept$shortName' name='dept$shortName' action='department.php?deptid=" . "$deptId" ."'>";
        $deptEntry .= "<input type='submit' value='EDIT' class='button dept-entry-button'></input>";
        $deptEntry .= "<input name='deptid' id='deptid' value='$deptId' class='hidden'/>";
        $deptEntry .= "</form>";
        $deptEntry .= "<h3>$deptName</h3>";
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