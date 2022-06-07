<?php

    include 'includes/head.php';
    include 'includes/homeheader.php';
    if($_GET['page'] == "home"){
        include 'includes/homecontent.php';
    }
    else{
        echo "erro";
    }
    if($_GET['page'] == "home"){
        include 'includes/servicescontent.php';
    }
    else{
        echo "erro";
    }

    if($_GET['page'] == "servicos"){
        include 'includes/servicescontent.php';
    }
    else{
        echo "erro";
    }
    include 'includes/footer.php';


?>