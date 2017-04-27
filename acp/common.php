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

$lang = array_merge($lang, array(
	'PLURAL_RULE'											=> 2,
	
	'DIGESTS_ALL'											=> 'Tous',
	'DIGESTS_ALL_ALLOWED_FORUMS'							=> 'Tous les forums autorisés',
	'DIGESTS_ALL_HOURS'										=> 'Toutes les heures',
	'DIGESTS_ALL_TYPES'										=> 'Tous les types de résumé',
	'DIGESTS_ALL_SUBSCRIBED'								=> array(
																1 => 'Un groupe de %d membre au total a été abonné au service d\'envoi du résumé',
																2 => 'Un groupe de %d membres au total a été abonné au service d\'envoi du résumé',
															),
	'DIGESTS_ALL_UNSUBSCRIBED'								=> array(
																1 => 'Un groupe de %d membre au total a été désabonné du service d\'envoi du résumé',
																2 => 'Un groupe de %d membres au total a été désabonné du service d\'envoi du résumé',
															),
	'DIGESTS_APPLY_TO'										=> 'Appliquer à',
	'DIGESTS_AVERAGE'										=> 'Moyenne',
	'DIGESTS_BALANCE_APPLY_HOURS'							=> 'Appliquer l\'équilibrage aux heures suivantes',
	'DIGESTS_BALANCE_LOAD'									=> 'Équilibrer la charge',
	'DIGESTS_BALANCE_HOURS'									=> 'Équilibrer les heures',
	'DIGESTS_BASED_ON'										=> '(Basée sur UTC%+d)',
	'DIGESTS_CURRENT_VERSION_INFO'							=> 'Vous exécutez la version <strong>%s</strong>.',
	'DIGESTS_CUSTOM_STYLESHEET_PATH'						=> 'Chemin d\'accès à la feuille de style personnalisée',
	'DIGESTS_CUSTOM_STYLESHEET_PATH_EXPLAIN'				=> 'Ce réglage ne s\'applique que si l\'option Activer la feuille de style personnalisée est activée. Si elle est activée, cette feuille de style sera appliquée à tous les résumés. Le chemin d\'accès doit être un chemin d\'accès relatif à votre répertoire de styles phpBB qui doit normalement se trouver dans le sous-répertoire theme. Nota : vous êtes responsables de la création de la feuille de style et de son placement dans un fichier ayant pour nom celui saisi ici à l\'endroit approprié sur votre serveur. Exemple: prosilver/theme/digest_stylesheet.css. Pour des informations relatives à la création de feuilles de style, cliquez <a href="http://www.w3schools.com/css/">ici</a>.',
	'DIGESTS_COLLAPSE'										=> 'Réduire',
	'DIGESTS_COMMA'											=> ', ',		// Utilisée pour les salutations et pour séparer les éléments dans les listes
	'DIGESTS_DEFAULT'										=> 'Abonner en utilisant les valeurs par défaut',
	'DIGESTS_DAILY_ONLY'									=> 'Résumés journaliers seulement',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS'						=> 'Activer l\'abonnement automatique',
	'DIGESTS_ENABLE_AUTO_SUBSCRIPTIONS_EXPLAIN'				=> 'Sélectionnez Oui, si vous souhaitez que les nouveaux membres qui s\'inscrivent sur le forum reçoivent automatiquement le résumé. Les réglages par défaut définis dans la rubrique "Options par défaut de l\'utilisateur" seront automatiquement appliqués. L\'activation de cette option n\'abonne <em>pas</em> : les personnes qui ne sont pas abonnées, les membres inactifs ou encore les nouveaux membres qui choisissent de ne pas recevoir le résumé lors de leur enregistrement au forum. Vous pouvez abonner des utilisateurs individuellement en utilisant la rubrique "Éditer les abonnés", ou abonner plusieurs utilisateurs en même temps depuis la rubrique "Abonnement/Désabonnement groupé".',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET'						=> 'Activer la feuille de style personnalisée',
	'DIGESTS_ENABLE_CUSTOM_STYLESHEET_EXPLAIN'				=> 'Sélectionnez Non pour que  la feuille de style utilisée par défaut soit celle sélectionnée dans le profil de l\'utilisateur pour la génération HTML de son résumé.',
	'DIGESTS_ENABLE_LOG'									=> 'Inscrire toutes les actions du résumé dans le journal de l\'administrateur',
	'DIGESTS_ENABLE_LOG_EXPLAIN'							=> 'Lorsque l\'option est activée, toutes les actions réalisées par Digests seront inscrites dans le journal d\'administration (qui se trouve dans l\'onglet Maintenance). Pratique pour trouver une réponse à une question relative à l\'envoi des résumés, dans la mesure où tout ce qu\'à fait le générateur de courriels, à quels moments et pour quels abonnés, est inscrit. Son activation va rapidement générer de longs journaux d\'administration, deux entrées au moins étant toujours inscrites chaque heure dans le journal. Nota : les erreurs, les exceptions et les alertes sont toujours inscrites dans le journal.',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE'					=> 'Activer l\'abonnement ou le désabonnement groupé d\'utilisateurs',
	'DIGESTS_ENABLE_SUBSCRIBE_UNSUBSCRIBE_EXPLAIN'			=> 'Si vous choisissez Oui, lorsque vous cliquerez sur le bouton Envoyer, une action d\'abonnement ou de désabonnement groupé d\'utlisateurs va être déclenchée. Activez cette option avec précaution !',
	'DIGESTS_EXCLUDE_FORUMS'								=> 'Toujours exclure les forums suivants',
	'DIGESTS_EXCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui ne doivent pas figurer dans le résumé. Séparez les forum_id par des virgules. En indiquant 0, aucun forum ne sera exclu. Pour déterminer le forum_id d\'un forum, observez la valeur du paramètre "f" dans le champ de l\'URL. C\'est le forum_id. Exemple: http://www.example.com/phpBB3/viewforum.php?f=1. Ne pas utiliser de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l\'option Sujets cochés seulement est cochée par l\'utilisateur.</i>',
	'DIGESTS_EXPAND'										=> 'Agrandir',
	'DIGESTS_FORMAT_FOOTER' 								=> 'Format du résumé',
	'DIGESTS_FROM_EMAIL_ADDRESS'							=> 'Adresse électronique utilisée pour expédier les résumés',
	'DIGESTS_FROM_EMAIL_ADDRESS_EXPLAIN'					=> 'Lorsque les utilisateurs recoivent un résumé, cette adresse électronique va s\'afficher dans le champ "De". S\'il est laissé vide, l\'adresse électronique de votre Forum sera utilisé par défaut. Faites attention lorsque vous utilisez une adresse électronique dont le domaine ne correspond pas à celui sur lequel est hébergé votre Forum, dans la mesure où votre serveur de courriels ou le serveur de courriels des utilisateurs pourra interprêter le courriel comme étant du spam.',
	'DIGESTS_FROM_EMAIL_NAME'								=> 'Nom de l\'expéditeur du courriel',
	'DIGESTS_FROM_EMAIL_NAME_EXPLAIN'						=> 'C\'est le nom qui apparaîtra en clair dans le champ "De" du logiciel de courriel client de l\'utilisateur. Si le champ est laissé vide il s\'identifera en tant que robot de votre forum.',
	'DIGESTS_HAS_UNSUBSCRIBED'								=> 'S\'est désabonné',
	'DIGESTS_HOUR_SENT'										=> 'Heure d\'envoi (basée sur UTC%+d)',
	'DIGESTS_IGNORE'										=> 'Ignorer les actions globales',
	'DIGESTS_ILLOGICAL_DATE'								=> 'Votre date de simulation n\'est pas cohérente, comme 31 Février. Veuillez la corriger et Envoyez à nouveau.',
	'DIGESTS_INCLUDE_ADMINS'								=> 'Inclure les administrateurs',
	'DIGESTS_INCLUDE_ADMINS_EXPLAIN'						=> 'Permet d\'abonner ou de désabonner les administrateurs en plus des utilisateurs normaux.',
	'DIGESTS_INCLUDE_FORUMS'								=> 'Toujours inclure les forums suivants',
	'DIGESTS_INCLUDE_FORUMS_EXPLAIN'						=> 'Saisissez le forum_id des forums qui doivent figurer dans le résumé. Séparez les forum_id par des virgules. En indiquant 0, aucun forum ne sera inclus. Pour déterminer le forum_id d\'un forum, observez la valeur du paramètre "f" dans le champ de l\'URL. C\'est le forum_id. Exemple: http://www.example.com/phpBB3/viewforum.php?f=1. Ne pas utiliser de forum_ids qui correspondent à des catégories. <i>Ce réglage est ignoré si l\'option Sujets cochés seulement est cochée par l\'utilisateur.</i>',
	'DIGESTS_LAST_SENT'										=> 'Dernier résumé envoyé',
	'DIGESTS_LIST_USERS' 								=> array(
																	1	=>	'%d Utilisateur',
																	2	=>	'%d Utilisateurs',
																),
																	'DIGESTS_LOWERCASE_DIGEST_TYPE'							=> 'Indiquer la fréquence d\'envoi du résumé en lettres minuscules',
'DIGESTS_LOWERCASE_DIGEST_TYPE_EXPLAIN'					=> 'En Anglais, le titre du résumé sera par exemple "My board name Daily Digest". Dans certaines langues "Daily Digest" précède le nom du forum. En indiquant Oui, la fréquence du résumé apparaîtra ainsi "Résumé journalier de mon forum", avec la première lettre de la fréquence d\'envoi en minuscule.',
	'DIGESTS_MAILER_NOT_RUN'								=> 'Le générateur de courriels n\'a pas été lancé car il n\'est pas activé.',
	'DIGESTS_MAILER_RAN_SUCCESSFULLY'						=> 'Le générateur de courriels a été lancé avec succès.',
	'DIGESTS_MAILER_RAN_WITH_ERROR'							=> 'Une erreur est survenue avec le générateur de courriels. Un ou plusieurs résumés ont pu être générés avec succès.',
	'DIGESTS_MAILER_SPOOLED'								=> 'Tous les résumés créés pour la date et l\'heure ont été enregistrés dans le répertoire cache/phpbbservices/digests.',
	'DIGESTS_MAX_CRON_HOURS'								=> 'Nombre d\'heures maximum d\'exécution par le générateur de courriels',
	'DIGESTS_MAX_CRON_HOURS_EXPLAIN'						=> 'Saisissez zéro (0) afin de traiter tous les résumés de la file d\'attente toutes les heures, lorsque générateur de courriels est lancé. Cependant, si vous avez un <strong>hébergement mutualisé</strong> le lancement du générateur de courriel peut lui faire atteindre ses limites et entraîner des erreurs. Cela ne risque d\'arriver que si vous avez de nombreux abonnés et que le trafic sur votre forum est élevé. La mise en place d\'un <a href="https://wiki.phpbb.com/PhpBB3.1/RFC/Modular_cron#Use_system_cron">service cron</a> est la solution la plus simple pour réduire ce risque et de vous assurer que vos résumés arrivent en temps et en heure.',
	'DIGESTS_MAX_ITEMS'										=> 'Nombre maximum de posts autorisés dans un résumé',
	'DIGESTS_MAX_ITEMS_EXPLAIN'								=> 'Pour des raisons de performances, vous pouvez avoir besoin de définir une limite absolue quant au nombre de posts dans un résumé. Si vous indiquez 0 (zéro) le résumé pourra avoir une taille illimitée. Vous pouvez utiliser tout nombre entier de votre choix dans ce champ. Veuillez noter qu\'un résumé est contraint par le nombre de posts dans le type de résumé demandé (journalier, hebdomadaire ou mensuel) ainsi que d\'autres critères définis par l\'utilisateur.',
	'DIGESTS_MAIL_FREQUENCY' 								=> 'Fréquence d\'envoi du résumé',
	'DIGESTS_MIGRATE_UNSUPPORTED_VERSION'					=> 'Les mises à niveau des modifications des résumés (pour phpBB 3.0) sont prises en charge depuis la version 2.2.6 et suivantes. Vous utilisez la version %s. L\extension ne peut pas être déplacée ou installée. Veuillez consulter l\'aide sur le forum de support de phpbb.com.',
	'DIGESTS_MONTHLY_ONLY'									=> 'Résumés mensuels seulement',
	'DIGESTS_NEVER_VISITED'									=> 'Jamais visité',
	'DIGESTS_NO_DIGESTS_SENT'								=> 'Aucun résumé envoyé',
	'DIGESTS_NO_MASS_ACTION'								=> 'Aucune action n\'a été réalisée, car vous n\'avez pas activé la fonction',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES'						=> 'Notifier un membre par courriel d\'une modification de son résumé par un administrateur',
	'DIGESTS_NOTIFY_ON_ADMIN_CHANGES_EXPLAIN'				=> 'Les rubriques "Éditer les abonnés", "Équilibrer la charge" et "Abonnements/Désabonnements groupés" permettent à l\'administrateur de modifier les réglages d\'envoi des résumés à un utilisateur. En choisissant oui et si un aspect de leur abonnement est modifié par un administrateur, un courriel leur sera envoyé.',
	'DIGESTS_NUMBER_OF_SUBSCRIBERS'							=> 'Nombre d\'abonnés',
	'DIGESTS_PMS_MARK_READ'									=> 'Marquer mes messages privés comme lus lorsqu\'ils sont dans le résumé',
	'DIGESTS_RANDOM_HOUR'									=> 'Heure aléatoire',
	'DIGESTS_REBALANCED'									=> array(
																	1 => 'Pendant l\'équilibrage, %d résumé d\'abonné au total a eu son heure d\'envoi de résumé modifiée.',
																	2 => 'Pendant l\'équilibrage, %d résumés d\'abonné au total ont eu leur heure d\'envoi de résumé modifiée.',
															),
	'DIGESTS_REFRESH'										=> 'Actualiser',
	'DIGESTS_REGISTRATION_FIELD'							=> 'Proposer aux utilisateurs de s\'abonner au résumé lorqu\'ils s\'enregistrent',
	'DIGESTS_REGISTRATION_FIELD_EXPLAIN'					=> 'Lorsque l\'option est activée, les utilisateurs peuvent au moment de leur enregistrement sur le forum, s\'abonner au service d\'envoi du résumé. Les réglages par défaut du forum seront appliqués. La proposition d\'abonnement ne s\'affiche pas lorsque l\'option Abonnement automatique est activé.',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS'						=> 'Adresse de réponse au couriel',
	'DIGESTS_REPLY_TO_EMAIL_ADDRESS_EXPLAIN'				=> 'Lorsque les utilisateurs reçoivent un résumé, cette adresse électronique apparaîtra dans le champ "Répondre". Si le champ est laissé vide, l\'adresse électronique de contact de votre forum sera utilisé. Faites attention lorsque vous utilisez une adresse électronique dont le domaine ne correspond pas à celui sur lequel est hébergé votre Forum, dans la mesure où votre serveur de courriels ou le serveur de courriels des utilisateurs pourra interprêter le courriel comme étant du spam.',
	'DIGESTS_RESET_CRON_RUN_TIME'							=> 'Réinitialiser le générateur de courriels',
	'DIGESTS_RESET_CRON_RUN_TIME_EXPLAIN'					=> 'La réintialisation du générateur de courriels, entraîne la suppression de tous les résumés stockés dans la file d\'attente. Aussi, lors de son premier lancement après la réinitialisation, seuls les résumés de l\'heure courante seront générés. La réinitialisation peut être utile lorsque vous avez terminé de tester les résumés ou si les crons phpBB n\'ont pas fonctionné depuis longtemps.',
	'DIGESTS_RUN_TEST'										=> 'Lancer le générateur de courriels',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL'							=> 'Effacer le répertoire cache/phpbbservices/digests',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_ERROR'					=> 'Impossible de supprimer tous les fichiers dans le répertoire cache/phpbbservices/digests. Cela est peut-être dû à des problèmes de permissions. Les permissions de fichier du répertoire doivent être réglées sur écriture publique (777 sur les systèmes Unix).',
	'DIGESTS_RUN_TEST_CLEAR_SPOOL_EXPLAIN'					=> 'Si vous choisissez Oui, tous les fichiers dans le répertoire cache/phpbbservices/digests seront effacés. C\'est une bonne chose à faire pour s\'assurer que les précédents résumés ne soient plus accessibles. Cette action est réalisée avant que tout nouveau résumé ne soit écrit dans ce répertoire.',
	'DIGESTS_RUN_TEST_DAY'									=> 'Simulation du jour dans le mois',
	'DIGESTS_RUN_TEST_DAY_EXPLAIN'							=> 'Saisissez un nombre entier entre 1 et 31. Si l\'année, le mois et le jour sont dans le futur aucun résumé ne sera généré. N\'utilisez pas un jour qui logiquement n\'appartient pas au mois sélectionné plus  haut, comme le 31 Février.',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS'						=> 'Adresse électronique de test',
	'DIGESTS_RUN_TEST_EMAIL_ADDRESS_EXPLAIN'				=> 'Si une adresse électronique est indiquée dans ce champ, tous les résumés seront envoyés à cette adresse à l\'heure spécifiée au lieu de l\'adresse électronique de contact du forum.',
	'DIGESTS_RUN_TEST_HOUR'									=> 'Simulation de l\'heure',
	'DIGESTS_RUN_TEST_HOUR_EXPLAIN'							=> 'Les résumés seront envoyés à l\'heure spécifiée. L\'heure est basée sur le fuseau horaire de votre forum (UTC ' . $helper->make_tz_offset($config['board_timezone'], true) . '). Si elle est dans le futur aucun résumé ne sera généré. Saisissez un nombre entier de 0 à 23.',
	'DIGESTS_RUN_TEST_MONTH'								=> 'Simulation du mois',
	'DIGESTS_RUN_TEST_MONTH_EXPLAIN'						=> 'Saisissez un nombre entier de 1 à 12. Normalement la valeur doit être réglée avec celle du mois courant. Si l\'année et le mois sont dans le futur aucun résumé ne sera généré.',
	'DIGESTS_RUN_TEST_OPTIONS'								=> 'Exécuter les options de date et d\'heure.',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN'						=> 'Envoyer tous les résumés à l\'adresse électronique spécifiée',
	'DIGESTS_RUN_TEST_SEND_TO_ADMIN_EXPLAIN'				=> 'Si vous émettez des résumés par courriel pendant une phase de test, tous les résumés seront envoyés à l\'adresse spécifiée dans le champ ci-dessous. Si vous choisissez Oui alors qu\'aucune adresse n\'a été spécifiée, l\'adresse électronique de contact du forum (' . $config['board_email']. ') sera utilisée. <em>Attention</em> : Certains serveurs de courriels pourraient interpréter ce grand volume de mails envoyés sur une brève période de temps depuis une même adresse comme étant du spam ou ayant un contenu inaproprié. À activer avec précaution. Si vous choisissez Non, les résumés seront aussi envoyés aux abonnés, ce qui pourrait les perturber.',
	'DIGESTS_RUN_TEST_SPOOL'								=> 'Écrire les résultats dans des fichiers au lieu de les envoyer par courriels',
	'DIGESTS_RUN_TEST_SPOOL_EXPLAIN'						=> 'Évite que les résumés ne soient envoyés par courriels. À la place chaque résumé est écrit dans un fichier du répertoire cache/phpbbservices/digests dont le nom à le format suivant : nom d\'utilisateur-aaaa-mm-jj-hh.html ou nom d\'utilisateur-aaaa-mm-jj-hh.txt. (les fichiers avec un suffixe .txt sont des résumés textuel uniquement.) aaaa indique l\'année, mm le mois, jj le jour dans le mois et hh l\'heure. La Date et l\'heure dans le nom du fichier sont basés sur le temps coordonné universel (UTC). Si vous simulez un autre jour ou une autre heure pour envoyer les résumés à l\'aide des champs ci-dessous, les noms de fichier utiliseront cette date et cette heure. Ces résumés peuvent être visualisés si vous indiquez le bon URL.',
	'DIGESTS_RUN_TEST_TIME_USE'								=> 'Simuler le mois et l\'heure, ou le jour de la semaine et l\'heure d\'envoi des résumés',
	'DIGESTS_RUN_TEST_TIME_USE_EXPLAIN'						=> 'Si le réglage est Oui, les éléments de simulation ci-dessous seront utilisés pour envoyer un résumé, comme s\'il s\'agissait du mois, de l\'heure et du jour de la semaine spécifié. Si Non, la date et l\'heure courante seront utilisées.',
	'DIGESTS_RUN_TEST_YEAR'									=> 'Simulation de l\'année',
	'DIGESTS_RUN_TEST_YEAR_EXPLAIN'							=> 'Les années de 2000 à 2030 sont autorisées. Normalement le réglage doit correspondre à l\'année courante. Si l\'année est dans le futur, aucun résumé ne sera généré.',
	'DIGESTS_SEARCH_FOR_MEMBER'								=> 'Rechercher des membres',
	'DIGESTS_SEARCH_FOR_MEMBER_EXPLAIN'						=> 'Saisissez tout ou partie du nom du membre à rechercher puis pressez Actualiser. Laissez vide pour voir tous les membres. Les recherches ne sont pas sensibles à la casse.',
	'DIGESTS_SELECT_FORUMS_ADMIN_EXPLAIN'					=> 'Seuls les forums que l\'utilisateur est autorisé à lire sont affichés dans la liste. Si vous souhaitez donner aux utilisateurs des accès à d\'autres forums non affichés ici, étendez leur permission d\'utilisateur du forum ou de groupe. Notez que vous pouvez aussi ajuster les forums qui apparaissent dans leur résumé. Si leur type de résumé est "Aucun" aucun résumé ne leur sera envoyé.',
	'DIGESTS_SHOW'											=> 'Afficher',
	'DIGESTS_SHOW_EMAIL'									=> 'Afficher l\'adresse électronique dans le journal',
	'DIGESTS_SHOW_EMAIL_EXPLAIN'							=> 'Si cette option est activée, l\'adresse électronique de l\'abonné est rajoutée dans les entrées du journal d\'administration avec son nom d\'utilisateur. Utile en cas de problème avec le générateur de courriels.',
	'DIGESTS_SHOW_FORUM_PATH'								=> 'Afficher le chemin d\'accès du forum dans le résumé',
	'DIGESTS_SHOW_FORUM_PATH_EXPLAIN'						=> 'Lorsque cette option est activée, les noms des catégories et des forums dans le lequel se trouve un forum vont être affichés. Par exemple: "Catégorie 1 :: Forum 1 :: Catégorie A :: Forum B", en y incluant toute la hiérarchie dans laquelle se trouve votre forum. Sinon, seul le nom du forum sera affiché, comme "Forum B" dans l\'exemple précédent.',
	'DIGESTS_SORT_ORDER'									=> 'Ordre de classement',
	'DIGESTS_STOPPED_SUBSCRIBING'							=> 'Les désabonnés',
	'DIGESTS_STRIP_TAGS'									=> 'Balises HTML à supprimer dans le résumé',
	'DIGESTS_STRIP_TAGS_EXPLAIN'							=> 'La présence de certaines balises HTML dans le résumé peut entraîner des problèmes. Les serveurs de courriels peuvent rejeter des courriels ou blacklister les émetteurs lorsque le résumé comporte certaines balises HTML, ou encore placer le résumé dans le dossier des spam. Indiquez le nom des balises à exclure (sans les caractères &lt; ou &gt;) et en les séparant par des virgules. Par exemple, pour supprimer les balises vidéo et iframe, saisissez "video,iframe" dans ce champ. Évitez de saisir le nom de balises usuelles telles que h1, p et div dans la mesure où elles sont nécessaires à la mise en forme du résumé.',
	'DIGESTS_SUBSCRIBE_EDITED'								=> 'Les réglages d\'abonnement de votre résumé ont été édités',
	'DIGESTS_SUBSCRIBE_SUBJECT'								=> 'Vous avez été abonné pour recevoir des résumés par courriel',
	'DIGESTS_SUBSCRIBE_ALL'									=> 'Abonner tout le monde',
	'DIGESTS_SUBSCRIBE_ALL_EXPLAIN'							=> 'Si vous choisissez Non, tout les utilisateurs seront désabonnés.',
	'DIGESTS_SUBSCRIBE_LITERAL'								=> 'S\'abonner',
	'DIGESTS_SUBSCRIBED'									=> 'Les abonnés',
	'DIGESTS_SUBSCRIBERS' 									=> 'Abonnés',	
	'DIGESTS_UNSUBSCRIBE'									=> 'Désabonner',
	'DIGESTS_UNSUBSCRIBE_SUBJECT'							=> 'Vous avez été désabonnés de la réception par courriels du résumé',
	'DIGESTS_UNSUBSCRIBED'									=> 'Les non abonnés',
	'DIGESTS_USER_DIGESTS_CHECK_ALL_FORUMS'					=> 'Envoyer tous les forums dans le résumé',
	'DIGESTS_USER_DIGESTS_PM_MARK_READ'						=> 'Marquer les messages privés comme lus lorsqu\'ils apparaissent dans le résumé',
	'DIGESTS_USER_DIGESTS_REGISTRATION'						=> 'Autoriser l\'utlisateur à s\'abonner au résumé au moment de l\'enregistrement',
	'DIGESTS_USERS_PER_PAGE'								=> 'Nombre d\'abonnés par page',
	'DIGESTS_USERS_PER_PAGE_EXPLAIN'						=> 'Permet de contrôler le nombre de lignes d\'abonnés dans la liste affichée lorsque la rubrique "Éditer les abonnés" est sélectionnée.',
	'DIGESTS_WEEKLY_DIGESTS_DAY'							=> 'Jour d\'envoi des résumés hebdomadaires',
	'DIGESTS_WEEKLY_DIGESTS_DAY_EXPLAIN'					=> 'Le jour de la semaine se base sur l\'UTC (Temps Universel Coordonné). En fonction de l\'heure souhaitée, les abonnés de l\'hémisphère occidental peuvent recevoir leur résumé hebdomadaire un jour plus tôt que prévu.',
	'DIGESTS_WEEKLY_ONLY'									=> 'Résumés hebdomadaires seulement',
	'DIGESTS_WITH_SELECTED'									=> 'Action sur les éléments sélectionnés',

));