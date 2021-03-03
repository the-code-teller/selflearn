function signupValidation() {
    var result = true;

    // email
    var email = document.getElementById('studentEmail').value;
    var atIndex = email.indexOf('@');
    var dotIndex = email.indexOf('.');

    if (atIndex == 0 || dotIndex >= email.length-2 || dotIndex - atIndex < 3) {
        var warning = document.getElementById('emailFormatWarning');
        warning.style.display = 'block';
        result = false;
    }

    // password
    var password = document.getElementById('studentPassword').value;
    let s = false;
    let c = false;
    let n = false;
    let sc = false;
    for (let i = 0; i < password.length; i++) {
        const p = password[i];
        if (p >= 'A' && p <= 'Z') {
            c = true;
        } else if (p >= 'a' && p <= 'b') {
            s = true;
        } else if (p >= '0' && p <= '9') {
            n = true;
        } else if (p >= '!' && p <= '~') {
            sc = true;
        } else {
            break;
        }
    }
    if (c == false || s == false || n == false || sc == false) {
        let warning = document.getElementById('passwordFormatWarning');
        warning.style.display = 'block';
        result = false;
    }

    // confirm password
    var confirmPassword = document.getElementById('studentCPassword').value;
    var password = document.getElementById('studentPassword').value;
    if (password != confirmPassword) {
        var warning = document.getElementById('passwordUnmatchWarning');
        warning.style.display = 'block';
        result = false;
    }
    
    return result;
}

function checkEmail(str) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("invalidEmail").innerHTML = this.responseText;
            email = str;
        }
    }
    req.open("post", "checkEmail.php?w=1", true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send("email=" + str);
}

function verifyPassword(str) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById('wrongPassword').innerHTML = this.responseText;
        }
    }
    req.open("post", "checkEmail.php?email=" + email, true);
    req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    req.send("password=" + str);
}