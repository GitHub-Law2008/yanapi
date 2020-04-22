<?php
if ($_GET['charset']=='GBK'){
    header('Content-Type: text/html; charset=GBK');
      $array=file('data.txt');
  $rand=rand(0,3385);
  function utf8_to_gbk($str){
    return mb_convert_encoding($str, 'gbk', 'utf-8');
}
    $string=$array[$rand];
    if ($_GET['code']==='js') {
          echo "function xlhitokoto(){document.write(\"";
          echo trim(utf8_to_gbk($string)) . "\");}";
        }else{
          echo trim(utf8_to_gbk($string));
          }
	}else{
    header('Content-Type: text/html; charset=UTF-8');
  $array=file('data.txt');
  $rand=rand(0,3385);
  $string=$array[$rand];
    if ($_GET['code']==='js') {
          echo "function xlhitokoto(){document.write(\"";
          echo trim($string);
          echo "\");}";
        }else{
          echo trim($string);
          }
	}
?>
