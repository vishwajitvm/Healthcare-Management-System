function validateEmail() {
    const emailInput = document.getElementById("email");
    const emailValidationResponse = document.getElementById(
        "email_validation_response"
    );
    const email = emailInput.value;
    const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    if (email.match(emailPattern)) {
        emailValidationResponse.textContent = "";
    } else {
        emailValidationResponse.textContent =
            "Please enter a valid email address";
        emailValidationResponse.style.color = "red";
    }
}
const emailInput = document.getElementById("email");
emailInput.addEventListener("blur", validateEmail); // emailInput.addEventListener('keyup', validateEmail);
