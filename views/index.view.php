<?php require('partials/head.php'); ?>

<?php require('partials/footer.php'); ?>

<?php foreach ($users as $user) : ?>

		<li><?= $user->name; ?></li>

<?php endforeach; ?> 

<h1>My Taks List</h1>

<?php foreach ($tasks as $task) : ?>
    <li>
        <?php if ($task->completed) : ?>
            <strike><?= $task->description; ?></strike>
        <?php else : ?>
            <?= $task->description; ?>
        <?php endif; ?>
    </li>
<?php endforeach; ?>

<!-- Forms, Request Types, and Routing -->

<h2>Submit Your Name</h2>

<form method="POST" action="/names">

	<input type="text" name="name"></input>

	<button type="submit">Submit</button>

</form>

