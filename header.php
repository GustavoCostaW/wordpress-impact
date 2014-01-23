<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Meu Primeiro Tema</title>
	
	<link rel="stylesheet" href="<?php bloginfo("stylesheet_url") ?>">
	
	<?php wp_head() ?>
	
</head>
<body>
	<section>
		<header>
			
			<?php if(is_home()): ?> 
				<h1><?php bloginfo("name") ?></h1>
			<?php else: ?>	
				<h1>
					<a href="<?php bloginfo("url") ?>">
					<?php bloginfo("name") ?>
					</a>
				</h1>
			<?php endif; ?>
			
			<h2><?php bloginfo("description")?></h2>
			
		</header>