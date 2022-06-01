<div class="container">
  <div class="row">
    <div class="col">
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
           <li class="breadcrumb-item"><a href="<?= base_url() ?>/report">Home</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/report/reports">Report</a></li>
          <li class="breadcrumb-item"><a href="<?= base_url() ?>/report/pResearch">Faculty Research</a></li>
          <li class="breadcrumb-item active" aria-current="page">List</li>
        </ol>
      </nav>
    </div>
  </div>
</div>

<div class="container-fluid form">
  <div class="row">
    <div class="col-lg-12 form-col">
      <a href="<?=base_url()?>/profile/publishedPDF/<?= $detail['year_start'];?>/<?= $detail['year_end'];?>" target="_blank" class="btn btn-success btn-sm float-right std-researchV-btn mb-3">
        <i class="fa fa-download std-researchV-icon"></i> Download as PDF </a>
      <a href="<?=base_url()?>/profile/publishedCSV/<?= $detail['year_start'];?>/<?= $detail['year_end'];?>" class="btn btn-success btn-sm float-right std-researchV-btn mb-3 mr-1">
        <i class="fa fa-download std-researchV-icon"></i> Download as CSV </a>
      <h3><?php echo "List of Published Researches";?></h3>

      <?php if($all_published): ?>
      <table class="table table-bordered table-striped" id="seminar-list">

      <div class="text-center mt-2 mb-3" style="position: relative;">
        <button type="button" class="btn" data-toggle="tooltip" data-placement="top" title="See more">
        </button>
      </td>
      </div>

           <thead>
             <tr>
               <th>Title</th>
               <th>Author</th>
               <th>Publication</th>
               <th>Volume</th>
               <th>Year Completed</th>
               <th>Date Published</th>
               <th>Abstract</th>
             </tr>
           </thead>

             <tbody>
                <?php foreach($all_published as $r): ?>
                        <tr>
                           <td><?php echo $r['research_title']; ?></td>
                           <td><?php echo ucwords($r['first_name']. " " .$r['last_name']); ?></td>
                           <td><?php echo $r['publication']; ?></td>
                           <td><?php echo $r['volume']; ?></td>
                           <td><?php echo $r['school_year']; ?></td>
                           <?php $t=strtotime($r['date_published']); ?>
                           <?php $date = date("M-d-Y", $t);?>
                           <td><?php echo $date; ?></td>
                           <td><a href=" <?=$r['abstract'] ?>" target="_blank">View here</a></td>

                         </tr>
               <?php endforeach; ?>
             </tbody>

        </div>

    <?php else: ?>
      <div class="alert alert-dark" role="alert">
       No data found
      </div>
    <?php endif; ?>
    </table>

    </div>
  </div>
</div>
