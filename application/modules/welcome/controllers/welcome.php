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
 * An open source development control panel written in PHP
 *
 * @package		BackendPro
 * @author		Adam Price
 * @copyright	Copyright (c) 2008, Adam Price
 * @license		http://www.gnu.org/licenses/lgpl.html
 * @link		http://www.kaydoo.co.uk/projects/backendpro
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * Welcome
 *
 * The default welcome controller
 *
 * @package  	BackendPro
 * @subpackage  Controllers
 */
class Welcome extends Public_Controller
{
	function Welcome()
	{
		parent::__construct();
	}

	function index()
	{
		// Display Page
		$data['header'] = "Welcome";
		$data['page'] = $this->config->item('backendpro_template_public') . 'welcome';
		$data['module'] = 'welcome';
		$this->load->view($this->_container,$data);
	}
}


/* End of file welcome.php */
/* Location: ./modules/welcome/controllers/welcome.php */