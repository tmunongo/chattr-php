const form = document.querySelector(".signup form"),
  submitBtn = form.querySelector(".button input");

form.addEventListener("submit", function (event) {
  event.preventDefault(); // prevent form from submitting
});

submitBtn.addEventListener("click", function () {
  //   use AJAX
  // create XHR object
  let xhr = new XMLHttpRequest();
  xhr.open("POST", "assets/php/signup.php", true);
  xhr.onload = () => {
    if (xhr.readyState === XMLHttpRequest.DONE) {
      if (xhr.status === 200) {
        let data = xhr.response;
        console.log(data);
      }
    }
  };
  //   we have to send the form data via AJAX to php
  //   create a form data object
  let formData = new FormData(form);
  //   send the form data to php
  xhr.send(formData);
});
