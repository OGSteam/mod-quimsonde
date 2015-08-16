<?php
/**
 * lang_french.php 

Liste des chaines et regex pour la langue Fran�aise.

 * @package QuiMSonde
 * @author Sylar
 * @link http://ogsteam.fr
 * @version : 1.5.1
 * derni�re modification : 11.08.08
 */
// L'appel direct est interdit
if (!defined('IN_SPYOGAME')) die("Hacking attempt");

// Jours de la semaine
$day_array = Array ('1'=>'Lundi','2'=>'Mardi','3'=>'Mercredi','4'=>'Jeudi','5'=>'Vendredi','6'=>'Samedi','0'=>'Dimanche');

// Variable (pour les helps)
$h_rapport = isset($pub_nb_rapport)?$pub_nb_rapport:0;
$h_period = isset($pub_periodes)?$pub_periodes:"";
$h_target = isset($pub_target)?$pub_target:"";
// Bulles d'aides
$help['qms_accueil'] =	"Page d'accueil du module<br/>R�sum� de vos espionnages, et rappel des 3 derniers.";
$help['qms_admin'] =	"Choisissez les r�glages par d�faut pour les options de chaque page.";
$help['qms_ajouter rapport'] =	"Vous pouvez ajouter les rapports d'espionnages en copiant le texte de la page des messages OGame et en le collant dans la zone texte.<br/>N'oubliez pas d'inclure la date.";
$help['qms_analyses'] =	"Recoupage des espionnages enregistr�s en fonction du nombre d\'espionnages r�alis� par une plan�te, un joueur ou une alliance sur vous-m�me ou sur tous les membres du serveur.<br/>Choisissez un nombre d'espionnage minimum r�alis�, le nombre de jour � compter d'aujourd'hui et le type de donn�es � recouper : Joueur Alliance ou Plan�te.";
$help['qms_analyses nombre requis'] =		"Choisissez le nombre d'espionnage minimum � partir duquel il faut tenir compte du r�sultat.";
$help['qms_analyses periode'] =	 "Choisissez la p�riode en jour � compter d'aujourd'hui sur laquelle porter l'analyse.";
$help['qms_analyses affichage'] =	"Choisissez le critique a prendre en compte, Joueur, Alliance ou Plan�te.";
$help['qms_analyses rechercher'] =	 "Choisissez si vous voulez analyser sur seulement les espionnages qui vous concernent, ou sur tous les espionnages de tous les membres du serveur.";
$help['qms_callbacks'] =	"Si pour une raison X ou Y, QuiMSonde n'est pas reconnu par XTense2: cliquez sur ce bouton.";
$help['qms_check_newnames'] =	"Rechercher le nom des joueurs inconnus affich� avec un \"<b>?</b>\" dans la liste, � l'aide de la base de donn�e de l'univers. Si le syst�me n'a toujours pas �t� scann�, la recherche ne donnera rien. <br/><u>ATTENTION!</u> Si le joueur a chang� de nom, o� a d�colonis� sa plan�te la recherche donnera le nouveau nom comme si c'etait le joueur actuellement en place qui avait lanc� l'espionnage, ind�pendament de la date.";
$help['qms_config'] =	"Choisissez vos r�glages personnels, ind�pendament des r�glages des autres utlisateurs.";
$help['qms_delete_oldspies'] =	"Les rapports d'espionnages des membres dont le compte a �t� effac�s sont toujours stock� dans la base. Cliquez sur \"Effacer\" pour les enlever, la recherche sur tout le serveur sera d'autant plus pertinante.";
$help['qms_hall of fame'] =	"Statistiques de tous les espionnages enresgitr�s sur le serveur sur l'intervalle de temps choisi.<br/>Vous pouvez voir et exporter vers un forum toutes ces donn�es.";
$help['qms_impoter'] =	 	"Importer les espionnages enregistr�s dans la base de donn�e du module Qui M'Observe de Santory";
$help['qms_insertion sur accueil'] =	"Si cette option est activ�, la zone texte o� coller vos espionnages sera en bas de la page d'accueil.";
$help['qms_jours max'] =	"Nombre de jours pendant lesquels les rapports sont conserv�s. Au del� de ce nombre de jours, les rapports sont perdus.";
$help['qms_les espions'] =	 "Liste compl�te de tous les espionnages enregistr�s sur ce serveur.<br/>Vous pouvez trier et filtrer ces espionnages en fonction des donn�es<br/>Vous ne pouvez modifier ou supprimer uniquement les espionnages qui vous consernent.";
$help['qms_membres utilisant'] =	"Liste des membres qui utilisent ce module";
$help['qms_mes d�tails'] =	"Statistiques de vos espionnages sur l'intervalle de temps choisi<br/>Vous pouvez voir et exporter vers un forum diff�rentes donn�es et top5.";
$help['qms_mes espionnages'] =	"Liste compl�te de vos espionnages</br>Vous pouvez trier et filtrer les espionnages comme bon vous sembles.<br/>Les espionnages sont effac�s au bout du nombre de jours choisi dans les options.";
$help['qms_nombre de ligne'] =	"Nombre d'espionnages � afficher par page dans la liste de la page d'accueil";
$help['qms_nombre total'] =	"Le nombre total de rapports d'espionnage enregistr�s.";
$help['qms_resultat analyse alliances'] =	"R�sultat de l'analyse des alliances espionnes dans vos espionnages sur $h_period avec un minimum de $h_rapport rapport(s)";
$help['qms_resultat analyse alliances global'] =	"R�sultat de l'analyse des alliances espionnes dans tous les espionnages du serveur sur $h_period jour(s) avec un minimum de $h_rapport rapports";
$help['qms_resultat analyse joueurs'] =	"R�sultat de l'analyse des joueurs espions dans vos espionnages sur $h_period jour(s) avec un minimum de $h_rapport rapport(s)";
$help['qms_resultat analyse joueurs global'] =	"R�sultat de l'analyse des joueurs espions dans tous les espionnages du serveur sur $h_period jour(s) avec un minimum de $h_rapport rapport(s)";
$help['qms_resultat analyse planetes'] =	"R�sultat de l'analyse des plan�tes espionnes dans vos espionnages sur $h_period jour(s) avec un minimum de $h_rapport rapport(s)";
$help['qms_resultat analyse planetes global'] =	"R�sultat de l'analyse des plan�tes espionnes dans tous les espionnages du serveur sur $h_period jour(s) avec un minimum de $h_rapport rapport(s)";
$help['qms_search'] =	"Syst�me permettant de rajouter des liens dans les popups sur les joueurs et/ou position et/ou alliance. Renseigner le lien qui vous convient.";
$help['qms_search_actif'] =	"Seules les recherches actives (qui ont donc cette case de coch�s) seront utilis�es dans les Popups.";
$help['qms_search_add'] =	"Utiliser ce formulaire pour cr�er de nouvelle recherches.";
$help['qms_search_link'] =	 "Lien qui sera associ� � cette recherche.<br />Dans ce lien, les variables sont entre crochets { }.";
$help['qms_search_nom'] =	"Le nom qui repr�sentera la recherche";
$help['qms_search_type'] =	"Le type de recherche.<br />Cela d�fini sur quel popup sera affich� la recherche, et quelle sera la variable.<br />Type Joueur : le nom du joueur est {joueur}<br /> Type Alliance : le nom de l'alliance est {alliance}<br /> Type Position : Utiliser {galaxy} {system} et {row}.";
$help['qms_user_lignes'] =	"Le nombre de rapport � afficher sur les pages Mes Espions, et Les Espions.";
$help['qms_user_nbrapport'] =	"Le nombre de rapport � prendre en compte dans la page analyser.";
$help['qms_user_periode'] =	"Le nombre de jours jusqu'� aujourd'hui, pris en compte dans l'analyse choisie.";
$help['qms_user_time_start'] =	"La date de d�part pour le calcul de Mes D�tails ou de la page HOF.";
$help['qms_user_time_end'] =	"La date de fin pour le calcul de Mes D�tails ou de la page HOF.";
$help['qms_user_add_home'] =	"Faut-il afficher le cadre d'insertion sur la page d'accueil ou non ?";
$help['qms_user_banniere'] =	"Faut-il afficher l'image au dessus du menu ?";
$help['qms_user_imgmenu'] =	"Faut-il afficher les images pour le menu ?";
$help['qms_admin_lignes'] =	"Le nombre de rapport � afficher sur les pages Mes Espions, et Les Espions.<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_nbrapport'] =	 "Le nombre de rapport � prendre en compte dans la page analyser.<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_periode'] =	"Le nombre de jours jusqu'� aujourd'hui, pris en compte dans l'analyse choisie.<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_time_start'] =	"La date de d�part pour le calcul de Mes D�tails ou de la page HOF.<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_time_end'] =	 "La date de fin pour le calcul de Mes D�tails ou de la page HOF.<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_add_home'] =	"Faut-il afficher le cadre d'insertion sur la page d'accueil ou non ?<br/>Valeur par d�faut pour les membres qui n'ont encore rien r�gl�.";
$help['qms_admin_banniere'] =	"Faut-il afficher l'image au dessus du menu ?";
$help['qms_admin_imgmenu'] =	"Faut-il afficher les images pour le menu ?";
$help['qms_vue detail'] =	"Analyse en d�tail de l'espionnage #$h_target";

