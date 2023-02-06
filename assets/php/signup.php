<?php
include_once "config.php";

$fname = mysqli_real_escape_string($conn, $_POST['fname']);
$lname = mysqli_real_escape_string($conn, $_POST['lname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
    // check the user's email address for validity
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // if email is valid
        // check if it already exists in the database
        $sql = mysqli_query($conn, "SELECT $email FROM users WHERE email = '{$email}'");
        if (mysqli_num_rows($sql) > 0) {
            // if email already exists in the database
            echo "$email is already in use!";
        } else {
            // check if the user uploaded a file
            if (isset($_FILES['image'])) {
                // if a file was uploaded
                // get it's name
                $img_name = $_FILES['image']['name'];
                $img_type = $_FILES['image']['type'];
                // used to save/move file in our folder
                $tmp_name = $_FILES['image']['tmp_name'];

                // explode image and get its extension
                $img_explode = explode('.', $img_name);
                $img_ext = end($img_explode);
                // examples of valid extensions
                $extensions = ['jpg', 'jpeg', 'png'];
                if (in_array($img_ext, $extensions) === true) {
                    // user upload has right extension
                    // current time used to give images a unique name
                    $time = time();
                    $new_img_name = $time . $img_name;
                    //  move user uploaded image to folder
                    if (move_uploaded_file($tmp_name, "images/.$new_img_name")) {
                        // when move successful
                        // status once user has signed in
                        $status = "Active now";
                        // create a random ID
                        $random_id = rand(time(), 100000000);
                    };
                } else {
                    echo "Please select a valid image file! - jpeg, jpg, png";
                }
            } else {

                echo "Please select an image file";
            }
        }
    } else {
        //  email is invalid
        echo "$email is not a valid email";
    }
} else {
    echo "All fields are required!";
}
