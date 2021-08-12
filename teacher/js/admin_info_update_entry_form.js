function get(id){
    return document.getElementById(id);
}
function admin_search(e){
    if(e.value == ""){
        get("suggesstion4").innerHTML = "";
        document.getElementById("suggesstion4").style.overflowY = "hidden";
    }
    else{
        var xhr = new XMLHttpRequest();
        xhr.open("GET","admin_info_update_search.php?userid="+e.value,true);
        xhr.onreadystatechange=function(){
            if(this.readyState == 4 && this.status == 200){
                document.getElementById("suggesstion4").style.overflowY = "scroll";
                get("suggesstion4").innerHTML = this.responseText;
            }
        };
        xhr.send();
    }
}