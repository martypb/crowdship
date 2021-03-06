<?php
/***************************************************************************
 *   copyright				: (C) 2008, 2009 WeBid
 *   site					: http://www.webidsupport.com/
 ***************************************************************************/

/***************************************************************************
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version. Although none of the code may be
 *   sold. If you have been sold this script, get a refund.
 ***************************************************************************/

define('InAdmin', 1);
$current_page = 'contents';
include '../includes/common.inc.php';
include $include_path . 'functions_admin.php';
include $include_path . 'dates.inc.php';
include 'loggedin.inc.php';

if (isset($_POST['action']) && $_POST['action'] == 'purge')
{
	if (is_numeric($_POST['days']))
	{
		// Build date
		$DATE = time() - $_POST['days'] * 3600 * 24;
		$query = "DELETE FROM " . $DBPrefix . "comm_messages WHERE msgdate <= $DATE AND boardid = " . $id;
		$system->check_mysql(mysql_query($query), $query, __LINE__, __FILE__);
		// Update counter
		$query = "SELECT count(id) as COUNTER from " . $DBPrefix . "comm_messages WHERE boardid = " . $id;
		$res = mysql_query($query);
		$system->check_mysql($res, $query, __LINE__, __FILE__);
		$query = "UPDATE " . $DBPrefix . "community SET messages = " . mysql_result($res, 0) . " WHERE id = " . $id;
		$system->check_mysql(mysql_query($query), $query, __LINE__, __FILE__);
	}
}

$id = intval($_GET['id']);

// Retrieve board name for breadcrumbs
$query = "SELECT name FROM " . $DBPrefix . "community WHERE id = " . $id;
$res = mysql_query($query);
$system->check_mysql($res, $query, __LINE__, __FILE__);
$board_name = mysql_result($res, 0);

// Retrieve board's messages from the database
$query = "SELECT * FROM " . $DBPrefix . "comm_messages WHERE boardid = " . $id;
$res = mysql_query($query);
$system->check_mysql($res, $query, __LINE__, __FILE__);

$bg = '';
while ($msg_data = mysql_fetch_assoc($res))
{
    $template->assign_block_vars('msgs', array(
			'ID' => $msg_data['id'],
			'MESSAGE' => nl2br($msg_data['message']),
			'POSTED_BY' => $msg_data['username'],
			'POSTED_AT' => FormatDate($msg_data['msgdate']),
			'BG' => $bg
			));
	$bg = ($bg == '') ? 'class="bg"' : '';
}

$template->assign_vars(array(
		'BOARD_NAME' => $board_name,
		'ID' => $id
		));

$template->set_filenames(array(
		'body' => 'editmessages.tpl'
		));
$template->display('body');

?>