// Regex 
$lang['regex_import_spy'] = 
	"#((\d{2})\-(\d{2}) (\d{2}):(\d{2}):(\d{2})\s+Contr�le\sa�rospatial(.*?)Probabilit�\sde\sdestruction\sde\sla\sflotte\sd(.*?)espionnage\s:\s(\d+)\s%)#si";
$lang['regex_xtense1_date_heure'] = "#((\d{2})\-(\d{2}) (\d{2}):(\d{2}):(\d{2})\s+Contr�le\sa�rospatial(.*?)pionnage\s:\s(\d+)\s%)#si";
$lang['regex_xtense1_coord'] = "`plan.te\s(.*?)\s\[(\d+\:\d+\:\d+)\]`";
$lang['regex_xtense2_coord'] = "`Une flotte .+trang.+re de la plan.+te (.*) a .+t.+ rep.+r.+e .+ proximit.+ de votre plan.+te (.*)`";//"`Une flot.*la plan.te (.*) a .t. aper.*re plan.te (.*)`";
//Une flotte ennemie de la plan�te the skyline   a �t� aper�ue � proximit� de votre plan�te Starlight (Lune)

// Titre des menus :
$lang['qms_menu_accueil'] =				"<font color=\"red\">A</font>ccueil";
$lang['qms_menu_mes_espions'] =		"<font color=\"red\">M</font>es <font color=\"red\">E</font>spions";
$lang['qms_menu_mes_details'] =		"<font color=\"red\">M</font>es <font color=\"red\">D</font>�tails";
$lang['qms_menu_les_espions'] =		"<font color=\"red\">L</font>ES <font color=\"red\">E</font>spions";
$lang['qms_menu_hall_of_fame'] =		"<font color=\"red\">H</font>all <font color=\"red\">O</font>f <font color=\"red\">F</font>ame";
$lang['qms_menu_analyse'] =				"<font color=\"red\">A</font>nalyses";
$lang['qms_menu_insertion'] =			"<font color=\"red\">I</font>nsertion";
$lang['qms_menu_config'] =				"<font color=\"red\">C</font>onfig";
$lang['qms_menu_config_long'] =		"<font color=\"red\">C</font>onfiguration";
$lang['qms_menu_admin'] =		"<font color=\"red\">A</font>dmin";
$lang['qms_menu_admin_long'] =		"<font color=\"red\">A</font>dministration";

