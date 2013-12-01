<?php /* Smarty version 2.6.26, created on 2013-11-30 19:42:23
         compiled from admin:entry/commentlist */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('block', 'entry_block', 'admin:entry/commentlist', 2, false),array('block', 'entry', 'admin:entry/commentlist', 3, false),array('block', 'comment_block', 'admin:entry/commentlist', 12, false),array('block', 'html_form', 'admin:entry/commentlist', 14, false),array('block', 'comment', 'admin:entry/commentlist', 33, false),array('modifier', 'date_format', 'admin:entry/commentlist', 36, false),array('modifier', 'strip_tags', 'admin:entry/commentlist', 38, false),array('modifier', 'truncate', 'admin:entry/commentlist', 38, false),array('modifier', 'action_link', 'admin:entry/commentlist', 45, false),array('modifier', 'cmd_link', 'admin:entry/commentlist', 45, false),)), $this); ?>

<?php $this->_tag_stack[] = array('entry_block', array()); $_block_repeat=true;smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<?php $this->_tag_stack[] = array('entry', array()); $_block_repeat=true;smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<h2><?php echo $this->_tpl_vars['panelstrings']['head']; ?>
 <a href="admin.php?p=entry&amp;action=write&amp;entry=<?php echo $this->_tpl_vars['id']; ?>
"><?php echo $this->_tpl_vars['subject']; ?>
</a></h2>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "shared:errorlist.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<p><?php echo $this->_tpl_vars['panelstrings']['descr']; ?>
</p>



<?php $this->_tag_stack[] = array('comment_block', array()); $_block_repeat=true;smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<?php $this->_tag_stack[] = array('html_form', array()); $_block_repeat=true;smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>

<script type="text/javascript">
<?php echo '

function admin_entry_comment_delete() { return confirm('; ?>
'<?php echo $this->_tpl_vars['plang']['act_del_confirm']; ?>
'<?php echo '); }

'; ?>

</script>
<table class="entrylist">
<thead><tr>
<th><?php echo $this->_tpl_vars['panelstrings']['date']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['content']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['author']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['email']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['ip']; ?>
</th>
<th><?php echo $this->_tpl_vars['panelstrings']['actions']; ?>
</th>
</tr></thead>
<tbody>
<?php $this->_tag_stack[] = array('comment', array()); $_block_repeat=true;smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
<tr>
<td><?php echo ((is_array($_tmp=$this->_tpl_vars['date'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%D, %T") : theme_date_format($_tmp, "%D, %T")); ?>
</td>
<td class="main_cell">
<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['content'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)))) ? $this->_run_mod_handler('truncate', true, $_tmp, 70) : smarty_modifier_truncate($_tmp, 70)); ?>

</td>
<td><?php if ($this->_tpl_vars['url']): ?><a href="<?php echo $this->_tpl_vars['url']; ?>
"><?php echo $this->_tpl_vars['name']; ?>
</a><?php else: ?><?php echo $this->_tpl_vars['name']; ?>
<?php endif; ?></td>
<td><a href="mailto:<?php echo $this->_tpl_vars['email']; ?>
"><?php echo $this->_tpl_vars['email']; ?>
</a></td>
<td><?php echo $this->_tpl_vars['ip_address']; ?>
</td>
<td>
<a class="link-general"
href="<?php echo ((is_array($_tmp=((is_array($_tmp=($this->_tpl_vars['panel_url'])."&entry=".($this->_tpl_vars['entryid']))) ? $this->_run_mod_handler('action_link', true, $_tmp, 'commedit') : admin_filter_action($_tmp, 'commedit')))) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'comment', $this->_tpl_vars['id']) : admin_filter_command($_tmp, 'comment', $this->_tpl_vars['id'])); ?>
">
<?php echo $this->_tpl_vars['plang']['act_edit']; ?>

</a>
<a class="link-delete" onclick="return admin_entry_comment_delete();" href="<?php echo ((is_array($_tmp=((is_array($_tmp=($this->_tpl_vars['panel_url'])."&entry=".($this->_tpl_vars['entryid']))) ? $this->_run_mod_handler('action_link', true, $_tmp, 'commentlist') : admin_filter_action($_tmp, 'commentlist')))) ? $this->_run_mod_handler('cmd_link', true, $_tmp, 'delete', $this->_tpl_vars['id']) : admin_filter_command($_tmp, 'delete', $this->_tpl_vars['id'])); ?>
">
<?php echo $this->_tpl_vars['plang']['act_del']; ?>

</a>
</td>
</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comment($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
</tbody></table>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_html_form($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_comments($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>

<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entry($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo smarty_block_entries($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>




