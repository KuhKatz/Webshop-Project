<?php
	require('helper.php');
?>

<!DOCTYPE html>
<html><head> /*...*/ </head>
<body>
	<nav><span>Navigation</span>
		<?php navigation($language, $pageId); ?>
		<div><?php languages($language, $pageId); ?></div>
	</nav>
	<main>
		<span>Main Area</span>
		<?php
		 $fn = 'pages/'.$pageId.'.php';
            if (is_file($fn)) {
            include($fn);
            } else {
            echo "404";}
		 ?>
	</main>
</body>
</html>