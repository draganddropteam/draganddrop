<?php
function mod_draganddrop_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    return false; 
}

function mod_draganddrop_get_coursemodule_info($coursemodule) {
    $info = new cached_cm_info();
    $info->icon = 'mod/draganddrop/pix/draganddrop_icon.png'; 
    return $info;
}