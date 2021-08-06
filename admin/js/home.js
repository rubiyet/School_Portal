function get(id){
    return document.getElementById(id);
}
function admin_search(e){
    if(e.value == ""){
        get("suggesstion3").innerHTML = "";
        document.getElementById("suggesstion3").style.overflowY = "hidden";
    }
    else{
        var xhr = new XMLHttpRequest();
        xhr.open("GET","home_admin_search.php?userid="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("suggesstion3").style.overflowY = "scroll";
                get("suggesstion3").innerHTML = this.responseText;
            }
        };
        xhr.send();
    }
}
