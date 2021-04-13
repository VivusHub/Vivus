<?php

/*

Vivus Hub Commercially available content [https://vivushub.com/vivus/interface/terms]

Copyright (c) 2021 Vivus Hub Ltd.

 */

class PromoterHubVH {
	/**
	 * [promoterEdit description]
	 * @param  [String] $key   [description]
	 * @param  [Dictionary] $data  [description]
	 * @param  [String] $rType [description]
	 * @return [String]        [description]
	 */
	public static function promoterEdit($key, $data, $rType) {
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
	}
}

class TeamMembersHub {
	/**
	 * [teamMemberEdit description]
	 * @param  [String] $key   [description]
	 * @param  [Dictionary] $data  [description]
	 * @param  [String] $rType [description]
	 * @return [type]        [description]
	 */
	public static function teamMemberEdit($key, $data, $rType) {
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

			$url = "https://www.api.vivushub.com/partners";
			$myvars = "";
			$ch = curl_init($url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($ch);
		}
	}
}

?>