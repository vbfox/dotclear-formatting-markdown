<?php
# -- BEGIN LICENSE BLOCK ----------------------------------
#
# This file is part of Dotclear 2.
#
# Copyright (c) 2003-2008 Olivier Meunier and contributors
# Licensed under the GPL version 2.0 license.
# See LICENSE file or
# http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
#
# -- END LICENSE BLOCK ------------------------------------

$GLOBALS['__autoload']['MarkdownExtra_Parser'] = dirname(__FILE__).'/markdown.php';
$core->addFormater('markdown', array('dcMarkdown','convert'));

class dcMarkdown
{
	public static function convert($str)
	{
		$o = new MarkdownExtra_Parser;
		return $o->transform($str);
	}
}
?>