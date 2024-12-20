<?php 
        session_start();
        $db = mysqli_connect('localhost', 'root', '', 'crud');

        if(!$db)
        {
                die("Connection failed: ".mysqli_connect_error());
        }
        // initialize variables
        $name = "";
        $address = "";
        $id = 0;
        $update = false;

        if (isset($_POST['save'])) {
                $name = mysqli_real_escape_string($db,$_POST['name']);
                $address = mysqli_real_escape_string($db,$_POST['address']);

                mysqli_query($db, "INSERT INTO info(name,address) VALUES ('$name','$address')"); 
                $_SESSION['message'] = "Address saved"; 
                header('location: index.php');
        }

        if(isset($_POST['update']))
        {
                $id = $_POST['id'];
                $name = mysqli_real_escape_string($db, $_POST['name']);
                $address = mysqli_real_escape_string($db, $_POST['address']);

                mysqli_query($db, "UPDATE info SET name='$name', address = '$address' WHERE id=$id");
                $_SESSION['message'] = "Address updated!";
                header('location: index.php');
        }

        if(isset($_GET['del']))
        {
                $id = $_GET['del'];
                mysqli_query($db, "DELETE FROM info WHERE id=$id");
                $_SESSION['message'] = "Address deleted!";
                header('location:index.php');
        }