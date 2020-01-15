<div class="form-section">
	<div class="form-grid">
		<form method="POST" action="">
			<div class="group">
				<h2 class="form-heading">Change Password</h2>
			</div>
			<div class="group">
				<input type="password" name="current_password" class="control" placeholder="Add Current Password">
				<div class="name-error error">
					<?php if(isset($current_password_error)): ?>
						<?php echo $current_password_error; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="group">
				<input type="password" name="new_password" class="control" placeholder="Create New Password">
					<?php if(isset($new_password_error)): ?>
						<?php echo $new_password_error; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="group">
				<input type="password" name="retype_password" class="control" placeholder="Retype New Password">
					<?php if(isset($retype_password_error)): ?>
						<?php echo $retype_password_error; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="group">
				<input type="submit" name="change_password" class="btn account-btn" value="Save Changes">
			</div>
		</form>
	</div>
</div>