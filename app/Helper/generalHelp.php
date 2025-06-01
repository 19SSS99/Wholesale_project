<?php
define('PAGINATION_COUNT',10);
/*
function getFolder(){
    return app()->getLocale()=='ar'?'css-rtl':'css';
}
*/
function uploadimage($folder,$photo){
    $destination = 'public/assets/images/'.$folder;
    $photo = $photo;
    $filename = $photo->hashName();
    $photo->move($destination, $filename);
    return $filename;

}



