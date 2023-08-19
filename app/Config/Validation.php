<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Validation\StrictRules\CreditCardRules;
use CodeIgniter\Validation\StrictRules\FileRules;
use CodeIgniter\Validation\StrictRules\FormatRules;
use CodeIgniter\Validation\StrictRules\Rules;

class Validation extends BaseConfig
{
    // --------------------------------------------------------------------
    // Setup
    // --------------------------------------------------------------------

    /**
     * Stores the classes that contain the
     * rules that are available.
     *
     * @var string[]
     */
    public array $ruleSets = [
        Rules::class,
        FormatRules::class,
        FileRules::class,
        CreditCardRules::class,
    ];


    public $tracking = [
		'nib'     				=> 'required',
		'wave'     			    => 'required',
		'nama_lengkap'   		=> 'required',
		'kelas'   		        => 'required',
		'graduate_on'   		=> 'required',
		'tanggal_lahir'   		=> 'required',
		'asal_alamat'   		=> 'required',
		'domisili_alamat'   	=> 'required',
		'model_kerja'   		=> 'required',
	];

	public $tracking_errors = [

		'nib'     	=> [
			'required'			=> 'Nib  Required'
		],

		'wave'    			=> [
			'required'			=> 'Wave Required'
		],

		'nama_lengkap'   		=> [
			'required'			=> 'Nama Lengkap Required'
        ],
        'kelas'   		=> [
			'required'			=> 'Kelas Required'
		],
        'graduate_on'   		=> [
			'required'			=> 'Graduate On Required'
		],
        'tanggal_lahir'   		=> [
			'required'			=> 'Tanggal Lahir Required'
		],
        'asal_alamat'   		=> [
			'required'			=> 'Asal Alamat Required'
		],
        'domisili_alamat'   		=> [
			'required'			=> 'Domisili Alamat Required'
		],
        'model_kerja'   		=> [
			'required'			=> 'Model Kerja Required'
		],

	];


    /**
     * Specifies the views that are used to display the
     * errors.
     *
     * @var array<string, string>
     */
    public array $templates = [
        'list'   => 'CodeIgniter\Validation\Views\list',
        'single' => 'CodeIgniter\Validation\Views\single',
    ];

    // --------------------------------------------------------------------
    // Rules
    // --------------------------------------------------------------------
}
