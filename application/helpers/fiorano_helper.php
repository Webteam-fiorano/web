
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
   /*     $iv_size = mcrypt_get_iv_size(ALGORITHM, MODE);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $crypttext = mcrypt_encrypt(ALGORITHM, $ekey, $value, MODE, $iv);*/
        return strtr(base64_encode($ekey), '+/=', '-_');
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
        $value = base64_decode(strtr($value, '-_', '+/='));
    /*    $iv_size = mcrypt_get_iv_size(ALGORITHM, MODE);
        $iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
        $decrypttext = mcrypt_decrypt(ALGORITHM, $ekey, $value, MODE, $iv);*/
        return trim($value);
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

/*function getLocationInfoByIp(){
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
    return $result;

}*/
function getLocationInfoByIp1()
{
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $url = "http://api.db-ip.com/addrinfo?addr={$ip_address}&api_key=778feb0cc96759de6a8a93f9940a8f12fbf85a54";
      $country = json_decode(file_get_contents($url), true);
      return $country['country'];
}
/*Old and deprecated */
function get_ip(){
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }
    if(strpos($ip,",") !== false){
        $ip_tmp = explode(",",$ip);
        if(is_array($ip_tmp)){
            if(count($ip_tmp) > 1){
                $ip = $ip_tmp[1];
            }
        }
    }
    return $ip;
}

function get_ip_det(){
    $ip=file_get_contents('https://api.ipify.org');
    return $ip;
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

    $ip_data = @json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=".$ip));
    if($ip_data && $ip_data->geoplugin_countryName != null){
        $result['country'] = $ip_data->geoplugin_countryCode;
        $result['city'] = $ip_data->geoplugin_city;
    }
    return $result['country'];

}

