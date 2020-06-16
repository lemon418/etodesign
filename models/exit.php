<?php
    setcookie('user', $user['id'], time() - 600, "/");
    header('Location: ../index.php');
    ?>