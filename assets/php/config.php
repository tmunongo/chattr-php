<?php
$conn = mysqli_connect("mysql-server", "root", "secret", "chat");
if (!$conn) {
    echo "Database connection established" . mysqli_connect_error();
}
