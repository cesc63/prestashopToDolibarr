<?php
//**************************************  DEBUT   CRON   *******************************************************

// RECUPERATION DE LA CONFIG **********************************************
include('../../config/config.inc.php');
// RECUPERATION DE LA CONFIG **********************************************

// CONNEXION AUTOMATIQUE A LA BASE PRESTA **************************************************
mysql_connect(_DB_SERVER_,_DB_USER_,_DB_PASSWD_); 
mysql_select_db(_DB_NAME_);
mysql_query("SET NAMES UTF8");
// FIN CONNEXION AUTOMATIQUE A LA BASE PRESTA **************************************************

// FONCTIONS *********************************************************
function accents_majuscules($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);$chaine = str_replace( "�", "�", $chaine);
    $chaine=strtoupper($chaine);
    return $chaine;
    }
function accents_minuscules($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    return $chaine;
    }
function accents_sans($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);$chaine = str_replace( "�", "a", $chaine);
    $chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);$chaine = str_replace( "�", "e", $chaine);
    $chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "o", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "i", $chaine);
    $chaine = str_replace( "�", "u", $chaine);$chaine = str_replace( "�", "i", $chaine);$chaine = str_replace( "�", "u", $chaine);$chaine = str_replace( "�", "y", $chaine);$chaine = str_replace( "�", "y", $chaine);
    $chaine = str_replace( "�", "n", $chaine);$chaine = str_replace( "�", "c", $chaine);$chaine = str_replace( "�", "p", $chaine);$chaine = str_replace( "�", "y", $chaine);$chaine = str_replace( "�", "ae", $chaine);
    $chaine = str_replace( "�", "oe", $chaine);$chaine = str_replace( "�", "D", $chaine);$chaine = str_replace( "�", "o", $chaine);
    $chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "A", $chaine);
    $chaine = str_replace( "�", "A", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);$chaine = str_replace( "�", "E", $chaine);
    $chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "O", $chaine);
    $chaine = str_replace( "�", "O", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);$chaine = str_replace( "�", "I", $chaine);
    $chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "U", $chaine);$chaine = str_replace( "�", "Y", $chaine);
    $chaine = str_replace( "�", "N", $chaine);$chaine = str_replace( "�", "C", $chaine);$chaine = str_replace( "�", "AE", $chaine);
    $chaine = str_replace( "�", "OE", $chaine);$chaine = str_replace( "�", "D", $chaine);
    return $chaine;
    }
function tel_cacateres($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", "", $chaine);$chaine = str_replace( "-", "", $chaine);$chaine = str_replace( ".", "", $chaine);$chaine = str_replace( " ", "", $chaine);$chaine = str_replace( ",", "", $chaine);$chaine = str_replace( "_", "", $chaine);
    return $chaine;
    }
function produits_caract($chaine)
    {
    $chaine = htmlentities($chaine);
    $chaine = html_entity_decode($chaine,ENT_QUOTES,"ISO-8859-1");
    $chaine = str_replace( "'", " ", $chaine);
    $chaine = str_replace( "<p>�</p>", "<br />", $chaine);
    $chaine = str_replace( "</p>", "", $chaine);
    return $chaine;
    }
// FIN FONCTIONS *********************************************************

// RECUPERATION AUTOMATIQUE DE DONNEES **************************************************
$date_update=date("Y-m-d");
$heure_update=date("H:i:s");
$date_update="$date_update $heure_update";
setlocale (LC_TIME, 'fr_FR.utf8','fra');
$date_synchro=(strftime("%A %d %B %Y"));
$date_synchro=mb_strtoupper($date_synchro);
$heure_synchro=(strftime("%H:%M:%S"));
$URL  = $_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'];
$URL .= ($_SERVER['QUERY_STRING']!='')? '?' : '';
$URL .= $_SERVER['QUERY_STRING'];
$nb = strpos($URL,'/');
$URL=substr($URL,0,$nb);
$uri='http://'.$URL.'';
$serveur_presta=_DB_SERVER_;
$admin_presta=_DB_USER_;
$mdp_presta=_DB_PASSWD_;
$base_presta=_DB_NAME_;
$prefix_presta=_DB_PREFIX_;
$donnees_lang = Db::getInstance()->GetRow("select * from ".$prefix_presta."configuration where name='PS_LANG_DEFAULT'");
$lang=$donnees_lang['value'];
// FIN RECUPERATION AUTOMATIQUE DE DONNEES **************************************************

// RECUP VERSIONS PRESTA *****************************************************
$version_presta=_PS_VERSION_;
$version_presta=substr($version_presta,0,3);
// FIN RECUP VERSIONS PRESTA *****************************************************
    
// RECUPERATION DES PARAMETRES *************************************** 
$donnees_recup_des_bases = Db::getInstance()->GetRow("select * from P2D_param where id=1");
$serveur_doli=$donnees_recup_des_bases['serveur_doli'];
$admin_doli=$donnees_recup_des_bases['admin_doli'];
$mdp_doli=$donnees_recup_des_bases['mdp_doli'];
$base_doli=$donnees_recup_des_bases['base_doli'];
$prefix_doli=$donnees_recup_des_bases['prefix_doli'];
$libelle_port=$donnees_recup_des_bases['libelle_port'];
    $chaine=$libelle_port;    
    $chaine= accents_sans("$chaine");   
    $libelle_port=$chaine;
