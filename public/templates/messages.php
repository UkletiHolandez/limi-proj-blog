<?php
    if (Session::exists('success')) {
        echo "<div class='info'><span class='text'>" . Session::message('success') . "</span><span class='close-me'>&times</span></div>";
    }

?>

