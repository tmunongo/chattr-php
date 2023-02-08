<?php
session_start();
if (isset($_SESSION['unique_id'])) {
  header("location: ./users.php");
}
?>

<?php
include_once "./header.php";
?>

<body>
  <div class="wrapper">
    <section class="form signup">
      <header>Welcome to Chattr Box</header>
      <form action="#" enctype="multipart/form-data" autocomplete="off">
        <div class="error-text">You have done something wrong</div>
        <div>
          <div class="name-details">
            <div class="field input">
              <label for="">First Name</label>
              <input type="text" placeholder="John" name="fname" id="" required />
            </div>
            <div class="field input">
              <label for="">Last Name</label>
              <input type="text" placeholder="Doe" name="lname" id="" required />
            </div>
          </div>
          <div class="field input">
            <label for="">Email</label>
            <input type="text" placeholder="john.doe@example.com" name="email" id="" required />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input type="password" placeholder="Enter new password" name="password" id="" required />
            <i class="fas fa-eye">sh</i>
          </div>
          <div class="field image">
            <label for="">Image</label>
            <input type="file" name="image" id="" required />
          </div>
        </div>
        <div class="field button">
          <input type="submit" value="Create Account" />
        </div>
      </form>
      <div class="link">
        Already Have An Account?
        <a href="/login.php">Sign In</a>
      </div>
    </section>
  </div>

  <script src="./assets/javascript/signup.js" type="text/javascript"></script>
  <script src="./assets/javascript/toggle-password.js" type="text/javascript"></script>
</body>

</html>