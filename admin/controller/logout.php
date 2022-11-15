<?php

// Logout
if (isset($_POST['action']) && $_POST['action'] === 'logout'
    && isset($_SESSION['user_rank']) && in_array($_SESSION['user_rank'],[1,2])){
    session_destroy();
}

header('Location:' . site_url('admin/index'));
exit;