<?php
/////////////////////////////////////////////////////////////////////////////////////
// xbtit - Bittorrent tracker/frontend
//
// Copyright (C) 2004 - 2007  Btiteam
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

if (!defined("IN_ACP"))
      die("non direct access!");


/*
$admintpl->set("add_new",false,true);

*/
$admintpl->set("read",false,true);
switch ($action)
    {
         case 'edit':
          $block_title=$language["VISIBLE_SETTINGS"];
          $id=max(0,$_GET["id"]);
          $admintpl->set("edit",false,true);
          $admintpl->set("frm_action","index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=visible&amp;action=save&amp;id=$id");
          $admintpl->set("language",$language);
          $visible_group=get_result("SELECT * FROM {$TABLE_PREFIX}visible WHERE id=$id",true);
          $visible_current_group=$visible_group[0];
          unset($sticky_group);
          $visible_current_group["level"]=unesc($visible_current_group["level"]);
          
          $admintpl->set("visible",$visible_current_group);
          break;
          
        case 'save':
          if ($_POST["write"]==$language["FRM_CONFIRM"])
            {
              
                   $visible=sqlesc($_POST["visible"]);
                   $id=max(0,$_GET["id"]);
                  
                   do_sqlquery("UPDATE {$TABLE_PREFIX}visible SET level = $visible",true);
                   
              
            }

            // we don't break, so now we read ;)

        case '':
        case 'read':
        default:

          $block_title=$language["VISIBLE_SETTINGS"];
           
          $admintpl->set("list",true,true);
          $admintpl->set("language",$language);
          $rvisible=do_sqlquery("SELECT * FROM {$TABLE_PREFIX}visible ORDER BY id",true);
          
          
          
          $visible=array();
         $v=mysql_fetch_assoc($rvisible);
                $id = $v['id'];
                $admintpl->set("frm_action","index.php?page=admin&amp;user=".$CURUSER["uid"]."&amp;code=".$CURUSER["random"]."&amp;do=visible&amp;action=save&amp;id=$id");
                $visible["visible"]=$v["level"];
                //$sticky[$i]["group_view"]=$s["group_view"];

          $rez_levels=do_sqlquery("SELECT * FROM {$TABLE_PREFIX}users_level ORDER BY id",true);
          $level = "<select name='visible'>";
           while($row=mysql_fetch_assoc($rez_levels))
           {
                $selected='';
                if($v['level']==$row['id_level'])
                {
                    $selected = 'selected';
                }
                $level .="<option value=".$row['id_level']." ".$selected.">".$row['level']."</option>";
           }
           $level .= '</select>';
          $admintpl->set("level",$level);

          unset($v);
          mysql_free_result($rsticky);

          $admintpl->set("visible",$visible);

}

?>