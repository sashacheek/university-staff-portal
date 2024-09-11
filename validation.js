function validateRegister() {
    var validEmail = false;
    var validPassword = false;
    var validFirst = false;
    var validLast = false;
    var validPhone = false;
    var validOffice = false;
    var validDept = false;

    // email
    var emailRegEx = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/;
    var email = document.getElementById("email").value;
    var emailError = document.getElementById("email-error");
    if ((email.length > 0) && (emailRegEx.test(email))) {
        emailError.innerHTML = "";
        validEmail = true;
    }
    else {
        emailError.innerHTML = "Invalid email";
    }

    // password
    var password = document.getElementById("password").value;
    passwordError = document.getElementById("password-error");
    if (password.length <= 7) {
        passwordError.innerHTML = "Invalid password";
    }
    else {
        passwordError.innerHTML = "";
        validPassword = true;
    }
    
    // firstname
    var firstname = document.getElementById("first-name").value;
    firstError = document.getElementById("first-error");
    if (firstname.length <= 0) {
        firstError.innerHTML = "Invalid first name";
    }
    else {
        firstError.innerHTML = "";
        validFirst = true;
    }

    // lastname
    var lastname = document.getElementById("last-name").value;
    lastError = document.getElementById("last-error");
    if (lastname.length <= 0) {
       lastError.innerHTML = "Invalid last name";
    }
    else {
        lastError.innerHTML = "";
        validLast = true;
    }

    // phonenumber
    var phone = document.getElementById("phone-number").value;
    phoneError = document.getElementById("phone-error");
    if (phone.length <= 0) {
        phoneError.innerHTML = "Invalid phone number";
    }
    else {
        phoneError.innerHTML = "";
        validPhone = true;
    }

    // office
    var office = document.getElementById("office-location").value;
    officeError = document.getElementById("office-error");
    if (office.length <= 0) {
        officeError.innerHTML = "Invalid office location";
    }
    else {
        officeError.innerHTML = "";
        validOffice = true;
    }

    // department
    var dept = document.getElementById("department").value;
    deptError = document.getElementById("dept-error");
    if (dept.length <= 0) {
        deptError.innerHTML = "Invalid department";
    }
    else {
        deptError.innerHTML = "";
        validDept = true;
    }

    if (validEmail && validPassword && validFirst && validLast && validPhone && validOffice && validDept) {
        return true;
    }
    else {
        return false;
    }
}

function init() {
    var register = document.getElementById("register");
    register.onsubmit = validateRegister;
    var validate = document.getElementById("validate-button");
    validate.addEventListener("click", validateRegister);
    // .onsubmit = validateLogin();
}

window.onload = init;