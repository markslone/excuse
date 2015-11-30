<?php
 /** 
 * Excuse Generator 
 * @author: Mark Slone
 * @version: 0.1
 * @url: http://markcase.ml/
 **/
 
 /** Takes One Parameter: $question **/
 function excuse($question){
 
  if($question == "why are you late?"){
   $excuses = array("I was mawled by an owl.", "Traffic was ultra jammed", "Define late, as time is not within our control");
   shuffle($excuses);
   foreach ($excuses as $excuse) {
    echo "$excuse ";
    }
  }
  
  
  
 }
 
?>
