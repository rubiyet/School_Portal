var error=false;

function get(id){
	return document.getElementById(id);
}
function teachervalidatebyjs(){
	refresh();
	if(get("teacherid").value==""){
		error=true;
		get("error_teacherid").innerHTML="*Teacher id required";
	}
	else if(get("teacherid").value.length != 7){
		error = true;
		get("error_teacherid").innerHTML="*Teacher Id must be 7 character";
	}
	
	else{
        var hypen = 0;
        var number = 0;
        var bug = 0;
        var arr_teacherid;
        arr_teacherid = get("teacherid").value.split("");
        if(arr_teacherid[2] == "-"){
            arr_teacherid.forEach(function(at){
                if(at == "-"){
                    hypen++;
                }
                else if(at >= 0 && at <= 9){
                    number++;
                }
                else{
                    bug++;
                }
            });
        }
        else{
            error = true;
            get("error_teacherid").innerHTML = "*Teacher Id like as (**-2***)";
        }
        if(arr_teacherid[3] != "2"){
            error = true;
            get("error_teacherid").innerHTML = "*Teacher Id like as (**-2***)";
        }
        else if(hypen > 1 || bug > 0){
            error = true;
            get("error_teacherid").innerHTML = "*Teacher Id like as (**-2***)";
        }
    }
	    if(get("name").value == ""){
        error = true;
        get("error_name").innerHTML = "*Teacher name Required.";
    }
    else if(get("name").value.length < 3){
        error = true;
        get("error_name").innerHTML = "*Name must be greater then 2 letter";
    }
    else{
        var letter1 = 0;
        var number1 = 0;
        var space1 = 0;
        var arr_name;
        arr_name = get("name").value.split("");
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
        letter2 = 0;
        number2 = 0;
        atsign = 0;
        fullstop = 0;
        bug2 = 0;
        arr_email = get("email").value.split("");
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
	if(get("input_day").selectedIndex == 0 || get("input_month").selectedIndex == 0 || get("input_year").selectedIndex == 0){
        error = 1;
        get("error_input_date_of_birth").innerHTML = "*Birth Day, Month & Year Required";
    }

    if(get("nationality").value == ""){
        error = 1;
        get("error_nationality").innerHTML = "*Must be need nationality";
    }
    else if(get("nationality").value.length < 3){
        error = 1;
        get("error_nationality").innerHTML = "*nationality must be greater then 2 letter";
    }
    else{
        var letter5 = 0;
        var number5 = 0;
        var space5 = 0;
        var arr_nationality;
        arr_nationality = get("nationality").value.split("");
        arr_nationality.forEach(function(an){
            if(an >= "A" && an <= "Z"){
                letter5++;
            }
            else if(an >= "a" && an <= "z"){
                letter5++;
            }
            else if(an == ' '){
                space5++;
            }
            else if(an >= 0 && an <= 9){
                number5++;
            }
        });
        if(number5 >= 1){
            error = 1;
            get("error_nationality").innerHTML = "*nationality must be contain only Letter";
        }
    }

    if(get("religion").value == ""){
		error = 1;
		get("error_religion").innerHTML = "*Must be need Religion";
	}
	else if(get("religion").value.length < 3){
		error = 1;
		get("error_religion").innerHTML = "*Religion must be greater then 2 letter";
	}
	else{
		var letter6 = 0;
		var number6 = 0;
		var space6 = 0;
		var arr_religion;
		arr_religion = get("religion").value.split("");
		arr_religion.forEach(function(ar){
			if(ar >= "A" && ar <= "Z"){
				letter6++;
			}
			else if(ar >= "a" && ar <= "z"){
				letter6++;
			}
			else if(ar == ' '){
				space6++;
			}
			else if(ar >= 0 && ar <= 9){
				number6++;
			}
		});
		if(number6 >= 1){
			error = 1;
			get("error_religion").innerHTML = "*Religion must be contain only Letter";
		}
	}

    if(get("blood_group").selectedIndex == 0){
        error = 1;
        get("error_blood_group").innerHTML = "*Blood Group Must be Required";

    }

   if(get("father_name").value == ""){
		error = 1;
		get("error_father_name").innerHTML = "*Must be need Father Name";
	}
	else if(get("father_name").value.length < 3){
		error = 1;
		get("error_father_name").innerHTML = "*Father Name must be greater then 2 letter";
	}
	else{
		var letter3 = 0;
		var number3 = 0;
		var space3 = 0;
		var arr_father_name;
		arr_father_name = get("father_name").value.split("");
		arr_father_name.forEach(function(af){
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
			error = 1;
			get("error_father_name").innerHTML = "*Father Name must be contain only Letter";
		}
	}

	if(get("mother_name").value == ""){
		error = 1;
		get("error_mother_name").innerHTML = "*Must be need Mother Name";
	}
	else if(get("mother_name").value.length < 3){
		error = 1;
		get("error_mother_name").innerHTML = "*Mother Name must be greater then 2 letter";
	}
	else{
		var letter4 = 0;
		var number4 = 0;
		var space4 = 0;
		var arr_mother_name;
		arr_mother_name = get("mother_name").value.split("");
		arr_mother_name.forEach(function(am){
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
			error = 1;
			get("error_mother_name").innerHTML = "*Mother Name must be contain only Letter";
		}
	}
	if(get("join_day").selectedIndex == 0 || get("join_month").selectedIndex == 0 || get("join_year").selectedIndex == 0){
        error = 1;
        get("error_join_date").innerHTML = "*Join Day, Month & Year Required";
    }
	if(get("left_day").selectedIndex == 0 || get("left_month").selectedIndex == 0 || get("left_year").selectedIndex == 0){
        error = 1;
        get("error_left_date").innerHTML = "*Left Day, Month & Year Required";
    }
	if(!validatequalifications()){
        error = true;
        get("error_qualifications").innerHTML = "*Qualifications Must be Required";
    }
    function validatequalifications(){
        var qualifications = document.querySelector('input[name="qualifications[]"]:checked');
        if(qualifications == null){
            return false;
        }
        else{
            return true;
        }
    }
	if(get("present_address").value == ""){
        error = true;
        get("error_present_address").innerHTML = "*Must be need Present Address";
    }
	if(get("parmanent_address").value == ""){
        error = true;
        get("error_parmanent_address").innerHTML = "*Must be need Parmanent Address";
    }
	if(get("contact_number").value == ""){
        error = true;
        get("error_contact_number").innerHTML = "*Must be need Contact Number";
    }
    else if(isNaN(get("contact_number").value) == true){
        error = true;
        get("error_contact_number").innerHTML = "*Contact Number must be contain only number";
    }

    

	return !error;
}
function refresh(){
    error = false;
    hypen = 0;
    number = 0;
    bug = 0;
    letter1 = 0;
    number1 = 0;
    get("error_teacherid").innerHTML = "";
    get("error_name").innerHTML = "";
    get("error_salary").innerHTML = "";
    get("error_email").innerHTML = "";
	get("error_gender").innerHTML = "";
	get("error_input_date_of_birth").innerHTML = "";
    get("error_nationality").innerHTML = "";
    get("error_religion").innerHTML = "";
    get("error_blood_group").innerHTML = "";
    get("error_father_name").innerHTML = "";
    get("error_mother_name").innerHTML = "";
	get("error_join_date").innerHTML = "";
	get("error_left_date").innerHTML = "";
	get("error_qualifications").innerHTML = "";
	get("error_present_address").innerHTML = "";
	get("error_parmanent_address").innerHTML = "";
	get("error_contact_number").innerHTML = "";

}