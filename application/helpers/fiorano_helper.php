
<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$CI=& get_instance();

$CI->config->item('enc_dat');
//Encryption & Decryption Key for Data
define("DKEY", $CI->config->item('enc_dat'));

//Encryption & Decryption Key For DB
define("PKEY", $CI->config->item('enc_pas'));

//Encryption & Decryption Algorithm Name & Mode
define("ALGORITHM", $CI->config->item('enc_alg'));
define("MODE", $CI->config->item('enc_mod'));

// Clear Cache
if ( ! function_exists('nocache'))
{
    function nocache()
    {
        header('Cache-Control: no-cache, no-store, must-revalidate, max-age=0');
        header('Cache-Control: post-check=0, pre-check=0', FALSE);
        header('Pragma: no-cache');
        header('Expires: Wed, 05 Oct 1988 09:30:00 GMT');
        header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
        ob_clean();
    }
}

// getPlugins View
if ( ! function_exists('getPlugins'))
{
    function getPlugins()
    {
        $ci=& get_instance();
        $data['inc'] = true;	// this will prevent plugins from loading directly
        $ci->load->view('include/plugins', $data);
    }
}

// Password Encryption
if ( ! function_exists('encPas'))
{
    function encPas($ps, $pKey = PKEY)
    {
        $p1 = md5($ps);
        $p2 = $pKey.$p1.md5($pKey);
        $pas = md5(sha1($p2));
        return $pas;
    }
}

// Password Generator
if ( ! function_exists('genPas'))
{
    function genPas()
    {
        $alp	= array('A','B','C','D','E','F','G','H','J','K','L','M','N','P','Q','R','T','U','V','W','X','Y','Z','a','b','c','d','e','f','g','h','i','j','k','m','n','p','q','r','s','t','u');
        $sym	= array('@','#','$','%');
        $c1 	= $alp[array_rand($alp)];
        $c2 	= $alp[array_rand($alp)];
        $c3 	= $alp[array_rand($alp)];
        $c4 	= $alp[array_rand($alp)];
        $s1 	= $sym[array_rand($sym)];
        $n1 	= rand(0, 9);
        $n2 	= rand(0, 9);
        $n3 	= rand(0, 9);
        $pas 	= $c1.$n1.$s1.$c3.$c2.$n2.$c4.$n3;
        return $pas;
    }
}

// Password Encryption
if ( ! function_exists('genAuth'))
{
    function genAuth($id, $pKey = PKEY)
    {
        $p1		= sha1($id).md5(microtime());
        $p2		= md5($pKey).sha1($p1);
        $hash	= md5(sha1($p2));
        return $hash;
    }
}

// Data Encrypt & Decrypt
if ( ! function_exists('encData'))
{
    function encData($str)
    {
        return enCode($str, DKEY);
    }
}

if ( ! function_exists('decData'))
{
    function decData($str)
    {
        return deCode($str, DKEY);
    }
}

// Encryption & Decryption : AES with base64
// Encrypt
if ( ! function_exists('enCode'))
{
    function enCode($value, $ekey = PKEY)
    {
        //return $value;
        if(!$value){return false;}
        $ekey = md5(sha1(md5($ekey)));
        $iv_size = mcrypt_get_iv_size(ALGORITHM, MODE);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(ALGORITHM, $ekey, $value, MODE, $iv);
        return strtr(base64_encode($crypttext), '+/=', '-_,');
    }
}

// Decrypt
if ( ! function_exists('deCode'))
{
    function deCode($value, $ekey = PKEY)
    {
        //return $value;
        if(!$value){return false;}
        $ekey = md5(sha1(md5($ekey)));
        $value = base64_decode(strtr($value, '-_,', '+/='));
        $iv_size = mcrypt_get_iv_size(ALGORITHM, MODE);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(ALGORITHM, $ekey, $value, MODE, $iv);
        return trim($decrypttext);
    }
}

if ( ! function_exists('getTimes'))
{
    function getTimes($t1, $t2)
    {
        $timeFirst  = strtotime($t1);
        $timeSecond = strtotime($t2);
        $differenceInSeconds = $timeSecond - $timeFirst;
        $h=0;
        $m	= floor($differenceInSeconds / 60);
        $s	= $differenceInSeconds % 60;
        if ($m>=60)
        {
            $h = floor($m / 60);
            $m = $m % 60;
        }
        $tim = $h.':'.$m.':'.$s;
        return $tim;
    }
}


if ( ! function_exists('getTimeInSec'))
{
    function getTimeInSec($t1, $t2)
    {
        $timeFirst  = strtotime($t1);
        $timeSecond = strtotime($t2);
        $differenceInSeconds = $timeSecond - $timeFirst;
        return $differenceInSeconds;
    }
}

