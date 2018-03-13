<?php
namespace WordCloud\tools;

trait  Tokenization {

	

	public function  whiteSpaceTokenize($text) {

		$pattern  = '/[\pZ\pC]+/u';

		return preg_split($pattern,$text,null,PREG_SPLIT_NO_EMPTY);

	}

	
}