<?php

function setdescription($mydescription){

    $position=70; // Define how many characters you want to display.

    
    // Find what is the last character.
    $post = substr($mydescription,$position,1);

    $sendcount =str_word_count($mydescription);
    if($sendcount >= 70){

        if($post !=" "){

            while($post !=" "){
                $i=1;
                $position=$position+$i;
                $post = substr($mydescription,$position,1);
            }
    
        }

    }

    $description = substr($mydescription,0,$position);

    // Display your message
    return $description;


}

function countwords($gettext){
    $sendcount =str_word_count($gettext);
    return $sendcount;
}


?>