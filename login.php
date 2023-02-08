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
    <section class="form login">
      <header>Welcome to Chattr Box</header>
      <form action="#" autocomplete="off">
        <div class="error-text">You have done something wrong</div>
        <!-- <div> -->
        <div class="field input">
          <label for="">Email</label>
          <input type="text" placeholder="john.doe@example.com" name="email" id="" />
        </div>
        <div class="field input">
          <label for="">Password</label>
          <input type="password" placeholder="Enter your password" name="password" id="" />
          <i class="fas fa-eye" aria-hidden="true">sh</i>
        </div>
        <!-- </div> -->
        <div class="field button">
          <input type="submit" value="Log In" />
        </div>
      </form>
      <div class="link">
        Not registered?
        <a href="/">Sign Up</a>
      </div>
    </section>
  </div>

  <script src="assets/javascript/toggle-password.js" type="text/javascript"></script>
  <script src="assets/javascript/login.js" type="text/javascript"></script>
</body>

</html>