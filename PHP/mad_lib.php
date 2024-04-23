<?php

function generateStory($singular_noun, $verb, $color){

  $story = "The " .$singular_noun ."s are lovely, $color, and deep.\nBut I have promises to keep,\nAnd miles to go before I $verb,\nAnd miles to go before I sleep.\n";

  return $story;
}

echo generateStory("dog","prance","mauve");
echo generateStory("cat","dance","periwinkle");
echo generateStory("rat","slink","chartruce");