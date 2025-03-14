<?php
    class ProcessFunc{

        public function shortestWordLength($str) {

            $words_in_arr = explode(" ", $str);
        
            $shortest_length = PHP_INT_MAX;
            $shortest_word = "";
        
            foreach($words_in_arr as $word) {
        
                $word_length = strlen($word);
                
                if($word_length < $shortest_length) {
        
                    $shortest_length = $word_length;
                    $shortest_word = $word;
                }
            }
        
            return ["word" => $shortest_word, "length" => $shortest_length];
        }

        public function countTheIslands($str) {

        }

        public function wordSearch($words, $target){

            $indices = [];

            foreach($words as $index => $word) {
                if($word === $target) {
                    $indices[] = $index;
                }
            }

            return $indices;
        }
    }

?>