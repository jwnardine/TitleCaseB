<?php

class TitleCaseGenerator
{
    function makeTitleCase($input_title)
    {
        $input_array_of_words = explode(" ", $input_title);
        $output_titlecased = array();
        foreach ($input_array_of_words as $wordBeforeLowerCase) {
            $word = strtolower($wordBeforeLowerCase);
            if(in_array($word, array('from', 'with', 'to', 'of', 'and', 'by', 'once', 'yet', 'as', 'a', 'for', 'the', 'than', 'that', 'onto', 'till', 'when', 'if', 'or', 'nor', 'at', 'down', 'near', 'an', 'off', 'past', 'like'), true) && ($word != $input_array_of_words[0])) {
                array_push($output_titlecased, lcfirst($word));
            }
            //return lcfirst($word);
            else{
            array_push($output_titlecased, ucfirst($word));
            }
        }
        return implode(" ", $output_titlecased);
    }
}

?>
