function setCookie(name, value, daysToLive) {
    // Encode value in order to escape semicolons, commas, and whitespace
    var cookie = name + "=" + encodeURIComponent(value);
    
    if(typeof daysToLive === "number") {
        /* Sets the max-age attribute so that the cookie expires
        after the specified number of days */
        cookie += "; max-age=" + (daysToLive*60*60);
        
        document.cookie = cookie;
    }
}

function getCookie(name) {
    // Split cookie string and get all individual name=value pairs in an array
    var cookieArr = document.cookie.split(";");
    
    // Loop through the array elements
    for(var i = 0; i < cookieArr.length; i++) {
        var cookiePair = cookieArr[i].split("=");
        
        /* Removing whitespace at the beginning of the cookie name
        and compare it with the given string */
        if(name == cookiePair[0].trim()) {
            // Decode the cookie value and return
            return decodeURIComponent(cookiePair[1]);
        }
    }
    
    // Return null if not found
    return null;
}

function signin_check(){
    var uname_s = document.getElementById('username_s').value;
    var pswd_s = document.getElementById('password_s').value;
    var name = document.getElementById('name').value;
    var mobile = document.getElementById('mobile').value;
    var email = document.getElementById('email').value;
    var address = document.getElementById('address').value;
    if (uname_s.length>3 && pswd_s.length>3){
        setCookie("userid", uname_s, 1);
        setCookie("password", pswd_s, 1);
        setCookie("name", name, 1);
        setCookie("mobile", mobile, 1);
        setCookie("email", email, 1);
        setCookie("address", address, 1);
        alert("Registered Successfully");
    }
    else{
        alert("Username and Password must be greater then 3 characters");
    }
}
		function login_check(){
            //var newObj = new Object()
                var uname_l = document.getElementById('username_l').value;
                var pswd_l = document.getElementById('password_l').value;
                
                setCookie("userid_l", uname_l, 1);
                setCookie("password_l", pswd_l, 1);

                uname_s = getCookie("userid");
                pswd_s = getCookie("password");


                function status_check(){
                    if (uname_l==uname_s && pswd_l==pswd_s){
                        alert("welcome");
                        var status = "<h4>Successfully Logged In</h4><p>";
                        document
                            .getElementById("login_status")
                            .innerHTML = status;
                    }
                    else{
                        alert("failed");
                        var status = "<h4>Not Logged In</h4>";
                        document
                            .getElementById("login_status")
                            .innerHTML = status;
                    }
                }
                status_check();
            
                // newObj.status_check = status_check;
                // return newObj;

}
function forgot_details(){
    var username = getCookie("userid");
    var password = getCookie("password");
    var mobile = getCookie("mobile");
    var email = getCookie("email");
    var email_forgot = prompt("Enter your registered email: ")
    var mobile_forgot = prompt("Enter your registered mobile: ")
    if(email_forgot==email && mobile_forgot==mobile){
        alert("Username: "+username+"\nPassword: "+password);
    }
    else{
        alert("Your email and mobile does not match.");
    }               
                
}
        function reset_details(){
            // Deleting a cookie
            document.cookie = "userid=; max-age=0";
            document.cookie = "password=; max-age=0";
        
            // Specifying path and domain while deleting cookie
            document.cookie = "userid_l=; max-age=0";
            document.cookie = "password_l=; max-age=0";
        }
        //setInterval(status_check, 1000);

// var func_Obj = new login_check();
// setInterval(func_Obj.status_check, 1000);
