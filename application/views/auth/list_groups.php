<h1><?php echo lang('groups_heading');?></h1>
<p><?php echo lang('groups_subheading');?></p>

<div id="infoMessage"><?php echo $message;?></div>

<table cellpadding=0 cellspacing=10>
	<tr>
		<th><?php echo lang('groups_name_th');?></th>
		<th><?php echo lang('groups_description_th');?></th>
	</tr>
	<?php foreach ($groups as $group):?>
		<tr>
            <td>
                <?php echo htmlspecialchars($group->name,ENT_QUOTES,'UTF-8');?>    
            </td>
            <td>
                <?php echo htmlspecialchars($group->description,ENT_QUOTES,'UTF-8');?>    
            </td>
            <td>
                <?php echo anchor("auth/edit_group/".$group->id, 'Edit') ;?>
            </td>
		</tr>
	<?php endforeach;?>
</table>

<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | 
    <?php echo anchor('auth/create_group', lang('index_create_group_link'))?> | 
    <?php echo anchor('auth/list_groups', lang('groups_list_groups_link'))?> | 
    <?php echo anchor('auth/', lang('groups_list_users_link'))?> | 
    <?php echo anchor('auth/logout', lang('groups_logout_link'))?>
</p>