<template>
  <!-- Topbar header - style you can find in pages.scss -->
  <!-- ============================================================== -->
  <header class="topbar">
      <link href="public/template/css/style.css" rel="stylesheet">
      <nav class="navbar top-navbar navbar-expand-md navbar-light">
          <!-- ============================================================== -->
          <!-- Logo -->
          <!-- ============================================================== -->
          <div class="navbar-header">
              <router-link class="navbar-brand" to="/">
                  <!-- Logo icon -->
                  <b>
                      <img id="large-icon" src="public/assets/images/logokh.png"/>
                      <img id="small-icon" src="public/assets/images/logokh_small.png" style="display: none"/>
                  </b>
                  <!--End Logo icon -->
                  <!-- Logo text -->
                  <span>
                        <!--<img src="public/assets/images/logokh.png"/>-->
                  </span>
              </router-link>
          </div>
          <!-- ============================================================== -->
          <!-- End Logo -->
          <!-- ============================================================== -->
          <div class="navbar-collapse">
              <!-- ============================================================== -->
              <!-- toggle and nav items -->
              <!-- ============================================================== -->
              <ul class="navbar-nav mr-auto mt-md-0">
                  <!-- This is  -->
                  <li class="nav-item">
                      <a @click="hidden_avatar" class="nav-link nav-toggler hidden-md-up text-muted waves-effect waves-dark" href="javascript:void(0)">
                        <i class="mdi mdi-menu"></i>
                      </a>
                  </li>
                  <li class="nav-item m-l-10">
                      <a @click="hidden_avatar" class="nav-link sidebartoggler hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)">
                          <i class="ti-menu"></i>
                      </a>
                  </li>
                  <!-- ============================================================== -->
              </ul>
              <!-- ============================================================== -->
              <!-- User profile and search -->
              <!-- ============================================================== -->
              <ul class="navbar-nav my-lg-0">
                  <!-- ============================================================== -->
                  <!-- Search -->
                  <!-- ============================================================== -->
                  <li class="nav-item hidden-sm-down search-box"> <a class="nav-link hidden-sm-down text-muted waves-effect waves-dark" href="javascript:void(0)"><i class="ti-search"></i></a>
                      <form class="app-search">
                          <input type="text" class="form-control" placeholder="Tìm kiếm..."> <a class="srh-btn"><i class="ti-close"></i></a>
                      </form>
                  </li>
                  <!-- ============================================================== -->
                  <!-- Profile -->
                  <!-- ============================================================== -->
                  <li class="nav-item dropdown" id="lidropdown_6">
                      <a class="nav-link dropdown-toggle text-muted text-muted waves-effect waves-dark" href="" @click="dropdown('dropdown_6')"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="public/assets/images/users/1.jpg" alt="user" class="profile-pic" />
                          <!-- <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div> -->
                      </a>
                      <div class="dropdown-menu dropdown-menu-right mailbox slideInUp" id="dropdown_6">
                        <ul class="dropdown-user">
                            <li>
                                <div class="dw-user-box">
                                    <div class="u-img"><img src="public/assets/images/users/1.jpg" alt="user"></div>
                                    <div class="u-text">
                                        <h4>admin</h4>
                                        <p class="text-muted">admin@gmail.com</p>
                                        <!--<a href="pages-profile.html" class="btn btn-rounded btn-danger btn-sm">Xem thông tin</a>-->
                                    </div>
                                </div>
                            </li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#"><i class="ti-user"></i> Thông tin tài khoản</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="" @click="logout"><i class="fa fa-power-off"></i> Đăng xuất</a></li>
                        </ul>
                      </div>
                  </li>
              </ul>
          </div>
      </nav>
  </header>
  <!-- ============================================================== -->
  <!-- End Topbar header -->
</template>

<script>
    export default {
        name: 'top-bar',
        mounted(){
            // location.reload();
        },
        updated(){
            $(".fix-header .topbar").stick_in_parent({});
        },
        methods: {
            dropdown: function(id){
                $('#lidropdown_6').toggleClass("show");
                $('#' + id).toggleClass("show");
            },
            hidden_avatar: function () {
                $('#large-icon').toggle("hidden-icon");
                $('#small-icon').toggle("hidden-icon-small");
            },
            logout: function () {
                this.$store.commit("logout");
                this.$route.push({ path: '/'});
            }
        }
    }
</script>
