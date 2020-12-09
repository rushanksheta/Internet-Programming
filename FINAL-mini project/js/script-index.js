console.log('Hi start, by script-index.JS .');

// This fuction is always executed before every function so that the verify cookies are checked before the user sees the page
(function display_status(){
    //console.log(100);
    status_cookie = accessCookie('status_cookie');
    type_cookie = accessCookie('type_cookie');
    if(status_cookie == 'Yes Verified'){
        var status = "<h3> Verified </h3>";

        if(type_cookie=='STUDENT'){
            document.getElementById('student_li').style.display="block";
            document.getElementById('professor_li').style.display="none";
        }
        else{
            document.getElementById('student_li').style.display="none";
            document.getElementById('professor_li').style.display="block";
        }
    document
        .getElementById("verify_status_block")
        .innerHTML = status;
    status_text = 'Verified';
    }
    else{
        var status = "<h3> Not Verified </h3>";
        document
            .getElementById("verify_status_block")
            .innerHTML = status;
        status_text = 'Not Verified';

        document.getElementById('student_li').style.display="none";
        document.getElementById('professor_li').style.display="none";
    }
})();

// Create cookie
function createCookie(cookieName,cookieValue,daysToExpire)
{
    var date = new Date();
    date.setTime(date.getTime()+(daysToExpire*24*60*60*1000));
    document.cookie = cookieName + "=" + cookieValue + "; expires=" + date.toGMTString();
    console.log('createCookie().');
}

// Get cookie
function accessCookie(cookieName)
{
    var name = cookieName + "=";
    var allCookieArray = document.cookie.split(';');
    for(var i=0; i<allCookieArray.length; i++)
    {
        var temp = allCookieArray[i].trim();
        if (temp.indexOf(name)==0)
        return temp.substring(name.length,temp.length);
    }
    return "";
    
}

// Save fname, lname, id into cookies (verify)
function save_into_cookie(){
    var id = document.getElementById('verify_id').value;
    var fname = document.getElementById('verify_fname').value.toUpperCase();
    var lname = document.getElementById('verify_lname').value.toUpperCase();

    createCookie('id_cookie', id, 1);
    createCookie('fname_cookie', fname, 1);
    createCookie('lname_cookie', lname, 1);
    // To check the entered details call a function
    // Function to check details fname, lname, id
        function verify_check(){

            // createCookie('status_cookie', "Not Verified", 1);
            id_cookie = accessCookie('id_cookie');
            fname_cookie = accessCookie('fname_cookie');
            lname_cookie = accessCookie('lname_cookie');
            //status_cookie = accessCookie('status_cookie');
            
            // check entered details from cookies with db JSON.
            for (var i = 0; i < details_json.length; i++) {
                // console.log('from cookie ' +id_cookie, fname_cookie, lname_cookie);
                // console.log('from jssson ' +details_json[4].First_name);
                //console.log(details_json[i].First_name+" "+details_json[i].Last_name+" "+details_json[i].ID)

                // actual checking and save status as a cookie.
                if(details_json[i].First_name == fname_cookie && details_json[i].Last_name == lname_cookie && details_json[i].ID == id_cookie){
                    createCookie('status_cookie', "Yes Verified", 1);
                    createCookie('type_cookie', details_json[i].type);
                    type_cookie = accessCookie("type_cookie");
                    alert("You are Verified, "+fname_cookie+" can access the "+type_cookie+" Form from the navigation menu.");
                    break;
                }
                else{
                    createCookie('status_cookie', "No Not-Verified", 1);
                    //alert("You are not verified, "+fname_cookie+" can only View the entered forms.");
                }
            }
            // popup based on above checking
            status_cookie = accessCookie('status_cookie');
            if(status_cookie == 'No Not-Verified')  
                alert("You are Not-Verified, "+fname_cookie+" can only view the Entered Details.");
            
            //alert(status_cookie);
            
        }
    verify_check();
  
}

// fuction to display status for verify
function display_status(){
    //console.log(100);
    status_cookie = accessCookie('status_cookie');
    type_cookie = accessCookie('type_cookie');
    if(status_cookie == 'Yes Verified'){
        var status = "<h3> Verified </h3>";
        if(type_cookie=='STUDENT'){
            document.getElementById('student_li').style.display="block";
            document.getElementById('professor_li').style.display="none";
        }
        else{
            document.getElementById('student_li').style.display="none";
            document.getElementById('professor_li').style.display="block";
        }
    document
        .getElementById("verify_status_block")
        .innerHTML = status;
    status_text = 'Verified';
    }
    else{
        var status = "<h3> Not Verified </h3>";
        document
            .getElementById("verify_status_block")
            .innerHTML = status;
        status_text = 'Not Verified';

        document.getElementById('student_li').style.display="none";
        document.getElementById('professor_li').style.display="none";
    }
};

// function to reset all cookies
function reset_cookie(){
    // Deleting a cookie
    document.cookie = "id_cookie=; max-age=0";
    document.cookie = "fname_cookie=; max-age=0";
    document.cookie = "lname_cookie=; max-age=0";
    document.cookie = "status_cookie=; max-age=0";
        
            // Specifying path and domain while deleting cookie
            //document.cookie = "fname=; path=/; domain=example.com; max-age=0";
}

// function to hide buttons as per verification
function hide_button(){
    
    var status_text = accessCookie("verify_status");
    if(status_text=='Verified'){
        document.getElementById('student_li').style.display="block";
        document.getElementById('professor_li').style.display="block";
        console.log('visible , VERIFIED');
    }
    else{
        document.getElementById('student_li').style.display="none";
        document.getElementById('professor_li').style.display="none";
        console.log('hidden, NOT VERIFIED');
    }
};

// run display_status every 1 second
setInterval(display_status, 1000);

// resets verify cookies after every form successfully entered, so that the next time you get a fresh non verified homa section.
document.getElementById("submit_bt_stu").addEventListener("click", reset_cookie);
document.getElementById("submit_bt_prof").addEventListener("click", reset_cookie);
