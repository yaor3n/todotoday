//show password logic for login/signup checkbox
document.addEventListener("DOMContentLoaded", function () {
    let showPasswordCheckbox = document.getElementById("show-password");
    let passwordField = document.getElementById("password");

    showPasswordCheckbox.addEventListener("change", function () {
        passwordField.type = this.checked ? "text" : "password";
    });
});

