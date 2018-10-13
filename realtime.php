<?php

function ltrt($text){

  //test if folder is there

  $myfile = fopen("learningtour/docs/file.txt", "w");
  fwrite($myfile, $text."\n");
  fclose($myfile);

}
