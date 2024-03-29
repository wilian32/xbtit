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

require_once("include/functions.php");
require_once("include/config.php");

if (isset($_GET["style"]))
    $style=intval($_GET["style"]);
else
    $style=1;
if (isset($_GET["returnto"]))
   $url=urldecode($_GET["returnto"]);
else
   $url="index.php";
if (isset($_GET["langue"]))
   $langue=intval($_GET["langue"]);
else
   $langue=1;

dbconn();

// guest don't need to change language!
if (!$CURUSER || $CURUSER["uid"]==1)
  {
  redirect($url);
  exit;
 }

if (isset($_GET["style"]))
   do_sqlquery("UPDATE {$TABLE_PREFIX}users SET style=$style WHERE id=".$CURUSER["uid"]);

if (isset($_GET["langue"]))
   do_sqlquery("UPDATE {$TABLE_PREFIX}users SET language=$langue WHERE id=".$CURUSER["uid"]);

redirect($url);
?>