// Titre des configs :
$lang['qms_config_titre1'] =			"Pages <u>Mes Espions</u> et <u>Les Espions</u>";
$lang['qms_config_lignes'] =			"Nombre de ligne par page";
$lang['qms_config_titre2'] =			"Page <u>Analyse</u>";
$lang['qms_config_nbrapport'] =		"Nombre minimal d'espionnages requis";
$lang['qms_config_periode'] =			"P�riode en jours � analyser";
$lang['qms_config_titre3'] =			"Pages <u>Mes D�tails</u> et <u>HOF</u>";
$lang['qms_config_time_start'] =		"Date de d�but";
$lang['qms_config_time_end'] =		"Date de fin";
$lang['qms_config_titre4'] =			"Options";
$lang['qms_config_add_home'] =		"Insertion depuis la page d'accueil";
$lang['qms_config_banniere'] =		"Affichage de la banni�re";
$lang['qms_config_imgmenu'] =		"Menu graphique";

// %1 = $max_spy, %2 = $most['joueur_cnt'], %3 = $most['joueur'], %4 = $most['cible_cnt'], %5 = $most['cible']
$lang['qms_resume_rien_du_tout'] = 
	"<b>Tes espionnages en 2 lignes :<br/><center><i><font color='FFFFFF' size='3'>".
	"...pas en 2 lignes, mais en 2 mots : <font color='red'>Aucun Espionnage!</font>.".
	"</font></i></center></b>";
$lang['qms_resume_2_lignes'] = 
	"<b>Tes espionnages en 2 lignes :<br/><center><font color='FFFFFF' size='3'>".
	"Il y a actuellement <font color='red'>%1\$d</font> espionnages enregistr�s, ".
	"dont <font color='red'>%2\$d</font> du joueur <font color='red'>%3\$s</font>, ".
	"et <font color='red'>%4\$d</font> � destination de ta plan�te <font color='red'>%5\$s</font>.".
	"</font></center></b>";
$lang['qms_les3derniers'] = "les %d derniers";	// If nb > 1
$lang['qms_le_dernier'] = "le dernier";				// else

$lang['qms_format_date'] = "d/m/Y";
$lang['qms_format_full'] = "d M y � H:i:s";
$lang['qms_format_date_ogame'] = "m-d H:i:s";
$lang['qms_format_spy_title_ogame'] = "Contr�le a�rospatial </td><td class='c'><span class='espionagereport'>Activit� d'espionnage</span>";
// %1 = joueur, %2 = alliance, %3 = position, %4 = nom de la cible, %5 = position, %6 = probabilit�
$lang['qms_format_spy_content_ogame'] = 
	"Une flotte ennemie de %1\$s %2\$s depuis %3\$s a �t� aper�ue ".
	"� proximit� de votre plan�te %4\$s [%5\$s]. Probabilit� de destruction de la flotte d'espionnage : %6\$s";
$lang['qms_format_date_regex'] = "#(.*)/(.*)/(.*)#";
$lang['qms_classement_of'] = "Classement du %s";      //  (%s = date, cf. qms_classement_date)
$lang['qms_classement_date'] = "%d %b %Y � %Hh";
$lang['qms_classement_general'] = "G�n�ral";
$lang['qms_classement_economique'] = "Economique";
$lang['qms_classement_technologie'] = "Recherche";
$lang['qms_classement_militaire'] = "Militaire";
$lang['qms_classement_militaire_construit'] = "Militaire construit";
$lang['qms_classement_militaire_perdu'] = "Militaire perdu";
$lang['qms_classement_militaire_detruit'] = "Militaire d�truit";
$lang['qms_classement_honneur'] = "Honneur";
$lang['qms_classement_membres'] = "%s membre(s)";
$lang['qms_classement_voir_details'] = "Voir d�tail";
$lang['qms_classement_voir_espionnage'] = "Voir Espionnage";
$lang['qms_oui'] = "OUI";
$lang['qms_non'] = "NON";
$lang['qms_alliance'] = "Alliance";
$lang['qms_alliances'] = "Alliances";
$lang['qms_joueur'] = "Joueur";
$lang['qms_joueurs'] = "Joueurs";
$lang['qms_position'] = "Position";
$lang['qms_positions'] = "Positions";
$lang['qms_Lune'] = "Lune";
$lang['qms_lune'] = "lune";
$lang['qms_lune_print'] = "(L)";
$lang['qms_cible'] = "Cible";
$lang['qms_cibles'] = "Cibles";
$lang['qms_hours'] = "Heures";
$lang['qms_days'] = "Jours";
$lang['qms_date'] = "Date";
$lang['qms_galaxie'] = "Galaxie";
$lang['qms_galaxies'] = "Galaxies";
$lang['qms_systeme'] = "Syst�me";
$lang['qms_systemes'] = "Syst�mes";
$lang['qms_distance'] = "Distance";
$lang['qms_distances'] = "Distances";
$lang['qms_depart'] = "D�parts";
$lang['qms_joueur_inconnu'] = "Joueur Inconnu";
$lang['qms_nograph'] = "Graphic indisponible";
$lang['qms_total'] = "Total";
$lang['qms_nombre_total'] = "Nombre Total";
$lang['qms_from'] = "D�part";
$lang['qms_to'] = "Cible";
$lang['qms_aucun'] = "Aucun!";
$lang['qms_nombre'] = "Nombre";
$lang['qms_version.txt_not_found'] = "Fichier VERSION.TXT introuvable!";
$lang['qms_please_update'] = "Veuillez mettre � jour!";
$lang['qms_old_database_found'] = "<blink>Une ancienne base de donn�e � �t� d�couverte, une mise � jour sera n�cessaire.</blink>";
$lang['qms_menu_title'] = "Qui mSonde?";
$lang['qms_alert_number_only'] = "Il faut sasir des chiffres...";



