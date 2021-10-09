<?php

$id=$_POST["id"];
$cp=$_POST["cpf"];
$dat=$_POST["data"];

if (file_exists("usuarios/$id.txt")){
include("usuarios/$id.txt");
    if($cp=="$cpf" && $dat=="$data"){
 echo "<script>location.href='msg.php?msg=suasenha&volt=$id'</script>";
	
	}
	else{
	 echo "<script>location.href='msg.php?msg=dados'</script>";
	}
	 
}
else{
 echo "<script>location.href='msg.php?msg=id'</script>";
}

?>