<template id="bang-luong">
  <div class="page-wrapper" style="min-height: 291px;">
          <!-- ============================================================== -->
          <!-- Bread crumb and right sidebar toggle -->
          <!-- ============================================================== -->
          <div class="row page-titles">
              <div class="col-md-5 align-self-center">
                  <h3 class="text-themecolor">Bảng Lương</h3>
              </div>
              <div class="col-md-7 align-self-center">
                  <ol class="breadcrumb">
                      <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                      <li class="breadcrumb-item">pages</li>
                      <li class="breadcrumb-item active">Invoice</li>
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
                      <div class="card card-body printableArea">
                          <h3><b>Danh sách bảng lương</b> <span class="pull-right">#5669626</span></h3>
                          <hr>
                          <div class="row">
                              <div class="col-md-12">
                                <div class="table-responsive">
                                      <table class="table">
                                          <thead>
                                              <tr>
                                                  <th>#</th>
                                                  <th>First Name</th>
                                                  <th>Last Name</th>
                                                  <th>Username</th>
                                                  <th>Role</th>
                                              </tr>
                                          </thead>
                                          <tbody>
                                              <tr>
                                                  <td>1</td>
                                                  <td>Deshmukh</td>
                                                  <td>Prohaska</td>
                                                  <td>@Genelia</td>
                                                  <td><span class="label label-danger">admin</span> </td>
                                              </tr>
                                              <tr>
                                                  <td>2</td>
                                                  <td>Deshmukh</td>
                                                  <td>Gaylord</td>
                                                  <td>@Ritesh</td>
                                                  <td><span class="label label-info">member</span> </td>
                                              </tr>
                                              <tr>
                                                  <td>3</td>
                                                  <td>Sanghani</td>
                                                  <td>Gusikowski</td>
                                                  <td>@Govinda</td>
                                                  <td><span class="label label-warning">developer</span> </td>
                                              </tr>
                                              <tr>
                                                  <td>4</td>
                                                  <td>Roshan</td>
                                                  <td>Rogahn</td>
                                                  <td>@Hritik</td>
                                                  <td><span class="label label-success">supporter</span> </td>
                                              </tr>
                                              <tr>
                                                  <td>5</td>
                                                  <td>Joshi</td>
                                                  <td>Hickle</td>
                                                  <td>@Maruti</td>
                                                  <td><span class="label label-info">member</span> </td>
                                              </tr>
                                              <tr>
                                                  <td>6</td>
                                                  <td>Nigam</td>
                                                  <td>Eichmann</td>
                                                  <td>@Sonu</td>
                                                  <td><span class="label label-success">supporter</span> </td>
                                              </tr>
                                          </tbody>
                                      </table>
                                      <el-pagination
                                        :page-size="20"
                                        :pager-count="5"
                                        layout="prev, pager, next"
                                        :total="1000">
                                      </el-pagination>
                                </div>
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

<script type="text/javascript">
  export default {
    name: 'bangluong'
  }
</script>
