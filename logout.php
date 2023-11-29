<?php
session_start();
session_unset();
session_destroy();

?>
<script>
alert('Sampai Jumpa Kembali :)');
document.location.href='./login.php';
</script>