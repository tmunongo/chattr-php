<?php
session_start();
include_once "./config.php";

$sql = mysqli_query($conn, "SELECT * FROM users");
$output = "";

if (mysqli_num_rows($sql) == 1) {
    $output .= "No users available to chat.";
} elseif (mysqli_num_rows($sql) > 0) {
    while ($row = mysqli_fetch_array($sql)) {
        $output .= '<a href="#">
            <div class="content">
              <img src="./images/' . $row['img'] . '" alt="" />
              <div class="details">
                <span>' . $row['fname'] . " " . $row['lname'] . '</span>
                <p>Testing 1,2,3. Is this thing on?</p>
              </div>
            </div>
            <div class="status-dot">
              <i class="fas fa-circle"> </i>
            </div>
          </a>';
    }
}

echo $output;
