<?php
$language["ACP_BAN_IP"]="Bannir IP";
$language["ACP_FORUM"]="Configurer le forum";
$language["ACP_USER_GROUP"]="Configurer les groupes";
$language["ACP_STYLES"]="Configurer le style";
$language["ACP_LANGUAGES"]="Configurer la langue";
$language["ACP_CATEGORIES"]="Configurer les cat�gories";
$language["ACP_TRACKER_SETTINGS"]="Configurer le tracker";
$language["ACP_OPTIMIZE_DB"]="Optimiser la bdd";
$language["ACP_CENSORED"]="Configurer les mots censures";
$language["ACP_DBUTILS"]="Utilitaire de la bdd";
$language["ACP_HACKS"]="Hacks";
$language["ACP_HACKS_CONFIG"]="Configurer hacks";
$language["ACP_MODULES"]="Modules";
$language["ACP_MODULES_CONFIG"]="Configurer les modules";
$language["ACP_MASSPM"]="MP de masse";
$language["ACP_PRUNE_TORRENTS"]="Elaguage des torrents";
$language["ACP_PRUNE_USERS"]="Elaguage des utilisateurs";
$language["ACP_SITE_LOG"]="Voir le log";
$language["ACP_SEARCH_DIFF"]="Chercher Diff.";
$language["ACP_BLOCKS"]="Configurer les blocks";
$language["ACP_POLLS"]="Configurer les sondages";
$language["ACP_MENU"]="Menu d'administration";
$language["ACP_FRONTEND"]="Configurer contenu";
$language["ACP_USERS_TOOLS"]="Outils des utilisateurs";
$language["ACP_TORRENTS_TOOLS"]="Outils des torrents";
$language["ACP_OTHER_TOOLS"]="Outils divers";
$language["ACP_MYSQL_STATS"]="Stats MySQL";
$language["XBTT_BACKEND"]="Option xbtt";
$language["XBTT_USE"]=" <a href=\"http://xbtt.sourceforge.net/tracker/\" target=\"_blank\">xbtt</a> as backend?"; // Pas de trad
$language["XBTT_URL"]="URL de base de xbtit http://localhost:2710";
$language["GENERAL_SETTINGS"]="Configuration g�n�rale";
$language["TRACKER_NAME"]="Nom du site";
$language["TRACKER_BASEURL"]="Url de base (sans / � la fin)";
$language["TRACKER_ANNOUNCE"]="URL d'annonce du tracker (une par ligne)".($XBTT_USE?"<br />\n<span style=\"color:#FF0000; font-weight: bold;\">V�rifiez les doublons !</span>":"");
$language["TRACKER_EMAIL"]="Adresse du fondateur";
$language["TORRENT_FOLDER"]="Dossier des torrents";
$language["ALLOW_EXTERNAL"]="Permettre les torrents externes";
$language["ALLOW_GZIP"]="Compression GZIP";
$language["ALLOW_DEBUG"]="Afficher la fen�tre de debogage d'infos sur la page du bas";
$language["ALLOW_DHT"]="D�sactiver DHT<br />\nSera mis uniquement sur les nouveaux torrents";
$language["ALLOW_LIVESTATS"]="Activer les stats en direct (Attention, ceci peu surcharge du serveur !)";
$language["ALLOW_SITELOG"]="Activer le fichier de log";
$language["ALLOW_HISTORY"]="Activer l'historique";
$language["ALLOW_PRIVATE_ANNOUNCE"]="Annonce priv�";
$language["ALLOW_PRIVATE_SCRAPE"]="Scrape priv�";
$language["SHOW_UPLOADER"]="Montrer le pseudo de l'uploader";
$language["USE_POPUP"]="Utiliser une popup pour les d�tails des torrents";
$language["DEFAULT_LANGUAGE"]="Langage par defaut";
$language["DEFAULT_CHARSET"]="L'encodage des caract�res par d�faut<br />\n(si votre langue ne s'affichent pas correctement, essayez UTF-8)";
$language["DEFAULT_STYLE"]="Style par d�faut";
$language["MAX_USERS"]="Nombra max. d'utilisateurs (0 = illimite)";
$language["MAX_TORRENTS_PER_PAGE"]="Torrents par page";
$language["SPECIFIC_SETTINGS"]="Configuration specifique au tracker";
$language["SETTING_INTERVAL_SANITY"]="Intervalle d'�laguage (0 = d�sactiv�, nombre en secondes)<br />La valeur conseill�e est de 1800 (30 minutes)";
$language["SETTING_INTERVAL_EXTERNAL"]="Mise � jour externe (0 = d�sactiv�, nombre en secondes)<br />En fonction du nombre de torrents externes";
$language["SETTING_INTERVAL_MAX_REANNOUNCE"]="Intervalle max. de r�-annonce (nombre en secondes)";
$language["SETTING_INTERVAL_MIN_REANNOUNCE"]="Intervalle min. de r�-annonce (nombre en secondes)";
$language["SETTING_MAX_PEERS"]="Nombre max. de peers par requ�tes (chiffre)";
$language["SETTING_DYNAMIC"]="Permettre les torrents dynamique (Non recommand�)";
$language["SETTING_NAT_CHECK"]="Verification NAT";
$language["SETTING_PERSISTENT_DB"]="Connexion persistante (Bdd, non recommand�)";
$language["SETTING_OVERRIDE_IP"]="Permet aux utilisateurs de passer outre la detection d'IP";
$language["SETTING_CALCULATE_SPEED"]="Calculer la vitesse (octets)";
$language["SETTING_PEER_CACHING"]="Mettre les tables en caches (devrait diminuer la charge)";
$language["SETTING_SEEDS_PID"]="Nombre max de seeders par PID";
$language["SETTING_LEECHERS_PID"]="Nombre max. de leechers par PID";
$language["SETTING_VALIDATION"]="Mode de validation";
$language["SETTING_CAPTCHA"]="Anti-bot (Code image)";
$language["SETTING_FORUM"]="Le lien du forum, peu etre :<br /><li><font color='#FF0000'>Interne</font> ou vide si vous utilisez le forum interne</li><li><font color='#FF0000'>smf</font> pour int�grer <a target='_new' href='http://www.simplemachines.org'>Simple Machines Forum</a></li><li>Votre propre forum (sp�cifiez l'url)</li>";
$language["BLOCKS_SETTING"]="Configurer les pages Index/Blocks";
$language["SETTING_CLOCK"]="Type d'horloge";
$language["SETTING_NUM_NEWS"]="Limite d'affichage des nouvelles news (chiffre)";
$language["SETTING_NUM_POSTS"]="Limite d'affichage des nouveaux forum (chiffre)";
$language["SETTING_NUM_LASTTORRENTS"]="Limite d'affichage des derniers torrents (chiffre)";
$language["SETTING_NUM_TOPTORRENTS"]="Limite d'affichage des torrents les plus populaires (chiffre)";
$language["CLOCK_ANALOG"]="Analogique";
$language["CLOCK_DIGITAL"]="Digital";
$language["CONFIG_SAVED"]="La configuration � bien �t� prise en compte !";
$language["CACHE_SITE"]="Intervalle de mise en cache (0 = d�sactiv�, nombre en secondes)";
$language["ALL_FIELDS_REQUIRED"]="Tous les champs sont obligatoires !";
$language["SETTING_CUT_LONG_NAME"]="Couper le nom des torrent trop long apres x carateres (0 = pour ne pas couper)";
$language["MAILER_SETTINGS"]="Exp�diteur";
$language["SETTING_MAIL_TYPE"]="Type d'email";
$language["SETTING_SMTP_SERVER"]="Server SMTP";
$language["SETTING_SMTP_PORT"]="Port SMTP";
$language["SETTING_SMTP_USERNAME"]="Nom d'utilisateur SMTP";
$language["SETTING_SMTP_PASSWORD"]="Mot de passe SMTP";
$language["SETTING_SMTP_PASSWORD_REPEAT"]="Mot de passe SMTP (confirmation)";
$language["XBTT_TABLES_ERROR"]="Vous devez ins�rer un tableau xbtt (voir fichier d'aide)";
$language["XBTT_URL_ERROR"]="L'URL de base est obligatoire";
// BAN FORM
$language["BAN_NOTE"]="Dans cette partie du panneau d'administration, vous pouvez voir les IP bannies.<br />\nVous devez ins�rer une gamme de (premi�re IP) (derni�re IP).";
$language["BAN_NOIP"]="Il n'y a pas d'IP bannies";
$language["BAN_FIRSTIP"]="Premi�re IP";
$language["BAN_LASTIP"]="Derni�re IP";
$language["BAN_COMMENTS"]="Commentaires";
$language["BAN_REMOVE"]="Supprimer";
$language["BAN_BY"]="Par";
$language["BAN_ADDED"]="Date";
$language["BAN_INSERT"]="Ajouter une nouvelle gamme d'IP bannies";
$language["BAN_IP_ERROR"]="Mauvaise adresse IP.";
$language["BAN_NO_IP_WRITE"]="Vous n'avez pas �crit d'adresse IP. Desol� !";
$language["BAN_DELETED"]="La gamme d'adresse IP a �t� supprim�e de la bdd.<br />\n<br />\n<a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=banip&amp;action=read\">Retour</a>";
// LANGUAGES
$language["LANGUAGE_SETTINGS"]="Configurer le langage";
$language["LANGUAGE"]="Langage";
$language["LANGUAGE_ADD"]="Ins�rer une nouvelle langue";
$language["LANGUAGE_SAVED"]="F�licitations, les changement ont bien �t� prit en compte !";
// STYLES
$language["STYLE_SETTINGS"]="Configuration du style";
$language["STYLE_EDIT"]="Editer le style";
$language["STYLE_ADD"]="Ins�rer un style";
$language["STYLE_NAME"]="Nom du style";
$language["STYLE_URL"]="URL du style";
$language["STYLE_FOLDER"]="Dossier du style ";
$language["STYLE_NOTE"]="Dans cette section, vous pouvez g�rer vos param�tres de style, mais vous devez transf�rer des fichiers par FTP ou sftp.";
// CATEGORIES
$language["CATEGORY_SETTINGS"]="Configurer les cat�gories";
$language["CATEGORY_IMAGE"]="Images des cat�gories";
$language["CATEGORY_ADD"]="Cr�er une nouvelle cat�gorie";
$language["CATEGORY_SORT_INDEX"]="Index court";
$language["CATEGORY_FULL"]="Cat�gorie";
$language["CATEGORY_EDIT"]="Editer la cat�gorie";
$language["CATEGORY_SUB"]="Sous-cat�gorie";
$language["CATEGORY_NAME"]="Cat�gorie";
// CENSORED
$language["CENSORED_NOTE"]="Ecrire <b>un mot par ligne</b> pour le censurer (sera transform� en *censur�*)";
$language["CENSORED_EDIT"]="Editer";
// BLOCKS
$language["BLOCKS_SETTINGS"]="Configurer les blocks";
$language["ENABLED"]="Activer";
$language["ORDER"]="Ordre";
$language["BLOCK_NAME"]="Nom du block";
$language["BLOCK_POSITION"]="Position";
$language["BLOCK_TITLE"]="Titre du langage (sera utilis� pour afficher le titre traduit)";
$language["BLOCK_USE_CACHE"]="Mettre en cache ce block ?";
$language["ERR_BLOCK_NAME"]="Vous devez selectionner quelque chose dans la liste deroulante !";
$language["BLOCK_ADD_NEW"]="Ajouter un nouveau block";
// POLLS (more in lang_polls.php)
$language["POLLS_SETTINGS"]="Configurer le sondage";
$language["POLLID"]="Identifiant du sondage";
$language["INSERT_NEW_POLL"]="Ajouter un nouveau sondage";
$language["CANT_FIND_POLL"]="Ne peut trouver le sondage";
$language["ADD_NEW_POLL"]="Ajouter sondage";
// GROUPS
$language["USER_GROUPS"]="Configurer le groupe";
$language["VIEW_EDIT_DEL"]="Voir/Editer/Supprimer";
$language["CANT_DELETE_GROUP"]="Ce niveau/groupe ne peu etre annul� !";
$language["GROUP_NAME"]="Nom du groupe";
$language["GROUP_VIEW_NEWS"]="Voir les news";
$language["GROUP_VIEW_FORUM"]="Voir le forum";
$language["GROUP_EDIT_FORUM"]="Editer le forum";
$language["GROUP_BASE_LEVEL"]="Choisir le niveau de base";
$language["GROUP_ERR_BASE_SEL"]="Erreur de s�lection du niveau de base !";
$language["GROUP_DELETE_NEWS"]="Supprimer la news";
$language["GROUP_PCOLOR"]="Couleur du prefixe (comme ";
$language["GROUP_SCOLOR"]="Couleur du suffixe (comme ";
$language["GROUP_VIEW_TORR"]="Voir les torrents";
$language["GROUP_EDIT_TORR"]="Editer les torrents";
$language["GROUP_VIEW_USERS"]="Voir les utilisateurs";
$language["GROUP_DELETE_TORR"]="Supprimer les torrents";
$language["GROUP_EDIT_USERS"]="Editer les utilisateurs";
$language["GROUP_DOWNLOAD"]="Peut t�l�charger";
$language["GROUP_DELETE_USERS"]="Supprimer utilisateur";
$language["GROUP_DELETE_FORUM"]="Supprimer forum";
$language["GROUP_GO_CP"]="Peut acc�der au panneau d'administration";
$language["GROUP_EDIT_NEWS"]="Editer les news";
$language["GROUP_ADD_NEW"]="Ajouter un nouveau groupe";
$language["GROUP_UPLOAD"]="Peut uploader";
$language["GROUP_WT"]="Temps d'attente si le ratio <1";
$language["GROUP_EDIT_GROUP"]="Editer le groupe";
$language["GROUP_VIEW"]="Voir";
$language["GROUP_EDIT"]="Editer";
$language["GROUP_DELETE"]="Supprimer";
$language["INSERT_USER_GROUP"]="Ins�rer un nouveau groupe d'utilisateurs";
$language["ERR_CANT_FIND_GROUP"]="Impossible de trouver le groupe !";
$language["GROUP_DELETED"]="Le groupe � bien ete supprim� !";
// MASS PM
$language["USERS_FOUND"]="Utilisateurs trouv�s";
$language["USERS_PMED"]="Utilisateurs MP";
$language["WHO_PM"]="Destinataires";
$language["MASS_SENT"]="MP de masse envoy�s !!!";
$language["MASS_PM"]="MP de masse";
$language["MASS_PM_ERROR"]="Ecrivez quelque chose avant d'envoy� !!";
$language["RATIO_ONLY"]="ce ratio seulement";
$language["RATIO_GREAT"]="sup�rieur � ce ratio";
$language["RATIO_LOW"]="inf�rieur � ce ratio";
$language["RATIO_FROM"]="De";
$language["RATIO_TO"]="Pour";
$language["MASSPM_INFO"]="Info";
// PRUNE USERS
$language["PRUNE_USERS_PRUNED"]="Utilisateurs bannis";
$language["PRUNE_USERS"]="Bannir l'utilisateur";
$language["PRUNE_USERS_INFO"]="Entrez le nombre de jours pendant lesquels les utilisateurs doivent �tre consid�res comme \"inactif\"";
// SEARCH DIFF
$language["SEARCH_DIFF"]="Search Diff.";
$language["SEARCH_DIFF_MESSAGE"]="Message";
$language["DIFFERENCE"]="Diff�rence";
$language["SEARCH_DIFF_CHANGE_GROUP"]="Changer le groupe";
// PRUNE TORRENTS
$language["PRUNE_TORRENTS_PRUNED"]="Torrent bannis";
$language["PRUNE_TORRENTS"]="Torrents bannis";
$language["PRUNE_TORRENTS_INFO"]="Entrez le nombre de jours pendant lesquels les torrents doivent �tre consid�res comme \"inactif\"";
$language["LEECHERS"]="leecher(s)";
$language["SEEDS"]="seed(s)";
// DBUTILS
$language["DBUTILS_TABLENAME"]="Nom de la table";
$language["DBUTILS_RECORDS"]="Enregistrements";
$language["DBUTILS_DATALENGTH"]="Longueur des donn�es";
$language["DBUTILS_OVERHEAD"]="Overhead";
$language["DBUTILS_REPAIR"]="Reparer";
$language["DBUTILS_OPTIMIZE"]="Optimiser";
$language["DBUTILS_ANALYSE"]="Analyser";
$language["DBUTILS_CHECK"]="Controler";
$language["DBUTILS_DELETE"]="Supprimer";
$language["DBUTILS_OPERATION"]="Operation";
$language["DBUTILS_INFO"]="Info";
$language["DBUTILS_STATUS"]="Statut";
$language["DBUTILS_TABLES"]="Tables";
// MYSQL STATUS
$language["MYSQL_STATUS"]="Statut de MySQL";
// SITE LOG
$language["SITE_LOG"]="Log";
// FORUMS
$language["FORUM_MIN_CREATE"]="Droit minimum de cr�ation";
$language["FORUM_MIN_WRITE"]="Droit minimum d'�criture";
$language["FORUM_MIN_READ"]="Droit minimum de lecture";
$language["FORUM_SETTINGS"]="Configuration du forum";
$language["FORUM_EDIT"]="Editer le forum";
$language["FORUM_ADD_NEW"]="Ajouter un nouveau forum";
$language["FORUM_PARENT"]="Forum parent";
$language["FORUM_SORRY_PARENT"]="(Desol�, je ne peux pas avoir de parent, parce que je suis moi-meme un forum parent)";
$language["FORUM_PRUNE_1"]="Il y a des sujets et/ou messages dans ce forum !<br />Vous perdrez toutes les donn�es...<br />";
$language["FORUM_PRUNE_2"]="Si vous �tes sur";
$language["FORUM_PRUNE_3"]="sinon fa�tes retour.";
$language["FORUM_ERR_CANNOT_DELETE_PARENT"]="Vous ne pouvez pas supprimer un forum qui poss�de des fils, d�placez l'enfant vers d'autres forums et essayez � nouveau";
// MODULES
$language["ADD_NEW_MODULE"]="Ajouter un nouveau module";
$language["TYPE"]="Type";
$language["DATE_CHANGED"]="La date a �t� chang�e";
$language["DATE_CREATED"]="La date a �t� cr��e";
$language["ACTIVE_MODULES"]="Modules actifs : ";
$language["NOT_ACTIVE_MODULES"]="Modules inactifs : ";
$language["TOTAL_MODULES"]="Modules totaux : ";
$language["DEACTIVATE"]="D�sactiv�";
$language["ACTIVATE"]="Activ�";
$language["STAFF"]="Staff";
$language["MISC"]="Divers";
$language["TORRENT"]="Torrent";
$language["STYLE"]="Style";
$language["ID_MODULE"]="ID";
// HACKS
$language["HACK_TITLE"]="Titre";
$language["HACK_VERSION"]="Version";
$language["HACK_AUTHOR"]="Auteur";
$language["HACK_ADDED"]="Ajout�";
$language["HACK_NONE"]="Il n'y a pas de hacks install�s";
$language["HACK_ADD_NEW"]="Ajouter un hack";
$language["HACK_SELECT"]="S�lectionner";
$language["HACK_STATUS"]="Statut";
$language["HACK_INSTALL"]="Installer";
$language["HACK_UNINSTALL"]="D�sinstaller";
$language["HACK_INSTALLED_OK"]="Le hack a �t� install� avec succ�s!<br />\nPour voir quelles sont install�s hacks revenir au <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">panneau d'administration (Hacks)</a>";
$language["HACK_BAD_ID"]="Erreur de r�cuperation des informations sur le hack avec cet ID.";
$language["HACK_UNINSTALLED_OK"]="Le hack a �t� desinstall� avec succ�s!<br />\nPour voir quelles sont install�s hacks revenir au <a href=\"index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=hacks&amp;action=read\">panneau d'administration (Hacks)</a>";
$language["HACK_OPERATION"]="Op�ration";
$language["HACK_SOLUTION"]="Solution";
// added rev 520
$language["HACK_WHY_FTP"]="Certains fichiers de l'installateur hack ne sont pas inscriptibles. <br />\nVous devez mettre vos fichier en 777 sur votre ftp. <br />\nLes informations de votre FTP peuvent �tre temporairement misent en cache pour le fonctionnement correct du hack de l'installateur.";
$language["HACK_FTP_SERVER"]="Serveur du FTP";
$language["HACK_FTP_PORT"]="Port du FTP";
$language["HACK_FTP_USERNAME"]="Nom d'utilisateur du FTP";
$language["HACK_FTP_PASSWORD"]="Mot de passe du FTP";
$language["HACK_FTP_BASEDIR"]="Chemin d'acc�s local pour xbtit (chemin de la racine lorsque vous vous connectez via FTP)";
// USERS TOOLS
$language["USER_NOT_DELETE"]="Vous ne pouvez pas supprimer l'utilisateur Invit� ou vous meme !";
$language["USER_NOT_EDIT"]="Vous ne pouvez pas �diter l'utilisateur Invit� ou vous-meme !";
?>