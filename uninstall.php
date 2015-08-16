<?php
/**
 * uninstall.php 
 
Proc�dure de d�sinstallationn du mod.

 * @package QuiMSonde
 * @author Sylar
 * @link http://www.ogsteam.fr
 * @version : 1.5
 * derni�re modification : 27.04.08
 * Largement inspir� du formidable mod QuiMObserve de Santory
 */
// L'appel direct est interdit
if (!defined('IN_SPYOGAME')) die("Hacking attempt");

// Global et d�finition
global $db,$table_prefix;
define("TABLE_QMS", $table_prefix."QuiMeSonde");
define("TABLE_QMS_config", $table_prefix."QuiMeSonde_config");
define("TABLE_XTENSE_CALLBACKS", $table_prefix."xtense_callbacks");
define("FOLDER_QMS","mod/quimsonde");
include(FOLDER_QMS."/lang/lang_french.php");

// On r�cup�re l'id du mod pour xtense... (merci Paradoxx)
$mod_name = "QuiMSonde";
$result = $db->sql_query ("SELECT `id` FROM `".TABLE_MOD."` WHERE `action`='QuiMSonde' AND `active`='1' LIMIT 1");
list($mod_id) = $db->sql_fetch_row($result);

$mod_uninstall_name = "QuiMSonde";
$mod_uninstall_table = TABLE_QMS.','.TABLE_QMS_config;
uninstall_mod ($mod_uninstall_name, $mod_uninstall_table);
	


// Suppression de la liaison entre Xtense v2 et QuiMSonde (merci Paradoxx!)

// On regarde si la table xtense_callbacks existe :
$result = $db->sql_query('show tables like "'.TABLE_XTENSE_CALLBACKS.'" ');
if($db->sql_numrows($result) != 0){

	//Maintenant on regarde si QuiMSonde est dedans normalement oui mais on est jamais trop prudent...
	$result = $db->sql_query("Select * From ".TABLE_XTENSE_CALLBACKS." where mod_id = ".$mod_id);

	// S'il est dedans : alors on l'enl�ve!
	if($db->sql_numrows($result) != 0)
		$db->sql_query("DELETE FROM ".TABLE_XTENSE_CALLBACKS." where mod_id = ".$mod_id);
		echo("<script> alert('La compatibilit� du mod Qui Me Sonde avec le mod Xtense2 a �t� d�sinstall�e !') </script>");
}


?>