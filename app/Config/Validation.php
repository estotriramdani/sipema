<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
		
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
        // 'pass_confirm' 	=> 'required|matches[password]',
		'email'        	=> 'required',
		'password'      => 'required',
		'kode_identitas'=> 'required',
		'name'          => 'required',
		'jenis_kelamin' => 'required',
		'alamat'        => 'required',
		'foto'          => '',
		//'tempat_lahir'  => 'required',
		'tanggal_lahir' => 'required',
		'role_id'       => 'required'
	];
	
	public $register_errors = [
        'email'    => [
			'required'    => 'Mohon masukkan alamat email.',
            'valid_email' => 'Email yang dimasukkan tidak valid.'
		],
		'kode_identitas' => [
            'required'    => 'Mohon masukkan NIS/NIP.',
		],
		'name' => [
            'required'    => 'Mohon masukkan nama anda.',
		],
		'alamat' => [
            'required'    => 'Mohon masukkan alamat anda.',
		],
		// 'tempat_lahir' => [
        //     'required'    => 'Mohon masukkan tempat lahir.',
		// ],
		'tanggal_lahir' => [
            'required'    => 'Mohon masukkan tanggal lahir.',
		],
		'role_id' => [
            'required'    => 'Role ID error, mohoh kontak adminsipema@gmail.com',
		],
	];
	
}
