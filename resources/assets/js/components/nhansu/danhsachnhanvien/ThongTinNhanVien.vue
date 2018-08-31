<template id="thongtinnhanvien">
  <div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <form>
          <!-- ========== END THONG TIN CA NHAN ========= -->
          <h3 class="card-title"><i class="fa fa fa-id-card"></i> Thông tin cá nhân</h3>
          <hr>
          <div class="row">
            <div class="col-md-10">
              <div class="form-group row">
                <label for="" class="label-form col-md-1 col-sm-12 col-12">Mã NV</label>
                <div class="col-sm-2 col-12">
                  <input type="text" class="form-control" id="1" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">Tên NV</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="2" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">G/Tính</label>
                <div class="col-sm-2">
                  <select name="" id="" class="form-control">
                    <option value="">Nam</option>
                    <option value="">Nữ</option>
                  </select>
                </div>
              </div>

              <div class="form-group row">
                <label for="" class="label-form col-md-1">N.Sinh</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="3" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">N.Sinh</label>
                <div class="col-sm-5">
                  <input type="text" class="form-control" id="4" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">Q.Tịch</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="5" placeholder="">
                </div>
              </div>

              <div class="form-group row">
                <label for="" style="margin-top:0;" class="label-form col-md-1">Số CNMD</label>
                <div class="col-sm-2">
                  <input type="text" class="form-control" id="6" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">Ngày cấp</label>
                <div class="col-sm-4">
                  <input type="text" class="form-control" id="7" placeholder="">
                </div>

                <label for="" class="label-form col-md-1 pull-right">Nơi cấp</label>
                <div class="col-sm-3">
                  <input type="text" class="form-control" id="8" placeholder="">
                </div>
              </div>
            </div>

            <div class="col-md-2">
              <div class="wizard-card" style="margin-top: -5px">
                <div class="picture-container">
                  <div class="picture">
                    <img style="height: 100%" src="https://cdn0.vox-cdn.com/images/verge/default-avatar.v9899025.gif" class="picture-src" id="wizardPicturePreview" title="" />
                    <input type="file" id="wizard-picture" @change="onFileChange">
                  </div>
                  <button style="width: 106px;" class="btn btn-sm">Chọn ảnh</button>
                </div>
              </div>
            </div>
          </div>


          <div class="form-group row">
            <label for="" class="label-form col-md-1">Tạm trú</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="9" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" style="margin-top:0" class="label-form col-md-1">Thường trú</label>
            <div class="col-sm-11">
              <input type="text" class="form-control" id="10" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">ĐT bàn</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="11" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Di động 1</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Di động 1</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">MST CN</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Ngày cấp</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" style="margin-top:0;" class="label-form col-md-1 pull-right">C/C thuế cấp</label>
            <div class="col-sm-3">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>
          <!-- ========== END THONG TIN CA NHAN ========= -->

          <!-- ========== THONG LAO DONG ========= -->
          <h3 class="card-title"><i class="fa fa fa-id-card"></i> Thông tin lao động</h3>
          <hr>
          <div class="form-group row">
            <label for="" class="label-form col-md-1">Vào Cty</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Thôi việc</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" style="margin-top:0;" class="label-form col-md-1 pull-right">Tổng TG làm việc</label>
            <div class="col-sm-1">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
            <div class="col-md-4 float-left">
              <div class="row">
                <div class="col-md-2 float-left"><label for="" class="label-form">năm</label></div>
                <div class="col-md-3"><input type="text" class="form-control" id="" placeholder=""></div>
                <div class="col-md-2 float-left"><label for="" class="label-form">Tháng</label></div>
                <div class="col-md-3"><input type="text" class="form-control" id="" placeholder=""></div>
                <div class="col-md-2 float-left"><label for="" class="label-form">ngày</label></div>
              </div>
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">Số HĐLĐ</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Ngày ký</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" style="margin-top:0;" class="label-form col-md-1 pull-right">Thời hạn HĐ</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Hết hạn</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">Số BHXH</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Số BHYT</label>
            <div class="col-sm-2">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" style="margin-top:0;" class="label-form col-md-1 pull-right">Nơi khám</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" style="margin-top:0;" class="label-form col-md-1">Đ/C khám</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="" placeholder="">
            </div>

            <label for="" class="label-form col-md-1 pull-right">Ghi chú</label>
            <div class="col-sm-5">
              <input type="text" class="form-control" id="" placeholder="">
            </div>
          </div>
          <!-- ========== END THONG TIN LAO DONG ========= -->

          <!-- ========== THONG TIN CONG VIEC HIEN TAI ========= -->
          <h3 class="card-title"><i class="fa fa fa-id-card"></i> Thông tin công việc hiện tại</h3>
          <hr>
          <div class="form-group row">
            <label for="" class="label-form col-md-1">EPLV</label>
            <div class="col-sm-3" style="float:left">
              <input type="text" style="width:40%;float:left" class="form-control" id="888" placeholder="">
              <input type="text" style="width:60%" class="form-control" id="99" placeholder="">
            </div>

            <label for="" class="label-form col-md-1">Phòng</label>
            <div class="col-sm-3" style="float:left">
              <input type="text" style="width:40%;float:left" class="form-control" id="988" placeholder="">
              <input type="text" style="width:60%" class="form-control" id="98" placeholder="">
            </div>

            <label for="" class="label-form col-md-1">VTCT</label>
            <div class="col-sm-3" style="float:left">
              <input type="text" style="width:40%;float:left" class="form-control" id="332" placeholder="">
              <input type="text" style="width:60%" class="form-control" id="23" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">Hệ số</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="5s69" placeholder="">
            </div>

            <label style="margin-top:0;" class="label-form col-md-1">Lương cơ bản</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="56a0" placeholder="">
            </div>

            <label style="margin-top:0;" class="label-form col-md-1">Lương HTCV</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="dd" placeholder="">
            </div>

            <label style="margin-top:0;" class="label-form col-md-1">Thời gian Làm việc</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="ggg" placeholder="">
            </div>
          </div>

          <div class="form-group row">
            <label for="" class="label-form col-md-1">Tình trạng</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="aa" placeholder="">
            </div>

            <label style="margin-top:0;" class="label-form col-md-1">Chấm công</label>
            <div class="col-sm-2" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="ccc" placeholder="">
            </div>

            <label class="label-form col-md-1">Ghi chú</label>
            <div class="col-sm-5" style="float:left">
              <input type="text" style="width:100%;" class="form-control" id="bb" placeholder="">
            </div>
          </div>

          <div class="form-actions">
            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> TT Công việc</button>
            <button type="button" class="btn btn-info">TT Lao động</button>
          </div>
          <!-- ========== END THONG TIN CONG VIEC HIEN TAI ========= -->
        </form>
      </div>
    </div>
  </div>
