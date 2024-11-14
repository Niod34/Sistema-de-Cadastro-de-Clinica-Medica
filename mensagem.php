<?php
$mensagem = isset($_GET['mensagem']) ? $_GET['mensagem'] : '';

echo "<h1>{$mensagem}</h1>";
echo "<script>
        setTimeout(function() {
            window.location.href = 'cadastrohtml.php'; 
        }, 3000);
      </script>";
?>