function country_select(){
    $det= '
    <option value="">Select</option>
    <option value="Afghanistan">Afghanistan</option>
    <option value="Albania">Albania</option>
    <option value="Algeria">Algeria</option>
    <option value="American Samoa">American Samoa</option>
    <option value="Andorra">Andorra</option>
    <option value="Angola">Angola</option>
    <option value="Anguilla">Anguilla</option>
    <option value="Antartica">Antarctica</option>
    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
    <option value="Argentina">Argentina</option>
    <option value="Armenia">Armenia</option>
    <option value="Aruba">Aruba</option>
    <option value="Australia">Australia</option>
    <option value="Austria">Austria</option>
    <option value="Azerbaijan">Azerbaijan</option>
    <option value="Bahamas">Bahamas</option>
    <option value="Bahrain">Bahrain</option>
    <option value="Bangladesh">Bangladesh</option>
    <option value="Barbados">Barbados</option>
    <option value="Belarus">Belarus</option>
    <option value="Belgium">Belgium</option>
    <option value="Belize">Belize</option>
    <option value="Benin">Benin</option>
    <option value="Bermuda">Bermuda</option>
    <option value="Bhutan">Bhutan</option>
    <option value="Bolivia">Bolivia</option>
    <option value="Bosnia and Herzegowina">Bosnia and Herzegowina</option>
    <option value="Botswana">Botswana</option>
    <option value="Bouvet Island">Bouvet Island</option>
    <option value="Brazil">Brazil</option>
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
    <option value="Brunei Darussalam">Brunei Darussalam</option>
    <option value="Bulgaria">Bulgaria</option>
    <option value="Burkina Faso">Burkina Faso</option>
    <option value="Burundi">Burundi</option>
    <option value="Cambodia">Cambodia</option>
    <option value="Cameroon">Cameroon</option>
    <option value="Canada">Canada</option>
    <option value="Cape Verde">Cape Verde</option>
    <option value="Cayman Islands">Cayman Islands</option>
    <option value="Central African Republic">Central African Republic</option>
    <option value="Chad">Chad</option>
    <option value="Chile">Chile</option>
    <option value="China">China</option>
    <option value="Christmas Island">Christmas Island</option>
    <option value="Cocos Islands">Cocos (Keeling) Islands</option>
    <option value="Colombia">Colombia</option>
    <option value="Comoros">Comoros</option>
    <option value="Congo">Congo</option>
    <option value="Congo">Congo, the Democratic Republic of the</option>
    <option value="Cook Islands">Cook Islands</option>
    <option value="Costa Rica">Costa Rica</option>
    <option value="Cota D\'Ivoire">Cote d\'Ivoire</option>
    <option value="Croatia">Croatia (Hrvatska)</option>
    <option value="Cuba">Cuba</option>
    <option value="Cyprus">Cyprus</option>
    <option value="Czech Republic">Czech Republic</option>
    <option value="Denmark">Denmark</option>
    <option value="Djibouti">Djibouti</option>
    <option value="Dominica">Dominica</option>
    <option value="Dominican Republic">Dominican Republic</option>
    <option value="East Timor">East Timor</option>
    <option value="Ecuador">Ecuador</option>
    <option value="Egypt">Egypt</option>
    <option value="El Salvador">El Salvador</option>
    <option value="Equatorial Guinea">Equatorial Guinea</option>
    <option value="Eritrea">Eritrea</option>
    <option value="Estonia">Estonia</option>
    <option value="Ethiopia">Ethiopia</option>
    <option value="Falkland Islands">Falkland Islands (Malvinas)</option>
    <option value="Faroe Islands">Faroe Islands</option>
    <option value="Fiji">Fiji</option>
    <option value="Finland">Finland</option>
    <option value="France">France</option>
    <option value="France Metropolitan">France, Metropolitan</option>
    <option value="French Guiana">French Guiana</option>
    <option value="French Polynesia">French Polynesia</option>
    <option value="French Southern Territories">French Southern Territories</option>
    <option value="Gabon">Gabon</option>
    <option value="Gambia">Gambia</option>
    <option value="Georgia">Georgia</option>
    <option value="Germany">Germany</option>
    <option value="Ghana">Ghana</option>
    <option value="Gibraltar">Gibraltar</option>
    <option value="Greece">Greece</option>
    <option value="Greenland">Greenland</option>
    <option value="Grenada">Grenada</option>
    <option value="Guadeloupe">Guadeloupe</option>
    <option value="Guam">Guam</option>
    <option value="Guatemala">Guatemala</option>
    <option value="Guinea">Guinea</option>
    <option value="Guinea-Bissau">Guinea-Bissau</option>
    <option value="Guyana">Guyana</option>
    <option value="Haiti">Haiti</option>
    <option value="Heard and McDonald Islands">Heard and Mc Donald Islands</option>
    <option value="Holy See">Holy See (Vatican City State)</option>
    <option value="Honduras">Honduras</option>
    <option value="Hong Kong">Hong Kong</option>
    <option value="Hungary">Hungary</option>
    <option value="Iceland">Iceland</option>
    <option value="India">India</option>
    <option value="Indonesia">Indonesia</option>
    <option value="Iran">Iran (Islamic Republic of)</option>
    <option value="Iraq">Iraq</option>
    <option value="Ireland">Ireland</option>
    <option value="Israel">Israel</option>
    <option value="Italy">Italy</option>
    <option value="Jamaica">Jamaica</option>
    <option value="Japan">Japan</option>
    <option value="Jordan">Jordan</option>
    <option value="Kazakhstan">Kazakhstan</option>
    <option value="Kenya">Kenya</option>
    <option value="Kiribati">Kiribati</option>
    <option value="Democratic People\'s Republic of Korea">Korea, Democratic People\'s Republic of</option>
    <option value="Korea">Korea, Republic of</option>
    <option value="Kuwait">Kuwait</option>
    <option value="Kyrgyzstan">Kyrgyzstan</option>
    <option value="Lao">Lao People\'s Democratic Republic</option>
    <option value="Latvia">Latvia</option>
    <option value="Lebanon">Lebanon</option>
    <option value="Lesotho">Lesotho</option>
    <option value="Liberia">Liberia</option>
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
    <option value="Liechtenstein">Liechtenstein</option>
    <option value="Lithuania">Lithuania</option>
    <option value="Luxembourg">Luxembourg</option>
    <option value="Macau">Macau</option>
    <option value="Macedonia">Macedonia, The Former Yugoslav Republic of</option>
    <option value="Madagascar">Madagascar</option>
    <option value="Malawi">Malawi</option>
    <option value="Malaysia">Malaysia</option>
    <option value="Maldives">Maldives</option>
    <option value="Mali">Mali</option>
    <option value="Malta">Malta</option>
    <option value="Marshall Islands">Marshall Islands</option>
    <option value="Martinique">Martinique</option>
    <option value="Mauritania">Mauritania</option>
    <option value="Mauritius">Mauritius</option>
    <option value="Mayotte">Mayotte</option>
    <option value="Mexico">Mexico</option>
    <option value="Micronesia">Micronesia, Federated States of</option>
    <option value="Moldova">Moldova, Republic of</option>
    <option value="Monaco">Monaco</option>
    <option value="Mongolia">Mongolia</option>
    <option value="Montserrat">Montserrat</option>
    <option value="Morocco">Morocco</option>
    <option value="Mozambique">Mozambique</option>
    <option value="Myanmar">Myanmar</option>
    <option value="Namibia">Namibia</option>
    <option value="Nauru">Nauru</option>
    <option value="Nepal">Nepal</option>
    <option value="Netherlands">Netherlands</option>
    <option value="Netherlands Antilles">Netherlands Antilles</option>
    <option value="New Caledonia">New Caledonia</option>
    <option value="New Zealand">New Zealand</option>
    <option value="Nicaragua">Nicaragua</option>
    <option value="Niger">Niger</option>
    <option value="Nigeria">Nigeria</option>
    <option value="Niue">Niue</option>
    <option value="Norfolk Island">Norfolk Island</option>
    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
    <option value="Norway">Norway</option>
    <option value="Oman">Oman</option>
    <option value="Pakistan">Pakistan</option>
    <option value="Palau">Palau</option>
    <option value="Panama">Panama</option>
    <option value="Papua New Guinea">Papua New Guinea</option>
    <option value="Paraguay">Paraguay</option>
    <option value="Peru">Peru</option>
    <option value="Philippines">Philippines</option>
    <option value="Pitcairn">Pitcairn</option>
    <option value="Poland">Poland</option>
    <option value="Portugal">Portugal</option>
    <option value="Puerto Rico">Puerto Rico</option>
    <option value="Qatar">Qatar</option>
    <option value="Reunion">Reunion</option>
    <option value="Romania">Romania</option>
    <option value="Russia">Russian Federation</option>
    <option value="Rwanda">Rwanda</option>
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint LUCIA">Saint LUCIA</option>
    <option value="Saint Vincent">Saint Vincent and the Grenadines</option>
    <option value="Samoa">Samoa</option>
    <option value="San Marino">San Marino</option>
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option>
    <option value="Senegal">Senegal</option>
    <option value="Seychelles">Seychelles</option>
    <option value="Sierra">Sierra Leone</option>
    <option value="Singapore">Singapore</option>
    <option value="Slovakia">Slovakia (Slovak Republic)</option>
    <option value="Slovenia">Slovenia</option>
    <option value="Solomon Islands">Solomon Islands</option>
    <option value="Somalia">Somalia</option>
    <option value="South Africa">South Africa</option>
    <option value="South Georgia">South Georgia and the South Sandwich Islands</option>
    <option value="Spain">Spain</option>
    <option value="SriLanka">Sri Lanka</option>
    <option value="St. Helena">St. Helena</option>
    <option value="St. Pierre and Miguelon">St. Pierre and Miquelon</option>
    <option value="Sudan">Sudan</option>
    <option value="Suriname">Suriname</option>
    <option value="Svalbard">Svalbard and Jan Mayen Islands</option>
    <option value="Swaziland">Swaziland</option>
    <option value="Sweden">Sweden</option>
    <option value="Switzerland">Switzerland</option>
    <option value="Syria">Syrian Arab Republic</option>
    <option value="Taiwan">Taiwan, Province of China</option>
    <option value="Tajikistan">Tajikistan</option>
    <option value="Tanzania">Tanzania, United Republic of</option>
    <option value="Thailand">Thailand</option>
    <option value="Togo">Togo</option>
    <option value="Tokelau">Tokelau</option>
    <option value="Tonga">Tonga</option>
    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
    <option value="Tunisia">Tunisia</option>
    <option value="Turkey">Turkey</option>
    <option value="Turkmenistan">Turkmenistan</option>
    <option value="Turks and Caicos">Turks and Caicos Islands</option>
    <option value="Tuvalu">Tuvalu</option>
    <option value="Uganda">Uganda</option>
    <option value="Ukraine">Ukraine</option>
    <option value="United Arab Emirates">United Arab Emirates</option>
    <option value="United Kingdom">United Kingdom</option>
    <option value="United States">United States</option>
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
    <option value="Uruguay">Uruguay</option>
    <option value="Uzbekistan">Uzbekistan</option>
    <option value="Vanuatu">Vanuatu</option>
    <option value="Venezuela">Venezuela</option>
    <option value="Vietnam">Viet Nam</option>
    <option value="Virgin Islands (British)">Virgin Islands (British)</option>
    <option value="Virgin Islands (U.S)">Virgin Islands (U.S.)</option>
    <option value="Wallis and Futana Islands">Wallis and Futuna Islands</option>
    <option value="Western Sahara">Western Sahara</option>
    <option value="Yemen">Yemen</option>
    <option value="Yugoslavia">Yugoslavia</option>
    <option value="Zambia">Zambia</option>
    <option value="Zimbabwe">Zimbabwe</option>';
return $det;
}


