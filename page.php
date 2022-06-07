<?php

    include 'includes/head.php';
    include 'includes/homeheader.php';
    if($_GET['page'] == "home"){
        include 'includes/homecontent.php';
    }
    if($_GET['page'] == "home"){
        include 'includes/servicescontent.php';
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
    }

    
    include 'includes/footer.php';

?>