<?php
ini_set('display_errors', true);
require 'PHPMailer/PHPMailerAutoload.php';
if (isset($_POST['send'])) {

	$mail = new PHPMailer();
	$mail->CharSet = 'UTF-8';
	$mail->Host = 'ssl0.ovh.net';
	$mail->Port = 465;
	$mail->SMTPAuth = true;
	$mail->Username = 'taha.s@itwise.pro';
	$mail->Password = 'Sta5f8aYanfPM';
	$mail->setfrom('taha.s@itwise.pro', 'Mr. Taha');
	$mail->addAddress('shimitaha3@gmail.com', 'Itwise');
	$mail->Body = "
            Email: {$_POST['your-email']}
            Name: {$_POST['your-name']}
            Message: {$_POST['your-message']}
        ";
	if (!$mail->send()) {
		$msg = 'Sorry, something went wrong. Please try again later.';
	} else {
		$msg = 'Message sent! Thanks for contacting us.';
	}
}else{
	$msg = "";
}
echo "<script>if ( window.history.replaceState ) {window.history.replaceState( null, null, window.location.href );}</script>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<title>VOXALO</title>
	<style type="text/css" media="screen">
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td a.ui-state-active:hover,
		body #booked-profile-page input[type=submit].button-primary:hover,
		body .booked-list-view button.button:hover,
		body .booked-list-view input[type=submit].button-primary:hover,
		body table.booked-calendar input[type=submit].button-primary:hover,
		body .booked-modal input[type=submit].button-primary:hover,
		body table.booked-calendar th,
		body table.booked-calendar thead,
		body table.booked-calendar thead th,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
		body #booked-profile-page .booked-profile-header,
		body #booked-profile-page .booked-tabs li.active a,
		body #booked-profile-page .booked-tabs li.active a:hover,
		body #booked-profile-page .appt-block .google-cal-button>a:hover,
		#ui-datepicker-div.booked_custom_date_picker .ui-datepicker-header {
			background: #c4f2d4 !important;
		}

		body #booked-profile-page input[type=submit].button-primary:hover,
		body table.booked-calendar input[type=submit].button-primary:hover,
		body .booked-list-view button.button:hover,
		body .booked-list-view input[type=submit].button-primary:hover,
		body .booked-modal input[type=submit].button-primary:hover,
		body table.booked-calendar th,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button:hover,
		body #booked-profile-page .booked-profile-header,
		body #booked-profile-page .appt-block .google-cal-button>a:hover {
			border-color: #c4f2d4 !important;
		}

		body table.booked-calendar tr.days,
		body table.booked-calendar tr.days th,
		body .booked-calendarSwitcher.calendar,
		body #booked-profile-page .booked-tabs,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar thead th {
			background: #039146 !important;
		}

		body table.booked-calendar tr.days th,
		body #booked-profile-page .booked-tabs {
			border-color: #039146 !important;
		}

		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a,
		#ui-datepicker-div.booked_custom_date_picker table.ui-datepicker-calendar tbody td.ui-datepicker-today a:hover,
		body #booked-profile-page input[type=submit].button-primary,
		body table.booked-calendar input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-modal input[type=submit].button-primary,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
		body #booked-profile-page .booked-profile-appt-list .appt-block.approved .status-block,
		body #booked-profile-page .appt-block .google-cal-button>a,
		body .booked-modal p.booked-title-bar,
		body table.booked-calendar td:hover .date span,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover,
		.booked-ms-modal .booked-book-appt

		/* Multi-Slot Booking */
			{
			background: #56c477;
		}

		body #booked-profile-page input[type=submit].button-primary,
		body table.booked-calendar input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-list-view button.button,
		body .booked-list-view input[type=submit].button-primary,
		body .booked-modal input[type=submit].button-primary,
		body #booked-profile-page .appt-block .google-cal-button>a,
		body table.booked-calendar .booked-appt-list .timeslot .timeslot-people button,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active,
		body .booked-list-view a.booked_list_date_picker_trigger.booked-dp-active:hover {
			border-color: #56c477;
		}

		body .booked-modal .bm-window p i.fa,
		body .booked-modal .bm-window a,
		body .booked-appt-list .booked-public-appointment-title,
		body .booked-modal .bm-window p.appointment-title,
		.booked-ms-modal.visible:hover .booked-book-appt {
			color: #56c477;
		}

		.booked-appt-list .timeslot.has-title .booked-public-appointment-title {
			color: inherit;
		}
	</style>
	<style type="text/css">
		img.wp-smiley,
		img.emoji {
			display: inline !important;
			border: none !important;
			box-shadow: none !important;
			height: 1em !important;
			width: 1em !important;
			margin: 0 0.07em !important;
			vertical-align: -0.1em !important;
			background: none !important;
			padding: 0 !important;
		}
	</style>
	<script type="text/javascript">
		window._wpemojiSettings = {
			"baseUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/",
			"ext": ".png",
			"svgUrl": "https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/",
			"svgExt": ".svg",
			"source": {
				"concatemoji": "https:\/\/ninzio.com\/silvertech\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"
			}
		};
		/*! This file is auto-generated */
		! function(e, a, t) {
			var n, r, o, i = a.createElement("canvas"),
				p = i.getContext && i.getContext("2d");

			function s(e, t) {
				var a = String.fromCharCode;
				p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, e), 0, 0);
				e = i.toDataURL();
				return p.clearRect(0, 0, i.width, i.height), p.fillText(a.apply(this, t), 0, 0), e === i.toDataURL()
			}

			function c(e) {
				var t = a.createElement("script");
				t.src = e, t.defer = t.type = "text/javascript", a.getElementsByTagName("head")[0].appendChild(t)
			}
			for (o = Array("flag", "emoji"), t.supports = {
					everything: !0,
					everythingExceptFlag: !0
				}, r = 0; r < o.length; r++) t.supports[o[r]] = function(e) {
				if (!p || !p.fillText) return !1;
				switch (p.textBaseline = "top", p.font = "600 32px Arial", e) {
					case "flag":
						return s([127987, 65039, 8205, 9895, 65039], [127987, 65039, 8203, 9895, 65039]) ? !1 : !s([55356, 56826, 55356, 56819], [55356, 56826, 8203, 55356, 56819]) && !s([55356, 57332, 56128, 56423, 56128, 56418, 56128, 56421, 56128, 56430, 56128, 56423, 56128, 56447], [55356, 57332, 8203, 56128, 56423, 8203, 56128, 56418, 8203, 56128, 56421, 8203, 56128, 56430, 8203, 56128, 56423, 8203, 56128, 56447]);
					case "emoji":
						return !s([10084, 65039, 8205, 55357, 56613], [10084, 65039, 8203, 55357, 56613])
				}
				return !1
			}(o[r]), t.supports.everything = t.supports.everything && t.supports[o[r]], "flag" !== o[r] && (t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && t.supports[o[r]]);
			t.supports.everythingExceptFlag = t.supports.everythingExceptFlag && !t.supports.flag, t.DOMReady = !1, t.readyCallback = function() {
				t.DOMReady = !0
			}, t.supports.everything || (n = function() {
				t.readyCallback()
			}, a.addEventListener ? (a.addEventListener("DOMContentLoaded", n, !1), e.addEventListener("load", n, !1)) : (e.attachEvent("onload", n), a.attachEvent("onreadystatechange", function() {
				"complete" === a.readyState && t.readyCallback()
			})), (n = t.source || {}).concatemoji ? c(n.concatemoji) : n.wpemoji && n.twemoji && (c(n.twemoji), c(n.wpemoji)))
		}(window, document, window._wpemojiSettings);
	</script>
	<link rel='stylesheet' id='animsition-css' href='assets/wp-content/themes/silvertech/assets/css/animsitionf39e.css?ver=4.0.1' type='text/css' media='all' />
	<link rel='stylesheet' id='unicons-icons-css' href='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/css/unicons-icons5152.css?ver=1.0' type='text/css' media='all' />
	<link rel='stylesheet' id='wp-block-library-css' href='assets/wp-includes/css/dist/block-library/style.min7404.css?ver=5.9.3' type='text/css' media='all' />
	<style id='global-styles-inline-css' type='text/css'>
		body {
			--wp--preset--color--black: #000000;
			--wp--preset--color--cyan-bluish-gray: #abb8c3;
			--wp--preset--color--white: #ffffff;
			--wp--preset--color--pale-pink: #f78da7;
			--wp--preset--color--vivid-red: #cf2e2e;
			--wp--preset--color--luminous-vivid-orange: #ff6900;
			--wp--preset--color--luminous-vivid-amber: #fcb900;
			--wp--preset--color--light-green-cyan: #7bdcb5;
			--wp--preset--color--vivid-green-cyan: #00d084;
			--wp--preset--color--pale-cyan-blue: #8ed1fc;
			--wp--preset--color--vivid-cyan-blue: #0693e3;
			--wp--preset--color--vivid-purple: #9b51e0;
			--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg, rgba(6, 147, 227, 1) 0%, rgb(155, 81, 224) 100%);
			--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg, rgb(122, 220, 180) 0%, rgb(0, 208, 130) 100%);
			--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg, rgba(252, 185, 0, 1) 0%, rgba(255, 105, 0, 1) 100%);
			--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg, rgba(255, 105, 0, 1) 0%, rgb(207, 46, 46) 100%);
			--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg, rgb(238, 238, 238) 0%, rgb(169, 184, 195) 100%);
			--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg, rgb(74, 234, 220) 0%, rgb(151, 120, 209) 20%, rgb(207, 42, 186) 40%, rgb(238, 44, 130) 60%, rgb(251, 105, 98) 80%, rgb(254, 248, 76) 100%);
			--wp--preset--gradient--blush-light-purple: linear-gradient(135deg, rgb(255, 206, 236) 0%, rgb(152, 150, 240) 100%);
			--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg, rgb(254, 205, 165) 0%, rgb(254, 45, 45) 50%, rgb(107, 0, 62) 100%);
			--wp--preset--gradient--luminous-dusk: linear-gradient(135deg, rgb(255, 203, 112) 0%, rgb(199, 81, 192) 50%, rgb(65, 88, 208) 100%);
			--wp--preset--gradient--pale-ocean: linear-gradient(135deg, rgb(255, 245, 203) 0%, rgb(182, 227, 212) 50%, rgb(51, 167, 181) 100%);
			--wp--preset--gradient--electric-grass: linear-gradient(135deg, rgb(202, 248, 128) 0%, rgb(113, 206, 126) 100%);
			--wp--preset--gradient--midnight: linear-gradient(135deg, rgb(2, 3, 129) 0%, rgb(40, 116, 252) 100%);
			--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');
			--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');
			--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');
			--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');
			--wp--preset--duotone--midnight: url('#wp-duotone-midnight');
			--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');
			--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');
			--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');
			--wp--preset--font-size--small: 13px;
			--wp--preset--font-size--medium: 20px;
			--wp--preset--font-size--large: 36px;
			--wp--preset--font-size--x-large: 42px;
		}

		.has-black-color {
			color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-color {
			color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-color {
			color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-color {
			color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-color {
			color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-color {
			color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-color {
			color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-color {
			color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-color {
			color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-color {
			color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-color {
			color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-color {
			color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-background-color {
			background-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-background-color {
			background-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-background-color {
			background-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-background-color {
			background-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-background-color {
			background-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-background-color {
			background-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-background-color {
			background-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-background-color {
			background-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-background-color {
			background-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-background-color {
			background-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-background-color {
			background-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-black-border-color {
			border-color: var(--wp--preset--color--black) !important;
		}

		.has-cyan-bluish-gray-border-color {
			border-color: var(--wp--preset--color--cyan-bluish-gray) !important;
		}

		.has-white-border-color {
			border-color: var(--wp--preset--color--white) !important;
		}

		.has-pale-pink-border-color {
			border-color: var(--wp--preset--color--pale-pink) !important;
		}

		.has-vivid-red-border-color {
			border-color: var(--wp--preset--color--vivid-red) !important;
		}

		.has-luminous-vivid-orange-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-amber-border-color {
			border-color: var(--wp--preset--color--luminous-vivid-amber) !important;
		}

		.has-light-green-cyan-border-color {
			border-color: var(--wp--preset--color--light-green-cyan) !important;
		}

		.has-vivid-green-cyan-border-color {
			border-color: var(--wp--preset--color--vivid-green-cyan) !important;
		}

		.has-pale-cyan-blue-border-color {
			border-color: var(--wp--preset--color--pale-cyan-blue) !important;
		}

		.has-vivid-cyan-blue-border-color {
			border-color: var(--wp--preset--color--vivid-cyan-blue) !important;
		}

		.has-vivid-purple-border-color {
			border-color: var(--wp--preset--color--vivid-purple) !important;
		}

		.has-vivid-cyan-blue-to-vivid-purple-gradient-background {
			background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;
		}

		.has-light-green-cyan-to-vivid-green-cyan-gradient-background {
			background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;
		}

		.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;
		}

		.has-luminous-vivid-orange-to-vivid-red-gradient-background {
			background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;
		}

		.has-very-light-gray-to-cyan-bluish-gray-gradient-background {
			background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;
		}

		.has-cool-to-warm-spectrum-gradient-background {
			background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;
		}

		.has-blush-light-purple-gradient-background {
			background: var(--wp--preset--gradient--blush-light-purple) !important;
		}

		.has-blush-bordeaux-gradient-background {
			background: var(--wp--preset--gradient--blush-bordeaux) !important;
		}

		.has-luminous-dusk-gradient-background {
			background: var(--wp--preset--gradient--luminous-dusk) !important;
		}

		.has-pale-ocean-gradient-background {
			background: var(--wp--preset--gradient--pale-ocean) !important;
		}

		.has-electric-grass-gradient-background {
			background: var(--wp--preset--gradient--electric-grass) !important;
		}

		.has-midnight-gradient-background {
			background: var(--wp--preset--gradient--midnight) !important;
		}

		.has-small-font-size {
			font-size: var(--wp--preset--font-size--small) !important;
		}

		.has-medium-font-size {
			font-size: var(--wp--preset--font-size--medium) !important;
		}

		.has-large-font-size {
			font-size: var(--wp--preset--font-size--large) !important;
		}

		.has-x-large-font-size {
			font-size: var(--wp--preset--font-size--x-large) !important;
		}
	</style>
	<link rel='stylesheet' id='booked-animations-css' href='assets/wp-content/plugins/booked/assets/css/animations25b6.css?ver=2.3.5' type='text/css' media='all' />
	<link rel='stylesheet' id='contact-form-7-css' href='assets/wp-content/plugins/contact-form-7/includes/css/styles5406.css?ver=5.5.6' type='text/css' media='all' />
	<link rel='stylesheet' id='rs-plugin-settings-css' href='assets/wp-content/plugins/revslider/public/assets/css/rs6e434.css?ver=6.4.11' type='text/css' media='all' />
	<style id='rs-plugin-settings-inline-css' type='text/css'>
		#rs-demo-id {}
	</style>
	<link rel='stylesheet' id='silvertech-google-font-dm-sans-css' href='http://fonts.googleapis.com/css?family=DM+Sans%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900&amp;subset=latin&amp;ver=5.9.3' type='text/css' media='all' />
	<link rel='stylesheet' id='animate-css' href='assets/wp-content/themes/silvertech/assets/css/animate49eb.css?ver=3.5.2' type='text/css' media='all' />
	<link rel='stylesheet' id='fontawesome-css' href='assets/wp-content/themes/silvertech/assets/css/fontawesome05c8.css?ver=5.13.0' type='text/css' media='all' />
	<link rel='stylesheet' id='silvertech-theme-style-css' href='assets/wp-content/themes/silvertech/style8a54.css?ver=1.0.0' type='text/css' media='all' />
	<style id='silvertech-theme-style-inline-css' type='text/css'>
		/*TYPOGRAPHY*/
		body {
			font-family: "DM Sans";
		}

		h1,
		h2,
		h3,
		h4,
		h5,
		h6 {
			font-family: "DM Sans";
		}

		/*ACCENT COLOR*/
		.text-accent-color,
		.link-dark:hover,
		.link-gray:hover,
		.sticky-post,
		a.accent,
		#site-logo .site-logo-text:hover,
		.header-style-2 #main-nav>ul>li:hover>a>span,
		.header-style-2 #main-nav .sub-menu li a:hover,
		.header-style-2 .master-quote .name a,
		.header-style-3 #main-nav>ul>li:hover>a>span,
		.header-style-3 #main-nav .sub-menu li a:hover,
		.header-style-2 .header-search-wrap:hover .header-search-trigger,
		.header-style-3 .header-search-wrap:hover .header-search-trigger,
		.hentry .post-tags .inner:before,
		#featured-title #breadcrumbs a:hover,
		.hentry .page-links span,
		.hentry .page-links a span,
		.hentry .post-tags .inner:before,
		.hentry .post-tags a:hover,
		.hentry .post-author .author-socials .socials a,
		.related-news .related-title,
		.related-news .post-item .post-categories a:hover,
		.related-news .post-item .text-wrap h3 a:hover,
		.related-news .related-post .slick-next:hover:before,
		.related-news .related-post .slick-prev:hover:before,
		.comment-reply a,
		.comment-edit-link,
		#cancel-comment-reply-link,
		.unapproved,
		.logged-in-as a,
		.hentry .post-title a:hover,
		#sidebar .widget.widget_calendar caption,
		.widget.widget_nav_menu .menu>li.current-menu-item>a,
		.widget.widget_nav_menu .menu>li.current-menu-item,
		#sidebar .widget.widget_calendar tbody #today,
		#sidebar .widget.widget_calendar tbody #today a,
		#sidebar .widget_information ul li.accent-icon i,
		#footer-widgets .widget_mc4wp_form_widget .mc4wp-form .submit-wrap button:before,
		#footer .widget_mc4wp_form_widget .submit-wrap button:after,
		#footer-widgets .widget.widget_recent_posts .post-author,
		#footer-widgets .widget.widget_recent_posts .post-author a,
		#bottom .bottom-bar-copyright a:hover,
		.widget.widget_categories .cat-item span,
		.widget.widget_categories ul li a:hover,
		.header-socials a:hover,
		.hentry .post-by-avatar .text-wrap .name:hover,
		.widget.widget_recent_posts h3 a:hover,
		.hentry .post-meta a:hover,
		.silvertech-step-box .number-box .number,
		.silvertech-links.link-style-1.accent,
		.silvertech-links.link-style-2.accent,
		.silvertech-links.link-style-3.accent,
		.news-style-1 .master-news:hover .headline-2 a,
		.silvertech-arrow.hover-accent:hover,
		.icon-accent .master-video-icon a,
		.silvertech-button.outline.outline-accent,
		.silvertech-button.outline.outline-accent .icon,
		.silvertech-counter .icon.accent,
		.silvertech-counter .prefix.accent,
		.silvertech-counter .suffix.accent,
		.silvertech-counter .number.accent,
		.silvertech-divider.has-icon .icon-wrap>span.accent,
		.silvertech-single-heading .heading.accent,
		.silvertech-headings .heading.accent,
		.silvertech-icon.accent>.icon,
		.silvertech-image-box .item .title a:hover,
		.silvertech-news .meta .author a:hover,
		.silvertech-news .meta .comment a:hover,
		.silvertech-progress .perc.accent,
		.silvertech-list .icon.accent,
		.accent .master-heading .pre-heading,
		.icon-has-bg.icon-accent .master-icon,
		.accent .master-link,
		.icon-accent .master-link:hover,
		.accent .master-video-icon:hover span,
		.flickity-slider .master-project:first-child .headline-2 a,
		.blog-grid .master-news:hover .content-wrap .headline-2 a,
		.woocommerce-page .woocommerce-MyAccount-content .woocommerce-info .button,
		.products li .product-info .button,
		.products li .product-info .added_to_cart,
		.products li .product-cat:hover,
		.products li h2:hover,
		.woo-single-post-class .woocommerce-grouped-product-list-item__label a:hover,
		.woocommerce-page .shop_table.cart .product-name a:hover,
		.product_list_widget .product-title:hover,
		.widget_recent_reviews .product_list_widget a:hover,
		.widget_product_categories ul li a:hover,
		.widget.widget_product_search .woocommerce-product-search .search-submit:hover:before,
		.widget_shopping_cart_content ul li a:hover,
		.master-project:hover .headline-2 a,
		.woo-single-post-class .summary .product_meta>span a:hover,
		.widget_shopping_cart_content ul li a.remove {
			color: #3377ff !important;
		}

		.accent .master-button,
		.flickity-slider .master-news:first-child .url-wrap .master-button,
		.flickity-slider .master-news .url-wrap .master-button .hover-effect,
		.header-style-1 #site-header .master-button,
		.header-style-2 #site-header .master-button,
		.header-style-2 .master-quote .name a:before,
		.header-style-3 #site-header .master-button,
		button,
		input[type="button"],
		input[type="reset"],
		input[type="submit"],
		bg-accent,
		#scroll-top,
		#scroll-top:before,
		#main-nav>ul>li>a>span:before,
		#main-nav .sub-menu li a:before,
		.hentry .post-media .post-date-custom,
		.post-media .slick-prev:hover,
		.post-media .slick-next:hover,
		.post-media .slick-dots li.slick-active button,
		.hentry .post-link a>span:before,
		#footer-widgets .widget .widget-title>span:after,
		.widget_mc4wp_form_widget .mc4wp-form .submit-wrap button,
		#sidebar .widget.widget_tag_cloud .tagcloud a:hover,
		.widget_product_tag_cloud .tagcloud a:hover,
		.no-results-content .search-form .search-submit:before,
		.widget.widget_links ul li a:after,
		.footer-subscribe .form-wrap .submit-wrap .master-button,
		.master-news .master-button,
		.silvertech-pagination ul li .page-numbers:hover,
		.woocommerce-pagination .page-numbers li .page-numbers:hover,
		.silvertech-pagination ul li .page-numbers.current,
		.woocommerce-pagination .page-numbers li .page-numbers.current,
		.hentry .post-read-more .post-link .hover-effect,
		.silvertech-accordions .accordion-item.active .accordion-heading>.inner:before,
		.silvertech-step-box .number-box:hover .number,
		.silvertech-links>span:before,
		.silvertech-links.link-style-1.accent>span:before,
		.silvertech-links.link-style-1.accent>span:after,
		.silvertech-links.link-style-1.dark>span:after,
		.silvertech-links.link-style-2.accent>span:before,
		.silvertech-links.link-style-3.accent>span:after,
		.silvertech-links.link-style-3.dark>span:after,
		.silvertech-button.accent,
		.accent .master-video-icon a,
		.dot-style-4.dot-accent .master-carousel-box .flickity-page-dots .dot.is-selected,
		body .accent table.booked-calendar thead tr:first-child th,
		.silvertech-button.outline.outline-accent:hover,
		.silvertech-content-box>.inner.accent,
		.silvertech-content-box>.inner.dark-accent,
		.silvertech-content-box>.inner.light-accent,
		.silvertech-single-heading .line.accent,
		.silvertech-headings .sep.accent,
		.accent .silvertech-headings .heading>span,
		.silvertech-icon-box:hover .icon-number,
		.silvertech-icon.accent-bg .icon,
		.silvertech-image-box .item .thumb .hover-image .arrow,
		.silvertech-image-box.style-2 .url-wrap .arrow,
		.silvertech-images-grid .zoom-popup:after,
		.silvertech-news .image-wrap .post-date-custom,
		.project-box .project-text .button a,
		.project-box .project-text .arrow a,
		.silvertech-progress .progress-animate.accent,
		.silvertech-images-carousel.has-borders:after,
		.silvertech-images-carousel.has-borders:before,
		.silvertech-images-carousel.has-arrows.arrow-bottom .owl-nav,
		.silvertech-team .socials li a:hover,
		.silvertech-video-icon.accent a,
		.icon-has-bg.accent .master-icon,
		.hover-effect-style-1.active .elementor-widget-container:before,
		.hover-effect-style-1:hover .elementor-widget-container:before,
		.hover-effect-style-3.active .elementor-widget-container:before,
		.hover-effect-style-3:hover .elementor-widget-container:before,
		.hover-effect-style-1.icon-has-bg:hover .master-icon,
		.woocommerce-page .wc-proceed-to-checkout .button,
		.woocommerce-page .return-to-shop a,
		#payment #place_order,
		.widget_price_filter .price_slider_amount .button:hover,
		.widget_shopping_cart_content .buttons a.checkout,
		.widget_price_filter .ui-slider .ui-slider-range,
		.woo-single-post-class .woocommerce-tabs ul li:after {
			background-color: #3dbee2 !important;
		}

		.underline-solid:after,
		.underline-dotted:after,
		.underline-dashed:after {
			border-bottom-color: #3377ff !important;
		}

		.widget.widget_links ul li a:after {
			border-bottom-color: #3377ff !important;
		}

		.widget_mc4wp_form_widget .mc4wp-form .email-wrap input:focus {
			border-color: #3377ff !important;
		}

		#sidebar .widget.widget_tag_cloud .tagcloud a:hover {
			border-color: #3377ff !important;
		}

		.widget_product_tag_cloud .tagcloud a:hover {
			border-color: #3377ff !important;
		}

		.no-results-content .search-form .search-field:focus {
			border-color: #3377ff !important;
		}

		.silvertech-step-box .number-box .number {
			border-color: #3377ff !important;
		}

		.silvertech-button.outline.outline-accent {
			border-color: #3377ff !important;
		}

		.silvertech-button.outline.outline-accent:hover {
			border-color: #3377ff !important;
		}

		.divider-icon-before.accent {
			border-color: #3377ff !important;
		}

		.divider-icon-after.accent {
			border-color: #3377ff !important;
		}

		.silvertech-divider.has-icon .divider-double.accent {
			border-color: #3377ff !important;
		}

		.accent-border .master-button.btn-outline {
			border-color: #3377ff !important;
		}

		.widget_price_filter .ui-slider .ui-slider-handle {
			border-color: #3377ff !important;
		}

		.silvertech-pagination ul li .page-numbers:hover {
			border-color: #3377ff !important;
		}

		.woocommerce-pagination .page-numbers li .page-numbers:hover {
			border-color: #3377ff !important;
		}

		.silvertech-pagination ul li .page-numbers.current {
			border-color: #3377ff !important;
		}

		.woocommerce-pagination .page-numbers li .page-numbers.current {
			border-color: #3377ff !important;
		}

		.widget_price_filter .price_slider_amount .button {
			border-color: #3377ff !important;
		}

		.silvertech-progress .progress-animate.accent.gradient {
			background: rgba(51, 119, 255, 1);
			background: -moz-linear-gradient(left, rgba(51, 119, 255, 1) 0%, rgba(51, 119, 255, 0.3) 100%);
			background: -webkit-linear-gradient(left, rgba(51, 119, 255, 1) 0%, rgba(51, 119, 255, 0.3) 100%);
			background: linear-gradient(to right, rgba(51, 119, 255, 1) 0%, rgba(51, 119, 255, 0.3) 100%) !important;
		}

		/*CUSTOMIZER STYLING*/
		.animsition-loading {
			color: #3377ff;
		}

		.footer-subscribe {
			background-color: #f9fafd;
		}
		.master-icon {
			font-size: 16px;
    width: 30px;
    height: 30px;
    line-height: 30px;
    border-radius: 20% 20% 20% 20%;
    color: #ffffff;
    background-color: #91d1fe;
    text-align: center;
	display: flex;
    align-items: center;
    justify-content: center;
	float: left;
}
.elementor-widget-container .master-icon {
    transition: all ease 0.35s !important;
}
[class*=" fe-"] {
    display: inline-block;
    font-family: 'Feather';
    speak: none;
    font-style: normal;
    font-weight: normal;
    font-variant: normal;
    text-transform: none;
    line-height: inherit;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
.icon-wrap {
    display: flex;
    align-items: center;
}
.icon-wrap span.word {
    margin-left: 10px;
}
.elementor-element-1d153c3 .master-icon {
    color: #3dbee2;
    font-size: 30px !important;
}

	</style>

	<link rel='stylesheet' id='elementor-frontend-legacy-css' href='assets/wp-content/plugins/elementor/assets/css/frontend-legacy.mina7a0.css?ver=3.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='assets/wp-content/plugins/elementor/assets/css/frontend.mina7a0.css?ver=3.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-frontend-css' href='assets/wp-content/plugins/elementor/assets/css/frontend.mina7a.css?ver=3.6.1' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-6-css' href='assets/wp-content/uploads/elementor/css/post-6a7f5.css?ver=1648146327' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-global-css' href='assets/wp-content/uploads/elementor/css/globalb059.css?ver=1648146328' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-5018-css' href='assets/wp-content/uploads/elementor/css/post-5018bae7.css?ver=1648146437' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-5466-css' href='assets/wp-content/uploads/elementor/css/post-54663cb2.css?ver=1648146438' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-post-6602-css' href='assets/wp-content/uploads/elementor/css/post-6602ad4e.css?ver=1648146440' type='text/css' media='all' />
	<link rel='stylesheet' id='google-fonts-1-css' href='https://fonts.googleapis.com/css?family=Montserrat%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CDM+Sans%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&amp;display=auto&amp;ver=5.9.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-unicons-css' href='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/css/unicons-icons8a54.css?ver=1.0.0' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-shared-0-css' href='assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min52d5.css?ver=5.15.3' type='text/css' media='all' />
	<link rel='stylesheet' id='elementor-icons-fa-solid-css' href='assets/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min52d5.css?ver=5.15.3' type='text/css' media='all' />
	<script type='text/javascript' src='assets/wp-includes/js/jquery/jquery.minaf6c.js?ver=3.6.0' id='jquery-core-js'></script>
	<script type='text/javascript' src='assets/wp-includes/js/jquery/jquery-migrate.mind617.js?ver=3.3.2' id='jquery-migrate-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/revslider/public/assets/js/rbtools.minb7f2.js?ver=6.4.8' id='tp-tools-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/revslider/public/assets/js/rs6.mine434.js?ver=6.4.11' id='revmin-js'></script>
	<script type='text/javascript' id='booked-wc-fe-functions-js-extra'></script>

	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/includes/widgets/chart7404.js?ver=5.9.3' id='chart-js'></script>


	<link rel="icon" href="assets/wp-content/uploads/2020/12/favicon-100x100.png" sizes="32x32" />
	<link rel="icon" href="assets/wp-content/uploads/2020/12/favicon.png" sizes="192x192" />
	<link rel="apple-touch-icon" href="assets/wp-content/uploads/2020/12/favicon.png" />

	<script type="text/javascript">
		function setREVStartSize(e) {
			//window.requestAnimationFrame(function() {
			window.RSIW = window.RSIW === undefined ? window.innerWidth : window.RSIW;
			window.RSIH = window.RSIH === undefined ? window.innerHeight : window.RSIH;
			try {
				var pw = document.getElementById(e.c).parentNode.offsetWidth,
					newh;
				pw = pw === 0 || isNaN(pw) ? window.RSIW : pw;
				e.tabw = e.tabw === undefined ? 0 : parseInt(e.tabw);
				e.thumbw = e.thumbw === undefined ? 0 : parseInt(e.thumbw);
				e.tabh = e.tabh === undefined ? 0 : parseInt(e.tabh);
				e.thumbh = e.thumbh === undefined ? 0 : parseInt(e.thumbh);
				e.tabhide = e.tabhide === undefined ? 0 : parseInt(e.tabhide);
				e.thumbhide = e.thumbhide === undefined ? 0 : parseInt(e.thumbhide);
				e.mh = e.mh === undefined || e.mh == "" || e.mh === "auto" ? 0 : parseInt(e.mh, 0);
				if (e.layout === "fullscreen" || e.l === "fullscreen")
					newh = Math.max(e.mh, window.RSIH);
				else {
					e.gw = Array.isArray(e.gw) ? e.gw : [e.gw];
					for (var i in e.rl)
						if (e.gw[i] === undefined || e.gw[i] === 0) e.gw[i] = e.gw[i - 1];
					e.gh = e.el === undefined || e.el === "" || (Array.isArray(e.el) && e.el.length == 0) ? e.gh : e.el;
					e.gh = Array.isArray(e.gh) ? e.gh : [e.gh];
					for (var i in e.rl)
						if (e.gh[i] === undefined || e.gh[i] === 0) e.gh[i] = e.gh[i - 1];

					var nl = new Array(e.rl.length),
						ix = 0,
						sl;
					e.tabw = e.tabhide >= pw ? 0 : e.tabw;
					e.thumbw = e.thumbhide >= pw ? 0 : e.thumbw;
					e.tabh = e.tabhide >= pw ? 0 : e.tabh;
					e.thumbh = e.thumbhide >= pw ? 0 : e.thumbh;
					for (var i in e.rl) nl[i] = e.rl[i] < window.RSIW ? 0 : e.rl[i];
					sl = nl[0];
					for (var i in nl)
						if (sl > nl[i] && nl[i] > 0) {
							sl = nl[i];
							ix = i;
						}
					var m = pw > (e.gw[ix] + e.tabw + e.thumbw) ? 1 : (pw - (e.tabw + e.thumbw)) / (e.gw[ix]);
					newh = (e.gh[ix] * m) + (e.tabh + e.thumbh);
				}
				if (window.rs_init_css === undefined) window.rs_init_css = document.head.appendChild(document.createElement("style"));
				document.getElementById(e.c).height = newh + "px";
				window.rs_init_css.innerHTML += "#" + e.c + "_wrapper { height: " + newh + "px }";
			} catch (e) {
				console.log("Failure at Presize of Slider:" + e)
			}
			//});
		};
	</script>
</head>

<body data-rsssl="1" class="header-fixed no-sidebar site-layout-full-width header-style-2 has-subscribe-box footer-fixed is-page header-simple-search elementor-default elementor-kit-6 elementor-page elementor-page-5018 e--ua-blink e--ua-edge e--ua-webkit" data-elementor-device-mode="desktop">
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-dark-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0.49803921568627" />
					<feFuncG type="table" tableValues="0 0.49803921568627" />
					<feFuncB type="table" tableValues="0 0.49803921568627" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-grayscale">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.54901960784314 0.98823529411765" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.71764705882353 0.25490196078431" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-red">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 1" />
					<feFuncG type="table" tableValues="0 0.27843137254902" />
					<feFuncB type="table" tableValues="0.5921568627451 0.27843137254902" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-midnight">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0 0" />
					<feFuncG type="table" tableValues="0 0.64705882352941" />
					<feFuncB type="table" tableValues="0 1" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-magenta-yellow">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.78039215686275 1" />
					<feFuncG type="table" tableValues="0 0.94901960784314" />
					<feFuncB type="table" tableValues="0.35294117647059 0.47058823529412" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-purple-green">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.65098039215686 0.40392156862745" />
					<feFuncG type="table" tableValues="0 1" />
					<feFuncB type="table" tableValues="0.44705882352941 0.4" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 0 0" width="0" height="0" focusable="false" role="none" style="visibility: hidden; position: absolute; left: -9999px; overflow: hidden;">
		<defs>
			<filter id="wp-duotone-blue-orange">
				<feColorMatrix color-interpolation-filters="sRGB" type="matrix" values=" .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 .299 .587 .114 0 0 " />
				<feComponentTransfer color-interpolation-filters="sRGB">
					<feFuncR type="table" tableValues="0.098039215686275 1" />
					<feFuncG type="table" tableValues="0 0.66274509803922" />
					<feFuncB type="table" tableValues="0.84705882352941 0.41960784313725" />
					<feFuncA type="table" tableValues="1 1" />
				</feComponentTransfer>
				<feComposite in2="SourceGraphic" operator="in" />
			</filter>
		</defs>
	</svg>
	<div class="mobi-overlay"><span class="close"></span></div>

	<div id="wrapper">
		<div id="page" class="clearfix animsition">
			<div id="site-header-wrap">
				<ul class="mobi-nav-extra">
					<li class="ext">
						<form role="search" method="get" action="#" class="search-form">
							<input type="search" class="search-field" placeholder="Search here..." value="" name="s" title="Search for:" />
							<button type="submit" class="search-submit" title="Search">
								SEARCH<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 34 34">
									<path d="M20.3,0.9c-7.2,0-13,5.8-13,13c0,3.1,1.1,5.9,2.9,8.2l-8.6,8.6c-0.5,0.5-0.5,1.4,0,2s1.4,0.5,2,0l8.6-8.6
						c2.2,1.8,5.1,2.9,8.2,2.9c7.2,0,13-5.8,13-13S27.5,0.9,20.3,0.9z M20.3,24.9c-6.1,0-11-4.9-11-11s4.9-11,11-11s11,4.9,11,11
						S26.4,24.9,20.3,24.9z"></path>
								</svg>
							</button>
						</form>
					</li>
				</ul>

				<header id="site-header" class="">
					<div class="silvertech-container">
						<div class="site-header-inner">
							<div class="wrap-inner">
								<div id="site-logo">
									<div id="site-logo-inner" style="max-width: 179px">
										<a class="main-logo" href="#" title="SilverTech" rel="home"><img src="assets/wp-content/themes/silvertech/assets/img/logo.png" alt="SilverTech" /></a>
									</div>
								</div>
								<div class="append">
									<nav id="main-nav" class="main-nav">
										<ul id="menu-top-menu" class="menu">
											<li id="menu-item-8039" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-8039">
												<a href="index.php"><span>Home</span></a>
											</li>
											<li id="menu-item-8431" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-8431">
												<a href="#about-us" onclick="anchor(this)"><span>About Us</span></a>
											</li>
											<li id="menu-item-8430" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8430">
												<a href="#what-we-do" onclick="anchor(this)"><span>What we do</span></a>
											</li>
											<li id="menu-item-8428" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8428">
												<a href="#solutions-section" onclick="anchor(this)"><span>Solutions</span></a>
											</li>
											<li id="menu-item-8428" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-8428">
												<a href="#contact-us" onclick="anchor(this)"><span>Contact</span></a>
											</li>
										</ul>
									</nav>
								</div>

								<div class="mobile-button" style="display: none">
									<span></span>
								</div>

								<div class="search-cart-wrap">
									<!-- /.header-info -->
								</div>
							</div>
						</div>
					</div>
				</header>
				<!-- /#site-header -->
			</div>

			<!-- #site-main -->
			<div id="main-content" class="site-main clearfix">
				<div id="content-wrap" class="silvertech-container clearfix">
					<div id="site-content" class="site-content clearfix">
						<div id="inner-content" class="inner-content-wrap">
							<article class="page-content post-5018 page type-page status-publish hentry">
								<div data-elementor-type="wp-page" data-elementor-id="5018" class="elementor elementor-5018">
									<div class="elementor-inner">
										<div class="elementor-section-wrap">
											<section class="elementor-section elementor-top-section elementor-element elementor-element-fe6ff82 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="fe6ff82" data-element_type="section" style="margin-bottom: 0px !important;">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ef3fe58" data-id="ef3fe58" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-53b519d elementor-widget elementor-widget-slider_revolution" data-id="53b519d" data-element_type="widget" data-widget_type="slider_revolution.default">
																		<div class="elementor-widget-container">
																			<div class="wp-block-themepunch-revslider">
																				<!-- START Slider 1 REVOLUTION SLIDER 6.4.11 -->
																				<p class="rs-p-wp-fix"></p>
																				<rs-module-wrap id="rev_slider_42_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
																					<rs-module id="rev_slider_42_1" style="" data-version="6.4.11">
																						<rs-slides>
																							<rs-slide data-key="rs-100" data-title="Slide" data-in="o:0;" data-out="a:false;">
																								<img loading="lazy" src="assets/wp-content/uploads/2020/12/slide01.png" title="slide01" width="1920" height="1080" class="rev-slidebg tp-rs-img" data-bg="p:center bottom;r:repeat-x;" data-parallax="off" data-no-retina>
																								<!--
																			   -->
																								<rs-layer id="slider-42-slide-100-layer-0" data-type="text" data-color="#6b7b9c" data-xy="xo:0,20px,25px,19px;yo:300px,220px,160px,210px;" data-text="w:normal;s:20,20,18,18;l:30,30,28,26;fw:500;" data-dim="w:530px,530px,340px,320px;" data-frame_0="y:50,43,32,19;" data-frame_1="st:600;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:DM Sans;">
																									One platform. All of communications
																								</rs-layer>
																								<!--
																			   -->
																								<rs-layer id="slider-42-slide-100-layer-1" data-type="text" data-color="#47536b" data-rsp_ch="on" data-xy="xo:0,20px,25px,19px;yo:335px,241px,219px,239px;" data-text="w:normal;s:47,62,46,42;l:55,70,56,46;fw:700;" data-dim="w:691px,604px,458px,380px;" data-frame_0="y:50,43,32,19;" data-frame_1="st:600;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:11;font-family:DM Sans;">
																								Grow your business with omni-channel communication
																								</rs-layer>
																								<!--
																			   -->
																								<rs-layer id="slider-42-slide-100-layer-2" data-type="text" data-color="#6b7b9c" data-xy="xo:-1px,20px,25px,25px;yo:480px,416px,372px,375px;" data-text="w:normal;s:20,20,18,18;l:30,30,28,26;fw:500;" data-dim="w:530px,530px,340px,320px;" data-rsp_bd="off" data-frame_0="y:50,43,32,19;" data-frame_1="st:800;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:12;font-family:DM Sans;">
																									Discover a professional communication platform so easy to use that, even
																									without being an expert, you will set up communications via phone calls, email, SMS, chat
																									and social media from a single platform.

																								</rs-layer>
																								<!--
																			   -->
																								<rs-layer id="slider-42-slide-100-layer-11" class="rs-parallax-item rs-pxl-2" data-type="image" data-rsp_ch="on" data-xy="xo:700px,834px,521px,551px;yo:258px,263px,140px,66px;" data-text="w:normal;s:20,17,12,7;l:0,21,15,9;" data-dim="w:555px,510px,335px,244px;h:435px,400px,315px,224px;" data-vbility="t,t,t,f" data-sba="so:0ms" data-frame_0="y:50,43,32,19;" data-frame_1="st:200;sp:1000;" data-frame_999="o:0;st:w;" style="z-index:9;">
																									<img loading="lazy" src="assets/wp-content/uploads/2020/12/02.png" class="tp-rs-img" width="355" height="420" data-no-retina>
																								</rs-layer>
																								<!--
																			   -->
																							</rs-slide>
																						</rs-slides>
																					</rs-module>
																					<script type="text/javascript">
																						setREVStartSize({
																							c: 'rev_slider_42_1',
																							rl: [1240, 1024, 778, 480],
																							el: [1070, 960, 820, 780],
																							gw: [1170, 1024, 778, 480],
																							gh: [1070, 960, 820, 780],
																							type: 'standard',
																							justify: '',
																							layout: 'fullwidth',
																							mh: "0"
																						});
																						var revapi42,
																							tpj;

																						function revinit_revslider421() {
																							jQuery(function() {
																								tpj = jQuery;
																								revapi42 = tpj("#rev_slider_42_1");
																								if (revapi42 == undefined || revapi42.revolution == undefined) {
																									revslider_showDoubleJqueryError("rev_slider_42_1");
																								} else {
																									revapi42.revolution({
																										DPR: "dpr",
																										sliderLayout: "fullwidth",
																										visibilityLevels: "1240,1024,778,480",
																										gridwidth: "1170,1024,778,480",
																										gridheight: "1000,960,820,780",
																										perspective: 600,
																										perspectiveType: "global",
																										editorheight: "1070,960,820,780",
																										responsiveLevels: "1240,1024,778,480",
																										progressBar: {
																											disableProgressBar: true
																										},
																										navigation: {
																											onHoverStop: false
																										},
																										parallax: {
																											levels: [5, 10, 15, 20, 25, 30, 35, 40, 45, 46, 47, 48, 49, 50, 51, 30],
																											type: "scroll",
																											origo: "slidercenter",
																											speed: 0
																										},
																										sbtimeline: {
																											set: true
																										},
																										fallbacks: {
																											allowHTML5AutoPlayOnAndroid: true
																										},
																									});
																								}

																							});
																						} // End of RevInitScript
																						var once_revslider421 = false;
																						if (document.readyState === "loading") {
																							document.addEventListener('readystatechange', function() {
																								if ((document.readyState === "interactive" || document.readyState === "complete") && !once_revslider421) {
																									once_revslider421 = true;
																									revinit_revslider421();
																								}
																							});
																						} else {
																							once_revslider421 = true;
																							revinit_revslider421();
																						}
																					</script>
																				</rs-module-wrap>
																				<!-- END REVOLUTION SLIDER -->
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-8a7314b elementor-widget elementor-widget-spacer" data-id="8a7314b" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-78f31bc elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="78f31bc" data-element_type="section" id="about-us"  name="about-us">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-0d30ba5" data-id="0d30ba5" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-22c33f2 elementor-widget elementor-widget-spacer" data-id="22c33f2" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-1b64866 align-center animated-fast elementor-widget elementor-widget-mae-headings animated fadeInUp" data-id="1b64866" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="mae-headings.default">
																		<div class="elementor-widget-container">
																			<div class="master-heading">
																				<div class="sub-heading">About Us</div>
																				<h2 class="main-heading" data-splitting>
																					We are trusted partners
																				</h2>
																				<div class="sub-heading">VOXALO Limited
																					is a
																					technology company specialized in
																					the
																					design, promoting and selling unify
																					communication platforms.
																					VOXALO provides a simple user
																					interface for
																					making and receiving phone calls,
																					sending
																					and receiving emails, text messages
																					and
																					instant messaging.
																					Our application is designed for
																					small and
																					medium-sized businesses (SMBs).
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-6fcb991 elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6fcb991" id="what-we-do" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="width: 1519px; left: -174.6px;">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-4272d07" data-id="4272d07" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-2a20380 elementor-widget elementor-widget-spacer" data-id="2a20380" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																	<section class="elementor-section elementor-inner-section elementor-element elementor-element-6252228 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="6252228" data-element_type="section">
																		<div class="elementor-container elementor-column-gap-default">
																			<div class="elementor-row">
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1ef2c0a" data-id="1ef2c0a" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-3612129 elementor-widget elementor-widget-spacer" data-id="3612129" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-9885316 animated-fast align-left elementor-widget elementor-widget-mae-headings animated fadeInUp" data-id="9885316" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="mae-headings.default">
																								<div class="elementor-widget-container">
																									<div class="master-heading">
																										<div class="sub-heading">What we do</div>
																										<h2 class="main-heading" data-splitting>
																										Adapted IT services to your evolving business
																										</h2>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-10c5cd7 elementor-widget elementor-widget-spacer" data-id="10c5cd7" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-25d2815 animated-fast align-left elementor-widget elementor-widget-mae-headings animated fadeInUp" data-id="25d2815" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="mae-headings.default">
																								<div class="elementor-widget-container">
																									<div class="master-heading">
																										<div class="sub-heading">
																											We
																											centralize
																											business
																											communication
																											channels in
																											one
																											application!
																											Talking to
																											customers
																											over any
																											channel,
																											for any use
																											case and
																											from
																											anywhere
																											becomes very
																											simple
																											by using our
																											platform.
																											Communications
																											are
																											adapted to
																											all
																											clienteles
																											by
																											offering
																											simultaneously
																											main
																											enterprise
																											communication
																											channels.
																										</div>
																										<h2 class="main-heading words chars splitting" data-splitting="" style="--word-total:5; --char-total:5;">

																										<div class="icon-wrap">
																											<div class="master-icon">
																												<i aria-hidden="true" class="fas fa-envelope"></i>
																											</div>
																											Email
																											</div> </h2>
																										<h2 class="main-heading words chars splitting" data-splitting="" style="--word-total:10; --char-total:11;">
																										<div class="icon-wrap">
																											<div class="master-icon">
																												<i aria-hidden="true" class="fas fa-phone"></i>
																											</div>
																											Phone Calls
																											</div> 
																										</h2>
																										<h2 class="main-heading words chars splitting" data-splitting="" style="--word-total:3; --char-total:3;">
																										<div class="icon-wrap">
																											<div class="master-icon">
																											<i aria-hidden="true" class="fas fa-sms"></i>
																										</div>
																										SMS
																										</div> </h2>
																										<h2 class="main-heading words chars splitting" data-splitting="" style="--word-total:16; --char-total:17;">
																										<div class="icon-wrap">
																											<div class="master-icon">
																												<i aria-hidden="true" class="fas fa-comment-dots"></i>
																											</div>
																											Instant Messaging
																											</div> 
																										</h2>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-9a0fef5 elementor-widget elementor-widget-spacer" data-id="9a0fef5" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4bdc679" data-id="4bdc679" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-7f6b4f0 elementor-widget elementor-widget-spacer" data-id="7f6b4f0" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-7ddf449 elementor-widget elementor-widget-mae-parallax-image" data-id="7ddf449" data-element_type="widget" data-widget_type="mae-parallax-image.default">
																								<div class="elementor-widget-container">
																									<div class="master-parallax-box">
																										<div class="parallax-wrap" style="height: 545.838px;">
																											<div class="master-parallax-item elementor-repeater-item-96f5992" style="" data-parallax="{&quot;x&quot; : 0, &quot;y&quot; : 0, &quot;smoothness&quot; : 30}" data-top="0px" data-top-tablet="px" data-top-mobile="px">
																												<img src="assets/wp-content/uploads/2020/12/about-04.png" alt="" style="height: 500px !important;margin-top: 70px;">
																											</div>
																											<div class="master-parallax-item elementor-repeater-item-988ba69" style="transform:translate3d(0px, -15.724px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, -15.724px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); " data-parallax="{&quot;x&quot; : 0, &quot;y&quot; : -20, &quot;smoothness&quot; : 30}" data-top="50%" data-top-tablet="px" data-top-mobile="px">
																												<img src="assets/wp-content/uploads/2021/01/cruz-03.png" alt="">
																											</div>
																											<div class="master-parallax-item elementor-repeater-item-321bbb8" style="transform:translate3d(0px, 18.671px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); -webkit-transform:translate3d(0px, 18.671px, 0px) rotateX(0deg) rotateY(0deg) rotateZ(0deg) scaleX(1) scaleY(1) scaleZ(1); " data-parallax="{&quot;x&quot; : 0, &quot;y&quot; : 20, &quot;smoothness&quot; : 30}" data-top="24%" data-top-tablet="px" data-top-mobile="px">
																												<img src="assets/wp-content/uploads/2021/01/cruz-04.png" alt="">
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</section>
																	<section class="elementor-section elementor-inner-section elementor-element elementor-element-0668c6c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="0668c6c" data-element_type="section">
																		<div class="elementor-container elementor-column-gap-default">
																			<div class="elementor-row">
																				<div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0740344" data-id="0740344" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-6224d0e elementor-widget elementor-widget-spacer" data-id="6224d0e" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</section>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-34d37da elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="34d37da" id="solutions-section" data-element_type="section" style="margin-bottom: 0px !important;">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-23a512f" data-id="23a512f" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-482cab6 align-center animated-fast elementor-widget elementor-widget-mae-headings animated fadeInUp" data-id="482cab6" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="mae-headings.default">
																		<div class="elementor-widget-container">
																			<div class="master-heading">
																				<div class="sub-heading">Solutions</div>
																				<h2 class="main-heading words chars splitting" data-splitting>We deliver efficient solutions</h2>
																				<div class="pre-heading">Our omnichannel
																					communications platform is built for
																					non
																					tech users and for a large scope of
																					industries, activities and/or
																					services like
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-45cd25f elementor-widget elementor-widget-spacer" data-id="45cd25f" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																	<section class="elementor-section elementor-inner-section elementor-element elementor-element-d901477 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="d901477" data-element_type="section" style="">
																		<div class="elementor-container elementor-column-gap-extended" style="">
																			<div class="elementor-row" style="justify-content: center;">
																				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4cee477" data-id="4cee477" data-element_type="column" style="/* margin: 0px 55px; */">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-d07d46b icon-has-bg hover-effect-style-2 active accent animated-fast align-left icon-position-top elementor-widget elementor-widget-mae-icon-box animated fadeIn" data-id="d07d46b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box">
																										<div class="icon-wrap">
																											<div class="master-icon">
																											<i aria-hidden="true" class="fas fa-shopping-cart"></i>
																											</div>
																										</div>
																										<div class="text-wrap">
																											<h3 class="headline-2">
																												Sale department
																											</h3>
																											<div class="desc">
																											The sales department is often tasked with meeting certain targets of product or service sales.
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>

																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-06ebdd2" data-id="06ebdd2" data-element_type="column" style="/* margin: 0px 55px; */">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-080e90e icon-has-bg hover-effect-style-2 animated-fast accent align-left icon-position-top elementor-widget elementor-widget-mae-icon-box animated fadeIn" data-id="080e90e" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box">
																										<div class="icon-wrap">
																											<div class="master-icon">
																											<i aria-hidden="true" class="fas fa-life-ring"></i>
																											</div>
																										</div>
																										<div class="text-wrap">
																											<h3 class="headline-2">
																												Customer
																												care
																												department
																											</h3>
																											<div class="desc">
																											Customer service is the direct one-on-one interaction between a consumer making a purchase and a representative of the company that is selling it.
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-eedb125 elementor-widget elementor-widget-spacer" data-id="eedb125" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b0d7114" data-id="b0d7114" data-element_type="column" style="/* margin: 0px 55px; */">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-6107a7b icon-has-bg hover-effect-style-2 animated-fast accent align-left icon-position-top elementor-widget elementor-widget-mae-icon-box animated fadeIn" data-id="6107a7b" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box">
																										<div class="icon-wrap">
																											<div class="master-icon">
																											<i aria-hidden="true" class="fas fa-bullhorn"></i>
																											</div>
																										</div>
																										<div class="text-wrap">
																											<h3 class="headline-2">
																												Marketing
																												team
																											</h3>
																											<div class="desc">
																											The Marketing Department plays a vital role in promoting the business and mission of an organization.
																											</div>
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-95d46bc" data-id="95d46bc" data-element_type="column" style="/* margin: 0px 55px; */">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-5aaeb07 icon-has-bg hover-effect-style-2 animated-fast accent align-left icon-position-top elementor-widget elementor-widget-mae-icon-box animated fadeIn" data-id="5aaeb07" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeIn&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box">
																										<div class="icon-wrap">
																											<div class="master-icon">
																												<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" id="Layer_1" x="0px" y="0px" viewBox="0 0 357.33 414.39" style="enable-background:new 0 0 357.33 414.39;" xml:space="preserve">
																													<style type="text/css">
																														.st0d {
																															clip-path: url(#SVGID_2d_);
																															fill: #C5F7FC;
																														}
																													</style>
																													<g>
																														<defs>
																															<rect id="SVGID_1d_" width="357.33" height="414.39">
																															</rect>
																														</defs>
																														<clipPath id="SVGID_2d_">
																															<use xlink:href="#SVGID_1d_" style="overflow:visible;">
																															</use>
																														</clipPath>
																														<path class="st0d" d="M240.1,47.88V26.74C240.09,11.97,228.11,0,213.34,0h-62.4c-14.77,0-26.76,11.97-26.77,26.74v21.71   c0,2.41,2.23,4.11,4.67,3.54c17.65-5.1,35.93-7.67,54.3-7.65c17.8,0,35.42,2.41,52.45,7.09C237.87,51.99,240.1,50.32,240.1,47.88    M69.1,75.55L58.44,64.89C48,54.44,31.06,54.43,20.61,64.87c0,0.01-0.01,0.01-0.01,0.01L7.86,77.6   c-10.43,10.37-10.49,27.24-0.12,37.67c0.04,0.04,0.08,0.08,0.12,0.11l10.48,10.48c1.69,1.67,4.13,1.28,5.62-0.39   c6.18-8.49,13.01-16.5,20.42-23.94c7.47-7.5,15.55-14.37,24.15-20.55C70.4,79.86,70.59,77.24,69.1,75.55 M182.97,142.67v91.45   c0,2.62,2.82,4.49,5.24,3.18l81.3-42.08c1.85-0.92,2.41-3.18,1.49-5.03c-16.85-29.57-48.14-49.76-84.28-51.07   C184.84,139.12,182.97,140.61,182.97,142.67 M182.97,362.97c-67.79,0-122.86-55-122.86-122.68c0-67.69,55.07-122.66,122.86-122.66   c67.82,0,122.87,54.97,122.87,122.66C305.84,307.97,250.97,362.97,182.97,362.97 M182.97,66.02C86.69,66.02,8.6,144.01,8.6,240.28   c0,96.3,78.09,174.11,174.37,174.11c96.28,0,174.37-77.99,174.37-174.29S279.42,66.02,182.97,66.02">
																														</path>
																													</g>
																												</svg>
																											</div>
																										</div>
																										<div class="text-wrap">
																											<h3 class="headline-2">
																												Support
																												service
																											</h3>
																											<div class="desc">
																											A support team or department develops and maintains many internal systems necessary for perfect communication and work.
																											</div>
																											
																										</div>
																									</div>
																								</div>
																							</div>
																							<div class="elementor-element elementor-element-7b966c8 elementor-widget elementor-widget-spacer" data-id="7b966c8" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>

																			</div>
																		</div>
																	</section>

																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-4f7084a elementor-section-stretched elementor-section-boxed elementor-section-height-default elementor-section-height-default" id="experience-section" data-id="4f7084a" data-element_type="section" data-settings="{&quot;stretch_section&quot;:&quot;section-stretched&quot;,&quot;background_background&quot;:&quot;classic&quot;}" style="top: 0px;  width: 1903px; left: -366.5px;margin-bottom: 0 !important;">
												<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-52e892d" data-id="52e892d" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap" style="top: 200px;">
																	<div class="elementor-element elementor-element-6977e73 elementor-widget elementor-widget-spacer" data-id="6977e73" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-2c37ac2 align-center animated-fast elementor-widget elementor-widget-mae-headings animated fadeInUp" data-id="2c37ac2" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="mae-headings.default">
																		<div class="elementor-widget-container">
																			<div class="master-heading">
																				<h2 class="main-heading words chars splitting" data-splitting>
																					We believe that by working together, we do better</h2>
																				<div class="sub-heading">Start offering
																					your
																					clientele a better communication
																					experience
																					by using our application
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-4cad2f8 elementor-widget elementor-widget-spacer" data-id="4cad2f8" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>


																	<div class="elementor-element elementor-element-1aa895f elementor-widget elementor-widget-spacer" data-id="1aa895f" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
											<section class="elementor-section elementor-top-section elementor-element elementor-element-db7f4c0 elementor-section-boxed elementor-section-height-default elementor-section-height-default" id="contact-us" data-id="db7f4c0" data-element_type="section" style="margin-bottom: 100px !important;">
											<h2 class="main-heading words chars splitting text-center" data-splitting="" style="--word-total:2; --char-total:9;">Contact Us</h2>
											<div class="elementor-container elementor-column-gap-default">
													<div class="elementor-row">
														<div class="elementor-column elementor-col-80 elementor-top-column elementor-element elementor-element-0ed4ca3" data-id="0ed4ca3" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">


																	<div class="elementor-element elementor-element-00c8321 elementor-widget elementor-widget-spacer" data-id="00c8321" data-element_type="widget" data-widget_type="spacer.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-spacer">
																				<div class="elementor-spacer-inner">
																				</div>
																			</div>
																		</div>
																	</div>
																	<section class="elementor-section elementor-inner-section elementor-element elementor-element-1d153c3 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="1d153c3" data-element_type="section">
																		<div class="elementor-container elementor-column-gap-default">
																			<div class="elementor-row" style="display: block;">
																				<div class="elementor-column elementor-col-88 elementor-inner-column elementor-element elementor-element-764c0c3" data-id="764c0c3" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap" style="display: flex;">
																							<div class="elementor-element elementor-element-1ed108d align-center icon-has-bg icon-has-shadow animated-fast icon-position-top hover-effect-default elementor-widget elementor-widget-mae-icon-box animated fadeInUp" data-id="1ed108d" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:200}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box" style="flex-direction: inherit !important;">

																										<div class="icon-wrap">
																											<div class="master-icon" style="width: 60px !important;height: 60px !important;">
																											<i class="fas fa-map-marker"></i>
																											</div>
																											<h3 class="headline-2">Address</h3>
																										</div>
																										<div class="icon-wrap2">
																											<div class="master-icon">
																											<i class="fas fa-map-marker"></i>
																											</div>
																										</div>
																										<div class="text-wrap" style="margin-left: 50px; text-align: left;">
																											<h3 class="headline-2" style="font-size: 18px !important; margin-top: 8px;margin-bottom: 2px !important;">
																												Address</h3>
																											<div class="desc" style="line-height: 1.2;">
																												71 Lower
																												Baggot
																												Street,
																												<br>
																												Dublin,
																												D02
																												P593,
																												IRELAND.
																											</div>
																										</div>
																									</div>

																								</div>
																							</div>
																							<div class="elementor-element elementor-element-23411d2 elementor-widget elementor-widget-spacer" data-id="23411d2" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-88 elementor-inner-column elementor-element elementor-element-c18f235" data-id="c18f235" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-9260e7f align-center icon-has-bg icon-has-shadow animated-fast icon-position-top hover-effect-default elementor-widget elementor-widget-mae-icon-box animated fadeInUp" data-id="9260e7f" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:400}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box" style="flex-direction: inherit !important;">

																										<div class="icon-wrap">
																											<div class="master-icon" style="width: 60px !important; height: 60px !important;">
																											<i class="fas fa-phone"></i>
																											</div>
																											<h3 class="headline-2">
																												(+1)
																												212-946-2707
																											</h3>
																										</div>
																										<div class="icon-wrap2">
																											<div class="master-icon">
																											<i class="fas fa-phone"></i>
																											</div>
																										</div>
																										<div class="text-wrap" style="margin-left: 50px; text-align: left;">
																											<h3 class="headline-2" style="font-size: 18px !important;margin-top: 8px;margin-bottom: 2px !important;">
																												Phone number
																											</h3>
																											<div class="desc">
																											(+1) 212-946-2707
																											</div>
																										</div>
																									</div>

																								</div>
																							</div>
																							<div class="elementor-element elementor-element-c329a97 elementor-widget elementor-widget-spacer" data-id="c329a97" data-element_type="widget" data-widget_type="spacer.default">
																								<div class="elementor-widget-container">
																									<div class="elementor-spacer">
																										<div class="elementor-spacer-inner">
																										</div>
																									</div>
																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																				<div class="elementor-column elementor-col-88 elementor-inner-column elementor-element elementor-element-093b5c7" data-id="093b5c7" data-element_type="column">
																					<div class="elementor-column-wrap elementor-element-populated">
																						<div class="elementor-widget-wrap">
																							<div class="elementor-element elementor-element-b7d7733 align-center icon-has-bg icon-has-shadow animated-fast icon-position-top hover-effect-default elementor-widget elementor-widget-mae-icon-box animated fadeInUp" data-id="b7d7733" data-element_type="widget" data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;,&quot;_animation_delay&quot;:600}" data-widget_type="mae-icon-box.default">
																								<div class="elementor-widget-container">
																									<div class="bg-hover">
																									</div>
																									<div class="master-icon-box" style="flex-direction: inherit !important;">

																										<div class="icon-wrap">
																											<div class="master-icon" style="width: 60px !important; height: 60px !important;">
																											<i class="fas fa-at"></i>
																											</div>
																											<h3 class="headline-2" style="font-size: 18px !important;">
																											cs@voxalo.ie
																											</h3>
																										</div>
																										<div class="icon-wrap2">
																											<div class="master-icon">
																												<i class="fas fa-at"></i>
																											</div>
																										</div>
																										<div class="text-wrap" style="margin-left: 50px; text-align: left;">
																											<h3 class="headline-2" style="font-size: 18px !important; margin-top: 8px;margin-bottom: 2px !important;">
																											Email address
																											</h3>
																											<div class="desc">
																											cs@voxalo.ie
																											</div>
																										</div>
																									</div>

																								</div>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</section>
																</div>
															</div>
														</div>
														<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-c79c202" data-id="c79c202" data-element_type="column">
															<div class="elementor-column-wrap elementor-element-populated">
																<div class="elementor-widget-wrap">
																	<div class="elementor-element elementor-element-acf4476 animated-fast align-left elementor-widget elementor-widget-mae-headings animated fadeInRight" data-id="acf4476" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:400,&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="mae-headings.default">
																		<div class="elementor-widget-container">
																			<div class="master-heading">

																				<h2 class="main-heading words chars splitting" data-splitting="" style="--word-total:8; --char-total:41;">Please use the form below for business inquiries</h2>
																			</div>
																		</div>
																	</div>
																	<div class="elementor-element elementor-element-192a2ec align-justify cf7-style-1 animated-fast accent elementor-widget elementor-widget-mae-contact-form-7 animated fadeInRight" data-id="192a2ec" data-element_type="widget" data-settings="{&quot;_animation_delay&quot;:400,&quot;_animation&quot;:&quot;fadeInRight&quot;}" data-widget_type="mae-contact-form-7.default">
																		<div class="elementor-widget-container">
																			<div class="elementor-shortcode master-cf7-0">
																				<div role="form" class="wpcf7" id="wpcf7-f4831-p5018-o1" lang="en-US" dir="ltr">
																					<div class="screen-reader-response">
																						<p role="status" aria-live="polite" aria-atomic="true"></p>
																						<ul></ul>
																					</div>
																					<?php if (!empty($msg)) {
																						echo "<h4>$msg</h4>";
																					} ?>
																					<form method="post">
																						<div class="name-area">
																							<span><input type="text" name="your-name" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your Name"></span>
																						</div>
																						<div class="email-area">
																							<span><input type="email" name="your-email" value="" size="40" aria-required="true" aria-invalid="false" placeholder="Your Email"></span>
																						</div>
																						<div class="message-area">
																							<span><textarea name="your-message" cols="40" rows="10" aria-invalid="false" placeholder="Your Message"></textarea></span>
																						</div>
																						<div class="master-button">
																							<input type="submit" name="send" value="Submit"><br>
																							<span class="hover-effect"></span>
																						</div>
																					</form>
																				</div>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</section>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
					<!-- /#site-content -->
				</div>
				<!-- /#content-wrap -->
			</div>
			<!-- /#site-main -->

			<!-- #site-footer -->
			<div class="footer-wrap" style="
				z-index: 1;
				width: 100%;
				bottom: 0px;
			  ">
				

				<div id="bottom" class="style-2">
					<div class="silvertech-container">
						<div class="bottom-bar-inner-wrap">
							<div class="inner-wrap clearfix">
								<div id="copyright">
									Copyright © 2022 Voxalo. All rights reserved. 
								</div>

								<div class="bottom-bar-menu">
									<div class="bottom-bar-menu">
										<ul id="menu-bottom-menu" class="bottom-nav">
											<li id="menu-item-11059" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11059">
												<a href="privacy_notice.html">Privacy Policy</a>
											</li>
											<li id="menu-item-11060" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11060">
												<a href="">Imprint</a>
											</li>
										</ul>
									</div>
									<!-- /.bottom-bar-menu -->
								</div>
								<!-- /.bottom-bar-menu -->
							</div>
							<!-- /.bottom-bar-copyright -->
						</div>
					</div>

					<a id="scroll-top" class="show" onclick="BackToTop(this)"></a>
				</div>
				<!-- /#bottom -->
			</div>
			<!-- /#site-footer -->
		</div>
	</div>
	<script type="text/javascript">
		if (typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
				err += "</div>";
				var slider = document.getElementById(sliderID);
				slider.innerHTML = err;
				slider.style.display = "block";
			}
		}
		function anchor(element){
			window.location.href = element.href
		}
		function BackToTop(element){
			window.scrollTo(0, 0);
		}
	</script>
	<link rel='stylesheet' id='e-animations-css' href='assets/wp-content/plugins/elementor/assets/lib/animations/animations.mina7a0.css?ver=3.6.1' type='text/css' media='all' />
	<script type='text/javascript' src='assets/wp-includes/js/jquery/ui/core.min0028.js?ver=1.13.1' id='jquery-ui-core-js'></script>
	<script type='text/javascript' src='assets/wp-includes/js/jquery/ui/datepicker.min0028.js?ver=1.13.1' id='jquery-ui-datepicker-js'></script>
	<script type='text/javascript' id='jquery-ui-datepicker-js-after'>
		jQuery(function(jQuery) {
			jQuery.datepicker.setDefaults({
				"closeText": "Close",
				"currentText": "Today",
				"monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
				"monthNamesShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
				"nextText": "Next",
				"prevText": "Previous",
				"dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
				"dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
				"dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
				"dateFormat": "MM d, yy",
				"firstDay": 1,
				"isRTL": false
			});
		});
	</script>
	<script type='text/javascript' src='assets/wp-content/plugins/booked/assets/js/spin.min7406.js?ver=2.0.1' id='booked-spin-js-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/booked/assets/js/spin.jquery7406.js?ver=2.0.1' id='booked-spin-jquery-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/booked/assets/js/tooltipster/js/jquery.tooltipster.min9b70.js?ver=3.3.0' id='booked-tooltipster-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/booked/assets/js/functions25b6.js?ver=2.3.5' id='booked-functions-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/slick5152.js?ver=1.0' id='slick-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/alterClass5152.js?ver=1.0' id='alterClass-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/core5152.js?ver=1.0' id='mae-core-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/init5152.js?ver=1.0' id='mae-init-js'></script>
	<script type='text/javascript' src='assets/wp-includes/js/dist/vendor/regenerator-runtime.min3937.js?ver=0.13.9' id='regenerator-runtime-js'></script>
	<script type='text/javascript' src='assets/wp-includes/js/dist/vendor/wp-polyfill.min2c7c.js?ver=3.15.0' id='wp-polyfill-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/animsitionf39e.js?ver=4.0.1' id='animsition-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/booked/includes/add-ons/frontend-agents/js/functions25b6.js?ver=2.3.5' id='booked-fea-js-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/html5shiv1ac1.js?ver=3.7.3' id='html5shiv-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/respond6f3e.js?ver=1.3.0' id='respond-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/matchmedia8a54.js?ver=1.0.0' id='matchmedia-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/easing6f3e.js?ver=1.3.0' id='easing-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/fitvidsf488.js?ver=1.1.0' id='fitvids-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/splittexta7a0.js?ver=3.6.1' id='splittext-js'></script>
	<script type='text/javascript' src='assets/wp-content/themes/silvertech/assets/js/main8a54.js?ver=1.0.0' id='silvertech-theme-script-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/appear5152.js?ver=1.0' id='appear-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/magnific.popup5152.js?ver=1.0' id='magnific-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/waitforimages5152.js?ver=1.0' id='waitforimages-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/masterlayer-addons-for-elementor/assets/js/flickity5152.js?ver=1.0' id='flickity-js'></script>
	<script type='text/javascript' defer src='assets/wp-content/plugins/mailchimp-for-wp/assets/js/forms6c42.js?ver=4.8.7' id='mc4wp-forms-api-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/js/webpack.runtime.mina7a0.js?ver=3.6.1' id='elementor-webpack-runtime-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/js/frontend-modules.mina7a0.js?ver=3.6.1' id='elementor-frontend-modules-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min05da.js?ver=4.0.2' id='elementor-waypoints-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/lib/swiper/swiper.min48f5.js?ver=5.3.6' id='swiper-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/lib/share-link/share-link.mina7a0.js?ver=3.6.1' id='share-link-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/lib/dialog/dialog.mind227.js?ver=4.9.0' id='elementor-dialog-js'></script>
	<script type='text/javascript' id='elementor-frontend-js-before'>
		var elementorFrontendConfig = {
			"environmentMode": {
				"edit": false,
				"wpPreview": false,
				"isScriptDebug": false
			},
			"i18n": {
				"shareOnFacebook": "Share on Facebook",
				"shareOnTwitter": "Share on Twitter",
				"pinIt": "Pin it",
				"download": "Download",
				"downloadImage": "Download image",
				"fullscreen": "Fullscreen",
				"zoom": "Zoom",
				"share": "Share",
				"playVideo": "Play Video",
				"previous": "Previous",
				"next": "Next",
				"close": "Close"
			},
			"is_rtl": false,
			"breakpoints": {
				"xs": 0,
				"sm": 480,
				"md": 768,
				"lg": 1025,
				"xl": 1440,
				"xxl": 1600
			},
			"responsive": {
				"breakpoints": {
					"mobile": {
						"label": "Mobile",
						"value": 767,
						"default_value": 767,
						"direction": "max",
						"is_enabled": true
					},
					"mobile_extra": {
						"label": "Mobile Extra",
						"value": 880,
						"default_value": 880,
						"direction": "max",
						"is_enabled": false
					},
					"tablet": {
						"label": "Tablet",
						"value": 1024,
						"default_value": 1024,
						"direction": "max",
						"is_enabled": true
					},
					"tablet_extra": {
						"label": "Tablet Extra",
						"value": 1200,
						"default_value": 1200,
						"direction": "max",
						"is_enabled": false
					},
					"laptop": {
						"label": "Laptop",
						"value": 1366,
						"default_value": 1366,
						"direction": "max",
						"is_enabled": false
					},
					"widescreen": {
						"label": "Widescreen",
						"value": 2400,
						"default_value": 2400,
						"direction": "min",
						"is_enabled": false
					}
				}
			},
			"version": "3.6.1",
			"is_static": false,
			"experimentalFeatures": {
				"e_hidden_wordpress_widgets": true,
				"elements-color-picker": true,
				"favorite-widgets": true,
				"admin-top-bar": true
			},
			"urls": {
				"assets": "https:\/\/ninzio.com\/silvertech\/wp-content\/plugins\/elementor\/assets\/"
			},
			"settings": {
				"page": [],
				"editorPreferences": []
			},
			"kit": {
				"active_breakpoints": ["viewport_mobile", "viewport_tablet"],
				"global_image_lightbox": "yes",
				"lightbox_enable_counter": "yes",
				"lightbox_enable_fullscreen": "yes",
				"lightbox_enable_zoom": "yes",
				"lightbox_enable_share": "yes",
				"lightbox_title_src": "title",
				"lightbox_description_src": "description"
			},
			"post": {
				"id": 5018,
				"title": "Home%2001%20%E2%80%93%20SilverTech",
				"excerpt": "",
				"featuredImage": false
			}
		};
	</script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/js/frontend.mina7a0.js?ver=3.6.1' id='elementor-frontend-js'></script>
	<script type='text/javascript' src='assets/wp-content/plugins/elementor/assets/js/preloaded-modules.mina7a0.js' id='preloaded-modules-js'></script>
</body>

</html>