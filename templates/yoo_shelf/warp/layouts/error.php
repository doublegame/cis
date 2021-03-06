<?php
/**
* @package   Warp Theme Framework
* @file      error.php
* @version   6.0.7
* @author    YOOtheme http://www.yootheme.com
* @copyright Copyright 2007 - 2011 YOOtheme GmbH
* @license   YOOtheme Proprietary Use License (http://www.yootheme.com/license)
*/

// prepare filters
$filters = $this['assetfilter']->create(array('CSSImportResolver', 'CSSRewriteURL', 'CSSCompressor'));

?>
<!DOCTYPE HTML>
<html lang="<?php echo $this['config']->get('language'); ?>" dir="<?php echo $this['config']->get('direction'); ?>">

<head>
	<title><?php echo $error; ?> - <?php echo $title; ?></title>
	<link rel="stylesheet" href="<?php echo $this['path']->url('css:base.css'); ?>" />
	<link rel="stylesheet" href="<?php echo $this['path']->url('css:error.css'); ?>" />
	<!--[if IE 6]><style><?php echo $this['asset']->createFile('css:error-ie6.css')->getContent($filters); ?></style><![endif]-->
</head>

<body id="page" class="page">

	<div class="center error-<?php echo strtolower($error); ?>">

		<h1 class="error">
			<span>
				<?php if (strtolower($error) == 'browser') { ?>
					<a class="chrome" href="http://www.google.com/chrome" title="Download Chrome"></a>
					<a class="firefox" href="http://www.mozilla.com" title="Download Firefox"></a>
					<a class="opera" href="http://www.opera.com" title="Download Opera"></a>
					<a class="safari" href="http://www.apple.com/safari" title="Download Safari"></a>
					<a class="ie" href="http://www.microsoft.com/downloads" title="Download Internet Explorer 9"></a>
				<?php } else { echo $error; } ?>
			</span>
		</h1>
		<h2 class="title"><?php echo $title; ?></h2>
		<p class="message"><?php echo $message; ?></p>

	</div>
	
</body>
</html>