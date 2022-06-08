<?php

    session_start();

    include '../conexao.php';

    if(isset($_GET["id"])){

        $id = $_GET["id"];
        $query2 = "UPDATE empresa SET estado_empresa='APROVADO' WHERE idempresa={$id}";
        mysqli_query($connection,$query2);
        echo "
            <script>

              alert('Empresa aprovada com sucesso');
              window.location.href='dashboard.php';
            
            </script>
        ";     

    }




?>