$code_article_port=$donnees_recup_des_bases['code_article_port'];
$label=$donnees_recup_des_bases['prefix_ref_client'];
    $chaine=$label;    
    $chaine= accents_sans("$chaine");   
    $label=$chaine;
$option_image=$donnees_recup_des_bases['option_image'];
$uri=$donnees_recup_des_bases['uri'];
$decremente=$donnees_recup_des_bases['decremente'];                            
$numero_de_commande=$donnees_recup_des_bases['numero_de_commande'];
$mail_achat=$donnees_recup_des_bases['mail_achat'];                 
$valide=$donnees_recup_des_bases ['valide'];
$memo_id=$donnees_recup_des_bases['memo_id'];                   
$stock_doli=$donnees_recup_des_bases['stock_doli'];

// CALCUL DU NOMBRE DE COMMANDES A TRAITER **************************************
$nb_commandes=$donnees_recup_des_bases['nb_commandes'];
$req_max_id_commandes="select max(id_order) from ".$prefix_presta."orders";
$req_max_id_commandes=mysql_query($req_max_id_commandes);
$id_max_commandes=mysql_result($req_max_id_commandes,0,"max(id_order)");
if ($nb_commandes!=0)
    {
    $nb_commandes=$nb_commandes-1;
    $nb_commandes=$id_max_commandes-$nb_commandes;
    }
else
    {
    $nb_commandes=0;
    }
// FIN CALCUL DU NOMBRE DE COMMANDES A TRAITER **************************************

// CALCUL DU NOMBRE DE CLIENTS A TRAITER ************************************
$nb_clients=$donnees_recup_des_bases['nb_clients'];
$req_max_id_clients="select max(id_customer) from ".$prefix_presta."customer";
$req_max_id_clients=mysql_query($req_max_id_clients);
$id_max_clients=mysql_result($req_max_id_clients,0,"max(id_customer)");
if ($nb_clients!=0)
    {
    $nb_clients=$nb_clients-1;
    $nb_clients=$id_max_clients-$nb_clients;
    }
else
    {
    $nb_clients=0;
    }
// FIN CALCUL DU NOMBRE DE CLIENTS A TRAITER ************************************
// FIN RECUPERATION DES PARAMETRES ***************************************

// DEFINITION DE DONNEES *****************************************
$req_nb_id_produits = mysql_query("SELECT count(distinct(id_product)) FROM ".$prefix_presta."product "); 
$nb_produits=(array_pop(mysql_fetch_row($req_nb_id_produits)));
// FIN DEFINITION DE DONNEES *****************************************

// CONNEXION A DOLIBARR *************************************
mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
mysql_select_db("$base_doli");
mysql_query("SET NAMES UTF8");
// FIN CONNEXION A DOLIBARR *************************************

// RECUPERATION DE LA VERSION DE DOLIBARR **************************************************
$sql_recup_version_dolibarr="select * from ".$prefix_doli."const where name='MAIN_VERSION_LAST_UPGRADE'";
$result_version_dolibarr = mysql_query($sql_recup_version_dolibarr) or die($sql_recup_version_dolibarr."<br />\n".mysql_error());
$donnees_version_dolibarr = mysql_fetch_array($result_version_dolibarr);
$version_dolibarr=$donnees_version_dolibarr['value'];
$version_dolibarr=substr($version_dolibarr,0,3);
if ($version_dolibarr=="")
    {
    $sql_recup_version_dolibarr="select * from ".$prefix_doli."const where name='MAIN_VERSION_LAST_INSTALL'";
    $result_version_dolibarr = mysql_query($sql_recup_version_dolibarr) or die($sql_recup_version_dolibarr."<br />\n".mysql_error());
    $donnees_version_dolibarr = mysql_fetch_array($result_version_dolibarr);
    $version_dolibarr=$donnees_version_dolibarr['value'];
    $version_dolibarr=substr($version_dolibarr,0,3);
    }
// FIN RECUPERATION DE LA VERSION DE DOLIBARR **************************************************

// CONNEXION A PRESTASHOP *************************************
mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
mysql_select_db("$base_presta");
mysql_query("SET NAMES UTF8");     
// FIN CONNEXION A PRESTASHOP *************************************

