  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h4>Stock In (GRN)</h4>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('/index.php/home/index') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Stock In</li>
                      </ol>
                  </div><!-- /.col -->
              </div><!-- /.row -->
          </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <div class="row">
                  <!-- left column -->
                  <div class="col-md-12">
                      <!-- general form elements -->
                      <div class="card card-primary">
                          <div class="card-header">
                              <div class="row">
                                  <h3 class="card-title">Current GRN Number 1</h3>
                              </div>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form class="form-horizontal">
                              <div class="card-body">
                                  <div class="form-group row">
                                      <label for="Category Name" class="col-sm-2 col-form-label">Item Name</label>
                                      <div class="col-sm-4">
                                          <!-- CATEGORY COMBO BOX -->
                                          <input list="encodings" value="" class="form-control" placeholder="Item Name">
                                          <datalist id="encodings">
                                              <option data-value="1" value="Item Name 1">code1</option>
                                              <option data-value="1" value="Item Name 2">code2</option>
                                              <option data-value="1" value="Item Name 3">code3</option>
                                              <option data-value="1" value="Item Name 4">code4</option>
                                              <option data-value="1" value="Item Name 5">code5</option>
                                              <option data-value="1" value="Item Name 6">code6</option>
                                              <option data-value="1" value="Item Name 7">code7</option>
                                              <option data-value="1" value="Item Name 8">code8</option>
                                          </datalist>
                                      </div>

                                      <label for="purchaseQuantity" class="col-sm-2 col-form-label">Purchase Quantity</label>
                                      <div class="input-group col-sm-4">
                                          <input type="text" class="form-control" id="purchaseQuantity" placeholder="Purchase Quantity">
                                          <div class="input-group-append">
                                              <span class="input-group-text">KG</span>
                                          </div>
                                      </div>
                                  </div>

                                  <div class="form-group row">
                                      <label for="wholeSalePrice" class="col-sm-2 col-form-label">Whole Sale Price</label>
                                      <div class="input-group col-sm-4">
                                          <input type="text" class="form-control" id="wholeSalePrice" placeholder="Whole Sale Price">
                                          <div class="input-group-append">
                                              <span class="input-group-text">Rs</span>
                                          </div>
                                      </div>
                                      <label for="sellPrice" class="col-sm-2 col-form-label">Selling Price</label>
                                      <div class="input-group col-sm-4">
                                          <input type="text" class="form-control" id="sellPrice" placeholder="Selling Price">
                                          <div class="input-group-append">
                                              <span class="input-group-text">Rs</span>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="form-group row">
                                      <label for="Item Code" class="col-sm-2 col-form-label">Item Cost Price</label>
                                      <div class="col-sm-4">
                                          <input type="text" readonly class="form-control" placeholder="Item Cost Price">
                                      </div>
                                      <label class="col-sm-2 col-form-label">Expiry Date</label>
                                      <div class="col-sm-1">
                                          <input type="checkbox" name="my-checkbox" data-bootstrap-switch>
                                      </div>
                                      <div class="col-sm-3">
                                          <input type="text" disabled class="form-control" placeholder="Expiry Date" id="expireDate">
                                      </div>
                                  </div>
                                  <!-- /.input group -->
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer">
                                  <button type="button" data-toggle="modal" data-target="#grnCompleteModal" class="btn btn-info">Confirm GRN</button>
                                  <button type="button" data-toggle="modal" data-target="#viewItemsModal" class="btn btn-warning">View Items</button>
                                  <button type="reset" class="btn btn-default float-right">Cancel</button>
                              </div>
                              <!-- /.card-footer -->
                          </form>
                      </div>

                  </div>
                  <div class="col-md-12">
                      <div class="card">
                          <div class="card-header">
                              <h3 class="card-title">Items Grid</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="itemGrid" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>GRN Number</th>
                                          <th style="width:20%">Supplier Name</th>
                                          <th style="width:20%">GRN Date</th>
                                          <th style="width:20%">GRN Total</th>
                                          <th style="width:20%">Total Payble</th>
                                          <th style="width:20%">Payment Details</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Supplier 1</td>
                                          <td>2020-02-23</td>
                                          <td>150,000.00</td>
                                          <td>150,000.00</td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-sm">Add Payment</button>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>2</td>
                                          <td>Supplier 2</td>
                                          <td>2020-02-23</td>
                                          <td>120,000.00</td>
                                          <td>120,000.00</td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-sm">Add Payment</button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>3</td>
                                          <td>Supplier 2</td>
                                          <td>2020-02-23</td>
                                          <td>120,000.00</td>
                                          <td>120,000.00</td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-sm">Add Payment</button>
                                          </td>
                                      </tr>
                                      <tr>
                                          <td>4</td>
                                          <td>Supplier 2</td>
                                          <td>2020-02-23</td>
                                          <td>120,000.00</td>
                                          <td>120,000.00</td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-sm">Add Payment</button>
                                          </td>
                                      </tr>

                                  </tbody>
                              </table>
                          </div>
                          <!-- /.card-body -->
                      </div>
                  </div>
                  <!--/.col (right) -->
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>

  <!-- ITEM VIEW MODAL -->
  <div class="modal fade bd-example-modal-lg" id="viewItemsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Items Related to GRN No 1</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card">
                      <!-- /.card-header -->
                      <div class="card-body table-responsive" style="height: 300px;">
                          <table id="grnItemsGrid" class="table table-bordered table-striped">
                              <thead>
                                  <tr>
                                      <th style="width:60%">Item Name</th>
                                      <th style="width:60%">Item Quantity</th>
                                      <th>Action</th>

                                  </tr>
                              </thead>
                              <tbody>
                                  <tr>
                                      <td>Item 1</td>
                                      <td>50 Kg</td>
                                      <td>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                      </td>

                                  </tr>
                                  <tr>
                                      <td>Item 2</td>
                                      <td>20 g</td>
                                      <td>
                                          <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                      </td>

                                  </tr>

                              </tbody>
                          </table>
                      </div>
                      <!-- /.card-body -->
                  </div>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default float-right" data-dismiss="modal">Close</button>
              </div>
          </div>
      </div>
  </div>


  <!-- GRN COMPLETE MODAL -->
  <div class="modal fade bd-example" id="grnCompleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Complete GRN</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <div class="card card-info">
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form class="form-horizontal">
                          <div class="card-body">
                              <div class="form-group row">
                                  <label for="grnTot" class="col-sm-4 col-form-label">GRN Total</label>
                                  <div class="input-group col-sm-8">
                                      <input type="text" class="form-control" readonly value="150,000.00" id="grnTot" placeholder="GRN Total">
                                      <div class="input-group-append">
                                          <span class="input-group-text">Rs</span>
                                      </div>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="itemCount" class="col-sm-4 col-form-label">Items Count</label>
                                  <div class="col-sm-8">
                                      <input type="text" readonly value="#" id="itemCount" class="form-control" placeholder="Items Count">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="grnTot" class="col-sm-4 col-form-label">Supplier Name</label>
                                  <div class="col-sm-8">
                                      <!-- SUPPLIER COMBO BOX -->
                                      <select class="form-control">
                                          <option>Supplier 1</option>
                                          <option>Supplier 2</option>
                                          <option>Supplier 3</option>
                                          <option>Supplier 4</option>
                                          <option>Supplier 5</option>
                                      </select>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="returnAmount" class="col-sm-4 col-form-label">Return Amount</label>
                                  <div class="input-group col-sm-5">
                                      <input type="text" readonly value="0.00" class="form-control" id="returnAmount" placeholder="Return Amount">
                                      <div class="input-group-append">
                                          <span class="input-group-text">Rs</span>
                                      </div>
                                  </div>
                                  <div class="col-sm-3">
                                      <input type="checkbox" name="my-checkbox" data-bootstrap-switch>
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="invoNumber" class="col-sm-4 col-form-label">Invoice Number</label>
                                  <div class="col-sm-8">
                                      <input type="text" id="invoNumber" class="form-control" placeholder="Invoice Number">
                                  </div>
                              </div>
                              <div class="form-group row">
                                  <label for="totalPayble" class="col-sm-4 col-form-label">Total Payble</label>
                                  <div class="col-sm-8">
                                      <input type="text" readonly value="150,000.00" id="totalPayble" class="form-control" placeholder="Total Payble">
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-body -->
                          <div class="card-footer">
                              <button type="button" class="btn btn-info btn-sm">Complete GRN</button>
                              <button type="button" data-dismiss="modal" class="btn btn-default float-right btn-sm">Cancel</button>
                          </div>
                          <!-- /.card-footer -->
                      </form>
                  </div>
                  <!-- END FORM -->
              </div>
          </div>
      </div>
  </div>