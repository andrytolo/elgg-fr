<?php

	/**
	 * Elgg contact plugin
	 * This plugin allows to send message to custom email you specify at module configuration area
	 * 
	 * @package ElggContact
	 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU Public License version 2
	 * @author Curverider Ltd <info@elgg.com>
	 * @author Tim Timalsina <info@timalsina.com>
     * @translator Ronnel JÌ©rÌ©my <jeremy.ronnel@elbee.fr>
	 * @copyright Curverider Ltd 2008
	 * @copyright TIMALSINA 2008
	 * @link http://elgg.com/
	 */
		
		$french = array(
	
		/**
		 * Plugin button, menu title, page title, default email
		 */
	
			'contact:plugin:name' => "Contact",
			'contact:page:title' => "Contactez nous",			
			'contact:button:send' => "Envoyer",
			'contact:default:email' => "Adresse email de contact par défaut",
			'contact:setting:captcha' => "Permettez Captcha? <span style=\"color: red;\">(Ne permettez pas cette option à moins que vous ayez l'embrochable de captcha installé!)</span>",
			'contact:setting:htmlemail' => "Voulez-vous qu'envoyiez-vous envoyé comme HTML ou Plaintext?",
			'contact:setting:toolsmenu' => "Vous aiment la page de contact pour apparaître dans le menu d'outils?",
			
		/**
		 * Input Form elements
		 */
			
			'contact:level:name' => "Votre nom",	
			'contact:level:email' => "Adresse mail",
			'contact:level:subject' => "Sujet",
			'contact:level:message' => "Message",
			'contact:option:feedback' => "Retour",
			'contact:option:bugreport' => "Soumettre un bug",
			'contact:option:press' => "Presser",
			'contact:option:general' => "Général",			
			
         
		/**
		 * Plugin action feedback
		 */
	
			'contact:send:successful' => "Votre message a bien été envoyé. Vous aurez un retour de notre part sous 24 heures. Merci.",
			'contact:send:unsuccessful' => "Une erreur est survenue lors de l'envoi de votre message, vérifiez que tous les champs sont renseignés.",
			'contact:name:invalid' => "Nom invalide, le nom doit être composé de caractères alphanumériques uniquement.",
			'contact:email:invalid' => "Adresse mail invalide. Veuillez renseigner une adresse email valide.",
			'contact:message:invalid' => "Le message ne peut pas contenir de caractères spéciaux. Veuillez renseigner le message sous forme de texte uniquement.",
	);					
	add_translation("fr",$french);
?>