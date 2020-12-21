function login() {
    var username = document.getElementById("username");
    var pass = document.getElementById("password");

    if (username.value == "") {
        alert("Please enter username");
    }
    else if (pass.value  == "") {
        alert("Please enter password");
    }
    else if(username.value == "admin" && pass.value == "Skills39"){
        window.location.href="main.html";
    }
    else {
        alert("Worng username or password!")
    }
}