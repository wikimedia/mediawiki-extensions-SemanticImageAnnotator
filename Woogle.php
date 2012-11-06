<?php
 class WoogleUtil {
 private static function writeLog($msg, $file){

   $prefix  = '[' . date('Y-m-d H:i:S') . '] ';
   $logline  = $prefix . $msg . "\n";
   
    $dFile = fopen(WoogleUtil::getLogPath() . $file, 'a');
    fwrite($dFile, $logline);
    fclose($dFile);

 }
 
 public static function debug($msg) {
 // if (WoogleConfig::get('useDebugLogging', false)) 
  self::writeLog($msg, 'debug.log');
 }
 
 public static function info($msg){
  self::writeLog($msg, 'info.log');
 }

 public static function error($msg){
  self::writeLog($msg, 'error.log');
 }
 /**
  * @return  String, path of directory where log files are written
  * 
  * Example: "R:\dev\htdocs\wiki\extensions\Woogle\logs\"
  */
 public static function getLogPath() {
  //WoogleUtil::profileIn(__METHOD__);
  //return WoogleUtil::profileOut(__METHOD__, dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR);
  //return dirname(__FILE__) . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'logs' . DIRECTORY_SEPARATOR;
  return dirname(__FILE__) . DIRECTORY_SEPARATOR;
  
  //return "c:/wooglelogs/";
 }
 }
 ?>