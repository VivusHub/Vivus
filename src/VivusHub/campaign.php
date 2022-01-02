<?php

/*

Vivus Hub commercially available content [https://vivushub.com/vivus/interface/terms]

© Copyright Vvivus Hub Ltd 2021.

 */

class CampaignHubVH {
	/**
	 * [campaignEdit description]
	 * @param  [String] $key   [description]
	 * @param  [String] $rType [description]
	 * @param  [Dictionary] $data  [description]
	 * @return [type]        [description]
	 */
	public static function campaignEdit($key, $rType, $data) {

		switch ($rType) {
		case 'create':
			# code...
			break;

		case 'update':
			# code...
			break;

		case 'delete':
			# code...
			break;

		default:
			# code...
			break;
		}

		$url = "https://www.api.vivushub.com/event";
		$myvars = "message=$msg&access_token=$pageAccessToken";
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$response = curl_exec($ch);
	}
}

?>