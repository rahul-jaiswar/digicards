<!doctype html>
<html lang="en">
<head>
    <?= $title_meta ?>
    <?= $this->include('partials/head-css') ?>
    <?= $this->include('partials/css/datatable') ?>

</head>
<?= $this->include('partials/body') ?>
<!-- Begin page -->
<div id="layout-wrapper">
    <?= $this->include('partials/menu') ?>
            <div class="main-content">
        		<div class="page-content">
		            <div class="container-fluid">
		                <div class="row">
		                	<div class="col-lg-12">
		                        <div class="card">
		                            <div class="card-body">
		                                <table id="customer" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
		                                    <thead>
		                                    <tr>
		                                    	<th>Order Date</th>
		                                        <th>Customer ID</th>
		                                        <th>Customer</th>
		                                        <th>Views</th>
		                                        <th>Saved</th>
		                                        <th>Template</th>
		                                    </tr>
		                                </thead>
		                                <tbody>
		                                	<?php foreach($cardlist as $data):?>
		                                    <tr>
		                                    	<td>12-02-2005</td>
		                                        <td><a href="" class="text-dark fw-bold">#<?php echo $data['company_code']; ?></a></td>
		                                        <td><?php echo $data['company_logo']."  ".$data['company_name'];?></td>
		                                        <td>12</td>
		                                        <td>12</td>
	                                            <td>
	                                                <a href="<?= site_url('Card/view/'.$data['company_code'])?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title=" View Card"><i class="uil-postcard"></i></a>
	                                                <a href="<?= site_url('Card/template')?>" class="btn btn-success btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Update Template"><i class="uil-edit"></i></a>
	                                                <a href="<?= site_url('Customer/delete')?>" class="btn btn-danger btn-sm waves-effect waves-light" data-bs-toggle="tooltip" data-bs-placement="top" title="" data-bs-original-title="Delete Template"><i class="uil-trash"></i></a>
	                                            </td>
		                                    </tr>
		                                	<?php endforeach;?>
		                                </tbody>
		                            </table>
		                        </div>
		                    </div>
		                </div>
		                
		                <!-- end row -->
		            </div> <!-- container-fluid -->
		        </div>
		    </div>
        </div>
		<?= $this->include('partials/vendor-scripts') ?>
		<?= $this->include('partials/js/main') ?>
		<?= $this->include('partials/js/datatable') ?>
		<script type="text/javascript">
			$(document).ready(function() {
			    $('#team').DataTable();
			    $('#designation').DataTable();
			    $('#customer').DataTable();

			    //Buttons examples
			    var table = $('#datatable-buttons').DataTable({
			        lengthChange: false,
			        buttons: ['copy', 'excel', 'pdf', 'colvis']
			    });

			    table.buttons().container()
			        .appendTo('#datatable-buttons_wrapper .col-md-6:eq(0)');
			        
			        $(".dataTables_length select").addClass('form-select form-select-sm');
			} );
		</script>

    </body>

</html>

