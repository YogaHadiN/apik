<?php
if (!function_exists('createSelectOption')) {
    function createSelectOption($object, $text)
    {
	  foreach ($object as $m) {
	  	$result[ (string) $m->id ] = ucfirst($m->$text);
	  }
	  return $result;
    }
}
if (!function_exists('array_sort_by_column')) {
	function array_sort_by_column($arr, $col, $dir = SORT_ASC) {
		$keys = array_column($arr,$col);
		array_multisort($keys, $dir, $arr);
	}
}

if (!function_exists('onlyWhenNumberExists')) {
    function onlyWhenNumberExists($arr){
        $res = [];
        foreach ($arr as $a) {
            if (!empty($a['number'])) {
                $res[] = $a;
            }
        }
        return $res;
    }
}

if (!function_exists('randomString')) {
    function randomString($n) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $randomString = '';
      
        for ($i = 0; $i < $n; $i++) {
            $index = rand(0, strlen($characters) - 1);
            $randomString .= $characters[$index];
        }
      
        return $randomString;
    }
}
if (!function_exists('uploadFileToS3')) {
    function uploadFileToS3($value, $filepath){
        if( is_file($value) ) {
            $extension = $value->getClientOriginalExtension();
            $filename  = Auth::id() . time() . randomString(5) . '.' . $extension;
            $fullpath  = $filepath . $filename;
            $mime_type = $value->getClientMimeType();

            Storage::disk('s3')->put($fullpath, file_get_contents($value));

            return compact('fullpath', 'mime_type');
        }
    }
}
