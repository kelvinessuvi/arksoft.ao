<?php

    include 'includes/head.php';
    
    if($_SERVER['REQUEST_URI'] === "/page.php"){
        include 'includes/homecontent.php';
    }

    if($_GET['page'] == "home"){
        include 'includes/homecontent.php';
    }

    if($_GET['page'] == "servicos"){
        include 'includes/servicescontent.php';
    }

    if($_GET['page'] == "sobre"){
        include 'includes/sobrecontent.php';
    }

    if($_GET['page'] == "recruit"){
        include 'includes/recruitcontent.php';
    }

    if($_GET['page'] == "resocial"){
        include 'includes/resocialcontent.php';
    }

    if($_GET['page'] == "feedback"){
        include 'includes/feedbackcontent.php';
        session_start();
        include 'conexao.php';
        if(isset($_POST['nome'],$_POST['avaliacao'])){
            $nome = $_POST['nome'];
            $avaliacao = $_POST['avaliacao'];
            $query = "INSERT INTO feedback ('nome','avaliacaoo') VALUES ('$nome','$avaliacao')";

            mysqli_query($conexao, $query);

        }
    }

    if($_GET['page'] == "contactos"){
        include 'includes/contactoscontent.php';
    }

    include 'includes/footer.php';
?>