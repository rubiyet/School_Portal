<?php
	$db_server="localhost";
	$db_uname="root";
	$db_pass="";
	$db_name="aisbportal";
	$connect = mysqli_connect($db_server,$db_uname,$db_pass,$db_name); 

    function execute($query)  //===================resoponsilbe for running insert , upadate , delete=================
    {
      global $db_server,$db_uname,$db_pass,$db_name;
      $conn=mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
      if($conn)
      {
         if(mysqli_query($conn,$query))
        {return true ;}
    else{
      return mysqli_error($conn);}
     }
    }
    
    function get($query)  //==============================resoponsilbe for running select query=========
    {
       global $db_server,$db_uname ,$db_pass,$db_name;
       $conn=mysqli_connect($db_server,$db_uname,$db_pass,$db_name);
       $data=array();
       if($conn)
       {
         $result=mysqli_query($conn,$query);
         while($row=mysqli_fetch_assoc($result)){
           $data[]=$row;
         }
    }
      return $data;
    }



?>
