<?php

 function user_loggedin(){
 	if(isset($_SESSION['success'])){
 		return true;
 	}  
 }  