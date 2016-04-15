<?php
include('../default/page/start_header.php');
?>
<!-- Place en dessous ton CSS dans Vendor, et ton CSS local -->

  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"/>


<!-- fin CSS -->
<?php include('../default/page/header.php'); ?>

<!-- Place ici tes scripts Javascripts dans Vendor, et ton JS local -->

    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-2.2.1.min.js"></script>
    <script type="text/javascript" src="../../vendor/jquery-2.2.1/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="gaspacho.js"></script>

<!-- Fin Scripts -->


<?php include('../default/page/end_header.php'); ?>

<!-- Place ici ton contenu -->

<div class="wrap">
<div class="content">

    <img src="images/back.jpg" class="superbg" />
  <script src="background.js" type="text/javascript"></script>   

    <div class="container-fluid">

        <div class="row-fluid">

            <div id="container" class="col-sm-5 col-md-5 col-lg-5">

                <div class="row-fluid">
                    <div id="base" class="col-md-12">
                        <h2 style=color:white;>Base</h2>
                        <h3>(choisir une base)</h3>

                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('base','tomate');"><img
                                id="S37" src="images/tomate_test.png" alt=""/>
                            <p class="text-center">Tomate</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3  ingredient" onclick="afficher('base','potiron');"><img
                                id="S38" src="images/potiron_test.png" alt=""/>
                            <p class="text-center">Potiron</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('base','lentille');"><img
                                id="S39" src="images/lentille_test.png" alt=""/>
                            <p class="text-center">Lentille</p></div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div id="legumes" class="col-md-12">
                        <h2 style=color:white;>Légumes</h2>
                                                <h3>(choisir deux légumes)</h3>

                        <div class="col-sm-3 col-md-3 col-lg-3  ingredient" onclick="afficher('legumes','concombre');">
                            <img id="S2" src="images/concombre_test.png" alt=""/>
                            <p class="text-center">Concombre</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3  ingredient" onclick="afficher('legumes','poivron');">
                            <img id="S3" src="images/poivron_test.png" alt=""/>
                            <p class="text-center">Poivron</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3  ingredient" onclick="afficher('legumes','chou_fleur');">
                            <img id="S4" src="images/choux_fleur_test.png" alt=""/>
                            <p class="text-center">Chou-fleur</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('legumes','poireau');"><img
                                id="S5" src="images/poireau_test.png" alt=""/>
                            <p class="text-center">Poireau</p></div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div id="condiments" class="col-md-12">
                        <h2 style=color:white;>Condiments</h2>
                                                <h3>(choisir quatres condiments)</h3>

                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('condiments','oignon');">
                            <img id="S9" src="images/oignon_test.png" alt=""/>
                            <p class="text-center">Oignon</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('condiments','ail');"><img
                                id="S10" src="images/ail_test.png" alt=""/>
                            <p class="text-center">Ail</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('condiments','basilic');">
                            <img id="S11" src="images/basilic_test.png" alt=""/>
                            <p class="text-center">Basilic</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('condiments','piment');">
                            <img id="S12" src="images/piment_test.png" alt=""/>
                            <p class="text-center">Piment</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('condiments','capres');">
                            <img id="S13" src="images/capres_test.png" alt=""/>
                            <p class="text-center">Capres</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient"
                             onclick="afficher('condiments','pois_chiche');">
                            <img id="S14" src="images/pois_chiche_test.png" alt=""/>
                            <p class="text-center">Pois-chiche</p>
                        </div>
                    </div>

                </div>

                <div class="row-fluid">
                    <div id="assaisonement" class="col-md-12">
                        <h2 style=color:white;>Assaisonement</h2>
                                                <h3>(choisir quatres assaisonements)</h3>

                          <div class="col-sm-3 col-md-3 col-lg-3 ingredient"
                             onclick="afficher('assaisonement','citron');"
                        ><img id="S25"
                              src="images/citron_test.png"
                              alt=""/>
                            <p class="text-center">Citron</p></div>

                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient"
                             onclick="afficher('assaisonement','vinaigre');"
                        ><img id="S25"
                              src="images/vinaigre_test.png"
                              alt=""/>
                            <p class="text-center">Vinaigre</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient"
                             onclick="afficher('assaisonement','huile_olive');">
                            <img id="S26"
                                 src="images/huile_olive_test.png"
                                 alt=""/>
                            <p class="text-center">Huile d'olive</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient"
                             onclick="afficher('assaisonement','poivre');">
                            <img id="S27" src="images/poivre_test.png"
                                 alt=""/>
                            <p class="text-center">Poivre</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('assaisonement','sel');">
                            <img id="S28" src="images/sel_test.png" alt=""/>
                            <p class="text-center">Sel</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('assaisonement','curry');">
                            <img id="S29" src="images/curry_test.png" alt=""/>
                            <p class="text-center">Curry</p></div>
                    </div>
                </div>

                <div class="row-fluid">
                    <div id="temperature" class="col-md-12">
                        <h2 style=color:white>Température</h2>
                                                <h3>(un choix possible)</h3>

                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('temperature','chaud');">
                            <img id="S35" src="images/chaud2.png" alt=""/>
                            <p class="text-center">Chaud</p></div>
                        <div class="col-sm-3 col-md-3 col-lg-3 ingredient" onclick="afficher('temperature','froid');">
                            <img id="S36" src="images/froid_2.png" alt=""/>
                            <p class="text-center">Froid</p></div>
                    </div>
                </div>

            </div><!--container-->

            <div class="col-sm-5 col-md-5 col-lg-5 pull-right side">
                <h2>Saurez vous préparer le gaspacho de Henry ?</h2>

                <p>Composez votre gaspacho avec les ingrédients disponibles, en espérant qu'il plaira à Henry...</p>
                <img class="bol" src="images/bol.svg" alt=""/>

                <div id="envoi">
                    <input type="image" src="images/gouter.png" onclick="test();"></button>
                    <input type="image" src="images/vider.png" onclick="empty();"></button>
                </div>
            </div><!--side-->

        </div>

    </div>

</div>
</div>



<!-- Fin du contenu -->
<?php 
include('../default/page/footer.php');
?>