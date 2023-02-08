<?php
session_start();
if (!isset($_SESSION['unique_id'])) {
  header("location: ./login.php");
}
?>

<?php
include_once "./header.php";
?>

<body>
  <div class="wrapper">
    <section class="chat-area">
      <header>
        <a href="back-icon">
          <i class="fas fa-arrow-left"></i>
        </a>
        <img src="./assets/img/image.jpeg" alt="" />
        <div class="details">
          <span> Clubber Lang </span>
          <p>Active Now</p>
        </div>
      </header>
      <div class="chat-box">
        <div class="chat outgoing">
          <div class="details">
            <p>What an unruly mess I&apos;ve made</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="./assets/img/image.jpeg" alt="" />
          <div class="details">
            <p>
              I don't wear crosses nomore, Yashuah's coming back. I don&apos;t
              resonate with the concept of love and hate.
            </p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>What an unruly mess I&apos;ve made</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="./assets/img/image.jpeg" alt="" />
          <div class="details">
            <p>
              I don't wear crosses nomore, Yashuah's coming back. I don&apos;t
              resonate with the concept of love and hate.
            </p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>What an unruly mess I&apos;ve made</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="./assets/img/image.jpeg" alt="" />
          <div class="details">
            <p>
              I don't wear crosses nomore, Yashuah's coming back. I don&apos;t
              resonate with the concept of love and hate.
            </p>
          </div>
        </div>
        <div class="chat outgoing">
          <div class="details">
            <p>What an unruly mess I&apos;ve made</p>
          </div>
        </div>
        <div class="chat incoming">
          <img src="./assets/img/image.jpeg" alt="" />
          <div class="details">
            <p>
              I don't wear crosses nomore, Yashuah's coming back. I don&apos;t
              resonate with the concept of love and hate.
            </p>
          </div>
        </div>
      </div>
      <form action="" class="typing-area">
        <input type="text" placeholder="Type a message..." />
        <button>
          <i class="fab fa-telegram-plane"></i>
        </button>
      </form>
    </section>
  </div>
</body>

</html>