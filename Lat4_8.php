<?php
class one {
	private static $var=0;
				function __construct(){}
				
				static function disp(){
						print self::$var;
				}
				
				function __destruct() {}
}

One::disp();

?>