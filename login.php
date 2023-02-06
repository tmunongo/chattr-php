<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Chattr | Tawanda</title>
    <link rel="stylesheet" href="style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudfare.com/ajax/libs/font-awesome/5.12.2/css/all.min.css"
    />
  </head>
  <body>
    <div class="wrapper">
      <section class="form login">
        <header>Welcome to Chattr Box</header>
        <form action="#">
          <div class="error-text">You have done something wrong</div>
          <!-- <div> -->
          <div class="field input">
            <label for="">Email</label>
            <input
              type="text"
              placeholder="john.doe@example.com"
              name=""
              id=""
            />
          </div>
          <div class="field input">
            <label for="">Password</label>
            <input
              type="password"
              placeholder="Enter your password"
              name=""
              id=""
            />
            <i class="fas fa-eye" aria-hidden="true">sh</i>
          </div>
          <!-- </div> -->
          <div class="field button">
            <input type="submit" value="Create Account" />
          </div>
        </form>
        <div class="link">
          Not registered?
          <a href="/">Sign Up</a>
        </div>
      </section>
    </div>

    <script src="assets/javascript/toggle-password.js" type="script"></script>
  </body>
</html>