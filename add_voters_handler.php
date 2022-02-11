<?php
//Check if the button add has been clicked
if (isset($_POST["btn_add"])){
    //Start receiving data from the form
    $voterName = $_POST["v_name"];
    $voterIdNumber = $_POST["v_id_number"];
    $voterCounty = $_POST["v_county"];
    $voterGender = $_POST["v_gender"];
    $voterPhoneNumber = $_POST["v_phone_number"];
    //Create another php file for db
    //Connect to the database to save-- the file you created.
    require_once "db_connection.php";
        //Inserting data into the SQL.
    //Create a SQL statement for inserting.
    $sql="INSERT INTO `voters_table` (`id`, `v_name`, `v_id_number`, `v_county`, `v_gender`, `v_phone_number`) 
VALUES (NULL, '$voterName', '$voterIdNumber', '$voterCounty', '$voterGender', '$voterPhoneNumber')";
    //Implementing the sql query
    $save=mysqli_query($connection,$sql);
    //Checking if the data has been entered successfully
    if (isset($save)){
        echo "<script>alert('Data saved successfully!!!')</script>";
    }else{
        echo "<script>alert('Data not saved!!!')</script>";
    }

}