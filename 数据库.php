<?php
<?php
	function weather(){
		$host = "https://jisutqybmf.market.alicloudapi.com";
		$path = "/weather/query";
		$method = "GET";//GET/POST 任意
		$appcode = "14323a747e9245fb981da92499b4db86";
		$headers = array();
		array_push($headers, "Authorization:APPCODE " . $appcode);
		//根据API的要求，定义相对应的Content-Type
		array_push($headers, "Content-Type".":"."application/json; charset=UTF-8");
		$querys = "city=广州";
		$bodys = "null";
		$url = $host . $path . "?" . $querys;
		
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, $method);
		curl_setopt($curl, CURLOPT_URL, $url);
		curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
		curl_setopt($curl, CURLOPT_FAILONERROR, false);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, true);
		if (1 == strpos("$".$host, "https://"))
		{
			curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		}
		curl_setopt($curl, CURLOPT_POSTFIELDS, $bodys);
		$out = curl_exec($curl);
		$out = json_decode($out,true);
		if(isset($out['result']['city'])){
			$content = $out['result']['city']
				.' '
				. $out['result']['weather']
				.' '
				. $out['result']['temp']
				.'℃'
			;
		}else{
			$content ="接入失败！";
		}
		
		return $content;
	}
	
	weather();
	
	?>