$lang['qms_admin_config_submit'] = "Enregistrer";
$lang['qms_admin_config_restore'] = "Revenir aux valeurs par d�faut";
$lang['qms_admin_titre1'] = "Statistiques";
$lang['qms_admin_nbspies'] = "Nombre total de rapports";
$lang['qms_admin_user_using'] = "Membre(s) qui utilise(nt) ce module";
$lang['qms_admin_titre2'] = "Configuration du serveur par d�faut";
$lang['qms_admin_nb_jours_max'] = "Nombres de jours de conservation des rapports";
$lang['qms_admin_titre3'] = "Options Diverse";
$lang['qms_chercher_nouveaux_noms'] = "Rechercher dans l'univers le nom des joueurs manquant";
$lang['qms_chercher_nouveaux_noms_submit'] = "Chercher";
$lang['qms_check membre_effaces'] = "Effacer les espionnages dont le joueur n'as plus de compte";
$lang['qms_check membre_effaces_submit'] = "Effacer";
$lang['qms_restore_xtense2_callback'] = "R�installer le lien entre Xtense2 et QuiMSonde";
$lang['qms_restore_xtense2_callback_submit'] = "Resintaller";
$lang['qms_import_from_quimobserve'] = "Importer depuis QuiMObserve �Santory";
$lang['qms_import_from_quimobserve_submit'] = "Importer";
$lang['qms_admin_titre4'] = "Liens suppl�mentaires";
$lang['qms_admin_search_nom'] = "Nom";
$lang['qms_admin_search_link'] = "Lien";
$lang['qms_admin_search_type'] = "Type";
$lang['qms_admin_search_actif'] = "Actif";
$lang['qms_admin_search_choose'] = "Choisissez...";
$lang['qms_admin_search_modify'] = "Modifier";
$lang['qms_admin_search_add'] = "Ajouter";
$lang['qms_admin_search_creer'] = "Creer";
$lang['qms_admin_spies_form_IDs_delete'] = "Les espionnages des membres dont l'ID est le suivant ont �t� effac�s avec succ�s : <br/>%s.";
$lang['qms_admin_no_spies_to_delete'] = "Il n'y a aucun espionnage a effacer.";
$lang['qms_admin_config_updated'] = "<font color=\"00FF40\" size=\"2\">Mise � jour des configs OK</font>";
$lang['qms_admin_defaut_restored'] = "<font color=\"00FF40\" size=\"2\">Retour aux valeurs par d�faut.</font>";
$lang['qms_admin_x_rapports_updated'] = "%d rapports d'espionnage modifi�s.";
$lang['qms_admin_x_rapports_deleted'] = "%d rapports d'espionnage supprim�s.";
$lang['qms_admin_1_rapports_updated'] = "%d rapport d'espionnage modifi�.";
$lang['qms_admin_1_rapports_deleted'] = "%d rapport d'espionnage supprim�.";
$lang['qms_admin_0_rapports_updated'] = "Aucun rapport modifi�.";
$lang['qms_admin_0_rapports_deleted'] = "Aucun rapport supprim�.";


$lang['qms_analyse_sur_tous'] = "Sur tout le serveur";
$lang['qms_analyse_sur_moi'] = "Dans mes espionnages";
$lang['qms_analyse_show_result_in'] = "Affichage du r�sultat";
$lang['qms_analyse_submit'] = "Rechercher";
$lang['qms_analyse_perso'] = "Analyse des ";
$lang['qms_analyse_globale'] = "Analyse globale des ";
$lang['qms_analyse_fonction_non_dispo'] = "FONCTION NON IMPLEMENTEE";
$lang['qms_analyse_beback'] = "Faire une autre analyse";
$lang['qms_analyse_nothing_found'] = "Vous n'avez pas �t� espionn� ces %s derniers jours.";
$lang['qms_analyse_nothing_found_one_day'] = "Vous n'avez pas �t� espionn� ces derni�res 24h.";
$lang['qms_analyse_0_day_selected'] = "Vous avez s�lectionnez 0 jours...";
$lang['qms_analyse_nb_scans'] = "%d scan(s)";
$lang['qms_analyse_horraire_des_sondages'] = "Horraire des sondages";
$lang['qms_analyse_espionnage_de_alliance'] = "l\'alliance";
$lang['qms_analyse_espionnage_de_sur'] = "Espionnages de %1\$s <a>%2\$s</a> sur <a>%3\$s</a>";
$lang['qms_analyse_tableau_date'] = "Date";
$lang['qms_analyse_tableau_joueur'] = "Joueur";
$lang['qms_analyse_tableau_de'] = "De";
$lang['qms_analyse_tableau_vers'] = "Vers";
$lang['qms_analyse_tableau_pourcent'] = "%Age";
$lang['qms_analyse_id_supprime'] = "<i>ID#%s Supprim�</i>";
$lang['qms_analyse_no_spy_to_recoup'] = "Il n'y a aucuns espionnages a recouper pour ces %s derniers jours.";
$lang['qms_analyse_no_spy_for_this_periode'] = "Aucun espion n'a espionn� plus de %1\$s membres diff�rents ces %2\$s derniers jours.";

