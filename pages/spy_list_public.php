<?php

/**
 * spy_list_public.php

Affiche la liste des espionnages, en version "public"

 * @package QuiMSonde
 * @author Sylar
 * @link https://ogsteam.eu
 * @version : 1.5.1
 * dernière modification : 11.08.08

 */
// On récupére les données
// L'appel direct est interdit
if (!defined('IN_SPYOGAME')) die("Hacking attempt");
global $user_data;
$pub_viewall = "1";
require_once("spy_list.php");
