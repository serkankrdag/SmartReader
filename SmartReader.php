<?php
function count_word_occurrences($filename, $word) {
    $contents = file_get_contents($filename);
    $count = substr_count($contents, $word);
    return $count;
}

$filename = "example.txt";
$word = "lorem";
$count = count_word_occurrences($filename, $word);
echo "The word '$word' appears $count times in the file '$filename'";
?>
