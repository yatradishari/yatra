<?php 
    function short($text,$limit=100)
	{
		$length=strlen($text);
		if($length >$limit)
		{
			$new_text=substr($text,0,$limit)."...";
		}
		else
		{
			$new_text=$text;
		}
		return $new_text;
	}
	?>