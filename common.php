<?php
/**
*
* @package phpBB Extension - Digests
* @copyright (c) 2021 Mark D. Hamill (mark@phpbbservices.com)
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

// NOTE À L'ATTENTION DES DÉVELOPPEURS
//
// Tous les fichiers de langue doivent utiliser l'encodage UTF-8 et les fichiers ne doivent pas contenir de BOM.
//
// Les caractères de remplacement peuvent désormais contenir des informations sur les commandes, par exemple au lieu de
// 'Page %s de %s ", vous pouvez (et devez) écrire " Page %1$s de %2$s ", cela permet
// aux traducteurs de réorganiser la sortie des données tout en s'assurant qu'elles restent correctes
//
// Vous n'en avez pas besoin lorsque des caractères de remplacement uniques sont utilisés, par exemple, "Message %d" est suffisant.
// De même, lorsqu'une chaîne de caractères ne contient que deux caractères de remplacement qui sont utilisés pour encadrer un texte
// dans une url, il n'est pas nécessaire de spécifier un ordre, par exemple "Cliquez sur %ICI%s" est suffisant
//
// Quelques caractères que vous pouvez copier/coller :
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'PLURAL_RULE'						=> 2,
	
	'DIGESTS_ALL_FORUMS'				=> 'Tous',
	'DIGESTS_AM'						=> ' AM', // non utilisé si les formats date/heure ne pemettent pas AM et PM
	'DIGESTS_AUTHOR'					=> 'Auteur',
	'DIGESTS_BAD_SEND_HOUR'				=> 'L’heure d’envoi du résumé de l’utilisateur %1$s est invalide. Il est %2$d. La valeur doit être >= 0 et < 24.',
	'DIGESTS_BLOCK_IMAGES'				=> 'Bloquer les images',
	'DIGESTS_BLOCK_IMAGES_EXPLAIN'		=> 'Empêche l’affichage des images dans vos résumés, y compris les smileys et les images jointes aux messages ou aux messages privés. Utile pour les connexions lentes, pour limiter la bande passante si cela est nécessaire ou pour les forums actifs utilisant de nombreuses images. Les résumés au format texte ne comportent jamais d’images.',
	'DIGESTS_BOARD_LIMIT'				=> '%d (limite du Forum)',
	'DIGESTS_BY'						=> 'Par',
	'DIGESTS_CLOSED_QUOTE'				=> '”',
	'DIGESTS_CLOSED_QUOTE_TEXT'			=> '"',
	'DIGESTS_COUNT_LIMIT'				=> 'Nombre de messages maximum dans le résumé',
	'DIGESTS_COUNT_LIMIT_EXPLAIN'		=> 'Saisissez un nombre supérieur à zéro si vous souhaitez limiter le nombre de messages dans le résumé.',
	'DIGESTS_DAILY'						=> 'Journalier',
	'DIGESTS_DATE'						=> 'Date',
	'DIGESTS_DELIMITER'					=> ' &#8249; ', // Utilisé pour faciliter l'affichage de la hiérarchie des noms de forum depuis l'index jusqu'en bas. Ne devrait pas changer dans les traductions linguistiques, sauf si un caractère différent est utilisé dans le fil d'Ariane.
	'DIGESTS_DISABLED_MESSAGE'			=> 'Pour activer les champs, sélectionnez Réglages généraux et sélectionnez le type de résumé',
		'DIGESTS_DISCLAIMER_HTML'			=> '<p><a href="%5$s">Désabonnement en un clic</a></p><p>Vous pouvez aussi modifier ou supprimer votre abonnement aux forums depuis le <a href="%1$sucp.%3$s">Panneau de contrôle de l’utilisateur</a>.</p><p>Si vous avez des questions ou si vous souhaitez nous contacter veuillez adresser votre courriel au <a href="mailto:%4$s?subject=Digests">webmaster des forums de %2$s</a>.</p>',
	'DIGESTS_DISCLAIMER_TEXT'			=> 'Désabonnement en un clic : %5$s
	
Vous pouvez aussi modifier ou supprimer votre abonnement aux forums depuis le Panneau de contrôle de l’utilisateur.
	
Si vous avez des questions ou si vous souhaitez nous contacter veuillez adresser votre courriel au webmaster des forums : %4$s.',
	'DIGESTS_EXPLANATION'				=> 'Les résumés qui sont envoyés périodiquement sont constitués à partir des messages réalisés sur le forum. Les résumés peuvent être envoyés à une récurence journalière, hebdomadaire ou mensuelle et à une heure que vous choisisisez. Vous pouvez spécifier les forums dont les messages vous intéressent plus particulièrement, ou par défaut, vous pouvez sélectionner choisir de recevoir tous les messages de tous les forums. Vous pouvez annuler votre abonnement à tout moment en revenant sur cette page. Nombreux sont les utilisateurs qui trouvent ces résumés très utiles. Nous vous encourageons à faire un essai !',
	'DIGESTS_FILTER_ERROR'				=> 'Le générateur de courriels a été appelé avec un user_digest_filter_type = %s invalide',
	'DIGESTS_FILTER_FOES'				=> 'Retirer les messages émis par les Ignorés dans le résumé',
	'DIGESTS_FILTER_TYPE'				=> 'Type de messages à afficher dans le résumé',
	'DIGESTS_FOREIGN_LINK_REMOVED'		=> '[ Lien étranger supprimé. Cliquez sur le lien du message ou du sujet pour voir ce lien. ]',
	'DIGESTS_FOREIGN_LINK_REMOVED_TEXT'	=> '[ Lien étranger supprimé. Lisez le sujet du forum pour voir ce lien. ]',
	'DIGESTS_FORMAT_HTML'				=> 'Stylé',
	'DIGESTS_FORMAT_HTML_EXPLAIN'		=> 'Les styles sont pris en compte si votre logiciel de courrier électronique l’autorise.',
	'DIGESTS_FORMAT_HTML_CLASSIC'		=> 'Stylé avec présentation en tableaux',
	'DIGESTS_FORMAT_HTML_CLASSIC_EXPLAIN'	=> 'Similaire à stylé, excepté que les sujets des messages et les messages privés sont présentés dans des tableaux',
	'DIGESTS_FORMAT_PLAIN'				=> 'Stylé ordinaire',
	'DIGESTS_FORMAT_PLAIN_EXPLAIN'		=> 'Stylé sans couleur ni police',
	'DIGESTS_FORMAT_PLAIN_CLASSIC'		=> 'Stylé ordinaire avec présentation en tableaux',
	'DIGESTS_FORMAT_PLAIN_CLASSIC_EXPLAIN'	=> 'Similaire à Stylé ordinaire, excepté que les sujets des messages et les messages privés sont présentés dans des tableaux',
	'DIGESTS_FORMAT_STYLING'			=> 'Style du résumé',
	'DIGESTS_FORMAT_STYLING_EXPLAIN'	=> 'Veuillez noter que le rendu actuel du style dépend des capacités de votre logiciel de courrier électronique. Déplacez votre curseur au-dessus des différents types de style pour en savoir plus à leur sujet.',
	'DIGESTS_FORMAT_TEXT'				=> 'Texte',
	'DIGESTS_FORMAT_TEXT_EXPLAIN'		=> 'Aucun style n’apparaîtra dans le résumé. Seul du texte ordinaire sera affiché, probablement dans une taille proportionnelle.',
	'DIGESTS_FORUMS_WANTED'				=> 'Forums souhaités',
	'DIGESTS_FREQUENCY'					=> 'Fréquence d’envoi du résumé',
	'DIGESTS_FREQUENCY_EXPLAIN'			=> 'Les résumés hebdomadaires sont envoyés le %s. Les résumés mensuels sont envoyés le premier du mois. Le temps universel coordonné (UTC) est utilisé pour déterminer le jour de la semaine.',
	'DIGESTS_FREQUENCY_SHORT'			=> 'Type de résumé',
	'DIGESTS_HOURS_ABBREVIATION' 		=> ' h',	// cf. : http://www.scienceeditingexperts.com/which-is-the-correct-abbreviation-for-hours-2h-2-h-2hs-2-hs-2hrs-or-2-hrs, DIGESTS_AM and DIGESTS_PM sont sinon utilisés si spécifié dans user_dateformat
	'DIGESTS_INSTALL_REQUIREMENTS'		=> 'Votre version de PHP doit être &gt ; 3.3.0 et &lt ; 4.0 pour installer cette extension. Veuillez résoudre ce problème, puis réessayer d’activer l’extension.',
	'DIGESTS_INTRODUCTION' 				=> 'Voici le résumé des derniers messages publiés sur les forums de %s. <em>Ne répondez pas</em> à ce courriel pour répondre aux sujets, messages ou messages privés. Mais <em>veuillez vous rendre sur le forum</em> pour rejoindre la discussion ! (En cas de problème d’affichage du résumé, assurez-vous de bien avoir chargé tout le contenu distant)',
	'DIGESTS_JUMP_TO_MSG'				=> 'Id Msg',
	'DIGESTS_JUMP_TO_POST'				=> 'Id Post',
	'DIGESTS_LASTVISIT_RESET'			=> 'Réinitialiser la date de ma dernière visite lorsque je m’envoie un résumé',
	'DIGESTS_LASTVISIT_RESET_EXPLAIN'	=> 'Lorsque l’option est activée, la date et l’heure de création de votre résumé sera utilisée pour définir votre date de dernière visite. Les notifications relatives aux sujets à l’heure à laquelle le résumé a été créé seront également marqués comme lus.',
	'DIGESTS_LINK'						=> 'Lien',
	'DIGESTS_MAILED_TOOLTIP'			=> 'Cliquez pour voir le détail des résumés envoyés',
	'DIGESTS_MARK_READ'					=> 'Marquer comme lu lorsqu’ils apparaissent dans le résumé',
	'DIGESTS_MAX_DISPLAY_WORDS'			=> 'Nombre maximal de mots à afficher dans un post',
	'DIGESTS_MAX_DISPLAY_WORDS_EXPLAIN'	=> 'Afin d’assurer un rendu cohérent, si un message doit être tronqué le code HTML sera supprimé du post. Saisissez 0 pour autoriser l’affichage intégral du texte du post. Si l’option “N’afficher aucun texte de posts” est cochée, ce champ sera ignoré et aucun texte de message n’apparaîtra dans le résumé.',
	'DIGESTS_MAX_SIZE'					=> 'Nombre maximal de mots à afficher dans un post',
	'DIGESTS_MAX_WORDS_NOTIFIER'		=> '... ',
	'DIGESTS_MIN_SIZE'					=> 'Nombre minimal de mots dans un message pour que celui-ci apparaisse dans le résumé',
	'DIGESTS_MIN_SIZE_EXPLAIN'			=> 'Si vous laissez ce champ avec la valeur 0, tous les posts, quel que soit le nombre de mots qu’ils contiennent, seront inclus dans le résumé.',
	'DIGESTS_MIN_POPULARITY_VALUE'		=> 'Valeur minimum de popularité',
	'DIGESTS_MIN_POPULARITY_VALUE_EXPLAIN'		=> 'Un sujet doit avoir au moins ce nombre de messages par jour sur la période que vous avez sélectionné pour l’envoi de votre résumé (journalier, hebdomadaire ou mensuel) pour apparaître dans votre résumé. Vous ne pouvez pas indiquer une valeur inférieure à celle définie par l’administrateur du forum.',
	'DIGESTS_MONTHLY'					=> 'Mensuel',
	'DIGESTS_NEW'						=> 'Nouveau',
	'DIGESTS_NEW_POSTS_ONLY'			=> 'N’afficher que les nouveaux messages dans le résumé',
	'DIGESTS_NEW_POSTS_ONLY_EXPLAIN'	=> 'Cette option filtre tous les messages qui ont été postés avant la date et l’heure de votre dernière visite sur ce forum. Si vous visitez le forum fréquemment et que vous lisez la plupart des posts, cela évitera l’affichage de messages redondants dans votre résumé. Vous risquez cependant de manquer certains messages dans des forums que vous n’avez pas lu.',
	'DIGESTS_NO_BOOKMARKED_POSTS'		=> 'Il n’y a pas de nouveaux messages marqués.',
	'DIGESTS_NO_CONSTRAINT'				=> 'Pas de limitation',
	'DIGESTS_NO_DETAILS_ERROR'			=> 'La base de données est peut-être incohérente. Aucun enregistrement de résumé détaillé n’a été trouvé pour cette date et cette heure.',
	'DIGESTS_NO_FORUMS_AVAILABLE'		=> 'Vous nl’avez pas accès aux forums',
	'DIGESTS_NO_FORUMS_CHECKED' 		=> 'Au moins un forum doit être coché',
	'DIGESTS_NO_LIMIT'					=> 'Pas de limitation',
	'DIGESTS_NO_POSTS'					=> 'Il n’y a pas de nouveaux posts.',
	'DIGESTS_NO_POST_TEXT'				=> 'N’afficher aucun texte de posts',
	'DIGESTS_NO_PRIVATE_MESSAGES'		=> 'Vous n’avez pas de nouveaux messages privés  ou de messages privés non lus.',
	'DIGESTS_NO_TIMEZONE'				=> 'Vous devez spécifier <a href="%s">votre fuseau horaire/a> dans votre profil avant d’envoyer des résumés.',
	'DIGESTS_NONE'						=> 'Aucun (Non abonné)',
	'DIGESTS_ON'						=> 'le',
	'DIGESTS_OPEN_QUOTE'				=> '“',
	'DIGESTS_OPEN_QUOTE_TEXT'			=> '"',
	'DIGESTS_PM'						=> ' PM', // non utilisé si les formats date/heure ne pemettent pas AM et PM
	'DIGESTS_PM_SUBJECT'				=> 'Sujet du message privé',
	'DIGESTS_POST_IMAGE_TEXT'			=> '<br>(Cliquez sur l’image pour l’afficher en taille réelle.)',
	'DIGESTS_POST_TEXT'					=> 'Texte du post', 
	'DIGESTS_POST_TIME'					=> 'Date', 
	'DIGESTS_POST_SIGNATURE_DELIMITER'	=> '<br>____________________<br>', // Placez ici du code HTML que vous souhaitez utiliser pour délimiter la fin d’un message du début de la ligne de signature (assurez-vous qu'il s'agisse de code HTML valide)
	'DIGESTS_POSTED_TO_THE_TOPIC'		=> 'posté sur le sujet',
	'DIGESTS_POSTS_TYPE_ANY'			=> 'Tous les posts',
	'DIGESTS_POSTS_TYPE_FIRST'			=> 'Le premier message des sujets',
	'DIGESTS_POWERED_BY'				=> 'phpBB Services',
	'DIGESTS_POWERED_BY_TEXT'			=> 'Extension Digests pour phpBB créé par',
	'DIGESTS_PRIVATE_MESSAGES_IN_DIGEST'	=> 'Ajouter mes messages privés non lus dans le résumé',
	'DIGESTS_PUBLISH_DATE'				=> 'Ce résumé a spécialement été généré pour %1$s le %2$s',
	'DIGESTS_REGISTER'					=> 'Recevoir des résumés ',
	'DIGESTS_REGISTER_EXPLAIN'			=> 'Vous pourrez modifier les réglages du résumé envoyé par courriel ou encore vous désabonner après avoir terminé l’enregistrement. Les valeurs par défaut du forum seront utilisées.',
	'DIGESTS_REMOVE_YOURS'				=> 'Retirer mes messages dans le résumé',
	'DIGESTS_REPLY'						=> 'Réponse',
	'DIGESTS_ROBOT'						=> 'Robot',
	'DIGESTS_SALUTATION' 				=> 'Bonjour',
	'DIGESTS_SEE_POPULAR_TOPICS_ONLY'	=> 'N’afficher que les sujets populaires',
	'DIGESTS_SELECT_FORUMS'				=> 'Inclure les messages des forums suivants',
	'DIGESTS_SELECT_FORUMS_EXPLAIN'		=> 'Veuillez noter que les catégories et les forums affichés sont uniquement ceux que vous êtes autorisés à lire. Le choix des forums est désactivé lorsque vous sélectionnez “Les sujets cochés seulement”. Les forums dont les accès sont protégés par mot de passe ne sont pas affichés et ne peuvent pas être sélectionnés. Si tous le forums sont décochés et qu’aucun sujet n’est coché, vous devez alors sélectionner au moins un forum afin de pouvoir soumettre correctement votre paramétrage.<br><br>Les forums dont les noms sont affichés en caractères gras (lorsqu’il y en a) sont des forums que l’administrateur force à afficher dans tous les résumés (autres que les seuls sujets cochés). Vous ne pouvez pas déselectionner ces forums. Les forums dont les noms sont barrés ne sont pas autorisés, par l’administrateur, à être affichés dans un résumé (autres que les seuls sujets cochés) et sont de ce fait décochés.',
	'DIGESTS_SEND_HOUR' 				=> 'Heure d’envoi',
	'DIGESTS_SEND_HOUR_EXPLAIN'			=> 'L’heure de réception du courriel contenant votre résumé est déterminée à partir du fuseau horaire que vous avez défini dans l’onglet Préférences du forum.',
	'DIGESTS_SEND_ON_NO_POSTS'	 		=> 'Envoyer un résumé s’il n’y a pas de nouveaux posts',
	'DIGESTS_SENDER'	 				=> 'Expéditeur',
	'DIGESTS_SENT_AT'					=> ' a reçu un résumé à ',
	'DIGESTS_SENT_TO'					=> 'envoyé à',
	'DIGESTS_SENT_YOU_A_MESSAGE'		=> 'vous envoie un message privé ayant pour objet',
	'DIGESTS_SHOW_ATTACHMENTS' 			=> 'Afficher les pièces jointes',
	'DIGESTS_SHOW_ATTACHMENTS_EXPLAIN'	=> 'Si l’option est activée, les images en pièces jointes apparaîtront dans votre résumé en bas du message ou du message privé. Les pièces jointes qui ne sont pas des images apparaîtront sous la forme de liens (résumés stylés seulement). La balise BBCode [img] n’est pas impactée par ce réglage.',
	'DIGESTS_SHOW_NEW_POSTS_ONLY' 		=> 'Afficher les nouveaux messages seulement',
	'DIGESTS_SHOW_PMS' 					=> 'Afficher mes messages privés',
	'DIGESTS_SIZE_ERROR'				=> 'Ce champ est un champ obligatoire. Vous devez saisir une valeur positive entière, inférieure ou égale à la valeur maximum autorisée par l’administrateur du Forum. La valeur maximale autorisée est %u. Si cette valeur est à zéro, il n’y a pas de limitation.',
	'DIGESTS_SIZE_ERROR_MIN'			=> 'Vous devez saisir une valeur entière ou laisser le champ vide. Si cette valeur est à zéro, il n’y a pas de limitation.',
	'DIGESTS_SKIP'						=> 'Passer au contenu',
	'DIGESTS_SKIPPED_AT'				=> ' n’a pas reçu de résumé à ',
	'DIGESTS_SKIPPED_TOOLTIP'			=> 'Cliquez pour voir le détail des résumés ignorés',
	'DIGESTS_SORT_BY'					=> 'Ordre de classement des posts',
	'DIGESTS_SORT_BY_EXPLAIN'			=> 'Tous les résumés sont classés par catégories puis par forums, tels qu’ils sont affichés sur l’index principal. Les options de classement s’appliquent à l’ordre d’affichage des messages dans les forums et les sujets. Le classement “Ordre traditionnel” est utilisé par défaut depuis phpBB 2. Il présente d’abord le sujet dans lequel le dernier message a été publié (ordre descendant) puis par ordre chronologique dans le sujet.',
	'DIGESTS_SORT_FORUM_TOPIC'			=> 'Ordre traditionnel',
	'DIGESTS_SORT_FORUM_TOPIC_DESC'		=> 'Ordre traditionnel, Dernier message en premier',
	'DIGESTS_SORT_POST_DATE'			=> 'Du plus ancien au plus récent',
	'DIGESTS_SORT_POST_DATE_DESC'		=> 'Du plus récent au plus ancien',
	'DIGESTS_SORT_USER_ORDER'			=> 'Selon les préférences d’affichage de mon forum',
	'DIGESTS_SUBJECT_TITLE'				=> 'Résumé %2$s de %1$s',
	'DIGESTS_TAG_REPLACED'				=> '<strong>Note : le contenu a été supprimé pour des raisons de sécurité. Cliquez sur le lien du message ou du sujet pour visualiser l’intégralité du contenu du post.</strong>',
	'DIGESTS_TITLE'						=> 'Résumés',
	'DIGESTS_TRANSLATED_BY'				=> 'Traduit par',
	'DIGESTS_TRANSLATOR_NAME'			=> 'Philippe Bonnaure - www.macvf.fr',	// Leave null string to suppress translator name
	'DIGESTS_TRANSLATOR_CONTACT'		=> 'https://www.macvf.fr',	// Leave null string to suppress contact info, if used use: mailto:name@emailaddress.com or a URL if you have a website.
	'DIGESTS_TOC'						=> 'Sommaire',
	'DIGESTS_TOC_EXPLAIN'				=> 'Si le forum est très actif, vous pouvez inclure un sommaire dans votre résumé. Dans les résumés stylés, le sommaire comporte des liens qui permettent d’aller à un message en particulier ou à un message privé dans le résumé.',
	'DIGESTS_UNKNOWN'					=> 'Inconnu',
	'DIGESTS_UNREAD'					=> 'Non lu',
	'DIGESTS_UNSUBSCRIBE_FAILURE'		=> 'Désolé, mais nous n’avons pas pu vous désabonner de la liste d’envoi des résumés.',
	'DIGESTS_UNSUBSCRIBE_SUCCESS'		=> 'Vous avez été désabonné de la liste d’envoi des résumés.',
	'DIGESTS_UPDATED'					=> 'Les réglages de votre résumé ont été enregistrés',
	'DIGESTS_USE_BOOKMARKS'				=> 'Les sujets cochés seulement',
	'DIGESTS_WEEKDAY' 					=> 'Dimanche,Lundi,Mardi,Mercredi,Jeudi,Vendredi,Samedi',
	'DIGESTS_WEEKLY'					=> 'Hebdomadaire',
	'DIGESTS_YOU_HAVE_PRIVATE_MESSAGES' => 'Vous avez de nouveaux messages privés',
	
	'UCP_DIGESTS'								=> 'Résumés',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA'			=> 'Critères additionnels',
	'UCP_DIGESTS_ADDITIONAL_CRITERIA_OPTIONS'	=> 'Options des critères additionnels',
	'UCP_DIGESTS_BASICS'						=> 'Réglages généraux',
	'UCP_DIGESTS_BASICS_OPTIONS'				=> 'Options des réglages généraux',
	'UCP_DIGESTS_FORUMS_SELECTION'				=> 'Sélection des forums',
	'UCP_DIGESTS_FORUMS_SELECTION_OPTIONS'		=> 'Options de sélection des forums',
	'UCP_DIGESTS_MODE_ERROR'					=> 'Digests a été appelé avec un mode de %s invalide',
	'UCP_DIGESTS_POST_FILTERS'					=> 'Filtrage des posts',
	'UCP_DIGESTS_POST_FILTERS_OPTIONS'			=> 'Options de filtrage des posts',
));
