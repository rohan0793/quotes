<?php namespace Quotes;

class Quotes
{
	private $quotes = [
		"The best preparation for tomorrow is doing your best today.",
		"Start by doing what's necessary; then do what's possible; and suddenly you are doing the impossible.",
		"Every artist was first an amateur.",
		"The more difficulties one has to encounter, within and without, the more significant and the higher in inspiration his life will be.",
		"Nothing is worth more than this day. You cannot relive yesterday. Tomorrow is still beyond our reach.",
		"I was always looking outside myself for strength and confidence, but it comes from within. It is there all of the time.",
		"In any project the important factor is your belief. Without belief, there can be no successful outcome.",
		"Do not wait; the time will never be just right. Start where you stand.",
		"I avoid looking forward or backward, and try to keep looking upward.",
		"We can do anything we want to do if we stick to it long enough."
	];

	public function getRandomQuote()
	{
		return $this->quotes[array_rand($this->quotes, 1)];
	}
}