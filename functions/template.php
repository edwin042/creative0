<?php  
	function template($file, $tempVars){
		extract($tempVars);
		ob_start();
		require $file;
		$content = ob_get_clean();
		return $content;
	}
?>