function isCorporateID($email) {

   // return TRUE;
    //$domains = parse_ini_file("file.ini");
    $domains = array('gmail', 'yandex', 'yahoo', 'rediffmail', 'live', 'hotmail', 'aol', 'mail', '163', '126', 'googlewave', 'indiatimes', 'aim','redhat','ibm');
    $var = explode("@", $email);
    $dns = substr($var[1], 0, strpos($var[1], "."));
    foreach ($domains as $d) {
        if ($d == $dns)
            return false;
    }
    return true;
}
function getZohoStatus($email=null){/*Checking the email is available or not in our contact list- Need to check more please visit https://www.zoho.com/crm/help/api/welcome.html*/

    $reqUrl = 'https://crm.zoho.com/crm/private/json/Contacts/searchRecords?authtoken=eb6b065f248489f129db85e66338a391&scope=crmapi&criteria=(Email:'.$email.')';
    $json = file_get_contents($reqUrl); // this WILL do an http request for you
    $data = json_decode($json);
    if( isset($data->response->nodata)){
        return   "User not in the Zoho, Please take action";
    }else{
        $det = $data->response->result->Contacts->row->FL;
        $i=1;
        foreach($det as $de){
            if($i==1){
                $cId= $de->content;
            }
            $i++;
        }
        $link='https://crm.zoho.com/crm/ShowEntityInfo.do?id='. $cId .'&module=Contacts&isload=true';
        $linkurl= "<a href='".$link."' target='_blank'>Zoho CONTACTS</a>";
        return "User already found in ".$linkurl;
    }

}
/*get Leads details based on the region*/
function getLead($country) {  /*Get Details from Ini file stored in asset folder*/
    $leads = parse_ini_file('assets/leads.ini.php',true);
    return $leads[$country];
}

