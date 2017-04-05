<!DOCTYPE html>
<html>
	<head>
		<title>Viktor-A</title>
		<meta charset="utf-8">
	</head>
<body>
<nav>
	<ul>
		<li><a href="/about.php">About Us</a></li>
		<li><a href="/contact.php">Contact Me</a></li>
	</ul>
</nav>

<h1>My Tasks for Today</h1>

	<ol>
		<?php foreach ($tasks as $task) : ?>
			<li class="roman">
				<?php if ($task->completed) : ?>
					<strike><?= $task->description; ?></strike>
						<?php else: ?>
							<?= $task->description; ?>
				<?php endif; ?>
			</li>
		<?php endforeach; ?>
	</ol>

</body>
</html>

