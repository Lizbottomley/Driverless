<?php

session_start();
session_destroy();
unset($_SESSION["IS_LOGIN"]);
?>
<script>
    window.location.href = "index.php";
</script>
