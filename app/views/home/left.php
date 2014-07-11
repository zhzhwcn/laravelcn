<div class="panel panel-default">
	<div class="panel-body">
		<ul class="media-list">
			<?php foreach($threads as $thread){?>
			<li class="media">
				<div class="media-body">
					[<a href="<?php echo url('/node/'.$thread->name)?>"><?php echo $thread->display_name;?></a>]<!--node link-->
					<a href="<?php echo url('/thread/'.$thread->id)?>"><?php echo $thread->title;?></a><!--thread link-->
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
<div class="panel panel-default">
	<div class="panel-body">
		<h4><?php echo trans('Nodes')?></h4>
		<?php foreach($nodes as $node){?>
			<a href="<?php echo url('/node/'.$node->name)?>"><?php echo $node->display_name;?></a>
		<?php }?>
	</div>
</div>