</div>
</template>

<script type="text/javascript">
    export default {
        name: 'thongtinnhanvien',
        data() {
            return {
                imageUrl: '',
                nv: []
            };
        },
        watched () {

        },
        methods: {
            onFileChange: function (e) {
                let files = e.target.files || e.dataTransfer.files;
                if (!files.length) return;
                let reader = new FileReader();

                reader.onload = function (e) {
                    $('#wizardPicturePreview').attr('src', e.target.result).fadeIn('slow');
                };
                reader.readAsDataURL(e.target.files[0]);
            }
        }
    }
</script>

<style media="screen" scoped>
  label.label-form {
    font-weight: 500;
    margin-top: 5px;
    font-size: 13px;
  }

  .form-group {
    margin-bottom: 10px;
  }

  .form-control{
    width: 100%;
  }

  .wizard-card .picture-container {
    position: relative;
    cursor: pointer;
    text-align: center;
  }

  .wizard-card .picture {
    width: 106px;
    height: 106px;
    background-color: #999999;
    border: 4px solid #CCCCCC;
    color: #FFFFFF;
    border-radius: 1px;
    margin: 5px auto;
    overflow: hidden;
    transition: all 0.2s;
    -webkit-transition: all 0.2s;
  }

  .wizard-card .picture:hover {
    border-color: #2ca8ff;
  }

  .wizard-card.ct-wizard-azzure .picture:hover {
    border-color: #2CA8FF;
  }

  .wizard-card.ct-wizard-green .picture:hover {
    border-color: #05ae0e;
  }

  .wizard-card.ct-wizard-blue .picture:hover {
    border-color: #3472f7;
  }

  .wizard-card.ct-wizard-orange .picture:hover {
    border-color: #ff9500;
  }

  .wizard-card.ct-wizard-red .picture:hover {
    border-color: #ff3b30;
  }

  .wizard-card .picture input[type="file"] {
    cursor: pointer;
    display: block;
    height: 100%;
    left: 0;
    opacity: 0 !important;
    position: absolute;
    top: 0;
    width: 100%;
  }

  .wizard-card .picture-src {
    width: 100%;
  }

  wizard-card{
    margin-top: -5px;
  }

</style>
