<ul class="list-inline list-social">

	<?php if ($site->facebook() != ''): ?>
		<li>
			<a href="<?php echo $site->facebook() ?>" target="_blank" title="Facebook">
				<i class="fa fa-facebook-official"></i>
			</a>
		</li>
	<?php endif ?>

	<?php if ($site->pinterest() != ''): ?>
		<li>
			<a href="<?php echo $site->pinterest() ?>" target="_blank" title="Pinterest">
				<span class="fa fa-pinterest-square"></span>
			</a>
		</li>
	<?php endif ?>

</ul>
