  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h4>Debtors Registration</h4>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">HRM module</a></li>
              <li class="breadcrumb-item active">Debtors</li>
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
                <h3 class="card-title">Debtors Registration Information</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form class="form-horizontal">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="Debtors Name" class="col-sm-2 col-form-label">Debtors Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="cusname" placeholder="Customer Name">
                    </div>
                    <label for="Debtors Address" class="col-sm-2 col-form-label">Debtors Address</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="cusadd" placeholder="Address">
                    </div>
                     
                  </div>
                  <div class="form-group row">
                    <label for="Contact No" class="col-sm-2 col-form-label">Contact No</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="cuscontact" placeholder="Contact No">
                    </div>
                    <label for="Credit Limit" class="col-sm-2 col-form-label">Credit Limit</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" id="cuscreaditlim" placeholder="Credit limit">
                    </div>
                     
                  </div>
                  <div class="form-group row">
                    <label for="Credit Limit" class="col-sm-2 col-form-label">Credit Period</label>
                     <div class="input-group row col-sm-4">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="far fa-calendar-alt"></i>
                      </span>
                    </div class="col-sm-4">
                    <input type="text" class="form-control float-right" id="reservation">
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
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

