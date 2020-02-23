  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Stock Return</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">SMM</a></li>
              <li class="breadcrumb-item active">Stock Return</li>
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
                <h3 class="card-title">Stock Return Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Debtors Name" class="col-sm-2 col-form-label">Stock In Id</label>
                     <div class="col-sm-4">
                      
                      <!-- select -->
                      <div class="form-group">
                      
                        <select class="form-control">
                          <option>001</option>
                          <option>002</option>
                          <option>003</option>
                          <option>004</option>
                          <option>055</option>
                        </select>
                      </div>
                    
                    </div>
                    <label for="Debtors Address" class="col-sm-2 col-form-label">Stock Return Quantity</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="stockreturnquantity" placeholder="Quantity">
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
              <h3 class="card-title">Stock Return Grid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="stockout" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:20%">Stock Out Id</th>
                  <th style="width:20%">Stock Return Quantity</th>
                  <th style="width:20%">Stock Return Date</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>001</td>
                  <td>1000kg
                  </td>
                  <td>2020-01-01</td>
                  <td>
                   
                    <button type="button" class="btn btn-primary" >View</button>
                    <button type="button" class="btn btn-success" >Edit</button>
                    <button type="button" class="btn btn-danger" >Delete</button>
                    
                  </td>

                </tr>
                <tr>
                  <td>002</td>
                  <td>200kg
                  </td>
                 <td>2020-01-09</td>
                  <td>
                   
                    <button type="button" class="btn btn-primary" >View</button>
                    <button type="button" class="btn btn-success" >Edit</button>
                    <button type="button" class="btn btn-danger" >Delete</button>
                  </td>

                </tr>
                             
                </tbody>
                <tfoot>
                <tr>
                 <th style="width:20%">Stock Out Id</th>
                  <th style="width:20%">Stock Return Quantity</th>
                  <th style="width:20%">Stock Return Date</th>
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

