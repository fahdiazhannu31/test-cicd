<?php

use PHPUnit\Framework\TestCase;

require 'src/Palindrome.php';

class PalindromeTest extends TestCase
{
    public function testPalindromeStrings()
    {
        $this->assertTrue(Palindrome::isPalindrome('A man, a plan, a canal, Panama'));
        $this->assertTrue(Palindrome::isPalindrome('Madam'));
        $this->assertTrue(Palindrome::isPalindrome('Noon'));
    }

    public function testNonPalindromeStrings()
    {
        $this->assertFalse(Palindrome::isPalindrome('Hello'));
        $this->assertFalse(Palindrome::isPalindrome('World'));
        $this->assertFalse(Palindrome::isPalindrome('JavaScript'));
    }

    public function testEmptyString()
    {
        $this->assertTrue(Palindrome::isPalindrome(''));
    }

    public function testSingleCharacterStrings()
    {
        $this->assertTrue(Palindrome::isPalindrome('a'));
        $this->assertTrue(Palindrome::isPalindrome('b'));
    }
}
