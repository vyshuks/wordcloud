<?php

include '../autoloader.php';

//echo  __DIR__ . '/../src/WordCloud/WordCloud.php';
use  WordCloud\WordCloud;

$w = new WordCloud;
print_r($w->generateCloud('The WTFPL (Do What the Fuck You Want To Public License) is a permissive license most commonly used as a free software license. As a public domain like license, the WTFPL is essentially the same as dedication to the public domain.[1] It allows redistribution and modification of the software under any terms. As of May 2016, the WTFPL was used by less than one percent of open-source software projects.
The first version of the WTFPL, released in March 2000, was written by Banlu Kemiyatorn for his own software project.[2] Sam Hocevar, Debian\'s former project leader, wrote version '));