var error = false;

function get(id){
    return document.getElementById(id);
}

function admininsertvalidatebyjs(){

    refreshadmininsertvalidatebyjs();

    if(get("adminid").value == ""){
        error = true;
        get("error_adminid").innerHTML = "*Admin ID Required.";
    }
    else if(get("adminid").value.length != 7){
        error = true;
        get("error_adminid").innerHTML = "*Admin Id must be 7 character.";
    }
    else{
        var hypen = 0;
        var number = 0;
        var bug = 0;
        var arr_adminid = get("adminid").value.split("");
        if(arr_adminid[2] == "-"){
            arr_adminid.forEach(function(aa){
                if(aa == "-"){
                    hypen++;
                }
                else if(aa >= 0 && aa <= 9){
                    number++;
                }
                else{
                    bug++;
                }
            });
        }
        else{
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
        if(arr_adminid[3] != "1"){
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
        else if(hypen > 1 || bug > 0){
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
    }

    if(get("name").value == ""){
        error = true;
        get("error_name").innerHTML = "*Admin name Required.";
    }
    else if(get("name").value.length < 3){
        error = true;
        get("error_name").innerHTML = "*Name must be greater then 2 letter";
    }
    else{
        var letter1 = 0;
        var number1 = 0;
        var space1 = 0;
        var arr_name = get("name").value.split("");
        arr_name.forEach(function(an){
            if(an >= "A" && an <= "Z"){
                letter1++;
            }
            else if(an >= "a" && an <= "z"){
                letter1++;
            }
            else if(an == ' '){
                space1++;
            }
            else if(an >= 0 && an <= 9){
                number1++;
            }
        });
        if(number1 >= 1){
            error = true;
            get("error_name").innerHTML = "*Name must be contain only Letter";
        }
    }

    if(get("salary").value == ""){
        error = true;
        get("error_salary").innerHTML = "*Must be need Salary";
    }
    else if(isNaN(get("salary").value) == true){
        error = true;
        get("error_salary").innerHTML = "*Salary must be contain only number";
    }

    if(get("email").value == ""){
        error = true;
        get("error_email").innerHTML = "*Must be need email";
    }
    else if(get("email").value.slice(-10) != "@gmail.com"){
        error = true;
        get("error_email").innerHTML = "*Email must contain someone@gmail.com";
    }
    else if(get("email").value.length < 11){
        error = true;
        get("error_email").innerHTML = "*Email must contain someone@gmail.com";
    }
    else{
        var letter2 = 0;
        var number2 = 0;
        var atsign = 0;
        var fullstop = 0;
        var bug2 = 0;
        var arr_email = get("email").value.split("");
        arr_email.forEach(function(ae){
            if(ae >= "a" && ae <= "z"){
                letter2++;
            }
            else if(ae >= 0 && ae <=9){
                number2++;
            }
            else if(ae == "@"){
                atsign++;
            }
            else if(ae == "."){
                fullstop++;
            }
            else{
                bug2++;
            }
        });
        if(atsign > 1 || bug2 > 0){
            get("error_email").innerHTML = "*Sorry, someone only letters (a-z), numbers (0-9), and periods (.) are allowed.";
        }
    }
    
    if(!validategender()){
        error = true;
        get("error_gender").innerHTML = "*Gender Must be Required";
    }
    function validategender(){
        var gender = document.querySelector('input[name="gender"]:checked');
        if(gender == null){
            return false;
        }
        else{
            return true;
        }
    }

    if(get("inputbdday").selectedIndex == 0 || get("inputbdmonth").selectedIndex == 0 || get("inputbdyear").selectedIndex == 0){
        error = true;
        get("error_inputbddaymonthyear").innerHTML = "*Birth Day, Month & Year Required";
    }

    if(get("inputnationality").selectedIndex == 0){
        error = true;
        get("error_nationality").innerHTML = "*Must be need Nationality";
    }

    if(get("inputreligion").selectedIndex == 0){
        error = true;
        get("error_religion").innerHTML = "*Must be need religion";
    }

    if(get("inputbloodgroup").selectedIndex == 0){
        error = true;
        get("error_inputbloodgroup").innerHTML = "*Blood Group Must be Required";

    }

    if(get("fathername").value == ""){
        error = true;
        get("error_fathername").innerHTML = "*Must be need Father Name";
    }
    else if(get("fathername").value.length < 3){
        error = true;
        get("error_fathername").innerHTML = "*Father Name must be greater then 2 letter";
    }
    else{
        var letter3 = 0;
        var number3 = 0;
        var space3 = 0;
        var arr_fathername = get("fathername").value.split("");
        arr_fathername.forEach(function(af){
            if(af >= "A" && af <= "Z"){
                letter3++;
            }
            else if(af >= "a" && af <= "z"){
                letter3++;
            }
            else if(af == ' '){
                space3++;
            }
            else if(af >= 0 && af <= 9){
                number3++;
            }
        });
        if(number3 >= 1){
            error = true;
            get("error_fathername").innerHTML = "*Father Name must be contain only Letter";
        }
    }

    if(get("mothername").value == ""){
        error = true;
        get("error_mothername").innerHTML = "*Must be need Mother Name";
    }
    else if(get("mothername").value.length < 3){
        error = true;
        get("error_mothername").innerHTML = "*Mother Name must be greater then 2 letter";
    }
    else{
        var letter4 = 0;
        var number4 = 0;
        var space4 = 0;
        var arr_mothername = get("mothername").value.split("");
        arr_mothername.forEach(function(am){
            if(am >= "A" && am <= "Z"){
                letter4++;
            }
            else if(am >= "a" && am <= "z"){
                letter4++;
            }
            else if(am == ' '){
                space4++;
            }
            else if(am >= 0 && am <= 9){
                number4++;
            }
        });
        if(number4 >= 1){
            error = true;
            get("error_mothername").innerHTML = "*Mother Name must be contain only Letter";
        }
    }

    if(get("inputjday").selectedIndex == 0 || get("inputjmonth").selectedIndex == 0 || get("inputjyear").selectedIndex == 0){
        error = true;
        get("error_inputjdaymonthyear").innerHTML = "*Join Day, Month & Year Required";
    }

    if(get("inputlday").selectedIndex == 0 || get("inputlmonth").selectedIndex == 0 || get("inputlyear").selectedIndex == 0){
        error = true;
        get("error_inputldaymonthyear").innerHTML = "*Left Day, Month & Year Required";
    }

    if(!validatequalification()){
        error = true;
        get("error_qualifications").innerHTML = "*Qualification must be Required";
    }
    function validatequalification(){
        var qualifications = document.querySelector('input[name="qualifications[]"]:checked');
        if(qualifications == null){
            return false;
        }
        else{
            return true;
        }
    }

    if(get("presentaddress").value == ""){
        error = true;
        get("error_presentaddress").innerHTML = "*Present Address Must be Required";
    }

    if(!validatesameaspresentaddress() && get("parmanentaddress").value == ""){
        error = true;
        get("error_parmanentaddress").innerHTML = "*Parmanent Address Must be Required";
    }
    function validatesameaspresentaddress(){
        var sameaspresentaddress = document.querySelector('input[name="sameaspresentaddress"]:checked');
        if(sameaspresentaddress == null){
            return false;
        }
        else{
            get("parmanentaddress").value = get("presentaddress").value;
            return true;
        }
    }

    if(get("contactnumber").value == ""){
        error = true;
        get("error_contactnumber").innerHTML = "*Contact Number Must be Required";
    }
    else if(isNaN(get("contactnumber").value) == true){
        error = true;
        get("error_contactnumber").innerHTML = "*Contact Number Must be Number";
    }

    if(get("image").files.length == 0){
        error = true;
        get("error_img").innerHTML = "*Image required";
    }
    else if(get("image").files[0].size >= 524288){
        error = true;
        get("error_img").innerHTML = "*File size must be excately .5 MB or 512 KB";
    }
    else {
        var filename = get("image").files[0].name;
        var fileextension = filename.substring(filename.lastIndexOf('.')+1);
        if(fileextension != "png" && fileextension != "jpeg" && fileextension != "jpg"){
            error = true;
            get("error_img").innerHTML = "*Please choose only png, jpg or jpeg file";
        }
    }

    return !error;

}

function refreshadmininsertvalidatebyjs(){
    error = false;
    get("error_adminid").innerHTML = "";
    get("error_name").innerHTML = "";
    get("error_salary").innerHTML = "";
    get("error_email").innerHTML = "";
    get("error_gender").innerHTML = "";
    get("error_inputbddaymonthyear").innerHTML = "";
    get("error_nationality").innerHTML = "";
    get("error_religion").innerHTML = "";
    get("error_inputbloodgroup").innerHTML = "";
    get("error_fathername").innerHTML = "";
    get("error_mothername").innerHTML = "";
    get("error_inputjdaymonthyear").innerHTML = "";
    get("error_inputldaymonthyear").innerHTML = "";
    get("error_qualifications").innerHTML = "";
    get("error_presentaddress").innerHTML = "";
    get("error_parmanentaddress").innerHTML = "";
    get("error_contactnumber").innerHTML = "";
    get("error_img").innerHTML = "";
}

function adminupdatevalidatebyjs(){

    refreshadminupdatevalidatebyjs();

    if(get("adminid").value == ""){
        error = true;
        get("error_adminid").innerHTML = "*Admin ID Required.";
    }
    else if(get("adminid").value.length != 7){
        error = true;
        get("error_adminid").innerHTML = "*Admin Id must be 7 character.";
    }
    else{
        var hypen = 0;
        var number = 0;
        var bug = 0;
        var arr_adminid = get("adminid").value.split("");
        if(arr_adminid[2] == "-"){
            arr_adminid.forEach(function(aa){
                if(aa == "-"){
                    hypen++;
                }
                else if(aa >= 0 && aa <= 9){
                    number++;
                }
                else{
                    bug++;
                }
            });
        }
        else{
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
        if(arr_adminid[3] != "1"){
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
        else if(hypen > 1 || bug > 0){
            error = true;
            get("error_adminid").innerHTML = "*Admin Id like as (**-1***)";
        }
    }
    if(get("name").value == ""){
        error = true;
        get("error_name").innerHTML = "*Admin name Required.";
    }
    else if(get("name").value.length < 3){
        error = true;
        get("error_name").innerHTML = "*Name must be greater then 2 letter";
    }
    else{
        var letter1 = 0;
        var number1 = 0;
        var space1 = 0;
        var arr_name = get("name").value.split("");
        arr_name.forEach(function(an){
            if(an >= "A" && an <= "Z"){
                letter1++;
            }
            else if(an >= "a" && an <= "z"){
                letter1++;
            }
            else if(an == ' '){
                space1++;
            }
            else if(an >= 0 && an <= 9){
                number1++;
            }
        });
        if(number1 >= 1){
            error = true;
            get("error_name").innerHTML = "*Name must be contain only Letter";
        }
    }

    if(get("salary").value == ""){
        error = true;
        get("error_salary").innerHTML = "*Must be need Salary";
    }
    else if(isNaN(get("salary").value) == true){
        error = true;
        get("error_salary").innerHTML = "*Salary must be contain only number";
    }

    if(get("email").value == ""){
        error = true;
        get("error_email").innerHTML = "*Must be need email";
    }
    else if(get("email").value.slice(-10) != "@gmail.com"){
        error = true;
        get("error_email").innerHTML = "*Email must contain someone@gmail.com";
    }
    else if(get("email").value.length < 11){
        error = true;
        get("error_email").innerHTML = "*Email must contain someone@gmail.com";
    }
    else{
        var letter2 = 0;
        var number2 = 0;
        var atsign = 0;
        var fullstop = 0;
        var bug2 = 0;
        var arr_email = get("email").value.split("");
        arr_email.forEach(function(ae){
            if(ae >= "a" && ae <= "z"){
                letter2++;
            }
            else if(ae >= 0 && ae <=9){
                number2++;
            }
            else if(ae == "@"){
                atsign++;
            }
            else if(ae == "."){
                fullstop++;
            }
            else{
                bug2++;
            }
        });
        if(atsign > 1 || bug2 > 0){
            get("error_email").innerHTML = "*Sorry, someone only letters (a-z), numbers (0-9), and periods (.) are allowed.";
        }
    }
    
    if(!validategender()){
        error = true;
        get("error_gender").innerHTML = "*Gender Must be Required";
    }
    function validategender(){
        var gender = document.querySelector('input[name="gender"]:checked');
        if(gender == null){
            return false;
        }
        else{
            return true;
        }
    }

    if(get("inputbdday").selectedIndex == 0 || get("inputbdmonth").selectedIndex == 0 || get("inputbdyear").selectedIndex == 0){
        error = true;
        get("error_inputbddaymonthyear").innerHTML = "*Birth Day, Month & Year Required";
    }

    if(get("inputnationality").selectedIndex == 0){
        error = true;
        get("error_nationality").innerHTML = "*Must be need Nationality";
    }

    if(get("inputreligion").selectedIndex == 0){
        error = true;
        get("error_religion").innerHTML = "*Must be need religion";
    }

    if(get("inputbloodgroup").selectedIndex == 0){
        error = true;
        get("error_inputbloodgroup").innerHTML = "*Blood Group Must be Required";

    }

    if(get("fathername").value == ""){
        error = true;
        get("error_fathername").innerHTML = "*Must be need Father Name";
    }
    else if(get("fathername").value.length < 3){
        error = true;
        get("error_fathername").innerHTML = "*Father Name must be greater then 2 letter";
    }
    else{
        var letter3 = 0;
        var number3 = 0;
        var space3 = 0;
        var arr_fathername = get("fathername").value.split("");
        arr_fathername.forEach(function(af){
            if(af >= "A" && af <= "Z"){
                letter3++;
            }
            else if(af >= "a" && af <= "z"){
                letter3++;
            }
            else if(af == ' '){
                space3++;
            }
            else if(af >= 0 && af <= 9){
                number3++;
            }
        });
        if(number3 >= 1){
            error = true;
            get("error_fathername").innerHTML = "*Father Name must be contain only Letter";
        }
    }

    if(get("mothername").value == ""){
        error = true;
        get("error_mothername").innerHTML = "*Must be need Mother Name";
    }
    else if(get("mothername").value.length < 3){
        error = true;
        get("error_mothername").innerHTML = "*Mother Name must be greater then 2 letter";
    }
    else{
        var letter4 = 0;
        var number4 = 0;
        var space4 = 0;
        var arr_mothername = get("mothername").value.split("");
        arr_mothername.forEach(function(am){
            if(am >= "A" && am <= "Z"){
                letter4++;
            }
            else if(am >= "a" && am <= "z"){
                letter4++;
            }
            else if(am == ' '){
                space4++;
            }
            else if(am >= 0 && am <= 9){
                number4++;
            }
        });
        if(number4 >= 1){
            error = true;
            get("error_mothername").innerHTML = "*Mother Name must be contain only Letter";
        }
    }

    if(get("inputjday").selectedIndex == 0 || get("inputjmonth").selectedIndex == 0 || get("inputjyear").selectedIndex == 0){
        error = true;
        get("error_inputjdaymonthyear").innerHTML = "*Join Day, Month & Year Required";
    }

    if(get("inputlday").selectedIndex == 0 || get("inputlmonth").selectedIndex == 0 || get("inputlyear").selectedIndex == 0){
        error = true;
        get("error_inputldaymonthyear").innerHTML = "*Left Day, Month & Year Required";
    }

    if(!validatequalification()){
        error = true;
        get("error_qualifications").innerHTML = "*Qualification must be Required";
    }
    function validatequalification(){
        var qualifications = document.querySelector('input[name="qualifications[]"]:checked');
        if(qualifications == null){
            return false;
        }
        else{
            return true;
        }
    }

    if(get("presentaddress").value == ""){
        error = true;
        get("error_presentaddress").innerHTML = "*Present Address Must be Required";
    }

    if(!validatesameaspresentaddress() && get("parmanentaddress").value == ""){
        error = true;
        get("error_parmanentaddress").innerHTML = "*Parmanent Address Must be Required";
    }
    function validatesameaspresentaddress(){
        var sameaspresentaddress = document.querySelector('input[name="sameaspresentaddress"]:checked');
        if(sameaspresentaddress == null){
            return false;
        }
        else{
            get("parmanentaddress").value = get("presentaddress").value;
            return true;
        }
    }

    if(get("contactnumber").value == ""){
        error = true;
        get("error_contactnumber").innerHTML = "*Contact Number Must be Required";
    }
    else if(isNaN(get("contactnumber").value) == true){
        error = true;
        get("error_contactnumber").innerHTML = "*Contact Number Must be Number";
    }

    return !error;

}

function refreshadminupdatevalidatebyjs(){
    error = false;
    get("error_adminid").innerHTML = "";
    get("error_name").innerHTML = "";
    get("error_salary").innerHTML = "";
    get("error_email").innerHTML = "";
    get("error_gender").innerHTML = "";
    get("error_inputbddaymonthyear").innerHTML = "";
    get("error_nationality").innerHTML = "";
    get("error_religion").innerHTML = "";
    get("error_inputbloodgroup").innerHTML = "";
    get("error_fathername").innerHTML = "";
    get("error_mothername").innerHTML = "";
    get("error_inputjdaymonthyear").innerHTML = "";
    get("error_inputldaymonthyear").innerHTML = "";
    get("error_qualifications").innerHTML = "";
    get("error_presentaddress").innerHTML = "";
    get("error_parmanentaddress").innerHTML = "";
    get("error_contactnumber").innerHTML = "";
}

function courseinsertvalidatebyjs(){

    refreshcourseinsertvalidatebyjs();

    if(get("courseid").value == ""){
        error = true;
        get("error_courseid").innerHTML = "*Must Need Course ID";
    }
    else if(get("courseid").value.length != 7){
        error = true;
        get("error_courseid").innerHTML = "*Course ID must be 7 character.";
    }
    else{
        var hypen = 0;
        var number = 0;
        var bug = 0;
        var arr_courseid = get("courseid").value.split("");
        if(arr_courseid[2] == "-"){
            arr_courseid.forEach(function(ae){
                if(ae == "-"){
                    hypen++;
                }
                else if(ae >= 0 && ae <= 9){
                    number++;
                }
                else{
                    bug++;
                }
            });
        }
        else{
            error = true;
            get("error_courseid").innerHTML = "*Course Id like as (**-4***)";
        }
        if(arr_courseid[3] != "4"){
            error = true;
            get("error_courseid").innerHTML = "*Course Id like as (**-4***)";
        }
        else if(hypen > 1 || bug > 0){
            error = true;
            get("error_courseid").innerHTML = "*Course Id like as (**-4***)";
        }
    }

    if(get("coursename").value == ""){
        error = true;
        get("error_coursename").innerHTML = "*Must be need Course Name";
    }
    else if(get("coursename").value.length < 2){
        error = true;
        get("error_coursename").innerHTML = "*Course name must be greater then 1 letter";
    }
    else{
        var letter1 = 0;
        var number1 = 0;
        var space1 = 0;
        var arr_coursename = get("coursename").value.split("");
        arr_coursename.forEach(function(ac){
            if(ac >= "A" && ac <= "Z"){
                letter1++;
            }
            else if(ac >= "a" && ac <= "z"){
                letter1++;
            }
            else if(ac == ' '){
                space1++;
            }
            else if(ac >= 0 && ac <= 9){
                number1++;
            }
        });
        if(number1 >= 1){
            error = true;
            get("error_coursename").innerHTML = "*Course name must be contain only Letter";
        }
    }
    return !error;

}

function refreshcourseinsertvalidatebyjs(){
    error = false;
    get("error_courseid").innerHTML = "";
    get("error_coursename").innerHTML = "";
}