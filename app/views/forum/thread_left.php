<div class="panel panel-default">
	<div class="panel-heading"><?php echo $thread->title;?></div>
	<div class="panel-body">
		<?php echo $thread->content;?>
	</div>
	<div class="panel-body">
		<?php
			echo trans('Create at:');
			echo $thread->created_at;
			echo '&nbsp;';
			echo trans('Last update:');
			echo $thread->updated_at;
			echo '&nbsp;';
			echo trans('Post by:');
			echo $poster->username;
		?>
	</div>

</div>
<div class="panel panel-default">
	<div class="panel-body">
		<ul class="media-list">
			<?php foreach($replys as $reply){?>
			<li class="media">
				<div class="media-body">
					<?php echo $reply->content;?>
				</div>
				<div class="media-body">
				<?php
					echo trans('Create at:');
					echo $reply->created_at;
					echo '&nbsp;';
					echo trans('Last update:');
					echo $reply->updated_at;
					echo '&nbsp;';
					echo trans('Reply by:');
					echo $reply->username;
				?>
				</div>
			</li>
			<?php }?>
		</ul>
		<?php echo $replys->links();?>
	</div>
</div>
<div class="panel panel-default">
	<div class="panel-body">
		<form class="form-horizontal" role="form" action="<?php echo url('/reply/'.$thread->id);?>" method="post">
			<?php if($errors->count()){?>
			<div class="alert alert-danger" role="alert">
				<?php 
					foreach ($errors->all('<p>:message</p>') as $message){
						echo $message;
					}
				?>
			</div>
			<?php }?>
			<div class="form-group">
				<div class="col-sm-10">
					<textarea name="content" id="reply_content" rows="10" class="form-control" placeholder="<?php echo trans('Reply');?>"></textarea>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-10">
					<input type="hidden" name="parent_id" value="<?php echo $thread->id;?>">
					<button type="submit" class="btn btn-default"><?php echo trans('Post');?></button>
				</div>
			</div>
		</form>
	</div>
</div>