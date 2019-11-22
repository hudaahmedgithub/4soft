<?php

namespace App\Helpers;

class SamirzValidator
{
  /**
	 * Santize a given fields to be a valid string
	 *
	 * @return array
	 */
	public static function sanitizeString()
	{
		$fields = func_get_args();
		$sanitized = [];

		foreach ($fields as $field) {
			$str = strip_tags($field);
			$str = filter_var($str, FILTER_SANITIZE_STRING);
			$str = htmlentities($str, ENT_QUOTES, "UTF-8");
			array_push($sanitized, $str);
		}

		return $sanitized;
	}

	/**
	 * Sanitize a given fields to be a valid integers
	 *
	 * @return array
	 */
	public static function sanitizeInteger()
	{
		$fields = func_get_args();
		$sanitized = [];

		foreach ($fields as $field) {
			$num = filter_var($field, FILTER_SANITIZE_NUMBER_INT);
			array_push($sanitized, $num);
		}

		return $sanitized;
	}

	/**
	 * Sanitize a given fields to be a valid Float
	 *
	 * @return array
	 */
	public static function sanitizeFloat()
	{
		$fields = func_get_args();
		$sanitized = [];

		foreach ($fields as $field) {
			$num = filter_var($field, FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
			array_push($sanitized, $num);
		}

		return $sanitized;
	}

	/**
	 * Santize a given fields to be a valid email
	 *
	 * @return array
	 */
	public static function sanitizeEmail()
	{
		$fields = func_get_args();
		$sanitized = [];

		foreach ($fields as $field) {
			$email = filter_var($field, FILTER_SANITIZE_EMAIL);
			array_push($sanitized, $email);
		}

		return $sanitized;
	}

	/**
	 * Santize a given fields to be a valid url
	 *
	 * @return array
	 */
	public static function sanitizeUrl()
	{
		$fields = func_get_args();
		$sanitized = [];

		foreach ($fields as $field) {
			$str = filter_var($field, FILTER_SANITIZE_URL);
			$str = htmlentities($str, ENT_QUOTES, "UTF-8");
			array_push($sanitized, $str);
		}

		return $sanitized;
	}
}
