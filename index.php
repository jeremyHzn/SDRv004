<?php

/**
 * Page d'accueil de l'application CAG
 * Point d'entrée unique de l'application
 * @author 
 * @package default
 */
// inclure les bibliothèques de fonctions
require_once 'include/_config.inc.php';


session_start(); // début de session
// on simule un utilisateur connecté (en phase de test)
include("vues/_v_header.php");

if (isset($_GET['uc'])){
    $uc = $_GET['uc'];
}else
{
    $uc = 'home';
}

switch($uc)
{
    case 'donations':
        include 'vues/_v_donations.php';
        break;
    case 'faq':
        include 'vues/_v_faq.php';
        break;
    case 'changelog':
        include 'vues/_v_changelog.php';
        break;
    case 'rgpd':
        include 'vues/_v_rgpd.php';
        break;
    case 'mangas':
        include 'vues/_v_mangas.php';
        break;
    case 'team':
        include 'vues/_v_team.php';
        break;
    case 'connexion':
        include 'vues/_v_connexion.php';
        break;
    default:
        include 'vues/_v_accueil.php';
        break;
}

include("vues/_v_footer.php");
?>


