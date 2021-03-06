<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;

class Filters extends BaseConfig
{
	// Makes reading things below nicer,
	// and simpler to change out script that's used.
	public $aliases = [
		'csrf'     => \CodeIgniter\Filters\CSRF::class,
		'toolbar'  => \CodeIgniter\Filters\DebugToolbar::class,
		'honeypot' => \CodeIgniter\Filters\Honeypot::class,
		'auth' 	   => \App\Filters\Auth::class,
		'noauth'   => \App\Filters\NoAuth::class,
		'authadmin' => \App\Filters\AuthAdmin::class,
		'authguru' => \App\Filters\AuthGuru::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'toolbar',
			//'honeypot'
		],
	];

	// Works on all of a particular HTTP method
	// (GET, POST, etc) as BEFORE filters only
	//     like: 'post' => ['CSRF', 'throttle'],
	public $methods = [];

	// List filter aliases and any before/after uri patterns
	// that they should run on, like:
	//    'isLoggedIn' => ['before' => ['account/*', 'profiles/*']],
	public $filters = [
		'auth' => ['before' => ['dashboard', '/auth/logout']],
		'noauth' => ['before' => ['', 'auth/registration', 'auth', '/auth/login']],
		//'authadmin' => ['before' => []],
		'authguru' => ['before' => ['pojokguru/*', 'materi/create', 'materi/edit', 'materi/save', 'soal/create', 'soal/edit']],
	];
}
