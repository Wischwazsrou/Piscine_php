<?php

include('config.php');
include('include/header.php');

?>
<h1>Admin</h1>

<div id="admin_content">
	<div id="admin_menu">
		<ul>
			<li><a href="admin.php?type=user_handle">user</a></li>
			<li><a href="admin.php?type=product_handle">product</a></li>
		</ul>
	</div>
<?php

$type = ($_GET['type'] == "user_handle") ? user : product;
	if ($_GET['type'])
	{
?>
	<div id="admin_menu_action">
		<ul>
		<li><a href="add_<?php echo $type ?>.php">add</a></li>
		<li><a href="update_<?php echo $type?>.php">update</a></li>
		<li><a href="admin_delete.php?type=<?php echo $_GET['type'] ?>&action=delete">delete</a></li>
		</ul>
	</div>
	<h1 id="title"><?php echo ($_GET['type'] == "user_handle") ? USER : PRODUCT ;?></h1>
<?php

	}
?>
</div>
