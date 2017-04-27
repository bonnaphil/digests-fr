<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2017 Mark D. Hamill (mark@phpbbservices.com)
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

global $phpbb_container;

$config = $phpbb_container->get('config');
$helper = $phpbb_container->get('phpbbservices.digests.common');

$server_settings_url = append_sid('index.php?i=acp_board&amp;mode=server');

$lang = array_merge($lang, array(

	'PLURAL_RULE'											=> 2,

	'ACP_CAT_DIGESTS'										=> 'Digests',
	'ACP_DIGESTS_SETTINGS'									=> 'Réglages Digest',
	'ACP_DIGESTS_GENERAL_SETTINGS'							=> 'Réglages généraux',
	'ACP_DIGESTS_GENERAL_SETTINGS_EXPLAIN'					=> 'Cette rubrique présente les réglages généraux de Digests, un service permettant de générer un résumé des posts publiés sur vos forums. Veuillez noter que si les résumés doivent être délivrés rigoureusement en temps et en heure, vous devez paramétrer et <a href="'. $server_settings_url . '">activer</a> le <strong><a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">service cron</a></strong> de phpBB. Sinon dès qu\'il y aura trop de trafic sur le forum, les résumés de l\'heure courante et des heures passées seront envoyés. Pour plus d\'informations, veuillez lire la FAQ de l\'extension Digests sur les forums de phpbb.com.',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS'						=> 'Options par défaut de l\'utilisateur',
	'ACP_DIGESTS_USER_DEFAULT_SETTINGS_EXPLAIN'				=> 'Ces réglages permettent aux administrateurs de définir les valeurs par défaut qu\'auront les options du résumé lorsqu\'un utilisateur s\'y abonne.',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS'							=> 'Éditer les abonnés',
	'ACP_DIGESTS_EDIT_SUBSCRIBERS_EXPLAIN'					=> 'Cette page permet de voir qui reçoit ou non le résumé. Vous pouvez abonner ou désabonner des membres de façon sélective, et éditer tous les détails d\'un résumé lié à l\'abonnement d\'un utilisateur. En cochant les cases dans la première colonne en regard du nom des membres à considérer, vous pouvez les abonner avec les valeurs par défaut ou les désabonner. Pour cela utilisez les commandes situées au bas de la page, puis cliquez sur Envoyer. Veuillez également noter que vous pouvez utiliser ces commandes pour classer et filtrer la liste en conjonction avec le bouton Actualiser.',
	'ACP_DIGESTS_BALANCE_LOAD'								=> 'Équilibrer la charge',
	'ACP_DIGESTS_BALANCE_LOAD_EXPLAIN'						=> 'Si le nombre de résumés envoyés est trop important à certaines heures de la journée, des problèmes de performance risquent de survenir. Cette page permet d\'équilibrer la répartition des abonnés au résumé de manière à ce qu\'un même nombre de résumés environ soit envoyé aux heures souhaitées. La table ci-dessous affiche le nombre et le noms des abonnés au résumé pour chacune des heures avec <strong>les heures surchargées affichées en gras</strong>. <em>Les abonnés au résumé hebdomadaire sont affichés en italique.</em> <strong>Les abonnés au résumé mensuel sont affichés en gras.</strong>. Cette fonction met à jour a minima les heures d\'envoi des résumés. Les modifications ne surviennent qu\'aux heures pour lesquelles le nombre d\'abonnés excède la charge moyenne et ne s\'appliquent qu\'aux abonnés de la tranche horaire correspondante. <em>Attention</em>: les abonnés risquent de ne pas apprécier que l\'heure de leur abonnenment soit modifiée et pourront recevoir une notification par courriel, en fonction du réglage dans les réglages généraux du résumé. Si vous le souhaitez, vous pouvez limiter l\'équilibrage à un type de résumé, équilibrer certaines heures et appliquer l\'équilibrage à certaines heures.',
	'ACP_DIGESTS_BALANCE_OPTIONS'							=> 'Options d\'équilibrage',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'				=> 'Abonnements/Désabonnements groupés',
	'ACP_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'		=> 'Cette fonction permet aux administrateurs d\'abonner ou de désabonner de manière simple et en une seule fois tous les membres de votre forum. Les réglages par défaut de Digests sont utilisés pour abonner les membres. Si un membre est déjà abonné au résumé, l\'abonnement groupé ne modifiera pas ses réglages. Il n\'est pas possible d\'abonner un utilisateur à des forums particulier. Les utilisateurs sont systématiquement abonnés à tous les forums auxquels ils ont un accès en lecture. <strong>Attention</strong>: Attention en utilisant cette option, les abonnés risquent de ne pas apprécier d\'être abonnés ou désabonnés sans leur consentement.',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME'						=> 'Réinitialiser le générateur de courriels',
	'ACP_DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'				=> '',
	'ACP_DIGESTS_TEST'										=> 'Lancer le générateur de courriels manuellement',
	'ACP_DIGESTS_TEST_EXPLAIN'								=> 'Cette fonction permet de déclencher manuellement l\'émission d\'un résumé pour effectuer des tests de mise au point ou en cas de problèmes. Vous pouvez également l\'utiliser pour émettre des résumés pour une date et une heure particulière. Le fuseau horaire du forum (actuellement UTC ' . $helper->make_tz_offset($config['board_timezone'], true) . ') est utilisé lors du calcul de la date et de l\'heure. Veuillez noter que l\'instant d\'envoi des résumés dépend du trafic sur le forum, les résumés peuvent de ce fait parvenir en retard pour certains utilisateurs. Cela peut être corrigé si vous paramétrez un <a href="https://wiki.phpbb.com/Modular_cron#Use_system_cron">service cron</a> et <a href="'. $server_settings_url . '">activez</a> le <strong>service cron</strong> phpBB. Pour plus d\'informations, veuillez lire la FAQ de l\'extension Digests sur les forums de phpbb.com.',

	'LOG_CONFIG_DIGESTS_BAD_DIGEST_TYPE'					=> '<strong>Attention : l\'abonné %1$s a un mauvais type de résumé %2$s. Un résumé journalier est recommandé.</strong>',
	'LOG_CONFIG_DIGESTS_BAD_SEND_HOUR'						=> '<strong>L\'heure d\'envoi du résumé de l\'utilisateur %1$s est invalide. Elle est à %2$d. Le nombre doit être compris entre >= 0 et < 24.</strong>',
	'LOG_CONFIG_DIGESTS_BALANCE_LOAD'						=> '<strong>L\'équilibrage de la charge d\'envoi des résumés aux abonnés a été lancé avec succès</strong>',
	'LOG_CONFIG_DIGESTS_BOARD_DISABLED'						=> '<strong>Un lancement du générateur de courriels a été tenté, mais il a été arrêté car le forum est désactivé.</strong>',
	'LOG_CONFIG_DIGESTS_CACHE_CLEARED'						=> '<strong>Le répertoire cache/phpbbservices/digests a été vidé',
	'LOG_CONFIG_DIGESTS_CLEAR_SPOOL_ERROR'					=> '<strong>Impossible d\'effacer les fichiers dans le répertoire cache/phpbbservices/digests. Cela peut être dû à un problème de permissions ou à un chemin d\'accès incorrect. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_DIRECTORY_CREATE_ERROR'				=> '<strong>Impossible de créer un répertoire cache/phpbbservices/digests. Cela est peut-être dû à des problèmes de permissions avec le dossier contenant votre forum.</strong>',
	'LOG_CONFIG_DIGESTS_EDIT_SUBSCRIBERS'					=> '<strong>Édition des abonnés au résumé</strong>',
	'LOG_CONFIG_DIGESTS_FILE_CLOSE_ERROR'					=> '<strong>Impossible de fermer le fichier %s</strong>',
	'LOG_CONFIG_DIGESTS_FILE_OPEN_ERROR'					=> '<strong>Impossible d\'ouvrir gestionnaire de fichier vers le répertoire %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILE_WRITE_ERROR'					=> '<strong>Impossible d\'écrire dans le fichier %s. Cela est peut-être dû à permissions insuffisantes. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).</strong>',
	'LOG_CONFIG_DIGESTS_FILTER_ERROR'						=> '<strong>Le générateur de courriels pour l\'envoi des résumés a été appelé avec un user_digest_filter_type = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_FORMAT_ERROR'						=> '<strong>Le générateur de courriels pour l\'envoi des résumés a été appelé avec un user_digest_format de %1$s pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_GENERAL'							=> '<strong>Réglages généraux des résumés modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_HOUR_RUN'							=> '<strong>Envoi des résumés à %s UTC</strong>',
	'LOG_CONFIG_DIGESTS_INCONSISTENT_DATES'					=> '<strong>Une erreur inhabituelle est survenue. Aucune heure n\'a été traitée car la dernière heure à laquelle les résumés ont été envoyés avec succès (daté du %1$d) est située après la date de préparation des résumés (daté du %2$d).</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD'						=> '<strong>Impossible d\'envoyer un résumé à %1$s ((%2$s). Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d\'envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_BAD_NO_EMAIL'				=> '<strong>Impossible d\'envoyer un résumé à %s. Ce problème doit être analysé et corrigé dans la mesure où cela signale probablement un problème d\'envoi de courriel plus général.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD'						=> array(
																1 => '<strong>Un résumé contenant %6$d post et %7$d message privé a été %1$s %2$s (%3$s) le %4$s, à %5$d heure UTC.</strong>',
																2 => '<strong>Un résumé contenant %6$d posts et %7$d messages privés a été %1$s %2$s (%3$s) le %4$s, à %5$d heure UTC.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_DISK'				=> '<strong>Un résumé a été écrit dans le répertoire cache/phpbbservices/digests/%s. Ce résumé n\'a PAS été envoyé par courriel, mais a été placé ici à des fins d\'analyse.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_GOOD_NO_EMAIL'			=> array(
																1 => '<strong>Un résumé contenant %5$d post et %6$d message privé a été %1$s %2$s le %3$s, à %4$d heure UTC.</strong>',
																2 => '<strong>Un résumé contenant %5$d posts et %6$d messages privés a été %1$s %2$s le %3$s, à %4$d heure UTC.</strong>',
															),
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE'						=> '<strong>Le résumé n\'a PAS été envoyé à %1$s (%2$s) car le réglage de ses filtres et de ses préférences font qu\'il n\'y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_ENTRY_NONE_NO_EMAIL'			=> '<strong>Le résumé n\'a PAS été envoyé à %s car le réglage de ses filtres et de ses préférences font qu\'il n\'y avait rien à envoyer.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_START'							=> '<strong>Démarrage du générateur de courriels.</strong>',
	'LOG_CONFIG_DIGESTS_LOG_END'							=> '<strong>Arrêt du générateur de courriels.</strong>',
	'LOG_CONFIG_DIGESTS_MAILER_RAN_WITH_ERROR'				=> '<strong>Une erreur est survenue alors que le générateur de courriel était démarré. Un ou plusieurs résumés ont peut-être pu être générés avec succès.</strong>',
	'LOG_CONFIG_DIGESTS_MANUAL_RUN'							=> '<strong>Demande de lancement manuel du générateur de courriels</strong>',
	'LOG_CONFIG_DIGESTS_MESSAGE'							=> '<strong>%s</strong>',	// Utilisé pour le débogage général, car il est sinon difficile de corriger des problèmes en mode cron.
	'LOG_CONFIG_DIGESTS_MASS_SUBSCRIBE_UNSUBSCRIBE'			=> '<strong>Éxécution d\'une action d\'abonnement ou de désabonnement groupé au résumé</strong>',
	'LOG_CONFIG_DIGESTS_NO_ALLOWED_FORUMS'					=> '<strong>Attention : l\'abonné %s n\'a aucune permission sur le forum, dans la mesure où il y a des forums requis, les résumés seront toujours vides.</strong>',
	'LOG_CONFIG_DIGESTS_NO_BOOKMARKS'						=> '<strong>Attention : l\'abonné %s souhaite des sujets cochés dans son résumé, mais il n\'a aucun sujet coché.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_ERROR'					=> '<strong>Impossible d\'envoyer une notification par courriel du résumé généré par un administrateur à %s.</strong>',
	'LOG_CONFIG_DIGESTS_NOTIFICATION_SENT'					=> '<strong>Un courriel a été envoyé à %1$s (%2$s) indiquant que les réglages de son résumé ont été modifiés.</strong>',
	'LOG_CONFIG_DIGESTS_REGULAR_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par un cron (phpBB) régulier</strong>',
	'LOG_CONFIG_DIGESTS_RESET_CRON_RUN_TIME'				=> '<strong>L\'heure d\'envoi des résumés a été réinitialisé</strong>',
	'LOG_CONFIG_DIGESTS_RUN_TOO_SOON'						=> '<strong>Moins d\'une heure s\'est écoulée depuis le dernier envoi des résumés. Lancement annulé.</strong>',
	'LOG_CONFIG_DIGESTS_SIMULATION_DATE_TIME'				=> '<strong>L\'administrateur a choisi de créer des résumés pour %1$s à %2$d:00 heure du forum.</strong>',
	'LOG_CONFIG_DIGESTS_SORT_BY_ERROR'						=> '<strong>Le générateur de courriels a été appelé avec un user_digest_sortby = %1$s invalide pour %2$s</strong>',
	'LOG_CONFIG_DIGESTS_SYSTEM_CRON_RUN'					=> '<strong>Demande de lancement du générateur de courriels par le service cron</strong>',
	'LOG_CONFIG_DIGESTS_TIMEZONE_ERROR'						=> '<strong>Le user_timezone "%1$s" pour le nom d\'utilisateur "%2$s" est invalide. En considérant un fuseau horaire de "%3$s". Veuillez demander à l\'utilisateur de régler son fuseau horaire dans le panneau de contrôle de l\'utilisateur. Voir http://php.net/manual/en/timezones.php pour une liste des fuseaux horaires valides.</strong>',
	'LOG_CONFIG_DIGESTS_USER_DEFAULTS'						=> '<strong>Réglages par défaut des résumés utilisateurs modifiés</strong>',
));