<?php
/**
 * Render template
 *
 * @param array       $params   $key = value
 * @param string      $tpl_name template name without ".php"
 *
 * @return bool
 */
function renderTpl($params = array(), $tpl_name) {
    $tpl_dir = '/path/to/tpl/dir/';
    $tpl     = $tpl_dir . $tpl_name . '.php';

    if (count($params)) {
        foreach ($params as $key => $value) {
            ${"$key"} = $value;
        }
    }

    if (file_exists($tpl)) {
        include $tpl;
    } else {
        echo "Do not exist template!";
    }

    return true;
}