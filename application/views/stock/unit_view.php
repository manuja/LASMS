  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h4>Units Mapping</h4>
                  </div><!-- /.col -->
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url('/index.php/home/index') ?>">Home</a></li>
                          <li class="breadcrumb-item active">Units Mapping</li>
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
                              <h3 class="card-title">Create Units Formular</h3>
                          </div>
                          <!-- /.card-header -->
                          <!-- form start -->
                          <form class="form-horizontal">
                              <div class="card-body">
                                  <div class="form-group row">
                                      <label for="purchUnit" class="col-sm-2 col-form-label">Purchasing Unit</label>
                                      <div class="col-sm-4">
                                          <!-- PURCHASING UNIT COMBO BOX -->
                                          <select class="form-control">
                                              <option>Purchasing Unit 1</option>
                                              <option>Purchasing Unit 2</option>
                                              <option>Purchasing Unit 3</option>
                                              <option>Purchasing Unit 4</option>
                                              <option>Purchasing Unit 5</option>
                                          </select>
                                      </div>
                                      <label for="sellUnit" class="col-sm-2 col-form-label">Selling Unit</label>
                                      <div class="col-sm-4">
                                          <!-- SELLING UNIT COMBO BOX -->
                                          <select class="form-control">
                                              <option>Sell Unit 1</option>
                                              <option>Sell Unit 2</option>
                                              <option>Sell Unit 3</option>
                                              <option>Sell Unit 4</option>
                                              <option>Sell Unit 5</option>
                                          </select>
                                      </div>

                                  </div>
                                  <div class="form-group row">
                                      <label for="purchQuant" class="col-sm-2 col-form-label">Purchase Quantity</label>
                                      <div class="col-sm-4">
                                          <input type="text" class="form-control" id="purchQuant" placeholder="Purchase Quantity">
                                      </div>
                                      <label for="sellQuant" class="col-sm-2 col-form-label">Sellng Quantity</label>
                                      <div class="col-sm-4">
                                          <input type="text" class="form-control" id="sellQuant" placeholder="Sellng Quantity">
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
                              <h3 class="card-title">Units FormularS</h3>
                          </div>
                          <!-- /.card-header -->
                          <div class="card-body">
                              <table id="mappingGrid" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                          <th>Purch Qnt</th>
                                          <th>Purch Unit</th>
                                          <th>Sell Quant</th>
                                          <th>Sell Unit</th>
                                          <th>Action</th>

                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>KG</td>
                                          <td>0.5</td>
                                          <td>g</td>
                                          <td>
                                              <button type="button" class="btn btn-success btn-sm">Edit</button>
                                              <button type="button" class="btn btn-danger btn-sm">Delete</button>
                                          </td>

                                      </tr>
                                      <tr>
                                          <td>10</td>
                                          <td>g</td>
                                          <td>1</td>
                                          <td>mg</td>
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
                  <!--/.col (right) -->
              </div>
              <!-- /.row -->
          </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
  </div>