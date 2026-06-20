<!--
	Name:         	David Dunham
    Course:         INEW 2434-21001
    Assignment:		LAB 2 - SamFord
    Date:			04/09/2026
    File Name:		EmbeddedWords.php
    Description:    
-->

<!doctype html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Embedded Words</title>
    </head>

    <body>

        <h1>Embedded Words</h1>
        <hr />

        <?php

            $Phrases = array(
                "Your choice of vehicle can tell a lot about your personality.",
                "Embed PHP scripts within an HTML document."
            );

            $SignNames = array(
                "Rat",
                "Ox",
                "Tiger",
                "Rabbit",
                "Dragon",
                "Snake",
                "Horse",
                "Goat",
                "Monkey",
                "Rooster",
                "Dog",
                "Pig"
            );

            function BuildLetterCounts($text) {
                $text = strtoupper($text);
                $letter_counts = count_chars($text);
                return $letter_counts;
            }

            function AContainsB($A, $B) {
                $retval = TRUE;
                $first_letter_index = ord('A');
                $last_letter_index = ord('Z');

                for ($letter_index = $first_letter_index;
                    $letter_index <= $last_letter_index;
                    ++$letter_index) {

                    if ($A[$letter_index] < $B[$letter_index]) {
                        $retval = FALSE;
                    }
                }

                return $retval;
            }

            foreach ($Phrases as $Phrase) {

                $PhraseArray = BuildLetterCounts($Phrase);
                $GoodWords = array();
                $BadWords = array();

                foreach ($SignNames as $Word) {
                    $WordArray = BuildLetterCounts($Word);

                    if (AContainsB($PhraseArray, $WordArray))
                        $GoodWords[] = $Word;
                    else
                        $BadWords[] = $Word;
                }

                // Output results
                echo "<p>The following words can be made from the letters in the phrase &quot;$Phrase&quot;:";
                foreach ($GoodWords as $Word)
                    echo " $Word";
                echo "</p>\n";

                echo "<p>The following words can not be made from the letters in the phrase &quot;$Phrase&quot;:";
                foreach ($BadWords as $Word)
                    echo " $Word";
                echo "</p>\n";

                echo "<hr />\n";
            }

        ?>

    </body>
    
</html>