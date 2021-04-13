<?php

/*

Vivus Hub Commercially available content [https://vivushub.com/vivus/interface/terms]

Copyright (c) 2021 Vivus Hub Ltd.

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