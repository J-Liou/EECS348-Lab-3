function validatePassword() {
    var password1 = document.getElementById("password").value;
    var password2 = document.getElementById("confirm-password").value;

    if (password1.length < 8) {
        alert("Password must be at least 8 characters long!");
    } else if (password2.length < 8) {
        alert("Confirm password must be at least 8 characters long!");
    } else if (password1 !== password2) {
        alert("Passwords do not match!");
    } else {
        alert("Password is valid!");
    }
}