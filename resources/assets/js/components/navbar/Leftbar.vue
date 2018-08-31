<template>
  <!-- Left Sidebar - style you can find in sidebar.scss  -->
  <!-- ============================================================== -->
  <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
              <ul id="sidebarnav">
                  <li>
                    <router-link to="/dashboard" class="waves-effect waves-dark" aria-expanded="false"><i class="mdi mdi-gauge"></i>
                      <span class="hide-menu">Dashboard</span>
                    </router-link>
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                          <i class="fa fa-tasks"></i>
                          <span class="hide-menu">Kho vận</span>
                      </a>
                      <!--<ul aria-expanded="false" class="collapse">-->
                          <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                          <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                          <i class="fa fa-bank"></i>
                          <span class="hide-menu">Kế toán</span>
                      </a>
                      <!--<ul aria-expanded="false" class="collapse">-->
                          <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                          <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" href="#" aria-expanded="false">
                          <i class="fa fa-user-circle-o"></i>
                          <span class="hide-menu">Nhân sự</span>
                      </a>
                      <ul aria-expanded="false" class="collapse">
                          <li><router-link to="/phongban">Phòng ban</router-link></li>
                          <li><router-link to="/bophan">Bộ phận</router-link></li>
                          <li><router-link to="/bangluong">Bảng lương</router-link></li>
                          <li><router-link to="/bangthuong">Bảng thưởng</router-link></li>
                          <li><router-link to="/danhsachnhanvien">DS Nhân viên</router-link></li>
                      </ul>
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                          <i class="fa fa-gavel"></i>
                          <span class="hide-menu">Kỹ thuật</span>
                      </a>
                      <!--<ul aria-expanded="false" class="collapse">-->
                      <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                      <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                          <i class="fa fa-handshake-o"></i>
                          <span class="hide-menu">Kinh doanh</span>
                      </a>
                      <!--<ul aria-expanded="false" class="collapse">-->
                      <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                      <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
                  <li>
                      <a class="has-arrow waves-effect waves-dark" aria-expanded="false">
                          <i class="mdi mdi-widgets"></i>
                          <span class="hide-menu">Hành chánh</span>
                      </a>
                      <!--<ul aria-expanded="false" class="collapse">-->
                      <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                      <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
                  <li>
                      <router-link to="/thongtinsanpham" class="waves-effect waves-dark" aria-expanded="false">
                          <i class="mdi mdi-widgets"></i>
                          <span class="hide-menu">Sản phẩm</span>
                      </router-link>
                      <!--<ul aria-expanded="false" class="collapse">-->
                      <!--<li><a href="widget-apps.html">Data Widgets</a></li>-->
                      <!--<li><a href="widget-data.html">Statestic Widgets</a></li>-->
                      <!--</ul>-->
                  </li>
              </ul>
          </nav>
          <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
  </aside>
  <!-- ============================================================== -->
  <!-- End Left Sidebar - style you can find in sidebar.scss  -->
</template>

<script>
    export default {
        name: 'left-bar'
    }
</script>
