var login = document.getElementById("login_form");
var admin = document.getElementById('admin_con');
var error = document.getElementById("error_login")

document.getElementById('submit').addEventListener('click', function(){
    var username = getData("username");
    var password = getData("password");

    if(username === "admin" && password == "admin"){
        login.style.display = "none";
        admin.style.display = "flex";
    }else{
        console.log(username);
        if(username != "admin"){
            showError("Incorrect Username");
            setTimeout(function(){
                error.style.display = "none";
                login.reset();
            }, 3000);
        }else if(password != "admin"){
            showError("Incorrect Password");
            setTimeout(function(){
                error.style.display = "none";
                login.reset();
            }, 3000);
        }
    }
})
function showError(word){
    error.innerHTML = word;
    error.style.display = "flex";
}
function getData(id){
    return document.getElementById(id).value;
}