function getLeadName($country) {
    $leads = parse_ini_file('assets/leads.ini.php',true);
    return $leads['lead_names'][$country];
}

function getLeadEmail($lead_name) {
    $leads = parse_ini_file('assets/leads.ini.php',true);
    return $leads['lead_emails'][$lead_name];
}

 function getHash($bits = 128) {
        return hash('ripemd128', self::makeRandomString($bits));
    }
function makeRandomString($bits = 128) {
        $bytes = ceil(($bits - strlen($_SERVER['REMOTE_ADDR'])) / 8);
        $return = $_SERVER['REMOTE_ADDR'];
        for ($i = 0; $i < $bytes; $i++) {
            $return .= chr(mt_rand(0, 255));
        }
        return $return;
}

/*End Lead process*/
/* FOr SEO outPut */
function seo_details($title=null, $keyword=null,$desc=null, $image=null ){
    if(empty ($keyword)){$keyword="Fiorano ESB, Fiorano MQ, ESB, Fiorano, Psd2, Whitpaper, Solution Psd2, Digital Banking, business architecture, BPM, operational intelligence, Application Architecture, business integration,Banking,  real-time analytics, real-time big data, Platform-as-a-service, digital Transformation"; }
    if(empty ($title)){
        $title="Fiorano Software Technologies ";
    }
    if(empty ($desc)){
        $desc="Founded in 1995,  Fiorano is a leading provider of JMS, including Service-Oriented Architecture (SOA), Enterprise Messaging, Java Messaging Service,  JMS Server, SAP integration ,  Messaging Queue, SAP Solutions, Enterprise Service Bus, ESB, PSD2 enterprise middleware and peer-to-peer distributed systems";
    }
    if(empty ($image)){
        $image ="http://www.fiorano.com/new/assets/images/fiorano_logo.png";
    }
    $seo='  <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1">
            <meta name="keywords" content="'.$keyword.'"/>
            <meta name="description" content="'.$desc.'" />
            <meta name="classification" content="'.$desc.'"/>
            <meta name="twitter:card" content="summary">
            <meta name="twitter:site" content="@fiorano">
            <meta name="twitter:title" content="'.$title.'" >
            <meta name="twitter:description" content="'.$desc.'">
            <meta name="twitter:image" content="'.$image.'">
            <meta property="og:title" content="'.$title.'"  />
            <meta property="og:type" content="article" />
            <meta property="og:url" content="http://www.fiorano.com/new/" />
            <meta property="og:image" content="'.$image.'"/>
            <meta property="og:description" content="'.$desc.'" />
            <meta property="og:site_name" content="http://www.fiorano.com" />
            ';
    return $seo;
}
