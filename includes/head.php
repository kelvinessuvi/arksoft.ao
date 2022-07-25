<?php?>
<!DOCTYPE html>
<html lang="pt-PT">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="initial-scale=1, maximum-scale=1">
  <title>Arksoft Angola</title>
  <meta name="keywords" content="tecnologia,arksoft,arksoftangola,angola,ti,informação,websites,cctv,voip">
  <meta name="description" content="Empresa angolana de prestação de serviços tecnológicos.">
  <meta name="author" content="ARKSOFT ANGOLA">
  <link rel="icon" href="../assets/img/logos/arksoft.png" type="image/gif" />
  <link rel="stylesheet" href="assets/css/bootstrap.min.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <link rel="stylesheet" href="assets/css/responsive.css" />
  <link rel="stylesheet" href="assets/css/colors1.css" />
  <link rel="stylesheet" href="assets/css/custom.css" />
  <link rel="stylesheet" href="assets/css/animate.css" />
  <link rel="stylesheet" type="text/css" href="assets/revolution/css/settings.css" />
  <link rel="stylesheet" type="text/css" href="assets/revolution/css/layers.css" />
  <link rel="stylesheet" type="text/css" href="assets/revolution/css/navigation.css" />
  <style>
    .dropdown {
      position: relative;
      display: inline-block;
      padding-top:15px;
    }

    .dropdown-content {
      float:left;
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    .dropdown-content .hover{
      padding:15px;
    }
    .dcontent{
      width:100%;
      height:100%;
      padding:15px;
    }

    .dropdown:hover .dropdown-content{
      transition: 2s !important;
      display:block;
    }
    .dropdown .dropdown-content .dcontent:hover{
      height:100%;
      width:100%;
      border-bottom:2px solid blue;
      color:#0056b3;
      cursor:pointer;
    }
    .dropdown .empresas{
      color:black;
      font-size:14px;
      font-weight: 600;
      font-family: Raleway, sans-serif;
    }
    .divactive{
      border-bottom: 2px solid blue !important;
    }
  </style>
</head>
<body id="default_theme">
  
<!--ÍNICIO DO CABEÇALHO-->

<header id="default_header" class="header_style_1 fixed-header" style="z-index:2;background: #fff;box-shadow: 0 0 9px rgb(0, 0, 0);">

  <div class="header_top" style="background:#156c9d;">

    <div class="container">

      <div class="row">

        <div class="col-md-8">

          <div class="full">

            <div class="topbar-left">

              <ul class="list-inline">

                <li> <span class="topbar-label"><i class="fa  fa-home"></i></span> <span class="topbar-hightlight">Luanda, Angola - Morro Bento II</span> </li>

                <li> <span class="topbar-label"><i class="fa fa-envelope-o"></i></span> <span class="topbar-hightlight"><a href="mailto:geral@arksoft.ao">geral@arksoft.ao</a></span> </li>

              </ul>

            </div>

          </div>

        </div>

        <div class="col-md-4 right_section_header_top">

          <div class="float-left">

            <div class="social_icon">

              <ul class="list-inline">

                <li><a class="fa fa-facebook" href="https://www.facebook.com/arksoftangola" title="Facebook" target="_blank"></a></li>

                <li><a class="fa fa-linkedin" href="https://www.linkedin.com/company/arksoftangola" title="LinkedIn" target="_blank"></a></li>

                <li><a class="fa fa-instagram" href="https://www.instagram.com/arksoftangola" title="Instagram" target="_blank"></a></li>


              </ul>

            </div>

          </div>

          <div class="float-right">

            <div class="make_appo"> <a class="btn white_btn" href="page.php?page=feedback">Avalie-nos</a> </div>

          </div>

        </div>

        

      </div>

    </div>

    

  </div>

  <div class="header_bottom">

    <div class="container">

      <div class="row">

        <div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">

          <div class="logo"> <a href="index.php"><img src="assets/img/logos/logo.png" alt="arksoft" /></a> </div>
-
        </div>

        <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">

          <div class="menu_side">

            <div id="navbar_menu">

              <ul class="first-ul">
                <?php

                    $hover = "";
                    $hover_s = "";
                    $hover_a = "";
                    $hover_r = "";
                    $hover_b = "";
                    $hover_c = "";
                    if($_GET['page'] == "servicos"){
                        $hover_s .="active divactive";
                    }
                    if($_GET['page'] == "home"){
                        $hover .="active divactive";
                    }
                    if($_GET['page'] == "resocial"){
                        $hover_a .="active divactive";
                    }
                    if($_GET['page'] == "recruit"){
                        $hover_r .="active divactive";
                    }
                    if($_GET['page'] == "sobre"){
                        $hover_b .="active divactive";
                    }       
                    if($_GET['page'] == "contactos"){
                        $hover_c .="active divactive";
                    }
                    if($_SERVER['REQUEST_URI'] === '/arksoft.ao/page.php'){
                        $hover .= "active divactive";
                    }
                
                ?>
                <li> <a class="<?=$hover?>" href="page.php?page=home">Home</a>

                </li>

                <li><a class="<?=$hover_s?> hover" href="page.php?page=servicos">Serviços</a></li>

                <!--<li><a class=" hover" href="page.php?page=resocial">Acção Social</a></li>

                <li><a href="#">Softwares</a></li>

                <li><a class="" href="page.php?page=recruit">Recrutamento</a></li>

                <li> <a class=" hover" href="page.php?page=sobre">Empresa</a>

                </li>-->
                

               <li><a class="<?=$hover_r?>" href="page.php?page=recruit">Recrutamento</a></li>
               <li> 
                <div class="dropdown">
                  <a href="#" class="empresas hover">EMPRESA</a>
                  <div class="dropdown-content">
                    <a href="page.php?page=sobre" class="<?=$hover_b?> hover"><div class="dcontent">Sobre Nós</div></a>
                    <a class="<?=$hover_a?> hover" href="page.php?page=resocial"><div class="dcontent">Acção Social</div></a>
                    <a class="<?=$hover_c?> hover" href="page.php?page=contactos"><div class="dcontent">Contactos</div></a>
                  </div>
                </div>  
               </li>


              </ul>

            </div>

            

          </div>

        </div>

      </div>

    </div>

  </div>

</header>