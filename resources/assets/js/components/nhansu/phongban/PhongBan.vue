<template id="phong-ban">
  <div class="page-wrapper" style="min-height: 291px;">
      <!-- ============================================================== -->
      <!-- Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <div class="row page-titles">
          <div class="col-md-5 align-self-center">
              <h3 class="text-themecolor">Danh sách nhân viên</h3>
          </div>
          <div class="col-md-7 align-self-center">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="javascript:void(0)">Nhân sự</a></li>
                  <li class="breadcrumb-item">Danh sách nhân viên</li>
              </ol>
          </div>
      </div>
      <!-- ============================================================== -->
      <!-- End Bread crumb and right sidebar toggle -->
      <!-- ============================================================== -->
      <!-- ============================================================== -->
      <!-- Container fluid  -->
      <!-- ============================================================== -->
      <div class="container-fluid">
          <!-- ============================================================== -->
          <!-- Start Page Content -->
          <!-- ============================================================== -->
          <div class="row">
              <div class="col-md-12">
                <div class="card">
                      <div class="card-body">
                          <h4 class="card-title">Data Table</h4>
                          <div class="table-responsive">
                              <table id="myTable" class="table table-bordered table-striped">
                                  <thead>
                                      <tr>
                                        <th>Mã</th>
                                        <th style="width:200px;">Tên nhân viên</th>
                                        <th>G/T</th>
                                        <th>Ngày sinh</th>
                                        <th>Nơi sinh</th>
                                        <th>Số CMND</th>
                                        <th>Ngày cấp</th>
                                        <th>Nơi cấp</th>
                                        <th>Tạm trú</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25dadsadadasdadasd</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                      </tr>
                                      <tr>
                                          <td>1</td>
                                          <td>System Architect</td>
                                          <td>Edinburgh</td>
                                          <td>61</td>
                                          <td>2011/04/25</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                          <td>$320,800</td>
                                      </tr>
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          <!-- ============================================================== -->
          <!-- End PAge Content -->

      </div>
      <!-- ============================================================== -->
      <!-- End Container fluid  -->
  </div>
</template>

<script>
    export default {
      name: 'phongban'
    }
</script>