// %1 = date de d�part, %2 = date de fin
$lang['qms_details_date_error'] = "<font color='yellow'>La date de d�part (%1\$s) doit etre ant�rieur � la date de fin (%2\$s), il y a eu inversion.</font><br/>";
$lang['qms_details_intervalle'] = "<u><b>intervalle d'�tude</b></u> : ";
$lang['qms_details_graphic_of'] = "Graphique des ";
$lang['qms_details_top5_player'] = "Top 5 des Joueurs les plus curieux";
$lang['qms_details_top5_ally'] = "Top 5 des Alliances les plus curieuses";
$lang['qms_details_top5_position'] = "Top 5 des plan�tes espionn�es";
$lang['qms_details_top5_hour'] = "Top 5 des heures les plus intenses";
$lang['qms_details_top5_day'] = "Top 5 des jours de la semaine";
$lang['qms_details_top5_distance'] = "Top 5 des distances";
$lang['qms_details_most_curious_player'] = "Joueur le plus curieux";
$lang['qms_details_most_curious_ally'] = "Alliance la plus curieuse";
$lang['qms_details_most_spyed_position'] = "Plan�te la plus espionn�e";
$lang['qms_details_pourcent_moy'] = "Pourcentage moyen";
$lang['qms_details_distance_moy'] = "Distance moyenne";
$lang['qms_details_distance_max'] = "Distance maximale";
$lang['qms_details_distance_min'] = "Distance minimale";
$lang['qms_details_coolest_position'] = "Plan�te la plus tranquille";
$lang['qms_details_cool_depuis'] = "Tranquille depuis";
$lang['qms_details_cool_le_plus'] = "Tranquillit� la plus longue";
$lang['qms_details_coolest_hour'] = "Heure la plus tranquille";
$lang['qms_details_horny_hour'] = "Heure la plus intense";
$lang['qms_details_horny_day'] = "Jour le plus intense";
$lang['qms_details_coolest_day'] = "Jour le plus calme";
$lang['qms_details_horny_galaxy'] = "Galaxie qui espionne le plus";
$lang['qms_details_nb_spy'] = "Nombre d'Espionnages";
$lang['qms_details_statistique'] = "Les Statistiques";
$lang['qms_details_no_statistique'] = "Aucune Statistique � afficher.";
// %1 = $version, %2 = date({qms_format_full}, time())
$lang['qms_details_bbcode_footer'] = "[size=9][i][color={color3}]Statistiques export�es de ---\n---[b]QuiMSonde v%1\$s le %2\$s [/b][/i][/color][/size]";
$lang['qms_details_bbcode_stat_titre'] = "[size=16][color={color3}][b][u]Statistiques des espionnages subit par [/color][color={color1}]%s[/color][/u][/b][/size]";
$lang['qms_details_bbcode_hof_titre'] = "[size=16][color={color3}][b][u]Statistiques des espionnages des membres de la carto[/u][/b][/color][/size]\n";
// %1 = Titre top5, %2 = nom du joueur
$lang['qms_details_bbcode_top5_for_one'] = "[size=16][color={color3}][b][u] %1\$s pour [/color][color={color1}]%2\$s[/color][/u][/b][/size]";
$lang['qms_details_bbcode_top5_for_all'] = "[size=16][color={color3}][b][u] %1\$s pour tous les membres de la carto[/u][/b][/color][/size]";
$lang['qms_details_bbcode_titre'] = "Toute la page en BBCode";
$lang['qms_details_bccode_form_title'] = "<b><a>Quoi exporter?</a></b><br/>";
$lang['qms_details_bbcode_form_color'] = "<b><a>Quelles Couleurs?</a></b>";
$lang['qms_details_bbcode_color_titre'] = "Couleur des titres ";
$lang['qms_details_bbcode_color_data'] = "Couleur des donn�es ";
$lang['qms_details_bbcode_color_text'] = "Couleur du texte ";
$lang['qms_details_bbcode_form_option_titre'] = "<b><a>Options:</a></b>";
$lang['qms_details_bbcode_form_use_list'] = "Utiliser les LIST ";
$lang['qms_details_show_apercu'] = "Afficher l'aper�u ";
$lang['qms_details_apercu_bgcolor'] = "fond de l'aper�u ";
$lang['qms_details_form_save'] = "Enregistrer mes r�glages...";
$lang['qms_details_apercu_warning'] = "<br/><br/><br/><br/><i>- Pour voir l'aper�u : Activez-le ! -</i>";
$lang['qms_details_no_selection'] = "Aucun tableau s�lectionn�";

$lang['qms_popup_spy_not_found'] = " L'espionnage #%s n'a pas �t� trouv�.";
$lang['qms_popup_analyse_sur'] = "<u>Analyser les espionnages sur </u> : ";
$lang['qms_popup_only_me'] = "Moi seulement";
$lang['qms_popup_everyone'] = "Tous les membres";
// %s = nom du joueur
$lang['qms_popup_analyse_on'] = "Analyse des heures des espionnages sur %s";
$lang['qms_popup_analyse_everyone'] = "Analyse des heures des espionnages sur tous les membres";
$lang['qms_popup_un_seul_espionnage'] = "Impossible de trouver un 2e espionnage.";
$lang['qms_popup_ses_cibles'] = "Ses cibles";
$lang['qms_popup_ses_positions'] = "Ses positions";
$lang['qms_popup_nombre'] = "Nombre :";
$lang['qms_popup_la_1ere'] = "La pr�fer�e :";
$lang['qms_popup_la_2nd'] = "La seconde :";
$lang['qms_popup_la_3e'] = "La troisi�me :";
$lang['qms_popup_bbcode_titre'] = "Exportation BBCode";
$lang['qms_popup_bbcode_spy_color'] = "Couleur de l'espion: ";
$lang['qms_popup_bbcode_cible_color'] = "Couleur de la cible: ";
$lang['qms_popup_bbcode_en_tableau'] = "En tableau";
$lang['qms_popup_bbcode_with_link'] = "Mettre les liens";
$lang['qms_popup_bbcode_titre'] = "{tr}{th}{chaine_date}{/th}{th}Contr�le a�rospatial{/th}{th}[color=#ff9933]Activit� d'espionnage[/color]{/th}{/tr}";
$lang['qms_popup_bbcode_1'] = "{tr}{td_span}Une flotte ennemie de {link_joueur}[color={color_spy}][b]{chaine_joueur}[/b][/color]{link_end} ";
$lang['qms_popup_bbcode_2'] = "{link_alliance}[color={color_spy}]([b]{chaine_allliance}[/b])[/color]{link_end} ";
$lang['qms_popup_bbcode_3'] = 
	"depuis {link_position}[color={color_spy}][b]{chaine_position}[/b][/color]{link_end} a �t� aper�ue � proximit� de la plan�te ".
	"{link_cible}[color={color_cbl}][b]{chaine_nomcible}[/b] [{chaine_cible}][/color]{link_end} de ".
	"{link_victim}[color={color_cbl}][b]{chaine_victim}[/b][/color]{link_end}\n".
	"Probabilit� de destruction de la flotte d'espionnage : [color={color_proba}][b]{chaine_proba}[/b][/color] %";
	"{/td}{/tr}{/table}";
$lang['qms_popup_table_hour_1st_case'] = "Jour \ Heure";
$lang['qms_popup_table_hour_case'] = "<b>%d h</b>";

