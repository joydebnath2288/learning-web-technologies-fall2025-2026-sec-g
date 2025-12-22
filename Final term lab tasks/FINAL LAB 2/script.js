function validateForm() {
    let email = document.getElementById("email").value;
    let password = document.getElementById("password").value;

    let emailError = document.getElementById("emailError");
    let passwordError = document.getElementById("passwordError");

    emailError.textContent = "";
    passwordError.textContent = "";

    let isValid = true;

    // Email validation
    if (email === "") {
        emailError.textContent = "Email is required";
        isValid = false;
    } else if (!email.includes("@")) {
        emailError.textContent = "Enter a valid email";
        isValid = false;
    }

    // Password validation
    if (password === "") {
        passwordError.textContent = "Password is required";
        isValid = false;
    } else if (password.length < 6) {
        passwordError.textContent = "Password must be at least 6 characters";
        isValid = false;
    }

    return isValid;
}
