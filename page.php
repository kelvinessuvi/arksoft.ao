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
        include 'conexao.php';
        if(isset($_POST['nome_candidato']) || isset($_FILES['cv_candidato'])){
            $nome_candidato = $_POST['nome_candidato'];
            $email_candidato = $_POST['email_candidato'];
            $telefone_candidato = $_POST['telefone_candidato'];
            $morada_candidato = $_POST['morada_candidato'];
            $data = date("Y-m-d H:i:s");
            $cv = $_FILES['cv_candidato'];
            $cv_candidato = strval($cv["name"]);
            $query1 = "INSERT INTO recrutamento (nome_candidato,email_candidato,telefone_candidato,morada,cv_candidato,data_candidato) VALUES ('$nome_candidato','$email_candidato','$telefone_candidato','$morada_candidato','$cv_candidato','$data')";
            mysqli_query($conexao,$query1);
            echo "
                <script>
                    alert('A sua candidatura foi feita com sucesso!');
                    window.location.href='page.php?page=recruit';
                </script>
            ";
            $files = $_FILES['cv_candidato'];
            if($files['error']){
                throw new Exception("Error: ".$files["error"]);
            }
            $dirUpload = "uploads";
            if(!is_dir($dirUpload)){
                mkdir($dirUpload);
            }
            if(move_uploaded_file($files["tmp_name"], $dirUpload . DIRECTORY_SEPARATOR . $files["name"])){}
            else{
                throw new Exception("Não foi possível realizar o upload do arquivo selecionado.");
            }
        }
        
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
            $query = "INSERT INTO feedback (nome,avaliacao) VALUES ('$nome','$avaliacao')";

            mysqli_query($conexao, $query);

        }
    }

    if($_GET['page'] == "contactos"){
        include 'includes/contactoscontent.php';
    }
    include 'includes/footer.php';
?>