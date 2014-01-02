<?php /* Smarty version 2.6.26, created on 2013-12-03 13:43:59
         compiled from admin:entry/list */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'draft_block', 'admin:entry/list', 6, false),array('block', 'draft', 'admin:entry/list', 11, false),array('block', 'entry_block', 'admin:entry/list', 42, false),array('block', 'entry', 'admin:entry/list', 52, false),array('modifier', 'truncate', 'admin:entry/list', 13, false),array('modifier', 'entry_idtotime', 'admin:entry/list', 54, false),array('modifier', 'date_format', 'admin:entry/list', 54, false),array('modifier', 'action_link', 'admin:entry/list', 60, false),array('modifier', 'default', 'admin:entry/list', 68, false),array('modifier', 'link', 'admin:entry/list', 71, false),array('function', 'html_options', 'admin:entry/list', 35, false),array('function', 'html_submit', 'admin:entry/list', 37, false),array('function', 'prevpage', 'admin:entry/list', 92, false),array('function', 'nextpage', 'admin:entry/list', 93, false),)), $this); ?>

<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
</h2>



<?php $this->_tag_stack[] = array('draft_block', array()); $_block_repeat=true;smarty_block_draftlist($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<div id="admin-drafts">
<p>Your drafts:</p>
<ul>

<?php $this->_tag_stack[] = array('draft', array()); $_block_repeat=true;smarty_block_draft($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<li>
<a href="admin.php?p=entry&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
&amp;action=write"><?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 70) : smarty_modifier_truncate($_tmp, 70)); ?>
</a>

</li>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_draft($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</ul>
</div>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_draftlist($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>



<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>

<form method="get" action="<?php echo $_REQUEST['PHP_SELF']; ?>
?p=entry">
<p> <input type="hidden" name="p" value="entry" /> </p>
<fieldset><legend><?php echo $this->_tpl_vars['panelstrings']['filter']; ?>
</legend>
	<select name="category" class="alignleft">
	<option label="Unfiltered" value="all"><?php echo $this->_tpl_vars['panelstrings']['nofilter']; ?>
</option>
		<?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['categories_all'],'selected' => $_REQUEST['category']), $this);?>

	</select>
	<?php echo smarty_function_html_submit(array('name' => 'filter','id' => 'filter','class' => 'alignright','value' => $this->_tpl_vars['panelstrings']['filterbtn']), $this);?>

</fieldset>

</form>

<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<table class="entrylist">
<thead><tr><th><?php echo $this->_tpl_vars['panelstrings']['date']; ?>
</th>
<th class="main-cell"><?php echo $this->_tpl_vars['panelstrings']['title']; ?>
</th>
<!-- <th><?php echo $this->_tpl_vars['panelstrings']['author']; ?>
</th> -->
<th><?php echo $this->_tpl_vars['panelstrings']['comms']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['action']; ?>
</th></tr></thead>
<tbody>
<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<tr>
<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('entry_idtotime', true, $_tmp) : entry_idtotime($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, ($this->_tpl_vars['fp_config']['locale']['dateformatshort']).", ".($this->_tpl_vars['fp_config']['locale']['timeformat'])) : theme_date_format($_tmp, ($this->_tpl_vars['fp_config']['locale']['dateformatshort']).", ".($this->_tpl_vars['fp_config']['locale']['timeformat']))); ?>
</td>
<td class="main-cell">
<?php if (in_array ( 'draft' , $this->_tpl_vars['categories'] )): ?>
(<em class="entry-flag"><?php echo $this->_tpl_vars['lang']['entry']['flags']['short']['draft']; ?>
</em>)
<?php endif; ?>
<a class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'write') : admin_filter_action($_tmp, 'write')); ?>
&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo ((is_array($_tmp=$this->_tpl_vars['subject'])) ? $this->_run_mod_handler('truncate', true, $_tmp, 70) : smarty_modifier_truncate($_tmp, 70)); ?>
 
</a>
</td>
<!-- <td><?php echo $this->_tpl_vars['author']; ?>
</td> -->
<td><a class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'commentlist') : admin_filter_action($_tmp, 'commentlist')); ?>
&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo ((is_array($_tmp=@$this->_tpl_vars['commentcount'])) ? $this->_run_mod_handler('default', true, $_tmp, @$this->_tpl_vars['comments']) : smarty_modifier_default($_tmp, @$this->_tpl_vars['comments'])); ?>
</a></td>
<td>
<a class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['id'])) ? $this->_run_mod_handler('link', true, $_tmp, 'post_link') : theme_apply_filters_link_wrapper($_tmp, 'post_link')); ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_view']; ?>

</a>
<a class="link-general" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'write') : admin_filter_action($_tmp, 'write')); ?>
&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_edit']; ?>

</a>
<a class="link-delete" 
href="<?php echo ((is_array($_tmp=$this->_tpl_vars['panel_url'])) ? $this->_run_mod_handler('action_link', true, $_tmp, 'delete') : admin_filter_action($_tmp, 'delete')); ?>
&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
">
<?php echo $this->_tpl_vars['panelstrings']['act_del']; ?>

</a>

</td>

</tr>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

</tbody></table>

<div class="navigation">
	<?php echo smarty_function_prevpage(array('admin' => true), $this);?>

	<?php echo smarty_function_nextpage(array('admin' => true), $this);?>

</div>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

