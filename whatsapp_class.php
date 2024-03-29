<?php

//token para armando
if(!isset($_POST["id"])) exit;
$id = $_POST["id"];
if($id=='11'){
			/* Change This Parameter */
/*token de luis armando*/
$apiToken = '345526956169155257919007740555ce10708dd6da'; // eg. 6846532456354354
$fromNumber = '917777877080'; // eg. 91987654**** (with country code without '+' sign)
/* Change This Parameter */
		
		}


//tokn par antonio
if(!isset($_POST["id"])) exit;
$id = $_POST["id"];
if($id=='12'){
			/* Change This Parameter */
/*token de antonio*/
$apiToken = '173201016661631930870916225ce1afd16de6b'; // eg. 6846532456354354
$fromNumber = '917777877080'; // eg. 91987654**** (with country code without '+' sign)
/* Change This Parameter */
		
		}



/**
*	Class: WhatsAppAPI
*
* 	Class for send whatsapp message using https://www.whatsappapi.in API
*/
class WhatsAppAPI
{
	public $apiUrl;
	function __construct()
	{
		$this->apiUrl = 'https://www.whatsappapi.in/api';
	}
	/**
	* @param int $country_code to user country code
	* @param int $mobile to user mobile number without country code
	* @param string $message message for text message which you want to send on users whatsapp
	*/
	public function sendText($country_code, $mobile, $message)
	{
		return $this->connect($country_code, $mobile, $message);
	}
	/**
	* @param int $country_code to user country code
	* @param int $mobile to user mobile number without country code
	* @param string $image_path message for file http full path with extension (.jpg, or .png)
	*/
	public function sendImage($country_code, $mobile, $image_path)
	{
		return $this->connect($country_code, $mobile, $message,'image');
	}
	/**
	* @param int $country_code to user country code
	* @param int $mobile to user mobile number without country code
	* @param string $pdf_path message for file http full path with extension (.pdf)
	*/
	public function sendPdf($country_code, $mobile, $pdf_path)
	{
		return $this->connect($country_code, $mobile, $message,'pdf');
	}
	/**
	* @param int $country_code to user country code
	* @param int $mobile to user mobile number withoute country code
	* @param string $message text message to send users whatsapp
	* @param string $type message type option : text, image, pdf
	*/
	private function connect($country_code, $mobile, $message, $type = 'text')
	{
		global $apiToken;
		global $fromNumber;
		$type = trim(strtolower($type));
		
		/* Check passed type is corrent or not */
		if($type != 'text' && $type != 'image' && $type != 'pdf')
			return false;

		$curl = curl_init();
		curl_setopt_array($curl, array(
		  CURLOPT_URL => $this->apiUrl."?token=".$apiToken."&action=".$type."&from=".$fromNumber."&country=".$country_code."&to=".$mobile."&uid=".uniqid()."&".$type."=".urlencode($message),
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_SSL_VERIFYHOST => 0,
		  CURLOPT_SSL_VERIFYPEER => 0,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_POSTFIELDS => "",
		));

		$apiResponse = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
		  return false;
		} else {
		  return $apiResponse;
		}
	}
}