if ( ! function_exists('convert_number_to_words'))
{
    function convert_number_to_words($number)
    {

        $hyphen      = ' ';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $dictionary  = array(
            0                   => 'zero',
            1                   => 'One',
            2                   => 'Two',
            3                   => 'Three',
            4                   => 'Four',
            5                   => 'Five',
            6                   => 'Six',
            7                   => 'Seven',
            8                   => 'Eight',
            9                   => 'Nine',
            10                  => 'Ten',
            11                  => 'Eleven',
            12                  => 'Twelve',
            13                  => 'Thirteen',
            14                  => 'Fourteen',
            15                  => 'Fifteen',
            16                  => 'Sixteen',
            17                  => 'Seventeen',
            18                  => 'Eighteen',
            19                  => 'Nineteen',
            20                  => 'Twenty',
            30                  => 'Thirty',
            40                  => 'Fourty',
            50                  => 'Fifty',
            60                  => 'Sixty',
            70                  => 'Seventy',
            80                  => 'Eighty',
            90                  => 'Ninety',
            100                 => 'Hundred',
            1000                => 'Thousand',
            1000000             => 'Million',
            1000000000          => 'Billion',
            1000000000000       => 'Trillion',
            1000000000000000    => 'Quadrillion',
            1000000000000000000 => 'Quintillion'
        );

        if (!is_numeric($number)) {
            return false;
        }

        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'convert_number_to_words only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }

        if ($number < 0) {
            return $negative . convert_number_to_words(abs($number));
        }

        $string = $fraction = null;

        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }

        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . convert_number_to_words($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = convert_number_to_words($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= convert_number_to_words($remainder);
                }
                break;
        }

        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }

        return $string;
    }

}

if ( ! function_exists('hex2rgb'))
{
    function hex2rgb($hex) {
        $hex = str_replace("#", "", $hex);

        if(strlen($hex) == 3) {
            $r = hexdec(substr($hex,0,1).substr($hex,0,1));
            $g = hexdec(substr($hex,1,1).substr($hex,1,1));
            $b = hexdec(substr($hex,2,1).substr($hex,2,1));
        } else {
            $r = hexdec(substr($hex,0,2));
            $g = hexdec(substr($hex,2,2));
            $b = hexdec(substr($hex,4,2));
        }
        $rgb = array($r, $g, $b);
        //return implode(",", $rgb); // returns the rgb values separated by commas
        return $rgb; // returns an array with the rgb values
    }
}

if ( ! function_exists('delFiles'))
{
    function delFiles($path, $typ)
    {
        $path = decData($path);
        $files = glob($path.'/*.'.$typ);  // get all file names
        foreach($files as $file)
        {
            if(is_file($file))
                @unlink($file); // deleting the file
        }
    }
}


if ( ! function_exists('imageResize'))
{
    function imageResize($width, $height, $target){

        //takes the larger size of the width and height and applies the
        //formula accordingly...this is so this script will work
        //dynamically with any size image

        if ($width > $height) {
            $percentage = ($target / $width);
        } else {
            $percentage = ($target / $height);
        }

        //gets the new value and applies the percentage, then rounds the value
        $width = round($width * $percentage);
        $height = round($height * $percentage);

        //returns the new sizes in html image tag format...this is so you
        //	can plug this function inside an image tag and just get the

        return "width=".$width." height=".$height."";

    }
}

if (! function_exists('array_column')) {
    function array_column(array $input, $columnKey, $indexKey = null) {
        $array = array();
        foreach ($input as $value) {
            if ( ! isset($value[$columnKey])) {
                trigger_error("Key \"$columnKey\" does not exist in array");
                return false;
            }
            if (is_null($indexKey)) {
                $array[] = $value[$columnKey];
            }
            else {
                if ( ! isset($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not exist in array");
                    return false;
                }
                if ( ! is_scalar($value[$indexKey])) {
                    trigger_error("Key \"$indexKey\" does not contain scalar value");
                    return false;
                }
                $array[$value[$indexKey]] = $value[$columnKey];
            }
        }
        return $array;
    }
}

function getLocationInfoByIp(){
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = @$_SERVER['REMOTE_ADDR'];
    $result  = array('country'=>'', 'city'=>'');
    if(filter_var($client, FILTER_VALIDATE_IP)){
        $ip = $client;
    }elseif(filter_var($forward, FILTER_VALIDATE_IP)){
        $ip = $forward;
    }else{
        $ip = $remote;
    }

    //$ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    $json       = file_get_contents("http://ipinfo.io/{$ip}");
    $details    = json_decode($json);
    print_r($details);
    return $details;

    /*if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }
    return $result;*/

}
function getLocationInfoByIp1()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $url = "http://api.db-ip.com/addrinfo?addr={$ip_address}&api_key=778feb0cc96759de6a8a93f9940a8f12fbf85a54";
      $country = json_decode(file_get_contents($url), true);
      return $country['country'];
}