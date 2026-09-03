/* To avoid CSS expressions while still supporting IE 7 and IE 6, use this script */
/* The script tag referencing this file must be placed before the ending body tag. */

/* Use conditional comments in order to target IE 7 and older:
	<!--[if lt IE 8]><!-->
	<script src="ie7/ie7.js"></script>
	<!--<![endif]-->
*/

(function() {
	function addIcon(el, entity) {
		var html = el.innerHTML;
		el.innerHTML = '<span style="font-family: \'auicon\'">' + entity + '</span>' + html;
	}
	var icons = {
		'icon-t_arrow-down': '&#xe900;',
		'icon-t_arrow-left-nav': '&#xe901;',
		'icon-t_arrow-left': '&#xe902;',
		'icon-t_arrow-right-nav': '&#xe903;',
		'icon-t_arrow-right': '&#xe904;',
		'icon-t_arrow-up': '&#xe905;',
		'icon-t_audius': '&#xe906;',
		'icon-t_bandcamp': '&#xe907;',
		'icon-t_BeatStars': '&#xe908;',
		'icon-t_cent-circle': '&#xe909;',
		'icon-t_cent': '&#xe90a;',
		'icon-t_close': '&#xe90b;',
		'icon-t_confirm': '&#xe90c;',
		'icon-t_cursor-down': '&#xe90d;',
		'icon-t_cursor-up': '&#xe90e;',
		'icon-t_dot': '&#xe90f;',
		'icon-t_enlarge-thin': '&#xe910;',
		'icon-t_enlarge': '&#xe911;',
		'icon-t_error': '&#xe912;',
		'icon-t_facebook': '&#xe913;',
		'icon-t_instagram-circle': '&#xe914;',
		'icon-t_instagram': '&#xe915;',
		'icon-t_LastFm': '&#xe916;',
		'icon-t_link-alt': '&#xe917;',
		'icon-t_link': '&#xe918;',
		'icon-t_linkedin-circle': '&#xe919;',
		'icon-t_linkedin': '&#xe91a;',
		'icon-t_list': '&#xe91b;',
		'icon-t_mail-circle': '&#xe91c;',
		'icon-t_mail': '&#xe91d;',
		'icon-t_mattiac': '&#xe91e;',
		'icon-t_next': '&#xe91f;',
		'icon-t_opensea': '&#xe920;',
		'icon-t_play': '&#xe921;',
		'icon-t_plus-circle': '&#xe922;',
		'icon-t_pointer': '&#xe923;',
		'icon-t_quote-close-alt': '&#xe924;',
		'icon-t_quote-close': '&#xe925;',
		'icon-t_quote-open-alt': '&#xe926;',
		'icon-t_quote-open': '&#xe927;',
		'icon-t_scroll-down': '&#xe928;',
		'icon-t_soundcloud': '&#xe929;',
		'icon-t_Spotify': '&#xe92a;',
		'icon-t_twitter-circle': '&#xe92b;',
		'icon-t_twitter': '&#xe92c;',
		'icon-t_vimeo-circle': '&#xe92d;',
		'icon-t_vimeo': '&#xe92e;',
		'icon-t_youtube-circle': '&#xe92f;',
		'icon-t_youtube': '&#xe930;',
		'0': 0
		},
		els = document.getElementsByTagName('*'),
		i, c, el;
	for (i = 0; ; i += 1) {
		el = els[i];
		if(!el) {
			break;
		}
		c = el.className;
		c = c.match(/icon-[^\s'"]+/);
		if (c && icons[c[0]]) {
			addIcon(el, icons[c[0]]);
		}
	}
}());
