<script type="text/javascript">
function convert() {
// download
	if (Math.round(document.users.downloaded.value)>1073741824)
		document.users.lbldown.value=Math.round(document.users.downloaded.value/1073741824*100)/100 + ' GB';
	else if (Math.round(document.users.downloaded.value)>1048576)
		document.users.lbldown.value=Math.round(document.users.downloaded.value/1048576*100)/100 + ' MB';
	else if (Math.round(document.users.downloaded.value)>1024)
		document.users.lbldown.value=Math.round(document.users.downloaded.value/1024*100)/100 + ' KB';
	else
		document.users.lbldown.value=Math.round(document.users.downloaded.value*100)/100 + ' B';
// upload
	if (Math.round(document.users.uploaded.value)>1073741824)
		document.users.lblup.value=Math.round(document.users.uploaded.value/1073741824*100)/100 + ' GB';
	else if (Math.round(document.users.uploaded.value)>1048576)
		document.users.lblup.value=Math.round(document.users.uploaded.value/1048576*100)/100 + ' MB';
	else if (Math.round(document.users.uploaded.value)>1024)
		document.users.lblup.value=Math.round(document.users.uploaded.value/1024*100)/100 + ' KB';
	else
		document.users.lblup.value=Math.round(document.users.uploaded.value*100)/100 + ' B';
// ratio
	if (Math.round(document.users.downloaded.value)>0)
		document.users.lblratio.value=(Math.round(document.users.uploaded.value)/Math.round(document.users.downloaded.value)*100)/100;
}
</script>
<if:edit_user>
<form name="users" method="post" action="<tag:profile.frm_action />">
	<table width="100%" border="0" class="lista">
		<tr>
			<td class="header" align="left" ><tag:language.USER_NAME />:</td>
			<td class="lista" align="left" ><input type="text" size="40" name="username" maxlength="100" value="<tag:profile.username />"/></td>
			<td class="lista" style="text-align:center;" rowspan="6" ><tag:profile.avatar /></td>
		</tr>
		<tr>
			<td align="left" class="header"><label for="chpass"><tag:language.MNU_UCP_CHANGEPWD /></label></td>
			<td align="left" class="lista"><input type="checkbox" name="chpass" id="chpass" /><input type="text" size="30" name="pass" maxlength="37" value="" /></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.USER_EMAIL /></td>
			<td align="left" class="lista"><input type="text" size="30" name="email" maxlength="30" value="<tag:profile.email />"/></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.AVATAR_URL /></td>
			<td align="left" class="lista"><input type="text" size="40" name="avatar" maxlength="100" value="<tag:profile.avatar_field />"/></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.USER_LEVEL />:</td>
			<td align="left" class="lista"><tag:rank_combo /></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.USER_LANGUE />:</td>
			<td align="left" class="lista"><tag:language_combo /></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.UPLOADED />/<tag:language.DOWNLOADED />:</td>
			<td align="left" class="lista" colspan="2">
				<input type="text" size="18" name="uploaded" onkeyup="convert()" maxlength="18" value="<tag:profile.uploaded />"/>&nbsp;&nbsp;/&nbsp;&nbsp;<input type="text" size="18" name="downloaded" maxlength="18" onkeyup="convert()" value="<tag:profile.downloaded />"/>&nbsp;&nbsp;(<input name="lblup" size="10" readonly="readonly" value="<tag:profile.up />" />&nbsp;&nbsp;/&nbsp;&nbsp;<input name="lbldown" size="10" readonly="readonly" value="<tag:profile.down />" />)&nbsp;&nbsp;<tag:language.RATIO />:<input name="lblratio" size="10" readonly="readonly" value="<tag:profile.ratio />" />
			</td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.USER_STYLE />:</td>
			<td align="left" class="lista" colspan="2"><tag:style_combo /></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.PEER_COUNTRY />:</td>
			<td align="left" class="lista" colspan="2"><select name="flag"><option value="0">--</option><tag:flag_combo /></select></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.TIMEZONE />:</td>
			<td align="left" class="lista" colspan="2"><tag:tz_combo /></td>
		</tr>
	<if:INTERNAL_FORUM>
		<tr>
			<td align="left" class="header"><tag:language.TOPICS_PER_PAGE />:</td>
			<td align="left" class="lista" colspan="2"><input type="text" size="3" name="topicsperpage" maxlength="3" value="<tag:profile.topicsperpage />"/></td>
		</tr>
		<tr>
			<td align="left" class="header"><tag:language.POSTS_PER_PAGE />:</td>
			<td align="left" class="lista" colspan="2"><input type="text" size="3" name="postsperpage" maxlength="3" value="<tag:profile.postsperpage />"/></td>
		</tr>
	</if:INTERNAL_FORUM>
		<tr>
			<td align="left" class="header"><tag:language.TORRENTS_PER_PAGE />:</td>
			<td align="left" class="lista" colspan="2"><input type="text" size="3" name="torrentsperpage" maxlength="3" value="<tag:profile.torrentsperpage />"/></td>
		</tr>
		<tr>
			<td align="center" class="header" colspan="3">
				<input type="submit" class="btn" name="confirm" value="<tag:language.FRM_CONFIRM />" />&nbsp;&nbsp;<input type="submit" class="btn" name="confirm" value="<tag:language.FRM_CANCEL />" />
			</td>
		</tr>
	</table>
</form>
<else:edit_user>
<table class="lista" width="100%">
	<tr>
		<td class="header"><tag:language.USER_NAME /></td>
		<td class="lista"><tag:profile.username /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.LAST_IP /></td>
		<td class="lista"><tag:profile.last_ip /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.USER_LEVEL /></td>
		<td class="lista"><tag:profile.level /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.USER_JOINED /></td>
		<td class="lista"><tag:profile.joined /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.USER_LASTACCESS /></td>
		<td class="lista"><tag:profile.lastaccess /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.DOWNLOADED /></td>
		<td class="lista"><tag:profile.downloaded /></td>
	</tr>
	<tr>
		<td class="header"><tag:language.UPLOADED /></td>
		<td class="lista"><tag:profile.uploaded /></td>
	</tr>
	<tr>
		<td align="center" class="header" colspan="3">
		  <input type="submit" class="btn" name="confirm" onclick="<tag:profile.confirm_delete />" value="<tag:language.FRM_CONFIRM />" />&nbsp;&nbsp;<input type="submit" class="btn" onclick="<tag:profile.return />" name="confirm" value="<tag:language.FRM_CANCEL />" />
		</td>
	</tr>
</table>
</if:edit_user>