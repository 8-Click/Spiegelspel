<!DOCTYPE html>
<html lang="en">
    <head>
    <?php
    if (isset($page)) {
        if ($page == "home") {
            include 'public/core/config.php';
        }
    } else {
        include 'core/config.php';
    }
    ?>