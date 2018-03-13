<?php

namespace WordCloud;
 use  WordCloud\tools\Porter;
 use  WordCloud\tools\Stopwords;
 use  WordCloud \tools\Tokenization;


class  WordCloud {

	use  Tokenization,Stopwords;


	public function generateCloud($text ) {

		$tokens = $this->whiteSpaceTokenize($text);

		$tokens =  $this->removeStopwords($tokens);

		$stemmedTokens = [];

		foreach($tokens as $token){

			$stemmedTokens[] = Porter::Stem($token);
		}

		return array_count_values($stemmedTokens);
		
	}

}

