Revision 547
------------
- small fix on account.php (smf group update on validate)
- fixed possible SQL injection in scrape.php
- changed Spanish language



Revision 545
------------
Fix a Remote SQL Injection Vulnerability

Revision 544 - Directory Listing
Modified Tue Jul 15 16:40:33 2008 UTC (6 weeks, 1 day ago) by Khez

=== admin.users.tools.php ===
FIXED - A PHP Warning when no change is made to the user

=== blocks/forum_block.php ===
FEATURE - Option to chose from last active TOPICS or latest POSTS
FIXED - SMF SQL with proper caching

=== language/lang_admin.php ===
ADDED - 3 new vars: SETTING_FORUMBLOCK, FORUMBLOCK_POSTS, FORUMBLOCK_TOPICS

=== admin.config.php | admin.config.tpl ===
ADDED - Support for the forum block topic|posts option

=== install.php ===
FIXED - A possible issue with XBTIT-SMF support on an XBTIT reinstall



Revision 543
------------
=== admin.users.tools.php ===
ADDED - SMF Search for member ID => pottentially bad
ADDED - Notices on member/rannk not found in SMF
OPTIM - Removed an if statement
FIXED - General tab/space issues
FIXED - Some double-single quoted lost optimizations

=== forum_block.php ===
OPTIM - Completely Rewritten Code
FIXED - SMF branch to show topic subject

=== common.php ===
OPTIM - everything with proper indentation
OPTIM - everything with dash comments

=== functions.php ===
FIXED - Invalid memory_get_usage with PHP 4 when compiled without memory-limit

=== include/jscss.php ===
ADDED - include/jscss file for use with $morescript and $morecss vars
OPTIM - moved js to an actual file

=== jscript/xbtit.js ===
ADDED - jscript/xbtit.js file to allow clientside caching and conserver bandiwdth
OPTIM - resize by removing clientside a subsequent getElementById call

=== index.php ===
OPTIM - A couple of double quoted vars to direct php
ADDED - include statement for include/jscss.php
