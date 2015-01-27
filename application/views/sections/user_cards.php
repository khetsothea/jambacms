<div class="ui cards">

<?php foreach ($users as $user) : ?>

	<div class="card">
		<div class="image">
			<img src="/assets/img/avatars/<?=$user->image_url?>">
		</div>
		<div class="content">
			<div class="header">
				<?=$user->first_name." ".$user->last_name."\n"?>
			</div>
			<div class="meta">
				<span>Since <?=$user->date_created?></span>
			</div>
			<div class="description">
				<?=$user->about."\n"?>
			</div>
		</div>

	<?php if ($edit) : ?>

		<a class="ui bottom attached button">
			<i class="write icon"></i>
			Edit
		</a>

	<?php endif; ?>

	</div>

<?php	endforeach; ?>

</div>
