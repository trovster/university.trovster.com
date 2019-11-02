<?php
ini_set('session.use_trans_sid', false);
session_start();

// if the user-agent/browser accepts XHTML as application/xml then send the correct doctype
// else send as plain text/html. Mainly for Internet Explorer.
if (stristr($_SERVER['HTTP_ACCEPT'],'application/xhtml+xml') || !isset($_SERVER['HTTP_ACCEPT']))
{
	header("Content-type: application/xhtml+xml; charset=utf-8");
}
else
{
	header("Content-type: text/html; charset=utf-8");
}

function truncate($str, $len, $el='&#8230;')
{
	if (strlen($str) > $len)
	{
		$xl = strlen($el);
		if ($len < $xl)
		{
			return substr($str, 0, $len);
		}
		$str = substr($str, 0, $len-$xl);
		$spc = strrpos($str, ' ');
		
		if ($spc > 0)
		{
			$str = substr($str, 0, $spc);
		}
	return $str.$el;
	}
	return $str;
}

function wordcount($input)
{ 
	return substr_count($input,' ') + 1; 
}

if(!function_exists('file_get_contents'))
{
   function file_get_contents($file)
	{
       return implode('', file($file));
   }
}
?>