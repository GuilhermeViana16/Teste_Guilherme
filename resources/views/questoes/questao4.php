<?php
    $string="FabricaInfo";
    $chars=count_chars($string,1);
    $uppers=array_sum(array_filter($chars,function($k){return in_array($k,range(65,90));},ARRAY_FILTER_USE_KEY));
    var_export($uppers);
	echo "\n";
?>