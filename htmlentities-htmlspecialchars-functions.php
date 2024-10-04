<?php
// String Htmllentities Function
$str = "A 'quote' is <b>bold</b>";

$newstr = $str;
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = htmlentities($str);
echo "<pre>";
print_r($newstr);
echo "</pre>";

$str = '<a href="https://www.youtube.com">Youtube Website</a>';
echo "<pre>";
print_r($str);
echo "</pre>";

$newstr = htmlentities($str, ENT_QUOTES); // Does not encode single quotes
echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = htmlentities($str, ENT_NOQUOTES);  // Does not encode any quotes
echo "<pre>";
print_r($newstr);
echo "</pre>";

// html_entity_decode
$htmlent = htmlentities($str);
$newstr = $htmlent;

echo "<pre>";
print_r($newstr);
echo "</pre>";

$newstr = html_entity_decode($htmlent);
echo "<pre>";
print_r($newstr);
echo "</pre>";

// htmlspecialchars
$newstr = htmlspecialchars($str, ENT_NOQUOTES);  // Does not encode any quotes
echo "<pre>";
print_r($newstr);
echo "</pre>";


//htmlspecialchars_decode
$newstr = htmlspecialchars_decode($htmlent);
echo "<pre>";
print_r($newstr);
echo "</pre>";

/*-------get_html_translation_table------- */
echo "<pre>";
print_r (get_html_translation_table(HTML_SPECIALCHARS));
echo "</pre>";

echo "<pre>";
print_r (get_html_translation_table(HTML_ENTITIES));
echo "</pre>";

?>