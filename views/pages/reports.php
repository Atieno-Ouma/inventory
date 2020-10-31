<?php
defined('BASEPATH') OR exit('');
?>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
              <div class="row latestStuffs">
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-body latestStuffsBody" style="background-color: #0F92C2">
                            <div class="pull-left"><i class="fa fa-exchange"></i></div>
                            <div class="pull-right">
                                <div id="totalSpare"></div>
                                <div class="latestStuffsText">ALL MATERIALS</div>
                            </div>
                        </div>
                        <div class="panel-footer text-center" style="color:#5cb85c">Number of all Items in Stock</div>
                    </div>
                </div>
              
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-body latestStuffsBody" style="background-color: #151B54">
                            <div class="pull-left"><i class="fa fa-tasks"></i></div>
                            <div class="pull-right">
                                <div id="totalDeployed"></div>
                                <div class="latestStuffsText pull-right">ALL ROOMS</div>
                            </div>
                        </div>
                        <div class="panel-footer text-center" style="color:#f0ad4e">List of all rooms in the clinic </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="panel panel-info">
                        <div class="panel-body latestStuffsBody" style="background-color: #F08080">
                            <div class="pull-left"><i class="fa fa-shopping-cart"></i></div>
                            <div class="pull-right">
                                <div id="totalDefected"></div>
                                <div class="latestStuffsText pull-right">BOOKS</div>
                            </div>
                        </div>
                        <div class="panel-footer text-center" style="color:#DB7093">Total Number of books in the clinics library</div>
                    </div>
                </div>
              </div>
              
            <div class="clearfix"></div>

            <div class="row margin-top-5">
                <div class="col-sm-6">
                    <div class="panel panel-hash">
                      <div class="panel-heading dashboard" style="background-color:#E0FFFF" ><i class="fa fa-desktop"></i> Equipments</div>
                        <div class="panel-body panel-height">
                          <div class="clearfix"></div>
                          <!-- Items List Table -->
                          <table id = "locationReport" class="table table-striped table-responsive table-hover">
                              <thead>
                                  <tr >
                                    <th>SN/NO</th>
                                    <th>EQUIPMENT</th>
                                    <th>S-NO </th>
                                    <th>  Qantity</th>
                                    <th>Status</th>
                                  </tr>
                              </thead>
                              <tbody>
                              </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                  

               
            </div>
          </div>
        </div>
        
        <!-- /page content -->