//* D�but Sens PrestaShop vers Dolibarr *************************************************************************
if ($stock_doli=='checked')
    {
    $sql_liste="select * from ".$prefix_presta."product";
    $result_liste = mysql_query($sql_liste) or die($sql_liste."<br />\n".mysql_error());
    while ($stock = mysql_fetch_array($result_liste))
        {
        $id_produit=$stock['id_product'];
        if ($version_presta<"1.5")
            {
            $qte_produit=$stock['quantity'];
            }
        
        if ($version_presta>="1.5")
            {
            $donnees_recup_qte_produit = Db::getInstance()->GetRow("select * from ".$prefix_presta."stock_available where id_product='".$id_produit."'");
            $qte_produit=$donnees_recup_qte_produit['quantity'];
            }
        
        // CONNEXION A DOLIBARR *************************************
        mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
        mysql_select_db("$base_doli");
        mysql_query("SET NAMES UTF8");
        // FIN CONNEXION A DOLIBARR *************************************
        
        $info_erreur="Erreur de synchro sur : SENS PRESTASHOP VERS DOLIBARR - ID PRODUIT : $id_produit - QUANTITE : $qte_produit";//or die($info_erreur."<br />\n".mysql_error())
        mysql_query("UPDATE ".$prefix_doli."product_stock set reel='$qte_produit' where fk_product='".$id_produit."'")
            or die($info_erreur."<br />\n".mysql_error());

        // CONNEXION A PRESTASHOP *************************************
        mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
        mysql_select_db("$base_presta");
        mysql_query("SET NAMES UTF8");     
        // FIN CONNEXION A PRESTASHOP *************************************
        }
    }
//* Fin Sens PrestaShop vers Dolibarr *************************************************************************

//* D�but Sens Dolibarr vers PrestaShop *************************************************************************
if ($stock_doli=='')
    {
    $sql_liste="select id_product from ".$prefix_presta."product";
    $result_liste = mysql_query($sql_liste) or die($sql_liste."<br />\n".mysql_error());
    while ($stock = mysql_fetch_array($result_liste))
        {
        $id_produit=$stock['id_product'];
        
        // CONNEXION A DOLIBARR *************************************
        mysql_connect("$serveur_doli","$admin_doli","$mdp_doli");
        mysql_select_db("$base_doli");
        mysql_query("SET NAMES UTF8");
        // FIN CONNEXION A DOLIBARR *************************************
        
        $sql_product_stock="select * from ".$prefix_doli."product_stock where fk_product='".$id_produit."'";
        $result_product_stock = mysql_query($sql_product_stock) or die($sql_product_stock."<br />\n".mysql_error());
        while ($creer_product_stock = mysql_fetch_array($result_product_stock))
            {
            $reel=$creer_product_stock['reel'];
            $cumul_reel=$cumul_reel+$reel;
            }
        
        // CONNEXION A PRESTASHOP *************************************
        mysql_connect("$serveur_presta","$admin_presta","$mdp_presta");
        mysql_select_db("$base_presta");
        mysql_query("SET NAMES UTF8");     
        // FIN CONNEXION A PRESTASHOP *************************************
        
        if ($version_presta<"1.5")
            {
            $info_erreur="Erreur de synchro sur : SENS DOLIBARR VERS PRESTASHOP - ID PRODUIT : $id_produit - QUANTITE : $cumul_reel";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query("UPDATE ".$prefix_presta."product set quantity='$cumul_reel' where id_product='".$id_produit."'")
                or die($info_erreur."<br />\n".mysql_error());
            }
        if ($version_presta>="1.5")
            {
            $info_erreur="Erreur de synchro sur : SENS DOLIBARR VERS PRESTASHOP / PRODUCT - ID PRODUIT : $id_produit - QUANTITE : $cumul_reel";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query("UPDATE ".$prefix_presta."product set quantity='$cumul_reel' where id_product='".$id_produit."'")
                or die($info_erreur."<br />\n".mysql_error());
            $info_erreur="Erreur de synchro sur : SENS DOLIBARR VERS PRESTASHOP / STOCK AVAILABLE - ID PRODUIT : $id_produit - QUANTITE : $cumul_reel";//or die($info_erreur."<br />\n".mysql_error())
            mysql_query("UPDATE ".$prefix_presta."stock_available set quantity='$cumul_reel' where id_product='".$id_produit."'")
                or die($info_erreur."<br />\n".mysql_error());
            }
        $cumul_reel=0;
        }
    }
//* Fin Sens Dolibarr vers PrestaShop *************************************************************************
    
// DEFINITION DE L'AFFICHAGE *************************************************************
$echo ='';
$echo =''.$echo.'Le '.$date_synchro.' a '.$heure_synchro.'\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'[ SYNCHRONISATION REUSSIE ]\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'---------------------------------------------------\n';
$echo =''.$echo.'Il y a '.$nb_produits.' Produits dans la base PrestaShop\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'Les quantit�s de stock de vos produits sont � jour entre Dolibarr et PrestaShop\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'---------------------------------------------------\n';
$echo =''.$echo.'\n';
$echo =''.$echo.'^^^^^^^^^^^^^^^^^^^^\n';
$echo =''.$echo.'Info Configuration :\n';
$echo =''.$echo.'PrestaShop : '.$version_presta.' / Dolibarr : '.$version_dolibarr.' \n';
$echo =''.$echo.'^^^^^^^^^^^^^^^^^^^^\n';
$echo =''.$echo.'\n';
// FIN DEFINITION DE L'AFFICHAGE *************************************************************

//**************************************  FIN   CRON   *******************************************************

?>
