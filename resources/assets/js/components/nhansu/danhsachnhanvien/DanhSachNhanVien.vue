<template id="danhsachnhanvien">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" id="timkiem" class="form-control" placeholder="Nhập từ khóa để tìm kiếm...">
                                <button type="button" class="btn btn-info btn-sm btntimkiem" name="button">Tìm kiếm</button>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <router-link to="/danhsachnhanvien/themmoi" class="btn btn-primary pull-right"><i class="fa fa-plus-circle"></i> Thêm mới</router-link>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover" id="table_nhanvien">
                            <thead>
                            <tr style="border-top: 1px solid #ddd;">
                                <th class="text-center">#</th>
                                <th style="">Mã</th>
                                <th style="">Tên nhân viên</th>
                                <th>G/T</th>
                                <th>Ngày sinh</th>
                                <th>Nơi sinh</th>
                                <th>Số CMND</th>
                                <th>Ngày cấp</th>
                                <th>Nơi cấp</th>
                                <th>Tạm trú</th>
                                <th style="width:400px;">Thường trú</th>
                                <th>ĐT bàn</th>
                                <th>Di động 1</th>
                                <th>Di động 2</th>
                                <th>MST CN</th>
                                <th>Ngày cấp</th>
                                <th>Nơi cấp</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr v-if="loading_dsnv"><td colspan="17" class=""><b>Đang tải danh sách...</b></td></tr>
                            <tr v-if="flag"><td colspan="17" class=""><b class="error_load_nv">Lỗi không tải được danh sách vui lòng tải lại trang...</b></td></tr>
                            <tr v-if="!loading_dsnv && !flag" v-for="n in danh_sach_nhan_vien.data">
                                <td class="text-nowrap">
                                    <router-link :to="`/danhsachnhanvien/${n.id}`" class="btn btn-info btn-sm" data-toggle="tooltip" data-original-title="Cập nhật"> <i class="fa fa-edit"></i> </router-link>
                                    <button class="btn btn-danger btn-sm" data-toggle="tooltip" data-original-title="Xóa"> <i class="fa fa-trash-o"></i> </button>
                                </td>
                                <td style="width:100px;">{{n.id}}</td>
                                <td>{{n.name}}</td>
                                <td>Nam</td>
                                <td>22/02/1985</td>
                                <td>Võ Văn Tần, Cần Thơ</td>
                                <td>363809876</td>
                                <td>22/02/2002</td>
                                <td>Cần Thơ</td>
                                <td class="hidden-text" style="width:400px;">{{n.address}}</td>
                                <td class="hidden-text" style="width:400px;">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                                <td>0993293232</td>
                                <td>0993293239</td>
                                <td>0993293232</td>
                                <td>Prohaska</td>
                                <td>Prohaska</td>
                                <td class="hidden-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                                    but also the leap into electronic typesetting, remaining essentially unchanged.</td>
                            </tr>
                            </tbody>
                        </table>
                        <el-pagination
                                :page-size="10"
                                layout="prev, pager, next"
                                :total="total"
                                @current-change="getNhanVien">
                        </el-pagination>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    export default {
        name: 'danhsachnhanvien',
        mounted(){
            this.getNhanVien();
        },
        computed: {
            danh_sach_nhan_vien() {
                return this.dsnhanvien;
            },
            total() {
                return this.dsnhanvien_total;
            }
        },
        data(){
            return {
                dsnhanvien: {
                    data: []
                },
                dsnhanvien_total: 0,
                loading_dsnv: false,
                flag: false
            }
        },
        methods: {
            getNhanVien(page = 1) {
                var path = 'api/nhanvien?page=' + page;
                axios({
                    method: 'GET',
                    url: path,
                    headers: {'Authorization':'Bearer ' + this.$store.state.currentUser.token},
                    onDownloadProgress (uploadEvent) {
                        this.loading_dsnv = true;
                    }
                })
                    .then((response) => {
                        this.dsnhanvien.data = response.data.data.data;
                        this.dsnhanvien_total = response.data.data.total;
                        this.flag = false;
                        this.loading_dsnv = false;
                    })
                    .catch((error) => {
                        console.log(error);
                        this.flag = true;
                    })
            }
        }
    }
</script>

<style media="screen" scoped>
    .m-t-40 {
    margin-top: 0px !important;
    }
    #timkiem{
        width: 100%;
        position: relative;
        padding-right: 87px;
        font-size: 13px;
    }

    .btntimkiem{
        position: absolute;
        top: 3px;
        right: 18px;
        height: 37px;
        font-size: 13px;
        height: 32px;
        padding: 5px 13px;
    }

    .error_load_nv{
        color: #ff7a6e;
    }
</style>
