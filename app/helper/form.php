<?php

function post($name): array|string|null
{
    if (isset($_POST[$name])){
        if (is_array($_POST[$name]))
            return array_map(function($item){
                return htmlspecialchars(trim($item));
            }, $_POST[$name]);
        return htmlspecialchars(trim($_POST[$name]));
    }
    return null;
}

function get($name): array|string|null
{
    if (isset($_GET[$name])){
        if (is_array($_GET[$name]))
            return array_map(function($item){
                return htmlspecialchars(trim($item));
            }, $_GET[$name]);
        return htmlspecialchars(trim($_GET[$name]));
    }
    return null;
}
function form_control(...$expect_these): bool|array
{
    unset($_POST['submit']);
    $data = [];
    $error = false;
    foreach ($_POST as $key => $value) {
        if (!in_array($key, $expect_these) && !post($key)) {
            $error = true;
        } else {
            $data[$key] = post($key);
        }
    }

    if ($error) {
        return false;
    }
    return $data;
}