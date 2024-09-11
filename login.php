<?php

    include "login-template.php";
    include "connection.php";

    if (isset($_POST["register"])) {
        header("Location: register.php");
        exit();
    }

    if(isset($_POST["login-button"])) {
        $email = $_POST["email"];
        $password = $_POST["password"];

        $sql_login = "SELECT persEmail, persPassword FROM persons WHERE persEmail = '$email'";
        $result = $conn->query($sql_login);

        
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if ($row["persPassword"] == $password) {
                    header("Location: dashboard.php");
                    exit();
                }
            }
        }

        header("Location: login.php?message=Invalid+email+or+password");
        exit();

    }

?>


<!-- include 'connection.php';
    if(isset($_POST['delete']))
    {
        $sqlDelete = "DELETE FROM orders WHERE id = $order_id";
        $result = $conn->query($sqlDelete);
        header("Location: order_search.php?status=Record+Deleted+Successfully");
        exit();
    } -->