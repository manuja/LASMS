  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Creditors Registration</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">HRM module</a></li>
              <li class="breadcrumb-item active">Creditors</li>
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
                <h3 class="card-title">Creditors Registration Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Creditors Name" class="col-sm-2 col-form-label">Creditor Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="credname" placeholder="Creditor Name">
                    </div>
                    <label for="Creditors Address" class="col-sm-2 col-form-label">Creditor Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="supadd" placeholder="Address">
                    </div>
                     
                  </div>
                  <div class="form-group row">
                    <label for="Creditors Contact No" class="col-sm-2 col-form-label">Contact No</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="supcontact" placeholder="Contact No">
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
              <h3 class="card-title">Creditors Grid</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="credgrid" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width:20%">Creditors Id</th>
                  <th style="width:20%">Creditors Name</th>
                  <th style="width:20%">Creditors Contect No</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td>1</td>
                  <td>ujitham
                  </td>
                  <td>0713546276</td>
                  <td>
                   
                    <button type="button" class="btn btn-primary" >View</button>
                    <button type="button" class="btn btn-success" >Edit</button>
                    <button type="button" class="btn btn-danger" >Delete</button>
                  </td>

                </tr>
                <tr>
                  <td>1</td>
                  <td>ujitham
                  </td>
                 <td>0713006076</td>
                  <td>
                   
                    <button type="button" class="btn btn-primary" >View</button>
                    <button type="button" class="btn btn-success" >Edit</button>
                    <button type="button" class="btn btn-danger" >Delete</button>
                  </td>

                </tr>
                             
                </tbody>
                <tfoot>
                <tr>
                 <th style="width:20%">Debtor Id</th>
                  <th style="width:20%">Debtors Name</th>
                  <th style="width:20%">Debtors Contect No</th>
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

