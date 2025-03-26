//show password logic for login/signup checkbox
//DOM thing is to make sure that the webpage is loaded before it runs
document.addEventListener("DOMContentLoaded", function () {
    let showPasswordCheckbox = document.getElementById("show-password");
    let passwordField = document.getElementById("password");

    showPasswordCheckbox.addEventListener("change", function () {
        passwordField.type = this.checked ? "text" : "password";
    });
});

