<section class="content">
    <div class="row">
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <h3><label class="label "><?php echo number_format($cash_in_hand,2,'.','');?></label></h3>

                    <h4 class="paragraph">Cash in hand <?php echo $currency; ?></h4>
                </div>
                <div class="icon">
                    <i class="fa fa-money " aria-hidden="true"></i>
                </div>
                <a href="<?php echo base_url('statements/leadgerAccounst');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <?php 
                    if($payables < 0)
                    {
                        $payables = '('.-(number_format($payables,2,'.','')).')';
                    }

                     ?>
                    <h3><label class="label"><?php echo $payables; ?></label></h3>

                    <h4 class="paragraph">Accounts Payables <?php echo $currency; ?></h4>
                </div>
                <div class="icon">
                    <i class="fa fa-hand-o-right" aria-hidden="true"></i>
                </div>
                 <a href="<?php echo base_url('statements/leadgerAccounst');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color-second">
                <div class="inner">
                    <h3><label class="label"><?php echo $out_of_stock; ?></label></h3>
                    <h4 class="paragraph">Shortage items</h4>

                </div>
                <div class="icon">
                    <i class="fa fa-folder-o"></i>
                </div>
                <a href="<?php echo base_url('stockAlertReport');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-green ">
                <div class="inner">
                    <h3><label class="label"><?php echo number_format($account_recieveble,2,'.','');?></label></h3>

                    <h4 class="paragraph">Accounts receivable <?php echo $currency; ?></h4>
                </div>
                <div class="icon">
                    <i class="fa fa-lemon-o"></i>
                </div>
                <a href="<?php echo base_url('statements/leadgerAccounst');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <h3><label class="label"><?php echo $customers_count; ?></label></h3>
                    <h4 class="paragraph">Customers</h4>

                </div>
                <div class="icon">
                    <i class="fa fa-user " aria-hidden="true"></i>
                </div>
               <a href="<?php echo base_url('customers');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>        
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color-second">
                <div class="inner">
                    <h3><label class="label"><?php echo $suppliers_count; ?></label></h3>
                    <h4 class="paragraph">Suppliers</h4>

                </div>
                <div class="icon">
                    <i class="fa fa-truck " aria-hidden="true"></i>
                </div>
               <a href="<?php echo base_url('supplier');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color-second">
                <div class="inner">
                    <h3><label class="label"><?php  echo number_format($expense_amount,2,'.',''); ?></label></h3>
                    <h4 class="paragraph">Expense This Month <?php echo $currency; ?></h4>

                </div>
                <div class="icon">
                   <i class="fa fa-rocket" aria-hidden="true"></i>
                </div>
               <a href="<?php echo base_url('expense');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <h3><label class="label"><?php  echo number_format($purchase_amount,2,'.',''); ?></label></h3>
                    <h4 class="paragraph">Purchases This Month <?php echo $currency; ?></h4>
                </div>
                <div class="icon">
                    <i class="fa fa-cubes"></i>
                </div>
               <a href="<?php echo base_url('purchase');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box bg-green">
                <div class="inner">
                    <h3><label class="label"><?php echo $product_Count;?></label></h3>

                    <h4 class="paragraph">Products in Stock</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                </div>
                <a href="<?php echo base_url('product/productStock');?>" class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
    </div>
    <div class="row tiles-bg-settings">
        
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <h3><label class="label"><?php echo $Sales_today_count; ?></label></h3>
                    <h4 class="paragraph">Sales Today</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-bar-chart "></i>
                </div>
                <a href="<?php echo base_url('salesreport');?>" class="small-box-footer"><span class="dashboard_text" > Sl <?php echo $sales_today_amount[0]; ?> | Ex <?php echo $sales_today_amount[1]; ?> | Pr <?php echo $sales_today_amount[0]-$sales_today_amount[1]; ?></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color-second">
                <div class="inner">
                    <h3><label class="label"><?php echo $Sales_month_count; ?></label></h3>

                    <h4 class="paragraph">Sales This Month</h4>
                </div>
                <div class="icon">
                    <i class="fa fa-area-chart "></i>
                </div>
                <a href="<?php echo base_url('salesreport');?>" class="small-box-footer"> <span class="dashboard_text" >  Sl <?php echo $sales_month_amount[0]; ?> | <span class="expense_das">Ex <?php echo $sales_month_amount[1]; ?></span>  | Pr <?php echo $sales_month_amount[0]-$sales_month_amount[1]; ?>  </span></a>
            </div>
        </div>
        <div class="col-lg-4 col-xs-6">
            <div class="small-box custom-bg-color">
                <div class="inner">
                    <h3><label class="label"><?php  echo number_format($total_retial_cost,2,'.',''); ?></label></h3>

                    <h4 class="paragraph">Worth of items in stock <?php echo $currency; ?></h4>
                </div>
                <div class="icon">
                    <i class="fa fa-dollar" aria-hidden="true"></i>
                </div>
                <a href="<?php echo base_url('product');?> " class="small-box-footer">More info <i class="fa fa-hand-o-right"></i></a>
            </div>
        </div>
    </div>
    
    </div>    
</section>
    <div class="row">
        <section class="col-lg-7 connectedSortable">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title"><i class="fa fa-money" aria-hidden="true"></i> Total Revenue & Expense This Year <?php echo $currency; ?></h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="areaChart" style="height:250px"></canvas>
                    </div>
                </div>
            </div>
        </section>
        <section class="col-lg-5 connectedSortable">
            <div class="box box-primary ">
                <div class="box-header with-border">
                    <h3 class="box-title">  <i class="ion ion-stats-bars "></i> Sales Profit This Year <?php echo $currency; ?> </h3>
                    <div class="box-tools pull-right">
                        <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="chart">
                        <canvas id="lineChart" style="height:249px"></canvas>
                    </div>
                </div>
            </div>
            
        </section>


</div>
<style>
.small-box > .inner {
    padding: 20px;
}
@media (min-width: 992px){
.col-md-10 {
    width: 85.333333%;
}
}
</style>
<?php 
    $this->load->view('script/dashboard_script.php');
 ?>