<?php
/**
 * Session Class
 */
class Session{

	public static function init(){
         session_start();
	}   
 
  public static function set($key, $val){ // methode pour modifier 
    $_SESSION[$key] =  $val;
	} 
 
	public static function get($key){ // methode pour recupere 
		if (isset($_SESSION[$key])) {
			return $_SESSION[$key];
		}else {
			return false;
		}
	}  
    
   public static function destroy(){ // methode pour detruire 
   	session_destroy();
   	header("Location:login.php");
   } 
}
 
?>
