<?php
include_once "./config.php";
while ($row = mysqli_fetch_assoc($sql)) {
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
