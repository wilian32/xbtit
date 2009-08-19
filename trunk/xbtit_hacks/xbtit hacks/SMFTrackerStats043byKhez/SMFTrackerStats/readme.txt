Installing.

The current version of the hack (0.4), updates babylon, classic and default themes. If you don't have one or more of those themes, please delete them from the install-rc2.xml.

Also! if you have any other themes, please copy the code bellow to the install-rc2.xml file changing my_other_theme to the theme name. Copy it as many times as you need, don't be shy :)


CODE:

  <!-- Add Stats to Post Author Info on my_other_theme -->
  <file name="$themes_dir/my_other_theme/Display.template.php">
    <!-- Save XBTT_USE -->
    <operation>
      <search position="before"><![CDATA[global]]></search>
      <add><![CDATA[ $XBTT_USE, $TABLE_PREFIX,]]></add>
{]]></search>
    </operation>
		<!-- Show Stats -->
		<operation>
      <search position="before"><![CDATA[// Show how many posts they have made.
			echo '
								', $txt[26], ': ', $message['member']['posts'], '<br />
								<br />';]]></search>
      <add><![CDATA[
			if ( ($modSettings['trackerEnabled']==1) ) {
				if (!isset($XBTT_USE)) {
					// get table_prefix
					$TABLE_PREFIX=mysql_query('SHOW TABLES LIKE "%hacks";');
					$TABLE_PREFIX=mysql_fetch_array($TABLE_PREFIX);
					$TABLE_PREFIX=substr($TABLE_PREFIX[0],0, -5);
					// get xbtt_use
					$XBTT_USE=mysql_query("SELECT `value` FROM {$TABLE_PREFIX}settings WHERE `key`='xbtt_use' LIMIT 1;");
					$XBTT_USE=mysql_fetch_array();
					$XBTT_USE=($XBTT_USE['value']=='true');
				}
				if ($XBTT_USE) {
					$udownloaded="u.downloaded+IFNULL(x.downloaded,0)";
					$uuploaded="u.uploaded+IFNULL(x.uploaded,0)";
					$utables="{$TABLE_PREFIX}users u LEFT JOIN xbt_users x ON x.uid=u.id";
				}	else {
					$udownloaded="u.downloaded";
					$uuploaded="u.uploaded";
					$utables="{$TABLE_PREFIX}users u";
				}
				$resuser=mysql_query("SELECT $udownloaded as downloaded,$uuploaded as uploaded FROM $utables WHERE u.smf_fid=".$message['member']['id'].' LIMIT 1;');
				$rowuser= mysql_fetch_array($resuser);
				echo '<span class="stats"><div class="tracker">'.$modSettings['trackerLabel'].'</div>';
				echo '<div class="upload">'.$modSettings['trackerUpload'].'&nbsp;'.smf_makesize($rowuser['uploaded']).'</div>';
				echo '<div class="download">'.$modSettings['trackerDownload'].'&nbsp;'.smf_makesize($rowuser['downloaded']).'</div>';
				echo '<div class="ratio">('.$modSettings['trackerRatio'].'&nbsp;'.($rowuser['downloaded']>0?number_format($rowuser['uploaded']/$rowuser['downloaded'],2):'---').')</div>';
				echo '</span>';
    	}
      ]]></add>
		</operation>
  </file>
	<!-- Add tracker/upload/download/ratio vars to the CSS on my_other_theme -->
	<file name="$themes_dir/my_other_theme/style.css">
    <operation>
      <search position="before"><![CDATA[}]]></search>
      <add><![CDATA[
.stats {
  font-size: 1.1em;
}
.tracker {
  color:#660033;
}
.upload {
	color:#008000;
}
.download {
	color:#FF0000;
}
.ratio {
	color:#800080;
}
			]]></add>
    </operation>
	</file>