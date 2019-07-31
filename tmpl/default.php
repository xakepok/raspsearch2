<?php
defined('_JEXEC') or die;

require_once JPATH_ADMINISTRATOR . '/components/com_rw/helpers/rw.php';

// Access to module parameters
$domain = $params->get('domain', 'https://www.joomla.org');
$itemID = RwHelper::getMenuItemId('schedule');
$action = JRoute::_("index.php?option=com_rw&amp;view=schedule&amp;Itemid={$itemID}");
$date = JFactory::getApplication()->input->getString('date', JDate::getInstance("+3 hour")->format("d.m.Y"));
?>

<form action="<?php echo $action;?>" method="get" name="raspSearch">
    <div class="form-row">
        <div class="col-lg-4">
            <select name="from" id="rasp_from" class="form-control mt-1 mb-1" style="width:auto;">

            </select>
        </div>
        <div class="col-lg-4">
            <select name="to" id="rasp_to" class="form-control mt-1 mb-1" style="width:auto;">
                
            </select>
        </div>
        <div class="col-lg-2">
            <div class="input-group date">
                <input type="text" name="date" placeholder="<?php echo JText::sprintf('MOD_RASPSEARCH_FORM_DATE');?>" value="<?php echo $date;?>" class="form-control w-100 mt-1"><span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
            </div>
        </div>
        <div class="col-lg-2">
            <button class="btn btn-success mt-1 mb-1 w-100" type="submit"><?php echo JText::sprintf('MOD_RASPSEARCH_BUTTON_SEARCH_TEXT');?></button>
        </div>
    </div>
</form>