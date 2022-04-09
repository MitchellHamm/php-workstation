<?php 
use PHPUnit\Framework\TestCase;

final class SolutionTest extends TestCase
{
    private $solution;

    public function __construct() {
        parent::__construct();
        $this->solution = new Solution();
    }
    public function testPalindromeHappyCase(): void
    {
        $this->assertTrue($this->solution->isPalindrome("aba"));
        $this->assertTrue($this->solution->isPalindrome("abba"));
        $this->assertTrue($this->solution->isPalindrome("racecar"));
    }

    public function testPalindromeEdgeCase(): void
    {
        $this->assertTrue($this->solution->isPalindrome("a"));
        $this->assertTrue($this->solution->isPalindrome(""));
        $this->assertTrue($this->solution->isPalindrome("9"));
        $this->assertTrue($this->solution->isPalindrome("race:                 car"));
    }

    public function testPalindromeFalseCase(): void
    {
        $this->assertFalse($this->solution->isPalindrome("ab"));
        $this->assertFalse($this->solution->isPalindrome("abcdefgh"));
        $this->assertFalse($this->solution->isPalindrome("race:race"));
    }
}