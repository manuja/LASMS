  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Debtors Payment</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Deptors Trans</a></li>
              <li class="breadcrumb-item active">Payments</li>
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
                <h3 class="card-title">Debtors Payment Information (Reciept)</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Debtors Name" class="col-sm-2 col-form-label">Invoice Id</label>
                     <div class="col-sm-4">
                      
                      <!-- select -->
                      <div class="form-group">
                      
                        <select class="form-control">
                          <option>001</option>
                          <option>022</option>
                          <option>021</option>
                          <option>055</option>
                          <option>099</option>
                        </select>
                      </div>
                    
                    </div>
                    <label for="Debtors Address" class="col-sm-2 col-form-label">Reciept Amount</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="resamount" placeholder="Address">
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
              <h3 class="card-title">Debtors Payment Grid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="debtrecieptgrid" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:20%">Reciept Id</th>
                  <th style="width:20%">Reciept Amount</th>
                  <th style="width:20%">Issue Date</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>001</td>
                  <td>1000
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
                  <td>200
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
                  <th style="width:20%">Reciept Id</th>
                  <th style="width:20%">Reciept Amount</th>
                  <th style="width:20%">Issue Date</th>
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

