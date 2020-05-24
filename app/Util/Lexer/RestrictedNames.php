<?php

namespace App\Util\Lexer;

class RestrictedNames
{
	public static $additional = [
		'autoconfig',
		'blog',
		'broadcasthost',
		'copyright',
		'download',
		'domainadmin',
		'domainadministrator',
		'errors',
		'events',
		'example',
		'faq',
		'faqs',
		'features',
		'ftp',
		'guest',
		'guests',
		'hostmaster',
		'hostmaster',
		'imap',
		'info',
		'information',
		'is',
		'isatap',
		'it',
		'localdomain',
		'localhost',
		'mail',
		'mailer-daemon',
		'mailerdaemon',
		'marketing',
		'me',
		'mis',
		'mx',
		'no-reply',
		'nobody',
		'noc',
		'noreply',
		'ns0',
		'ns1',
		'ns2',
		'ns3',
		'ns4',
		'ns5',
		'ns6',
		'ns7',
		'ns8',
		'ns9',
		'owner',
		'pop',
		'pop3',
		'postmaster',
		'pricing',
		'root',
		'sales',
		'security',
		'signin',
		'signout',
		'smtp',
		'src',
		'ssladmin',
		'ssladministrator',
		'sslwebmaster',
		'sys',
		'sysadmin',
		'system',
		'tutorial',
		'tutorials',
		'usenet',
		'uucp',
		'webmaster',
		'wpad',
	];

	public static $reserved = [
		// Reserved for instance admin
		'admin',
		'administrator',

		// Static Assets
		'assets',
		'storage',

		// Laravel Horizon
		'horizon',

		// Reserved routes
		'a',
		'app',
		'about',
		'aboutus',
		'about-us',
		'abuse',
		'account',
		'admins',
		'api',
		'audio',
		'auth',
		'b',
		'bartender',
		'broadcast',
		'broadcaster',
		'booth',
		'bouncer',
		'c',
		'cdn',
		'circle',
		'circles',
		'checkpoint',
		'collection',
		'collections',
		'community',
		'communities',
		'contact',
		'contact-us',
		'contact_us',
		'costar',
		'costars',
		'css',
		'd',
		'dashboard',
		'dmca',
		'db',
		'deck',
		'dev',
		'developer',
		'developers',
		'discover',
		'discovers',
		'dj',
		'doc',
		'docs',
		'docs',
		'drive',
		'drives',
		'driver',
		'e',
		'email',
		'emails',
		'error',
		'explore',
		'export',
		'exports',
		'f',
		'feed',
		'font',
		'fonts',
		'follow',
		'follows',
		'followme',
		'follow-me',
		'follow_me',
		'g',
		'gdpr',
		'graph',
		'ghost',
		'ghosts',
		'group',
		'groups',
		'h',
		'home',
		'help',
		'helpcenter',
		'help-center',
		'help_center',
		'help_center_',
		'help-center-',
		'help-center_',
		'help_center-',
		'i',
		'img',
		'imgs',
		'image',
		'images',
		'invite',
		'invites',
		'import',
		'imports',
		'j',
		'js',
		'k',
		'key',
		'l',
		'lab',
		'labs',
		'legal',
		'live',
		'loop',
		'loops',
		'location',
		'locations',
		'login',
		'logout',
		'm',
		'media',
		'menu',
		'music',
		'n',
		'news',
		'new',
		'news',
		'news',
		'newsfeed',
		'newsroom',
		'newsrooms',
		'news-room',
		'news-rooms',
		'o',
		'oauth',
		'official',
		'p',
		'page',
		'pages',
		'pin',
		'pins',
		'photo',
		'photos',
		'password',
		'privacy',
		'private',
		'q',
		'quote',
		'query',
		'r',
		'register',
		'registers',
		'review',
		'reset',
		'report',
		'results',
		'reports',
		'robot',
		'robots',
		's',
		'sc',
		'search',
		'sell',
		'send',
		'settings',
		'short',
		'shortcode',
		'status',
		'statuses',
		'site',
		'sites',
		'stage',
		'static',
		'story',
		'stories',
		'support',
		'svg',
		'svgs',
		't',
		'terms',
		'telescope',
		'timeline',
		'timelines',
		'tour',
		'tv',
		'u',
		'user',
		'users',
		'username',
		'usernames',
		'v',
		'valet',
		'video',
		'videos',
		'vendor',
		'w',
		'waiter',
		'wall',
		'whats-new',
		'whatsnew',
		'whatnew',
		'whats-news',
		'ws',
		'wss',
		'www',
		'x',
		'y',
		'z',
		'400',
		'401',
		'403',
		'404',
		'500',
		'503',
		'504',
	];

	public static function get()
	{
		$banned = [];

		if(config('instance.username.banned')) {
			$banned = array_map('trim', explode(',', config('instance.username.banned')));
		}

		$additional = self::$additional;
		$reserved = self::$reserved;

		$res = array_merge($additional, $reserved, $banned);
		sort($res);
		
		return $res;
	}
}