$lang['qms_spylist_sans_alliance'] = "<i><font size='1'>sans</font></i>";
$lang['qms_spylist_joueur_change'] = "<b>Ce joueur a chang�!</b>";
$lang['qms_spylist_joueur_change_pseudo'] = "Son pseudo: ";
$lang['qms_spylist_joueur_change_alliance'] = "Son alliance: ";
$lang['qms_spylist_joueur_change_aucune_alliance'] = "<i>(aucune)</i>";
$lang['qms_spylist_link_to_modify'] = "Cliquez ici, pour mettre � jour";
$lang['qms_spylist_link_are_your_sure_modify'] = "Etes-vous s�r de vouloir modifier cet espionnage de %s ?";
$lang['qms_spylist_link_modify_spy'] = "Modification de l\'espionnage n�%s";
$lang['qms_spylist_link_information'] = "Information...";
$lang['qms_spylist_link_are_your_sure_delete'] = "Etes-vous s�r de vouloir supprimer l\'espionnage de %s ?";
$lang['qms_spylist_check_tout'] = "Tout";
$lang['qms_spylist_check_aucun'] = "Aucun";
$lang['qms_spylist_check_inverser'] = "Inverser";
$lang['qms_spylist_check_modifies'] = "Les modifi�s";
$lang['qms_spylist_check_inconnus'] = "les &quot?&quot";
$lang['qms_spylist_check_on_selection'] = "sur la s�lection...&nbsp";
$lang['qms_spylist_check_on_selection_suppr'] = "Supprimer";
$lang['qms_spylist_check_on_selection_update'] = "Mettre � jour";
$lang['qms_spylist_page_on_page'] = "Page %d sur %d";
$lang['qms_spylist_no_spy_found'] = "Il n'y a aucun rapports d'espionnage dans la base de donn�es.";
$lang['qms_spylist_no_spy_filtered_found'] = "Il n'y a aucun rapports d'espionnage correspondant � ce filtrage dans la base de donn�es.";
$lang['qms_spylist_vous_navez_rien_selectionne'] = "Vous n\'avez rien s�lectionn� !";
$lang['qms_spylist_sure_to_delete_many'] = "Etes-vous s�r de vouloir effacer ces rapports ?";
$lang['qms_spylist_sure_to_delete_one'] = "Etes-vous s�r de vouloir effacer ce rapport ?";
$lang['qms_spylist_sure_to_modify_many'] = "Etes-vous s�r de vouloir mettre � jour ces rapports ?";
$lang['qms_spylist_sure_to_modify_one'] = "Etes-vous s�r de vouloir mettre � jour ce rapport ?";
$lang['qms_spylist_filtrer_par'] = "Filtrer / ";
$lang['qms_spylist_filtrer_none'] = "Aucun Filtre";
$lang['qms_spylist_filtrer_no_alliance'] = "(sans alliance)";
$lang['qms_spylist_filtrer_no_player'] = "(inconnu)";
$lang['qms_spylist_analyse_link'] = "(analyser)";
$lang['qms_spylist_nbligne_par_pages'] = "Nombre de lignes par page :";

$lang['qms_time_analyse_duree'] = "Dur�e";
$lang['qms_time_analyse_du'] = "Du";
$lang['qms_time_analyse_au'] = "Au";
$lang['qms_time_analyse_temps_moy'] = "Temps moyen entre deux sondages :";

$lang['qms_func_sql_no_unknown'] = "Il n'y a aucun joueur inconnu dans la base de donn�es.";
$lang['qms_func_sql_only_one_updated'] = "Un seul espionnage mis � jour.";
$lang['qms_func_sql_many_updated'] = "%d rapports d'espionnage ont �t� compl�t�s.";
$lang['qms_func_sql_none_updated'] = "Aucun rapport d'espionnage a �t� compl�t�s.";
$lang['qms_func_sql_import_from_quimobserve_none'] = "La base de donn�e de QuiMObserve est vide ou aucun rapport n\'est suffisament r�cent!";
$lang['qms_func_sql_import_from_quimobserve_ok'] = 
"Importation r�alis�e avec succ�s!<br/> %1\$d rapport(s) ajout�(s) sur %2\$d rapport(s) datant de moins de %3\$d jours. ";

$lang['qms_insertion_desc'] = 
	"<font color='FFFFFF' size=\"3\"><b>".
	"Pour ajouter un ou plusieurs espionnages :<br/>".
	"Copiez le texte, en incluant la date et l'heure, depuis la page message de OGame,<br/>".
	"collez le tout dans la zone texte ci-dessous, puis ensuite, cliquez sur 'Ajouter'.".
	"</b></font><br/>";
$lang['qms_insertion_submit'] = "Ajouter";
$lang['qms_insertion_error'] = "<font color=\"FF0000\" size=\"2\">Enregistrement  ERROR<br/></font>";
$lang['qms_insertion_doublon'] = "<font color=\"FF0000\" size=\"2\">Enregistrement  Annul� : Doublon<br/></font>";
$lang['qms_insertion_ok'] = "<font color=\"00FF40\" size=\"2\">Enregistrement  OK<br/></font>";


