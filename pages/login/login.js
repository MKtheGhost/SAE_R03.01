function checkLogin() {
    var email = document.getElementsByClassName("login_email")[0];
    email = email.text;

    var password = document.getElementsByClassName("login_password")[0];
    password = password.text;

    var credentials = getUserWithEmail(email);

    if (credentials !== null && credentials !== undefined) {
        if (credentials.userPassword == password) {
            return true;
        }
    } else {
        alert("Email or password incorrect");
    }

    return false;
}


function getUserWithEmail(email) {
    var responseArray = [];
    $.ajax({
        method: "GET",
        url: "./API/users" + "?userEmail=" + email
    }).done(function(fetcheddata) {
        //parse ajax return requires a try catch : 
        try {
            const response = JSON.parse(fetcheddata);
            if (response.state !== "error" && response.result !== {}) {
                responseArray = response.result;
            }
        } catch (e) {
            console.error("Parsing error:", e);
        }
    }).fail(function(xhr, status, error) {
        //Ajax request failed.
        var errorMessage = xhr.status + ': ' + xhr.statusText;
        console.log('Error - ' + errorMessage);
    });
}