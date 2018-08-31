<template>
    <div class="">
        <!--<top-bar></top-bar>-->
        <!--<left-bar></left-bar>-->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">Thông tin sản phẩm</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Sản phẩm</a></li>
                        <li class="breadcrumb-item active">Thông tin sản phẩm</li>
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
                <!-- Row -->
                <div class="card-group">
                    <div class="card">
                        <div class="card-body">
                            <form @submit.prevent="onSubmit">
                                <div class="row">
                                    <div class="col-md-6 col-thongtinsanpham">
                                        <!--================ THONG TIN SAN PHAM =============-->
                                        <h4 class="card-title"><i class="fa fa-inbox"></i> <b>Thông tin sản phẩm</b></h4>
                                        <hr>

                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Mã hàng</label>
                                            <div class="col-sm-10 col-12">
                                                <!--<input type="text" class="form-control" id="wew1" placeholder="">-->
                                                <input v-model="sp.mahang" v-validate="'required'" :class="{'border-danger' : errors.has('txtmahang')}" class="form-control" name="txtmahang" type="text" autofocus>
                                                <small v-show="errors.has('txtmahang')" class="help text-muted is-danger">Vui lòng nhập mã hàng</small>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label style="padding-right: 0;" class="label-form col-md-2 col-sm-12 col-12">Mặt hàng</label>
                                            <div class="col-sm-10 col-12">
                                                <input v-validate="'required'" type="text" :class="{'border-danger' : errors.has('txtmathang')}" class="form-control" name="txtmathang" id="tt" placeholder="">
                                                <small v-show="errors.has('txtmathang')" class="help text-muted is-danger">Vui lòng nhập mặt hàng</small>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">ĐVT</label>
                                            <div class="col-sm-4 col-12">
                                                <input type="text" class="form-control" id="" placeholder="">
                                            </div>

                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Net.</label>
                                            <div class="col-sm-4 col-12">
                                                <input type="text" class="form-control" id="1" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Warranty</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt66" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Diễn giả</label>
                                            <div class="col-sm-10 col-12">
                                                <textarea class="form-control diengiai" id="tt6634" placeholder=""></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Hình ảnh</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="file" name="files">
                                            </div>
                                        </div>

                                        <!--================ KHO =============-->
                                        <h4 class="card-title"><i class="fa fa-tasks"></i> <b>Kho</b></h4>
                                        <hr>
                                        <div class="form-group row">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Kho</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tSt66" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label style="padding-right: 0" class="label-form col-md-2 col-sm-12 col-12">Loại hàng</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tsSt66" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label style="padding-right: 0" class="label-form col-md-2 col-sm-12 col-12">Nhóm hàng</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tssSt66" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <!--================ GIA SAN PHAM =============-->
                                        <h4 class="card-title"><i class="fa fa-cubes"></i> <b>Giá sản phẩm</b></h4>
                                        <hr>
                                        <label class="title-sanpham">Giá vnđ full VAT</label>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Dealer</label>
                                            <div class="col-sm-4 col-12">
                                                <vue-numeric class="form-control" separator="," v-model="sp.giasanpham"></vue-numeric>
                                            </div>
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Enduser</label>
                                            <div class="col-sm-4 col-12">
                                                <input type="text" class="form-control" id="tt890" placeholder="">
                                            </div>
                                        </div>
                                        <div class="" style="height: 1px;width: 100%;border-bottom: 1px dashed #ddd"></div>

                                        <label class="title-sanpham">DEAL</label>
                                        <div class="form-group row">
                                            <label class="label-form label-deal col-md-2 col-sm-12 col-12">Deal 1 (>= 1tr)</label>
                                            <div class="col-sm-6 col-12">
                                                <vue-numeric class="form-control" separator="," v-model="sp.giasanpham"></vue-numeric>
                                            </div>
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12"> Số lượng</label>
                                            <div class="col-sm-2 col-12">
                                                <input type="text" class="form-control" id="tt890h" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form label-deal col-md-2 col-sm-12 col-12">Deal 2 (>= 2tr)</label>
                                            <div class="col-sm-6 col-12">
                                                <vue-numeric class="form-control" separator="," v-model="sp.giasanpham"></vue-numeric>
                                            </div>
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12"> Số lượng</label>
                                            <div class="col-sm-2 col-12">
                                                <input type="text" class="form-control" id="tt890yf" placeholder="">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <label for="" class="label-form label-deal col-md-2 col-sm-12 col-12">Deal 3 (>=3,5tr)</label>
                                            <div class="col-sm-6 col-12">
                                                <vue-numeric class="form-control" separator="," v-model="sp.giasanpham"></vue-numeric>
                                            </div>
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12"> Số lượng</label>
                                            <div class="col-sm-2 col-12">
                                                <input type="text" class="form-control" id="tt890rr" placeholder="">
                                            </div>
                                        </div>
                                        <div class="" style="height: 1px;width: 100%;border-bottom: 1px dashed #ddd"></div>

                                        <label class="title-sanpham">DISTRI</label>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">DISTRI</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8d9" placeholder="">
                                            </div>
                                        </div>
                                        <div class="" style="height: 1px;width: 100%;border-bottom: 1px dashed #ddd"></div>

                                        <label class="title-sanpham">Trừ VAT xuất hóa đơn</label>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Dealer</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8dd9" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Enduser</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8edd9" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Deal 1</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8dd39" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Deal 2</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8dd29" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Deal 3</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8ddd9" placeholder="">
                                            </div>
                                        </div>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">DISTRI</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="ttd8d9" placeholder="">
                                            </div>
                                        </div>
                                        <div class="" style="height: 1px;width: 100%;border-bottom: 1px dashed #ddd"></div>

                                        <label class="title-sanpham">Cộng dịch vụ</label>
                                        <div class="form-group row" style="margin-bottom: 10px">
                                            <label for="" class="label-form col-md-2 col-sm-12 col-12">Cộng DV</label>
                                            <div class="col-sm-10 col-12">
                                                <input type="text" class="form-control" id="tt8dsd9" placeholder="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <hr>
                                        <div class="form-actions pull-right">
                                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Lưu</button>
                                            <button type="button" class="btn btn-inverse">Hủy</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <!--<script !src=""></script>-->
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
    </div>
