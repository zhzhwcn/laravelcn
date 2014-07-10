<form class="form-horizontal" id="new_post_form" role="form" action="<?php echo url('/new/'.$node->name);?>" method="post">
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
		<label class="col-sm-2 control-label"><?php echo trans('Topic');?></label>
		<div class="col-sm-10">
			<input name="title" type="text" class="form-control" placeholder="<?php echo trans('Topic');?>">
		</div>
	</div>
	<div class="form-group">
		<label class="col-sm-2 control-label"><?php echo trans('Content');?></label>
		<div class="col-sm-10">
			<textarea name="content" id="new_post_content" rows="10" class="form-control" placeholder="<?php echo trans('Content');?>"></textarea>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default"><?php echo trans('Post');?></button>
		</div>
	</div>
</form>
<script src="/bootstrap/js/markdown.min.js"></script>
<script>
	$('#new_post_form').submit(function(){
		var content = $('#new_post_content').val();
		// $('#new_post_content').val(markdown.toHTML(content));
	});
</script>