<?php

function site_url($url = false)
{
    return URL . '/' . $url;
}

function public_url($url = false)
{
    return URL . '/public/' . setting('theme') . '/' . $url;
}

function error(){
    global $error;
    return isset($error) ? $error : false;
}

function success(){
    global $success;
    return isset($success) ? $success : false;
}

function menu($id){
    global $db;
    $query = $db->prepare('SELECT * FROM menu WHERE menu_id = :id');
    $query->execute([
        'id' => $id
    ]);
    $row = $query->fetch(PDO::FETCH_ASSOC);
    if ($row){
        $data = json_decode($row['menu_content'], true);
        return $data;
    }
    return false;
}