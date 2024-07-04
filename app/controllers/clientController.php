<?php
if(isset($_GET['redirect']) ){
    $redirect = $_GET['redirect'];
    switch ($redirect) {
        case 'listspHome':
        include  "app/views/Client/home.php";
            break;
    }
} else {
    include  "app/views/Client/home.php";
}