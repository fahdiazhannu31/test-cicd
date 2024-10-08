<?php 

class Palindrome
{

	public static function isPalindrome(string $str): bool
	 {
		$cleanedStr = strtolower(preg_replace('/\W|_/', '', $str));
		$reversedStr = strrev($cleanedStr);

		return $cleanedStr === $reversedStr;

	  }

}
