<?php
require("header.inc.php");
ChkAdminLogin();
		$sql = "SELECT stpID,stpName FROM ".DBPREFIX."type_foot ORDER BY stpSort ASC";
    $rs = $objC->GetAll($sql);
		$objS->assign ( "tree", $rs );
		$objS->display ( "admin/tree_foot.tpl" );

?>