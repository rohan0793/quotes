<?php
 
use Quotes\Quotes;
 
class QuoteTest extends PHPUnit_Framework_TestCase {
 
	public function testGetRandomQuote()
	{
		$qoute = new Quotes;
		return $this->assertInternalType('string', $qoute->getRandomQuote());
	}
 
}