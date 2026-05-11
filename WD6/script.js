function validateForm() {

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let gender = document.getElementById("gender").value;
    let dob = document.getElementById("dob").value;

    if (name == "") {
        alert("Please enter your name");
        return false;
    }

    if (email == "") {
        alert("Please enter your email");
        return false;
    }

    if (!email.includes("@")) {
        alert("Enter a valid email");
        return false;
    }

    if (gender == "") {
        alert("Please select gender");
        return false;
    }

    if (dob == "") {
        alert("Please enter date of birth");
        return false;
    }

    alert("Form Submitted Successfully");
    return true;
}