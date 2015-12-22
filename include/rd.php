<?php


function SearchReplaceKw ($params)  
{  
    $sokw=$params['sokw'];
    $string=$params['string'];
    $useSafe=false;
    
  if($useSafe) $sokw = SafeStrip($sokw);  
  if(empty($sokw) || empty($string)) return $string;  
  $sokw = preg_replace('/\s+/','|',$sokw);  
 
 return preg_replace("/($sokw)/",'<span class="highlight">\\1</span>',$string); 
}  
  
/* 去除特殊字符,不包括空格 */  
function SafeStrip($kw)  
{  
  if(strlen($kw) == 0) return '';  
  $badString = '~!@#$%^&*()_+|-=\\{}[];\':",./<>?';  
  $length = strlen($badString);  
  $pos = 0;  
  while($pos < $length)  
  {  
    $kw = str_replace($badString{$pos},'',$kw);  
    $pos++;  
  }  
  return preg_replace('/([\r\n\t]+)/','',$kw);  
}  
  
function MkQueryString($string,$useSafe=true)  
{  
  if($useSafe) $string = SafeStrip($string);  
  if(empty($string)) return '';  
  return preg_replace("/([\s%]+)/",'%', '%'.trim($string).'%');  
} 

?>

