  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Items Registration</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url('/index.php/home/index') ?>">Home</a></li>
              <li class="breadcrumb-item active">Items Registration</li>
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
                <h3 class="card-title">Items Registration Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Category Name" class="col-sm-2 col-form-label">Category Name</label>
                    <div class="col-sm-2">
                      <!-- CATEGORY COMBO BOX -->
                      <select class="form-control">
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                        <option>Category 4</option>
                        <option>Category 5</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <button type="button" data-toggle="modal" data-target="#exampleModal" class="btn btn-outline-info">Add Category</button>
                    </div>

                    <label for="Purchasing Unit" class="col-sm-2 col-form-label">Purchasing Unit</label>
                    <div class="col-sm-2">
                      <!-- PURCHASING UNIT COMBO BOX -->
                      <select class="form-control">
                        <option>Purchasing Unit 1</option>
                        <option>Purchasing Unit 2</option>
                        <option>Purchasing Unit 3</option>
                        <option>Purchasing Unit 4</option>
                        <option>Purchasing Unit 5</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <button type="button" data-toggle="modal" data-target="#unitModel" class="btn btn-outline-info">Add New</button>
                    </div>
                  </div>

                  <div class="form-group row">
                    <label for="Item Name" class="col-sm-2 col-form-label">Item Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Item Name">
                    </div>
                    <label for="Selling Unit" class="col-sm-2 col-form-label">Selling Unit</label>
                    <div class="col-sm-2">
                      <!-- SELLING UNIT COMBO BOX -->
                      <select class="form-control">
                        <option>Sell Unit 1</option>
                        <option>Sell Unit 2</option>
                        <option>Sell Unit 3</option>
                        <option>Sell Unit 4</option>
                        <option>Sell Unit 5</option>
                      </select>
                    </div>
                    <div class="col-sm-2">
                      <button type="button" data-toggle="modal" data-target="#unitModel" class="btn btn-outline-info">Add New</button>
                    </div>

                  </div>
                  <div class="form-group row">
                    <label for="Item Code" class="col-sm-2 col-form-label">Item Code</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Item Code">
                    </div>
                    <label for="Reorder Limit" class="col-sm-2 col-form-label">Reorder Limit</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" placeholder="Reorder Limit">
                      <span class="badge badge-info">Reorder Limit will be calculate using Purchasing Unit</span>
                    </div>
                  </div>
                  <!-- /.input group -->
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">Save</button>
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
                      <th style="width:20%">Item Code</th>
                      <th style="width:20%">Item Category</th>
                      <th style="width:20%">Item Name</th>
                      <th style="width:20%">Reorder Limit</th>
                      <th>Action</th>

                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>001</td>
                      <td>Category 1</td>
                      <td>Item 1</td>
                      <td>10 kg</td>
                      <td>
                        <button type="button" class="btn btn-primary btn-sm">View</button>
                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                      </td>

                    </tr>
                    <tr>
                      <td>002</td>
                      <td>Category 2</td>
                      <td>Item 2</td>
                      <td>5 kg</td>
                      <td>

                        <button type="button" class="btn btn-primary btn-sm">View</button>
                        <button type="button" class="btn btn-success btn-sm">Edit</button>
                        <button type="button" class="btn btn-danger btn-sm">Delete</button>
                      </td>

                    </tr>

                  </tbody>
                  <tfoot>
                    <tr>
                      <th style="width:20%">Item Code</th>
                      <th style="width:20%">Item Category</th>
                      <th style="width:20%">Item Name</th>
                      <th style="width:20%">Reorder Limit</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
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


  <!-- ITEM CATEGORY MODEL -->
  <div class="modal fade bd-example-modal-lg" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Add Item Categories</h5>
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
                  <label for="itemCategory" class="col-sm-2 col-form-label">Category Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="itemCategory" placeholder="Category Name">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info btn-sm">Save</button>
                <button type="submit" class="btn btn-default float-right btn-sm">Cancel</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- END FORM -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive" style="height: 250px;">
              <table id="itemCategoryGrid" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:60%">Item Category</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Category 1</td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>

                  </tr>
                  <tr>
                    <td>Category 2</td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm">Edit</button>
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

  <!-- ITEM UNITS -->
  <div class="modal fade bd-example-modal-lg" id="unitModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Units Registration</h5>
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
                  <label for="unit" class="col-sm-2 col-form-label">Unit Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="unit" placeholder="Unit Name">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info btn-sm">Save</button>
                <button type="submit" class="btn btn-default float-right btn-sm">Cancel</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
          <!-- END FORM -->
          <div class="card">
            <!-- /.card-header -->
            <div class="card-body table-responsive" style="height: 250px;">
              <table id="itemCategoryGrid" class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th style="width:60%">Unit Name</th>
                    <th>Action</th>

                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Unit 1</td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm">Edit</button>
                      <button type="button" class="btn btn-danger btn-sm">Delete</button>
                    </td>

                  </tr>
                  <tr>
                    <td>Unit 2</td>
                    <td>
                      <button type="button" class="btn btn-success btn-sm">Edit</button>
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