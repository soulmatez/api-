<?php 

ini_set('user_agent','Mozilla/4.0(compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR1.1.4322)');

$data=curl_get("https://api.huobi.pro/market/trade?symbol=filusdt");

$date1=$data;

$fil = $date1["tick"]["data"][0];

// var_dump($fil);exit;

function curl_get($url){
        $oCurl = curl_init();
        if(stripos($url, "https://") !== FALSE) {
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYPEER, FALSE);
            curl_setopt($oCurl, CURLOPT_SSL_VERIFYHOST, FALSE);
            curl_setopt($oCurl, CURLOPT_SSLVERSION, 1); //CURL_SSLVERSION_TLSv1
        }
        curl_setopt($oCurl, CURLOPT_HTTPHEADER, ['client-type:web']);//火币网接口需要这个
        curl_setopt($oCurl, CURLOPT_TIMEOUT, 10);
        curl_setopt($oCurl, CURLOPT_URL, $url);
        curl_setopt($oCurl, CURLOPT_RETURNTRANSFER, 1);
        $sContent = curl_exec($oCurl);
        $aStatus = curl_getinfo($oCurl);
        $error = curl_error($oCurl);
        curl_close($oCurl);
        if($error) {
            $sContent = file_get_contents($url);
            return $sContent;
        }

        if(intval($aStatus["http_code"]) == 200) {
            return json_decode($sContent,true);
        } else {
            return false;
        }
    }


?>
