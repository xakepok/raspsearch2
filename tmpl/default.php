<?php
defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_rw/helpers/rw.php';

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
$itemID = RwHelper::getMenuItemId('schedule');
$action = JRoute::_("index.php?option=com_rw&amp;view=schedule&amp;Itemid={$itemID}");
?>

<form action="<?php echo $action;?>" method="get">
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
            <button class="btn btn-success mt-1 mb-1 w-100" type="submit"><?php echo JText::sprintf('MOD_RASPSEARCH_BUTTON_SEARCH_TEXT');?></button>
        </div>
    </div>
</form>