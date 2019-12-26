<div class="row">
	<div class="col-md-12 ">
		<?php
			$attributes = array('id'=>'','method'=>'post',);
		?>
		<?php echo form_open($actionresult,$attributes); ?>
			<div class="col-md-3">
			   <div class="form-group margin ">
					<?php echo form_label('Date From:'); ?>
					<div class="input-group date ">
					  <div class="input-group-addon   ">
						<i class="fa fa-calendar "></i>
					  </div>
					   <?php
							$data = array('class'=>'form-control pull-right input-lg ','type'=>'date','id'=>'datepicker','name'=>'date1','placeholder'=>'e.g 12-08-2018','reqiured'=>'');
							echo form_input($data);
						?>
					</div>
				<!-- /.input group -->
			  </div>
			  </div>
			   <div class="col-md-3">
					<div class="form-group margin">
						<?php echo form_label('Date To:'); ?>
						<div class="input-group date">
						  <div class="input-group-addon">
							<i class="fa fa-calendar"></i>
						  </div>
						   <?php
								$data = array('class'=>'form-control pull-right input-lg ' ,'type'=>'date','id'=>'datepicker','name'=>'date2','placeholder'=>'e.g 12-08-2018','reqiured'=>'');
								echo form_input($data);
							?>
						</div>
					</div>
			  </div> 

			   <div class="col-md-4">
					<div class="form-group margin">
							<?php echo form_label('Select customer to genetate ledger.'); ?>
									<select name="customer_id" class="form-control select2 input-lg">
											<?php 
											foreach ($customer_list as $single_customer) 
											{
											?>
													<option value="<?php echo $single_customer->id; ?>">
															<?php //echo $single_customer->customer_name; ?>  
																<?php echo 'Name: '.$single_customer->customer_name.' - '.$single_customer->cus_company.' - '.$single_customer->cus_contact_2.' - '.$single_customer->cus_type.' - '.$single_customer->cus_region;

														?>   
													</option>
											<?php 
												}
											?>
									</select>
					</div>
			  </div> 

			  <div class="col-md-2">
				<div class="form-group margin" style="margin-top:35px;">
				<?php
					$data = array('class'=>'btn btn-info btn-outline-primary input-lg','name'=>'searchecord','value'=>'Search invoices');
					echo form_submit($data);
				 ?> 
			</div>
			</div>
		  
			<?php echo form_close(); ?>		
		 </div>
	  </div>  
<!-- Main content -->
<section style="padding-top:5%;"class="content">
	<div class="row">
	  <div class="error-page">
		<h2 class=" text-blue text-center"><?php echo $heading1; ?></h2>
	  </div>
	</div>
	<div class="row">
		<div class="error-page">
			  <h4 class=" text-center"><i class="fa fa-warning text-red"></i> <?php echo $heading2; ?></h4> 
		</div>
	</div>
    <!-- /.error-page -->
</section>
<!-- /.content -->