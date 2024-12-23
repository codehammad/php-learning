<?php
/* preg_match()
This function checks if a regular expression matches a string.
preg_match_all()
This function performs a global search (matches all occurrences) of a pattern in a string.
*/

// $string = "I love programming in PHP";
// $pattern = "/PHP/"; // Match the word "PHP"

// if (preg_match($pattern, $string)) {
//     echo "Found in the string!";
// } else {
//     echo "Did not Found.";
// }

// $string = "There are 12 apples and 34 bananas.";
// $pattern = "/e|r/i"; // Match one or more digits  and i means insensitive

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Match Found";
// } else {
//     echo "Match Not Found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $string = "Hello world!";
// $pattern = "/[^Ho]/i"; // Match any character except 'H' or 'o' (case insensitive)

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Match Found";
// } else {
//     echo "Match Not Found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// $string = "Hello world!";
// $pattern = "/[a-j]/i"; // Match any characters range from a to j

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Match Found";
// } else {
//     echo "Match Not Found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";

// $string = "2019 2018 2023";
// $pattern = "/201[1-8]/i";

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Match Found";
// } else {
//     echo "Match Not Found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $string = "PHP is awes_ome and fun 20195";
// $pattern = "/\w+/"; // Match any word (letters, digits, or underscores)

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Words found: ";
// } else {
//     echo "No words found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $string = "PHP is awes_ome and fun 20195";
// $pattern = "/\D/"; // Match any word (letters, or underscores)

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Words found: ";
// } else {
//     echo "No words found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";


// $string = "PHP is awes_ome and fun 20195";
// $pattern = "/fu./"; // . ager hamay character ka na pta ho

// if (preg_match_all($pattern, $string, $array)) {
//     echo "Words found: ";
// } else {
//     echo "No words found.";
// }

// echo "<pre>";
// print_r($array);
// echo "</pre>";


$string = "https://www.hammad.com/folder/index.php";
$pattern = "/https:\/\/www.hammad.com\/folder\/index.php/"; // backward slash lagatay han ager special character ko match karwana ho

if (preg_match_all($pattern, $string, $array)) {
    echo "Words found: ";
} else {
    echo "No words found.";
}

echo "<pre>";
print_r($array);
echo "</pre>";


/*Quantifiers in PHP regex control how many times a pattern should appear:

    *: 0 or more times (e.g., a* matches "", a, aa).
    +: 1 or more times (e.g., a+ matches a, aa).
    ?: 0 or 1 time (e.g., a? matches "" or a).
    {n}: Exactly n times (e.g., a{3} matches aaa).
    {n,}: n or more times (e.g., a{2,} matches aa, aaa).
    {n,m}: Between n and m times (e.g., a{2,4} matches aa, aaa, aaaa). */

/* Lookahead:
Positive Lookahead ((?=...)):
a ko tab match karega jab uske baad b ho.

Regex: a(?=b)
Matches: "ab" (lekin "ac" nahi)
Negative Lookahead ((?!...)):
a ko tab match karega jab uske baad b na ho.

Regex: a(?!b)
Matches: "ac" (lekin "ab" nahi)

Lookbehind:
Positive Lookbehind ((?<=...)):
a ko tab match karega jab usse pehle b ho.

Regex: (?<=b)a
Matches: "ba" (lekin "ca" nahi)
Negative Lookbehind ((?<!...)):
a ko tab match karega jab usse pehle b na ho.

Regex: (?<!b)a
Matches: "ac" (lekin "ba" nahi)  */
?>
