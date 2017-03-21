<?php /* Smarty version 3.1.27, created on 2017-01-14 05:17:41
         compiled from "C:\xampp\htdocs\nyra_cms\application\modules\diary\views\add.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18267587a4f2557d694_48898372%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f4d2c3f19b88699d0170c120a6d9efdb0d0df03c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\nyra_cms\\application\\modules\\diary\\views\\add.tpl',
      1 => 1484410657,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18267587a4f2557d694_48898372',
  'variables' => 
  array (
    'diary_item' => 0,
    'success' => 0,
    'form' => 0,
    'day' => 0,
    'month' => 0,
    'year' => 0,
    'hour' => 0,
    'minute' => 0,
    'period' => 0,
    'form_options' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_587a4f256176a4_49347207',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_587a4f256176a4_49347207')) {
function content_587a4f256176a4_49347207 ($_smarty_tpl) {
if (!is_callable('smarty_function_action_title')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.action_title.php';
if (!is_callable('smarty_function_theme_plugin')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\function.theme_plugin.php';
if (!is_callable('smarty_block_footer_block')) require_once 'C:\\xampp\\htdocs\\nyra_cms\\application\\hooks/smarty/plugins\\block.footer_block.php';

$_smarty_tpl->properties['nocache_hash'] = '18267587a4f2557d694_48898372';
?>


<?php if ($_smarty_tpl->tpl_vars['diary_item']->value->id) {?>
    <?php echo smarty_function_action_title(array('title'=>"Diary Item: ".((string)$_smarty_tpl->tpl_vars['diary_item']->value->title)),$_smarty_tpl);?>

<?php } else { ?>
    <?php echo smarty_function_action_title(array('title'=>'Add Diary Item'),$_smarty_tpl);?>

<?php }?>

<?php echo smarty_function_theme_plugin(array('name'=>'famfamfam-icons'),$_smarty_tpl);?>


<?php $_smarty_tpl->tpl_vars['year'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getYear(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['month'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getMonth(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['day'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getDay(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['hour'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getHour(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['minute'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getMinute(), null, 0);?>
<?php $_smarty_tpl->tpl_vars['period'] = new Smarty_Variable($_smarty_tpl->tpl_vars['diary_item']->value->getPeriod(), null, 0);?>

<?php if ($_smarty_tpl->tpl_vars['success']->value) {?><div class="alert alert-success">Saved</div><?php }?>
<?php echo $_smarty_tpl->tpl_vars['form']->value->open();?>



    <?php ob_start();
echo lang('change');
$_tmp1=ob_get_clean();
ob_start();
echo DateHelper::getDayOptionsHtml();
$_tmp2=ob_get_clean();
ob_start();
echo DateHelper::getMonthOptionsHtml();
$_tmp3=ob_get_clean();
ob_start();
echo DateHelper::getYearOptionsHtml();
$_tmp4=ob_get_clean();
ob_start();
echo form_error('date');
$_tmp5=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['hour']->value;
$_tmp6=ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['minute']->value;
$_tmp7=ob_get_clean();
ob_start();
echo lang('change');
$_tmp8=ob_get_clean();
ob_start();
echo DateHelper::getHourOptionsHtml(false,'time[hour]',$_tmp6);
$_tmp9=ob_get_clean();
ob_start();
echo DateHelper::getMinuteOptionsHtml('time[minute]',$_tmp7);
$_tmp10=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['period']->value == 'am') {
echo " selected ";
}
$_tmp11=ob_get_clean();
ob_start();
if ($_smarty_tpl->tpl_vars['period']->value == 'pm') {
echo " selected ";
}
$_tmp12=ob_get_clean();
ob_start();
echo form_error('time');
$_tmp13=ob_get_clean();
$_smarty_tpl->tpl_vars['form_options'] = new Smarty_Variable(array('template_field_date'=>"<div id='input-group-date' class='form-group'>
                                    <label> [[label_title]]</label>
                                    <p> 
                                        <span id='item-day'>".((string)$_smarty_tpl->tpl_vars['day']->value)."</span>
                                         -
                                        <span id='item-month'>".((string)$_smarty_tpl->tpl_vars['month']->value)." </span>
                                         -
                                        <span id='item-year'>".((string)$_smarty_tpl->tpl_vars['year']->value)."</span>
                                     <span data-element-target='.input-group-date'  title='".$_tmp1."'
                                            class='fam date_edit display-toggle-btn'></span>
                                    </p>
                                    <select name='date[day]' data-span-target='#item-day' class='input-group-date'>
                                        ".$_tmp2."
                                    </select>
                                    <select name='date[month]' data-span-target='#item-month' class='input-group-date'>
                                        ".$_tmp3."
                                    </select>
                                    <select name='date[year]' data-span-target='#item-year' class=' input-group-date'>
                                        ".$_tmp4."
                                    </select>
                                    ".$_tmp5."
                                </div>",'template_field_time'=>"<div id='input-group-time' class='form-group'>
                                    <label> [[label_title]] </label>
                                    <p> 
                                        <span id='item-hour'>".((string)$_smarty_tpl->tpl_vars['hour']->value)."</span>
                                         :
                                        <span id='item-minute'>".((string)$_smarty_tpl->tpl_vars['minute']->value)." </span>
                                         
                                        <span id='item-period'>".((string)$_smarty_tpl->tpl_vars['period']->value)."</span>
                                     <span data-element-target='.input-group-time' title='".$_tmp8."'
                                            class='fam time_add display-toggle-btn'></span>
                                    </p>
                                    <select name='time[hour]' data-span-target='#item-hour' class='input-group-time'>
                                        ".$_tmp9."
                                    </select>
                                    <select name='time[minute]' data-span-target='#item-minute' class='input-group-time'>
                                        ".$_tmp10."
                                    </select>
                                    <select name='time[period]' data-span-target='#item-period' class=' input-group-time'>
                                        <option value='am' ".$_tmp11." > Am </option>
                                        <option value='pm' ".$_tmp12."  > Pm </option>
                                    </select>
                                    ".$_tmp13."
                                </div>"), null, 0);?>
    <?php echo $_smarty_tpl->tpl_vars['form']->value->render($_smarty_tpl->tpl_vars['diary_item']->value,$_smarty_tpl->tpl_vars['form_options']->value);?>

    <?php echo $_smarty_tpl->tpl_vars['form']->value->SubmitButton('class="btn btn-success btn-block"');?>

<?php echo form_close();?>


<style>
    .input-group-date, .input-group-time {
        display: none
    }
</style>

<?php $_smarty_tpl->smarty->_tag_stack[] = array('footer_block', array()); $_block_repeat=true; echo smarty_block_footer_block(array(), null, $_smarty_tpl, $_block_repeat);while ($_block_repeat) { ob_start();?>


<?php echo '<script'; ?>
>
    
    $('.input-group-date,.input-group-time').change( function(){
        var elem = $( this );
        var target = elem.data('span-target');
        $(target).html(  elem.val() );
    });
    $('.display-toggle-btn').click( function(){
        var elem = $( this );
        var target = elem.data('element-target');
        $( target ).toggle({ 'display' : 'inline'});
    });
<?php echo '</script'; ?>
>
<?php $_block_content = ob_get_clean(); $_block_repeat=false; echo smarty_block_footer_block(array(), $_block_content, $_smarty_tpl, $_block_repeat);  } array_pop($_smarty_tpl->smarty->_tag_stack);

}
}
?>