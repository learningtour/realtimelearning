<?php
// LearningTour RealTime Learning, writing live instruction, checklists & documantation

// Test if the docs folder is there, otherwise create it
if (!file_exists("ltrt_docs")) {
  mkdir("ltrt_docs");
}

// Test if the docs folder is there, otherwise create it
if (!file_exists("ltrt_docs/doc.txt")) {
   $myfile = fopen("ltrt_docs/doc.txt", "w");
}

//function to add a item to the document
function ltrt_item($text){

  $datetime = date("Y-m-d H:i:s");

  $line = '"'."item".'";"'.$datetime.'";"'.$text.'";"';

  $myfile = fopen("ltrt_docs/doc.txt", "a");
  fwrite($myfile, $line."\n");
  fclose($myfile);

}

//function to request a screenshot (from LearningTour Toolkit, for RPA)
function ltrt_screenshot(){

  $datetime = date("Y-m-d H:i:s");

  $line = '"'.$datetime.'";"'."screenshot".'";"';

  $myfile = fopen("ltrt_docs/doc.txt", "a");
  fwrite($myfile, $line."\n");
  fclose($myfile);

}
