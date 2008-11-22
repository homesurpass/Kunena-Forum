<?php
/**
 * @version		$Id$
 * @package		Kunena
 * @subpackage	com_kunena
 * @copyright	(C) 2008 Kunena. All rights reserved, see COPYRIGHT.php
 * @license		GNU General Public License, see LICENSE.php
 * @link		http://www.kunena.com
 */

defined('_JEXEC') or die('Invalid Request.');

require_once (JPATH_COMPONENT.'/libraries/view.php');

/**
 * The HTML Kunena members view
 *
 * @package		Kunena
 * @subpackage	com_kunena
 * @version		1.0
 */
class KunenaViewMembers extends KunenaView
{
	/**
	 * Display the view
	 *
	 * @access	public
	 */
	function display($tpl = null)
	{
		$state = $this->get('state');

		// assign some variables to the view
		$this->assignRef('params', $state->get('params'));
		$this->assignRef('user', JFactory::getUser());
		$this->assignRef('session', $this->get('Session'));
		$this->assignRef('members', $this->get('Items'));

		parent::display($tpl);
	}
}
