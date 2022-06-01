<?php $page_session = \Config\Services::session()?>
<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/professor">Home</a></li>
          <li class="breadcrumb-item active" aria-current="page">Manage</li>
        </ol>
      </nav>
    </div>
  </div>
</div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12 prof-form mb-3">
        <?php if($page_session->getTempdata('success')):?>
          <div class="alert alert-success"><?= $page_session->getTempdata('success');?></div>
        <?php endif; ?>

        <?php if($page_session->getTempdata('deleted')):?>
           <div class="alert alert-success"><?= $page_session->getTempdata('deleted');?></div>
        <?php endif; ?>

        <div class="header">
          <h3 class="prof-header mb-3">Upload Research</h3>
        </div>
          <button class="btn btn-success upload" type="submit" onclick="document.location = '<?=base_url()?>/professor/upload'">
            <i class="fa fa-upload"></i>
          Upload Research</button>
              <table class="table table-bordered table-striped" id="research_student-list">
                <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>

              <?php if($prof_research): ?>
			            <?php foreach($prof_research as $sr): ?>
                    <?php if($sr['deleted_at'] == null): ?>
			                   <tr>
			                        <td><?php echo $sr['id']; ?></td>
							                <td><?php echo $sr['title']; ?></td>
  						           <?php if($sr['research_status'] == 0): ?>
			                 	      <td>Waiting for approval</td>
                         <?php elseif($sr['research_status'] == 3): ?>
   			                 	    <td>Disapproved</td>
			                   <?php else: ?>
			             	          <td>Approved</td>
			                   <?php endif; ?>

			                 <!-- <td><button class="btn btn-primary">View</button><button class="btn btn-danger">Delete</button></td> -->

			                 <td>
                         <form method="post" action="<?=base_url()?>/professor/view_research/<?= $sr['id'] ?>">
 			                 		<button type="submit" class="btn btn-info">View</button>
 			                 	</form>
			                 </td>
			               </tr>
                   <?php endif; ?>
		             <?php endforeach; ?>
               <?php endif; ?>

           </tbody>
         </table>
	      </div>
      </div>
    </div>
