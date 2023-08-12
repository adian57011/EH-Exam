<?php 

function validate_file($file)
{
    
    $validType = ['jpg','png'];
    $maxSize = 5 * 1024*1024; //defining max size should be 5Mb
    if (!isset($file['error']) || is_array($file['error'])) {
        return "Invalid parameters.";
    }

    if ($file['error'] === UPLOAD_ERR_OK)
    {
        if ($file['size'] > $maxSize) {
            return "File size exceeds the maximum limit.";
        }
        if (!in_array($file['type'], $validType)) {
            return "Invalid file type. Only JPG and PNG are allowed.";
        }

        return true;
    }

}


?>