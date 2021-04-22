<?php

/**
		* @param $chaine string la chaine a passer
		* @return $chaine
		* */
		function xss($chaine){
			return htmlspecialchars(trim($chaine));
		}

		/**
		* @param $num string numero du telephone
		* @return boolean
		* */

		function isPhone($num){
			if (ctype_digit($num) && strlen($num)=== 9)
				if (in_array(substr($num, 0, 2), ['70', '76', '77', '78']))
					return true;
			return false;
		}

		/**
		* @param $name string
		* @return boolean
		* */
		function isName($name){
            if(!empty(trim($name))){
                $tab = explode(' ', $name);
                foreach ($tab as $value) {
                    if (!ctype_alpha($value)) {
                        return false;
                    }
                }
            }
            return true;
		}

		/**
		* @param $data array 
		* @return boolean
		* */
		function notEmpty($data = []){
			if (count($data) > 0) {
				foreach ($data as $value) {
					if(empty(trim($value)))
						return false;
				}
				return true;
			}else{
				return false;
			}
		}

		/**
		 * Elle permet d'afficher les messages d'alert
		 */
		function getMessage(){
			if (isset($_SESSION['msg']['notif']) && count($_SESSION['msg']['notif']) != 0) {
				echo '<div class="alert alert-'.$_SESSION['msg']['class'].'">
				<button type="button" class="close" data-dismiss="alert" ><span aria-hidden="true">&times</span></button>';
		
				foreach ($_SESSION['msg']['notif'] as $error) {
					echo $error.'<br>';
				}
				echo '</div>';

				$_SESSION['msg'] = [];
			}
		}

		/**
		 * @param $msg array les messages
		 * @param $class string permet de recevoir les classes
		 */
		function saveMessage($msg = [], $class = "danger"){
			if (count($msg) > 0) {
				$_SESSION['msg']['notif'] = $msg;
				$_SESSION['msg']['class'] = $class;
			}
		}

function save_input_data()
    {
        foreach ($_POST as $key => $value) {
            if (strpos($key, 'password') === false)
                $_SESSION['input'][$key] = $value;
        }
    }

function get_input($key)
    {
        if (!empty($_SESSION['input'][$key]))
            return $_SESSION['input'][$key];

        return !empty($_SESSION['input'][$key])
            ? $_SESSION['input'][$key]
            : null;
    }

function clear_input_data()
{
        if (isset($_SESSION['input'])) {
            $_SESSION['input'] = [];
        }
}

function is_logged()
{
    if(isset($_SESSION['user']) && !empty($_SESSION['user']))
        return true;

    return false;
}
