<?php 
    function short($text)
	{
		$length=strlen($text);
		if($length >100)
		{
			$new_text=substr($text,0,100)."...";
		}
		else
		{
			$new_text=$text;
		}
		return $new_text;
	}
	?>