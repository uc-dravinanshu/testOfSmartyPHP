<?php
/* Smarty version 4.3.0, created on 2023-02-20 05:05:58
  from 'C:\xampp\htdocs\smarty\smarty_test\template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.3.0',
  'unifunc' => 'content_63f2f1a6529d42_96980958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '399c76acd085ac9762d76342a2226967025a5175' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty\\smarty_test\\template.tpl',
      1 => 1676865953,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_63f2f1a6529d42_96980958 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),1=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.counter.php','function'=>'smarty_function_counter',),2=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\function.cycle.php','function'=>'smarty_function_cycle',),3=>array('file'=>'C:\\xampp\\htdocs\\smarty\\libs\\plugins\\modifier.count.php','function'=>'smarty_modifier_count',),));
?>
<br/><br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['someContent']->value);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['someContent']->value,20);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['someText']->value,30,'',true);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['someText']->value,30,"---",true);?>
 <br/>
<?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['someText']->value,10,"....",true,true);?>
<br/>


<?php echo preg_match_all('/[^\s]/u',$_smarty_tpl->tpl_vars['countChar']->value, $tmp);?>
 <br/>
<?php echo (preg_match_all('#[\r\n]+#', $_smarty_tpl->tpl_vars['countPara']->value, $tmp)+1);?>
 <br/>
<?php echo preg_match_all("#\w[\.\?\!](\W|$)#Su", $_smarty_tpl->tpl_vars['countSen']->value, $tmp);?>
 <br/>
<?php echo preg_match_all('/\p{L}[\p{L}\p{Mn}\p{Pd}\'\x{2019}]*/u', $_smarty_tpl->tpl_vars['countWord']->value, $tmp);?>
 <br/>


  
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['start']->value, 'index');
$_smarty_tpl->tpl_vars['index']->index = -1;
$_smarty_tpl->tpl_vars['index']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['index']->value) {
$_smarty_tpl->tpl_vars['index']->do_else = false;
$_smarty_tpl->tpl_vars['index']->index++;
$_smarty_tpl->tpl_vars['index']->first = !$_smarty_tpl->tpl_vars['index']->index;
$__foreach_index_0_saved = $_smarty_tpl->tpl_vars['index'];
?> 
  <?php if ($_smarty_tpl->tpl_vars['index']->first) {?>
    <?php continue 1;?> 
  <?php }?>
  <?php echo $_smarty_tpl->tpl_vars['index']->value;?>

<?php
$_smarty_tpl->tpl_vars['index'] = $__foreach_index_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


<br/><br/>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['myColor']->value, 'color');
$_smarty_tpl->tpl_vars['color']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['color']->value) {
$_smarty_tpl->tpl_vars['color']->do_else = false;
?> 
  <?php echo $_smarty_tpl->tpl_vars['color']->value;?>

 <?php
}
if ($_smarty_tpl->tpl_vars['color']->do_else) {
?> 
    no colors found...
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>


 
<br/><br/>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['Contacts']->value, 'contact');
$_smarty_tpl->tpl_vars['contact']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['contact']->value) {
$_smarty_tpl->tpl_vars['contact']->do_else = false;
echo "Fax : ".((string)$_smarty_tpl->tpl_vars['contact']->value['fax']);?>
<br>
<?php echo "Email : ".((string)$_smarty_tpl->tpl_vars['contact']->value['email']);?>
<br>
<?php echo "Phone:  Home : ".((string)$_smarty_tpl->tpl_vars['contact']->value['phone']['home']);?>
<br>
<?php echo "Phone:  Cell : ".((string)$_smarty_tpl->tpl_vars['contact']->value['phone']['cell']);?>
<br>
<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

<br/><br/>
<?php echo smarty_function_counter(array('start'=>1,'skip'=>1),$_smarty_tpl);?>
 
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>
 
<?php echo smarty_function_counter(array(),$_smarty_tpl);?>


<p>
    <ul>
        <?php
$_smarty_tpl->tpl_vars['__smarty_section_foreach'] = new Smarty_Variable(array());
if (true) {
for ($__section_foreach_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_foreach']->value['index'] = 0; $__section_foreach_0_iteration <= 3; $__section_foreach_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_foreach']->value['index']++){
?> 
          <li><?php echo smarty_function_cycle(array('values'=>"even, odd"),$_smarty_tpl);?>
</li>
        <?php
}
}
?>
    </ul>
</p>


<?php echo smarty_modifier_count($_smarty_tpl->tpl_vars['count']->value);?>

<?php }
}
