var dropdowncontainer = document.getElementById("dropdowncontainer");
var dropdowncontainer1 = document.getElementById("dropdowncontainer1");
var dropdowncontainer2 = document.getElementById("dropdowncontainer2");
var dropdowncontainer3 = document.getElementById("dropdowncontainer3");
var dropdowncontainer4 = document.getElementById("dropdowncontainer4");
var dropdowncontainer5 = document.getElementById("dropdowncontainer5");

var i;
var dropdown = document.getElementsByClassName("dropdownjs");

for(i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if(dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer1.style.display = "none";
      dropdowncontainer2.style.display = "none";
      dropdowncontainer3.style.display = "none";
      dropdowncontainer4.style.display = "none";
      dropdowncontainer5.style.display = "none";
    }
  });
}

var dropdown1 = document.getElementsByClassName("dropdownjs1");

for (i = 0; i < dropdown1.length; i++) {
  dropdown1[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if(dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer.style.display = "none";
      dropdowncontainer2.style.display = "none";
      dropdowncontainer3.style.display = "none";
      dropdowncontainer4.style.display = "none";
      dropdowncontainer5.style.display = "none";
    }
  });
}

var dropdown2 = document.getElementsByClassName("dropdownjs2");

for(i = 0; i < dropdown2.length; i++) {
  dropdown2[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer.style.display = "none";
      dropdowncontainer1.style.display = "none";
      dropdowncontainer3.style.display = "none";
      dropdowncontainer4.style.display = "none";
      dropdowncontainer5.style.display = "none";
    }
  });
}

var dropdown3 = document.getElementsByClassName("dropdownjs3");

for (i = 0; i < dropdown3.length; i++) {
  dropdown3[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer.style.display = "none";
      dropdowncontainer1.style.display = "none";
      dropdowncontainer2.style.display = "none";
      dropdowncontainer4.style.display = "none";
      dropdowncontainer5.style.display = "none";
    }
  });
}

var dropdown4 = document.getElementsByClassName("dropdownjs4");

for (i = 0; i < dropdown4.length; i++) {
  dropdown4[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer.style.display = "none";
      dropdowncontainer1.style.display = "none";
      dropdowncontainer2.style.display = "none";
      dropdowncontainer3.style.display = "none";
      dropdowncontainer5.style.display = "none";
    }
  });
}

var dropdown5 = document.getElementsByClassName("dropdownjs5");

for (i = 0; i < dropdown5.length; i++) {
  dropdown5[i].addEventListener("click", function() {
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } 
    else{
      dropdownContent.style.display = "block";
      dropdowncontainer.style.display = "none";
      dropdowncontainer1.style.display = "none";
      dropdowncontainer2.style.display = "none";
      dropdowncontainer3.style.display = "none";
      dropdowncontainer4.style.display = "none";
    }
  });
}

window.addEventListener('mouseup',function(event){
  var pol = document.getElementById('dropdowncontainer');
  if(event.target != pol && event.target.parentNode != pol){
      pol.style.display = 'none';
  }
});  