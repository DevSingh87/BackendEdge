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
 * Home
 *
 * @package         BackendPro
 * @subpackage      Controllers
 */
class Home extends Admin_Controller
{
	function __construct()
	{
		parent::__construct();

		log_message('debug','BackendPro : Home class loaded');
	}

function index()
{
   
	// Include dashboard Javascript code
	$this->bep_assets->load_asset('bep_dashboard');

	// Load the dashboard library
	$this->load->library('dashboard/dashboard');

	// Load any widget libraries
	$this->load->library('dashboard/Statistic_widget');

	// Assign widgets to dashboard
	$this->dashboard->assign_widget(new widget($this->lang->line('dashboard_example'),$this->lang->line('dashboard_example_body')),'left');
	$this->dashboard->assign_widget(new widget($this->lang->line('dashboard_statistics'),$this->statistic_widget->create()),'right');

	// Load dashboard onto page
	$data['dashboard'] = $this->dashboard->output();

	// Display Page
	$data['header'] = $this->lang->line('backendpro_dashboard');
	$data['page'] = $this->config->item('backendpro_template_admin') . "home";
	$this->load->view($this->_container,$data);
    
}


}
/* End of file home.php */
/* Location: ./system/application/controllers/admin/home.php */