<?php $page_session = \Config\Services::session()?>

<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/student">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Change Password</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="container-fluid">
  <div class="row">
    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 mt-5 pt-3 pb-3 bg-white from-wrapper std-form mt-5">
      <div class="container-header">
        <label for="">Change Password</label>
      </div>

        <?php if(isset($validation)): ?>
        	<div class="alert alert-danger"><?= $validation->listErrors(); ?>

        	</div>
        <?php endif; ?>

        <?php if($page_session->getTempdata('success')):?>
          <div class="alert alert-success"><?= $page_session->getTempdata('success');?></div>
        <?php endif; ?>

        <?php if($page_session->getTempdata('error')):?>
          <div class="alert alert-danger"><?= $page_session->getTempdata('error');?></div>
        <?php endif; ?>

        <form method="post" action="<?= base_url() ?>/student/profile" >
          <div class="row">
            <div class="col-12">
            	<div class="form-group">
               		<label for="opwd">Enter Old Password</label>
               		<input type="password" class="form-control" name="opwd" id="opwd">
             	 </div>
             	 <div class="form-group">
               		<label for="npwd">New Password</label>
               		<input type="password" class="form-control" name="npwd" id="npwd">
             	 </div>
             	 <div class="form-group">
               		<label for="cnpwd">Confirm New Password</label>
               		<input type="password" class="form-control" name="cnpwd" id="cnpwd">
             	 </div>
             	  <div class="form-group">
               		<input type="submit" class="btn btn-warning" name="update" value="Update" id="cnpw" style="float: right">
             	 </div>
           </div>
          </div>
        </form>
    </div>
  </div>
</div>
