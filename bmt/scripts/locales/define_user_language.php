<?php	
	if(!isset($selected_language)){
		include('language_detection.php'); 
		$languages=get_languages('data');
		if(!is_file('scripts/locales/'.$languages[0][1].'.php')){
			include('en.php');
		}else{
			include($languages[0][1].'.php');
		}
	}else{
		if(!is_file('scripts/locales/'.$selected_language.'.php')){
			include('en.php');
		}else{
			include($selected_language.'.php');
		}
	}
?>