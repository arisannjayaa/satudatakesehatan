<?php
function base_url($url = null)
{
    $base_url = "http://" . $_SERVER['HTTP_HOST'] . "/satudatakesehatan";
    if ($url != null) {
        return $base_url . "/" . $url;
    } else {
        return $base_url;
    }
}
