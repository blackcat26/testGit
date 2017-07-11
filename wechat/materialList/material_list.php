<?php
$appid = "wx9d3d82b5591c6624";
$appsecret = "9512c0f0ebf6620a73976146263fab33";
$url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid=$appid&secret=$appsecret";

$output = https_request($url);
$jsoninfo = json_decode($output, true);

$access_token = $jsoninfo["access_token"];

$jsonmenu = '{
    "type":"news",
    "offset":0,
    "count":20
}';

$url = "https://api.weixin.qq.com/cgi-bin/material/batchget_material?access_token=".$access_token;
$result = https_request($url, $jsonmenu);
$result = json_decode($result,true);

$data = array();
$num1 = count($result['item']);
for($x=0;$x<$num1;$x++){
    $item = $result['item'][$x]['content']['news_item'];
    $num2 = count($item);
    for($y=0;$y<$num2;$y++){
        //当图文素材的 title标题 digest简介 thumb_url封面图地址 都存在时，才会放入$data中被用来展示
        if($item[$y]['title'] && $item[$y]['digest'] && $item[$y]['thumb_url']){
            array_push($data,array('title'=>$item[$y]['title'],'digest'=>$item[$y]['digest'],'thumb_url'=>$item[$y]['thumb_url'],'url'=>$item[$y]['url']));
        }
    }
}

$data='var data='.json_encode($data).';';
file_put_contents('material_data.js',$data);
require("material_list.html");

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