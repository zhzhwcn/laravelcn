<form class="form-horizontal" role="form" action="<?php echo url('/login');?>" method="post">
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
		<label for="inputEmail3" class="col-sm-2 control-label"><?php echo trans('Username');?></label>
		<div class="col-sm-10">
			<input name="username" type="text" class="form-control" placeholder="<?php echo trans('Username');?>">
		</div>
	</div>
	<div class="form-group">
		<label for="inputPassword3" class="col-sm-2 control-label"><?php echo trans('Password');?></label>
		<div class="col-sm-10">
			<input name="password" type="password" class="form-control" placeholder="<?php echo trans('Password');?>">
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<div class="checkbox">
				<label>
					<input type="checkbox" name="remember" checked> <?php echo trans('Remember me');?>
				</label>
			</div>
		</div>
	</div>
	<div class="form-group">
		<div class="col-sm-offset-2 col-sm-10">
			<button type="submit" class="btn btn-default"><?php echo trans('Sign in');?></button>
		</div>
	</div>
</form>