$lang['qms_changelog'] = Array (
	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.8 :</u></b> <i>(03/01/12)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Bug de calcul des distances<br/>".
	"- [fix] Lien pour les RE des joueurs qui nous sondent<br/>".
	"- [fix] Permettre l'�dition des dates dans la config<br/>".
	"- [fix] Correction lien du changelog<br/>".
	"- [add] Compatibilit� avec les nouveaux classements<br/>".
	"</font></p></fieldset>",
	
	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.6a :</u></b> <i>(09/11/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Divers petits bugs.<br/>".
	"- [add] Compatibilit� Xtense 2.1.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.5b :</u></b> <i>(11/08/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Divers petits bugs.<br/>".
	"- [fix] Un caract�re sp�cial dans le nom de la base de donn�e cr�ait une erreur SQL.<br/>".
	"- [fix] Erreur PHP-8 : Double define des dossiers dans _xtense.php.<br/>".
	"- [fix] Mail & lien dans le pied de page.<br/>".
	"- [fix] Probl�me de calcul de la distance dans les insertions manuelles.<br/>".
	"- [mod] Simplification de la page ChangeLog.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.5 :</u></b> <i>(10/08/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [add] Enregistrement du nom des plan�tes, permet de savoir si on parle de lunes. ".
		"<font size=\"1\">(mod xtense 2.0b6 non compatible)</font>.<br/>".
	"- [add] Controle des donn�es saisies par java puis php.<br/>".
	"- [add] Affichage de la banni�re optionnel pour chaque utilisateur. <font size=\"1\">(cach� par d�faut)</font><br/>".
	"- [add] Menu graphique optionnel pour chaque utilisateur. <font size=\"1\">(cach� par d�faut)</font><br/>".
	"- [add] Fichier de langage, possibilit� de traduire le mod.<br/>".
	"- [add] Affichage des boutons de d�filement des pages en haut si y'a plus de 50 lignes.<br/>".
	"- [fix] Erreurs PHP lorsqu'il n'y a aucun RE dans la base.<br/>".
	"- [fix] Apper�u du BBCode toujours centr� alors que le BBCode ne l'est plus.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.4b :</u></b> <i>(08/04/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [mod] Nouveau style de BBCode inspir� des conseils avis�s de Louwok.<br/>".
	"- [fix] Installation du CallBack pour XTense2.<br/>".
	"- [add] Ajout d'un bouton qui permet � l'admin de forcer l'installation du CallBack XTense2.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.4a :</u></b> <i>(06/04/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Bug qui bloquait la multi-s�lection sur les pages >1.<br/>".
	"- [fix] Bug qui rendait impossible de changer le nombre de jours de conservation des rapports.<br/>".
	"- [fix] Bug qui demandait une version de XTense qui n'est pas encore sortie.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.4 :</u></b> <i>(06/04/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [add] Possibilit� de faire des liens suppl�mentaire vers d'autre mods en ajoutant le texte du lien.<br/>".
	"- [add] Page de configuration accessible � tous permettant de voir modifier et sauvegarder ses options.<br/>".
	"- [add] Le choix des dates passe par un script Calendrier en Java.<br/>".
	"- [add] Possibiliter d'afficher le bloc d'insertion en bas de la page d'accueil ou non (option dans la page admin).<br/>".
	"- [add] Ajout des liens analyser et filtrer dans les popups.<br/>".
	"- [add] Possibilit� de filtrer par rapport � une plan�te espion.<br/>".
	"- [add] Am�lioration de la liste d'espionnage : possibilit� de multi-s�l�ction.<br/>".
	"- [add] Compatibilit� avec le mod XTense 2.0b5.<br/>".
	"- [fix] Erreur de Syntaxe.<br/>".
	"- [fix] BBCode & Graphique de la page d�tails/hof.<br/>".
	"- [fix] R�installer sur une table <1.0.<br/>".
	"- [fix] Erreur \"Undefined offset\" lorsqu'on importe un scan parti d'une galaxie non import�e.<br/>".
	"- [mod] Uniformisation des bulles d'aides.<br/>".
	"- [mod] Le popup a �t� totalement repens� et recod�, le tableau affiche maintenant les heures en fonction des jours de la semaine.<br/>".
	"- [mod] Simplification du script d'analyse des coordonn�es.<br/>".
	"- [mod] L'exportation BBCode a �t� repens�e enti�rement, un aper�u � �t� ajout� pour les tableaux.<br/>".
	"- [mod] Les graphiques s'agrandissent, s'affichent sur clic et dans un bloc fix�.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.3b :</u></b> <i>(19/02/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Erreur \"Undefined offset\" lorsqu'on a moins de 10 espionnages enregistr�s.<br/>".
	"- [fix] Correction de grosse fautes de fran�ais (toutes? nan, surement pas...).<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.3 :</u></b> <i>(19/02/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [add] Possibilit� de filtrer la liste de tous les espionnages en fonction d'un membre.<br/>".
	"- [mod] Refonte des codes de mise � jour, installation et d�sinstallation.<br/>".
	"- [add] Ajout d'images pour le menu et l'en-t�te.<br/>".
	"- [mod] Regroupement des 3 pages d'analyse (analyse des plan�tes, interpolation, et analyse globale) en une seule et unique page Analyse.<br/>".
	"- [mod] Cr�ation des dossiers 'includes' et 'pages' pour s�parer les fichiers .PHP qui commencent � devenir nombreux.<br/>".
	"- [mod] Ajout de la page \"Insertion\" qui permet d'ins�rer manuellement un ou plusieurs espionnages.<br/>".
	"- [add] Ajout de la page \"mes D�tails\" qui affiche les statistiques, ainsi que 6 \" Top5 \" : Espions, Alliances, Plan�tes, Jours et Heures.<br/>".
	"- [add] Ajout de la page \"Hall Of Fame\" qui affiche les statistiques g�n�rales de tous les membres confondus ainsi que les Top5 globaux.<br/>".
	"- [add] Possibilit� d'exporter les Top5 et les Statistiques vers un forum.<br/>".
	"- [mod] Modification de la page d'accueil: Suppression de la zone d'ajout manuel d'espionnage, et all�gement des statistiques. L'insertion se fait maintenant dans une page d�di�e, et les statisques sont d�taill�es dans la page \"Mes D�tails\".<br/>".
	"- [add] Compatibilit� avec XTense v2.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.2 :</u></b> <i>(19/01/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [add] Possibilit� d'ajouter des RE d'un autre membre de OGSpy. (dans le cas d'un sitting ou d'un envoie pas message collectif).<br/>".
	"- [fix] La remise � z�ro des statistiques � l'import d'un RE par XTense faisait bugger la barre d'outils.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.1a :</u></b> <i>(02/01/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [fix] Bug sur la page de d�tail. Le 2e graphique int�grait les valeurs du 1er graphique.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.1 :</u></b> <i>(02/01/08)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- [add] Possibilit� de modifier tous les espionnages d'une page d'un seul clic.<br/>".
	"- [fix] Les satistiques se mettent maintenant � jour quand il faut.<br/>".
	"- [fix] Bug au niveau des graphiques.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 1.0 :</u></b> <i>(09/12/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Chaque utilisateur peut d�sormais choisir individuellement le nombre d'espionnage � afficher par page, par d�faut sera utilis� le nombre choisi par l'administrateur.<br/>".
	"- Ajout d'une icone information qui ouvre une nouvelle fenetre offrant plus de d�tails sur un seul espion.</br>".
	"- Possibilit� d'exporter un espionnage sous forme BBCode pour un forum, ou HTML pour autre.</br>".
	"- Plus besoin de cliquer sur les `<<<` ou les `>>>` pour changer de page, un clic dans la case suffit.</br>".
	"- Il est possible de mettre � jour un espionnage affich� dans les 3 derniers de la page d'accueil.</br>".
	"- Maintenant, il n'y aura plus affich� les 2 noms, lorsqu'un joueur en a chang�. Par contre, une icone apparait � gauche. Un survole pour vous dire ce qui a chang�, et un clic pour modifier si c'est toujours le m�me, sinon... la poubelle est � droite.</br>".
	"- Modification des ic�nes d'effacement et d'�dition.</br>".
	"- Am�lioration de l'algorithme d'affichage... C'est plus rapide, non?</br>".
	"- Modification de la base de donn�e. Ajout du champ `distance` et du champ `user_id` dans la table de config. Maintenant, la distance est calcul� � l'enregistrement de l'espionnage, les statistiques des utilisateurs ne sont calcul�es qu'une seule fois, et chaque membre peut avoir des configurations priv�es.</br>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.91 :</u></b> <i>(16/11/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Petite revue du code d'inportation et des fonctions.</br>".
	"- Refonte de la page Accueil avec l'ajout des 3 derniers rapports.</br>".
	"- Ajout d'une page n'affichant que la liste d'espionnage.</br>".
	"- Ajout d'une page affichant les espionnages de tous les membres.</br>".
	"- Gestion des filtres am�lior�e.</br>".
	"- Gestion des pages am�lior�e.</br>".
	"- Possibilit� de mettre � jour un espion qui a chang�.</br>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.8 :</u></b> <i>(29/10/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- La donn�e \"Tranquille depuis\" �tait erron�e. [fix].</br>".
	"- Compatibilit� avec FireSpy.</br>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.7 :</u></b> <i>(14/10/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Ajout du \"Graphique d'Espionnage\" dans les popups des Top Heures qui permet une vue rapide des espionnages en fonction des heures de la journ�e.</br>".
	"- Ajout d'un popup sur \"tranquille depuis\" qui donne la moyenne entre 2 sondages.</br>".
	"- Le popup sur la p�riode tranquille la plus longue donne maintenant les 3 intervals les plus longs.</br>".
	"- Il n'y a plus de \"-\" devant le temps �coul�.</br>".
	"- \"Warning\" lorsqu'il n'y a pas d'espionnage, sur les serveurs Free [fix].</br>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.6a :</u></b> <i>(07/10/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Division par z�ro quand il n'y a pas d'espionnage stock�s [fix].</br>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.6 :</u></b> <i>(07/10/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Ajout du script de liaison avec XTense.</br>".
	"- Ajout de la gestion du temps dans le bilan: notion de tranquillit� et d'intensit�.</br>".
	"- Ajout d'une confirmation avant d'effacement un espionnage.<br/>".
	"- Nouveau look de la liste d'espionnage.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.5 :</u></b> <i>(30/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- La page d'admin fonctionne enfin comme il faut.</br>".
	"- Correction du bug des 94%.<br/>".
	"- Les dates n'etaient pas bonne dans le changelog.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.4a :</u></b> <i>(28/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Correction du bug de la page Admin.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.4 :</u></b> <i>(27/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Les popups qui s'affichent dans la page galaxie sur le nom du joueur et de l'alliance s'affichent d�sormais �galement dans la liste des espionnages.<br/>".
	"- S'il y a des espionnages sur la plan�te de l'espion, un lien s'affiche alors dans la liste d'espionnage, toujours comme dans la page galaxie.<br/>".
	"- Il est maintenant possible d'analyser les espionnages en prenant en compte les enregistrements de tous les membres du serveur et ce, par joueurs ou par alliances.".
	"<br/></font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.3 :</u></b> <i>(25/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Ajout d'un contr�le d'erreur dans la recherche de l'alliance et du pseudo dans la base de donn�e de l'univers.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.2a :</u></b> <i>(24/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"- Ajout de la possibilit� de filtrer la liste d'espionnage par Joueur, Alliance ou plan�te Cible.<br/>".
	"</font></p></fieldset>",

	"<fieldset><legend><font color='#0080FF'><b><u>Version 0.1 :</u></b> <i>(23/09/07)</i></font></legend>".
	"<p align='left'><font size=\"2\">".
	"Apr�s de nombreuses modifications du mod QuiMObserve de Santory, j'ai finalement d�cid� d'en faire un nouveau ind�pendant.<br /><br />".
	"- Enregistrement de la plan�te d'o� vient l'espionnage, du nom et de l'alliance de l'espion (si le syst�me � �t� scann�), de la plan�te espionn�e, ".
	"du pourcentage de chance de destruction et de l'heure et date de l'espionnage.<br/>".
	"- Affichage de la liste des espionnages enregistr�s.<br/>".
	"- Possibilit� de trier la liste en fonction de chaque colones.<br/>".
	"- Affichage du bilan : Joueur le plus curieux, alliance la plus curieuse, plan�te la plus sond�, moyenne de pourcentage de destruction et nombre total d'espionnage.<br/>".
	"- Interpolation en fonction du Joueur ou de l'alliance, fonction tr�s largement inspir� du module de Santory.<br/>".
	"- Analyse de l'espionnage par plan�te, fonction tr�s largement inspir� du module de Santory.<br/>".
	"</font></p></fieldset>"
);

$lang['qms_footer'] = 
	"<div align=\"right\"><font size=\"2\">%1\$s v%2\$s by <a href='mailto:sylar.web@free.fr'>Sylar</a> <s>�</s> 2008</font><br/>\n".
	"<font size=\"1\">Mod de Gestion des Espionnages subits<br />".
	"<a href='index.php?action=%1\$s&page=changelog'>ChangeLog</a> / ".
	"<a href='http://board.ogsteam.fr/viewtopic.php?id=4816' target='_blank'>plus d'infos</a></font><br/></div>\n";

?>