</template>
<script>
    var numeral = require('numeral');
    import VueNumeric from 'vue-numeric';
    export default {
        name: 'thongtinsanpham',
        created() {
            let j = document.createElement('script');
            let j2 = document.createElement('script');
            j.setAttribute('src',"./public/assets/plugins/jquery-FileUploader/thumbnails/js/custom.js");
            j.setAttribute('id','fileupload-custom');
            j2.setAttribute('src',"./public/assets/plugins/jquery-FileUploader/jquery.fileuploader.min.js");
            j2.setAttribute('id','fileupload-js');
            document.head.appendChild(j2);
            document.head.appendChild(j);
        },
        mounted() {
            // this.$validator.validateAll();
        },
        beforeDestroy() {
            $('#fileupload-custom').remove();
            $('#fileupload-js').remove();
        },
        data () {
            return {
                sp: {
                    mahang: '',
                    giasanpham: ''
                },
                disable_submit: true
            }
        },
        methods: {
            onSubmit: function () {
                // this.$validator.validateAll();
                this.$validator.validateAll().then((value) =>{
                    if(value){
                        alert(this.sp.giasanpham);
                        alert("Submit");
                    }
                }).catch(reason => {
                    console.log(reason);
                })
            },
            format_money: function (num) {
                return 1;
            },
            number_format: function(num){
                const formatter = new Intl.NumberFormat('en-US', {
                    style: 'currency',
                    minimumFractionDigits: 2
                })

                return formatter.format(num);
            }//fn.extend
        },
        components: { VueNumeric }
    }
</script>

<style scoped>
    label.label-form {
        font-weight: 500;
        margin-top: 5px;
        font-size: 13px;
    }

    input{
        font-size: 13px !important;
        min-height: 25px;
    }

    .form-group {
        margin-bottom: 10px;
    }

    .form-control{
        width: 100%;
    }

    .diengiai{
        min-height: 100px;
        font-size: 13px;
    }
    .col-thongtinsanpham{
        border-right: 1px solid #ddd;
    }

    label.title-sanpham{
        font-weight: 700 !important;
        font-size: 15px !important;
    }

    .label-deal{
        margin-top: 0px !important;
    }

    .text-muted{
        color: red !important;
    }
</style>