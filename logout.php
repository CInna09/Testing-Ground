<?php
session_start();
session_destroy();
?>
<script>
    alert('LOGOUT SUKSES');
    document.location = 'login.php';
</script>
