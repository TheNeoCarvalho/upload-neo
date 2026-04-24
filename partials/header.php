<?php
require_once "../funcoes/retornaAsIniciais.php";
?>
<header class="flex justify-content-between align-items-center p-3 mb-4 border-bottom">
    <div>
        <span>
            <?php
            echo '<a href="../uploads.php">';
            if ($_SESSION['nome']) {
                if ($_SESSION['avatar']) {
                    echo "<img style='width: 30px; height: 30px;border: 1px solid #ccc; border-radius: 50%; padding: 5px' src='../uploads/" . $_SESSION['avatar'] . "'>";
                } else {
                    echo "<span style='width: 30px; height: 30px;border: 1px solid #ccc; border-radius: 50%; padding: 5px'>";
                    echo RetornaIniciais($_SESSION['nome']);
                    echo "</span>";
                }
                echo '</a>';
                echo "Olá, Bem vindo, " . $_SESSION['nome'];
            }
            ?>
        </span>


        </a>
        <a href="../funcoes/sairLogin.php">Sair</a>
    </div>
</header>