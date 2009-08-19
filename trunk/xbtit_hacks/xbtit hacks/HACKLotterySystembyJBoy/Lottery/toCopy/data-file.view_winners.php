<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2008  Btiteam
//
//    This file is part of xbtit.
//
// Redistribution and use in source and binary forms, with or without modification,
// are permitted provided that the following conditions are met:
//
//   1. Redistributions of source code must retain the above copyright notice,
//      this list of conditions and the following disclaimer.
//   2. Redistributions in binary form must reproduce the above copyright notice,
//      this list of conditions and the following disclaimer in the documentation
//      and/or other materials provided with the distribution.
//   3. The name of the author may not be used to endorse or promote products
//      derived from this software without specific prior written permission.
//
// THIS SOFTWARE IS PROVIDED BY THE AUTHOR ``AS IS'' AND ANY EXPRESS OR IMPLIED
// WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
// MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
// IN NO EVENT SHALL THE AUTHOR BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
// SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
// TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
// PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF
// LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING
// NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE,
// EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
//
////////////////////////////////////////////////////////////////////////////////////

if (!defined("IN_BTIT"))
      die("non direct access!");

// load language file
require(load_language("lang_lottery.php"));

function get_value($what, $table, $area, $id)
{

    global $TABLE_PREFIX;

    $query = do_sqlquery("SELECT $what FROM {$TABLE_PREFIX}$table WHERE $area=$id", true);
    $object_to_array = mysql_fetch_array($query) or sql_err(__FILE__, __LINE__);
    
    return $object_to_array[$what];
}

$query = do_sqlquery("SELECT * FROM `{$TABLE_PREFIX}lottery_winners`", true);

$ticketstpl = new bTemplate();
$ticketstpl-> set("language", $language);

if(mysql_num_rows($query) == 0)
	$ticketstpl-> set("are_winners", false, true);
else {
	$ticketstpl-> set("are_winners", true, true);
	$won = array();
	$x = 0;
	
	while ($users = mysql_fetch_assoc($query)) {
		$won[$x]["winner"] = $users["win_user"];
		$won[$x]["date"] = $users["windate"];
		$won[$x]["price"] = makesize($users["price"]);

		$x++;
		$ticketstpl->set("winner", $won);
	}

}

?>