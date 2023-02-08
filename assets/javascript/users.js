const searchBar = document.querySelector(".users .search input"),
  searchBtn = document.querySelector(".users .search button"),
  usersList = document.querySelector(".users .users-list");

searchBtn.addEventListener("click", function () {
  console.log("hello");
  searchBar.classList.toggle("active");
  searchBar.focus();
  searchBtn.classList.toggle("active");
});

setInterval(() => {
  //   use AJAX
  // create XHR object
  let xhr = new XMLHttpRequest();
  xhr.open("GET", "assets/php/users.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;

        usersList.innerHTML = data;
      }
    }
  };
  xhr.send();
}, 500); // 500ms timeout
