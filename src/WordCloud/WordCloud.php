<?php

/**
*author: vysakh
*Main class for generate wordcloud
*/

	namespace WordCloud;
use  WordCloud\tools\Porter;
use  WordCloud\tools\Stopwords;
use  WordCloud \tools\Tokenization;


class  WordCloud {

	use  Tokenization,Stopwords;


	 /**
	     * generate word cloud
	     *
	     * @param a text string
	     *
	     * @return words with number of occurence
	     */
	public function generateCloud($text ) {


		/*
		* Get white space seperated words  from text
		*
		*/
		$tokens = $this->whiteSpaceTokenize($text);


		/*
		*Remove stopword from tokens
		*/

		$tokens =  $this->removeStopwords($tokens);

		$stemmedTokens = [];

		foreach($tokens as $token){

			/*
			* Stem unwanted tokens using porter algorithm 
			*/
			$stemmedTokens[] = Porter::Stem($token);
		}

		return array_count_values($stemmedTokens);

	}

}