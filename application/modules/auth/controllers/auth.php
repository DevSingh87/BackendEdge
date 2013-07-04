<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * BackendEdge
 *
 * An updated version of BackedPro, an open source development control panel written in PHP
 *
 * @package		BackendEdge
 * @author		Dev Kumar
 * @copyright	Copyright (c) 2013, Dev Kumar
 * @license		http://www.gnu.org/licenses/lgpl.html
 * @link		https://github.com/TechieDev/BackendEdge
 * @email       techiedev1987@gmail.com
 * @filesource
 */
/**
 * BackendPro
 *
 * A website backend system for developers for PHP 4.3.2 or newer
 *
 * @package         BackendPro
 * @author          Adam Price
 * @copyright       Copyright (c) 2008
 * @license         http://www.gnu.org/licenses/lgpl.html
 * @link            http://www.kaydoo.co.uk/projects/backendpro
 * @filesource
 */

// ---------------------------------------------------------------------------

/**
 * auth.php
 *
 * Authentication Controller
 *
 * @package			BackendPro
 * @subpackage		Controllers
 */
class auth extends Public_Controller
{
	/**
	 * Constructor
	 */
	function __construct()
	{
		parent::__construct();

		// Load the Auth_form_processing class
		$this->load->library('auth/auth_form_processing');
		log_message('debug','BackendPro : Auth class loaded');
                //$this->output->enable_profiler(TRUE);
	}

	function index()
	{
		$this->login();
	}

	function login()
	{
		$this->auth_form_processing->login_form($this->_container);
	}

        function login_submit()
        {
            $this->auth_form_processing->login();
        }

	function logout()
	{
		$this->auth_form_processing->logout();
	}

	function forgotten_password()
	{
		$this->auth_form_processing->forgotten_password_form($this->_container);
	}

	function register()
	{
		$this->auth_form_processing->register_form($this->_container);
	}

	function activate()
	{
		$this->auth_form_processing->activate();
	}
}
/* End of file auth.php */
/* Location: ./modules/auth/controllers/auth.php */