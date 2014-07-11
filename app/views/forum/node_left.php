<div class="panel panel-default">
	<div class="panel-body">
		<h2><?php echo $node->display_name;?></h2>
		<p><a class="btn btn-primary" href="<?php echo url('/new/'.$node->name);?>"><?php echo trans('Make a new thread')?></a></p>
	</div>
	<div class="panel-body">
		<ul class="media-list">
			<?php foreach($threads as $thread){?>
			<li class="media">
				<div class="media-body">
					<a href="<?php echo url('/thread/'.$thread->id)?>"><?php echo $thread->title;?></a>
				</div>
				<div class="media-body">
				<?php
					echo trans('Create at:');
					echo $thread->created_at;
					echo '&nbsp;';
					echo trans('Last update:');
					echo $thread->updated_at;
					echo '&nbsp;';
					echo trans('Post by:');
					echo $thread->username;
				?>
				</div>
			</li>
			<?php }?>
		</ul>
	</div>
	<div class="panel-body">
		<?php echo $threads->links();?>
	</div>
</div>
