<form class="form-horizontal" role="form" action="<?php echo url('/reg');?>" method="post">
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"><?php echo trans('Username');?></label>
		<div class="col-sm-4">
			<input name="username" type="text" class="form-control" placeholder="<?php echo trans('Username');?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputEmail3" class="col-sm-2 control-label"><?php echo trans('Email');?></label>
		<div class="col-sm-4">
			<input name="email" type="email" class="form-control" placeholder="<?php echo trans('Email');?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"><?php echo trans('Password');?></label>
		<div class="col-sm-4">
			<input name="password" type="password" class="form-control" placeholder="<?php echo trans('Password');?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"><?php echo trans('Password confirm');?></label>
		<div class="col-sm-4">
			<input name="password_confirmation" type="password" class="form-control" placeholder="<?php echo trans('Password confirm');?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-primary"><?php echo trans('Register');?></button>
		</div>
	</div>
</form>