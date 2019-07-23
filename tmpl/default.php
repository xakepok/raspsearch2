<?php
/**
 * @package    raspsearch
 *
 * @author     sharikov <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

defined('_JEXEC') or die;

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
?>

<form action="#" method="get">
    <div class="form-row">
        <div class="col-lg-5">
            <select name="from" id="rasp_from" class="form-control mt-1 mb-1" style="width:auto;">

            </select>
        </div>
        <div class="col-lg-5">
            <select name="to" id="rasp_to" class="form-control mt-1 mb-1" style="width:auto;">
                
            </select>
        </div>
        <div class="col-lg-2">
            <button class="btn btn-success mt-1 mb-1 w-100"><?php echo JText::sprintf('MOD_RASPSEARCH_BUTTON_SEARCH_TEXT');?></button>
        </div>
    </div>
</form>