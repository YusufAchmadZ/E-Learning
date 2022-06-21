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
		'login'      => \Myth\Auth\Filters\LoginFilter::class,
		'role'       => \Myth\Auth\Filters\RoleFilter::class,
		'permission' => \Myth\Auth\Filters\PermissionFilter::class,
		'authfilter' => \App\Filters\AuthFilter::class,
		'gurufilter' => \App\Filters\GuruFilter::class,
		'adminfilter' => \App\Filters\AdminFilter::class,
	];

	// Always applied before every request
	public $globals = [
		'before' => [
			'authfilter' => [
				'except' => [
					'/',
					'auth/login',
					'auth', 'auth/*',

				]
			],
			'gurufilter' => [
				'except' => [
					'/',
					'auth/login_guru',
					'auth', 'auth/*',
				]
			],
			'adminfilter' => [
				'except' => [
					'/',
					'auth/login_admin',
					'auth/login',
					'auth/login_guru',
					'auth', 'auth/*',
				]
			],
			//'honeypot'
			// 'csrf',
		],
		'after'  => [
			'authfilter' => [
				'except' => [
					'home', 'home/*',
					'diskusi', 'diskusi/*',
					'user', 'user/*',
					'kelas', 'kelas/*',
					'siswa', 'siswa/*',
				]
			],
			'gurufilter' => [
				'except' => [
					'home', 'home/*',
					'diskusi', 'diskusi/*',
					'forum', 'forum/*',
					'guru', 'guru/*',
					'kelas', 'kelas/*',
					'kuis', 'kuis/*',
					'learning', 'learning/*',
					'mapel', 'mapel/*',
					'learning', 'learning/*',
					'materi', 'materi/*',
					'sumber', 'sumber/*',
					'siswa', 'siswa/*',
					'pesan', 'pesan/*',
				]
			],
			'adminfilter' => [
				'except' => [
					'home', 'home/*',
					'diskusi', 'diskusi/*',
					'forum', 'forum/*',
					'guru', 'guru/*',
					'kelas', 'kelas/*',
					'kuis', 'kuis/*',
					'learning', 'learning/*',
					'mapel', 'mapel/*',
					'learning', 'learning/*',
					'materi', 'materi/*',
					'siswa', 'siswa/*',
					'sumber', 'sumber/*',
					'auth', 'auth/*',
					'pesan', 'pesan/*',

				]
			],
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
	public $filters = [];
}
