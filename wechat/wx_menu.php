<?php

$appid = "wx9d3d82b5591c6624";
$appsecret = "9512c0f0ebf6620a73976146263fab33";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

$output = https_request($url);
$jsoninfo = json_decode($output, true);

$access_token = $jsoninfo["access_token"];


$jsonmenu = '{
	"button":[
		{
            "name":"智能测评",
            "sub_button":[
				{
					"type":"view",
					"name":"开始测评",
					"url":"http://itest.pm3721.com/index.php"
				}
			]
		},
		{
			"name":"关于我们",
			"type":"view",
			"url":"https://open.weixin.qq.com/connect/oauth2/authorize?appid=wx9d3d82b5591c6624&redirect_uri=http%3a%2f%2fitest.pm3721.com%2fwx%2ffrontend%2fweb%2findex.php%3fr%3dwx%2fget-code&response_type=code&scope=snsapi_userinfo&state=about#wechat_redirect"
		}
	]
 }';


$url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
var_dump($result);

function https_request($url,$data = null){
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, FALSE);
    if (!empty($data)){
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $data);
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $output = curl_exec($curl);
    curl_close($curl);
    return $output;
}

?>