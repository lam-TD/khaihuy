<template id="login">
    <section id="wrapper">
        <div class="login-register" style="background-image:url(public/assets/images/background/login-register.jpg);">
            <div class="login-box card">
                <div class="card-body">
                    <form @submit.prevent="authenticate" class="form-horizontal form-material" id="loginform">
                        <h3 class="box-title m-b-20">Đăng nhập</h3>
                        <div class="form-group has-success">
                            <div class="col-xs-12">
                                <input v-model="form.email" id="txtemail" class="form-control" type="email" required="" placeholder="Email" autofocus>
                                <!--<small class="form-text text-error"></small>-->
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <input v-model="form.password" @input="validate" id="txtpassword" class="form-control" type="password" required="" placeholder="Mật khẩu">
                                <small v-if="error_password" class="form-text text-error">Mật khẩu phải có độ dài từ 6-20 ký tự</small>
                            </div>
                        </div>
                        <span v-if="error"><label id="error_tk"><i>Tài khoản hoặc mật khẩu không đúng</i></label></span>
                        <div class="form-group row">
                            <div class="col-md-12 font-14">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                    <input id="checkbox-signup" type="checkbox">
                                    <label for="checkbox-signup"> Remember me </label>
                                </div> <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><!-- <i class="fa fa-lock m-r-5"></i> --> Forgot pwd?</a> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button :disabled="disable_submit" class="btn btn-info btn-block text-uppercase waves-effect waves-light" type="submit">Đăng nhập</button>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                                <div class="social">
                                    <a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip" title="" data-original-title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a>
                                    <a href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip" title="" data-original-title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a>
                                </div>
                            </div>
                        </div>
                        <div class="form-group m-b-0">
                            <div class="col-sm-12 text-center">
                                <div>Don't have an account? <a href="pages-register.html" class="text-info m-l-5"><b>Sign Up</b></a></div>
                            </div>
                        </div>
                    </form>
                    <form class="form-horizontal" id="recoverform" action="index.html">
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <h3>Recover Password</h3>
                                <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                            </div>
                        </div>
                        <div class="form-group ">
                            <div class="col-xs-12">
                                <input class="form-control" type="text" required="" placeholder="Email"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import {login} from '../../helper/auth';
    export default {
        name: 'login',
        data() {
            return {
                form: {
                    email: '',
                    password: ''
                },
                error: false,
                error_password: false,
                disable_submit: true
            }
        },
        methods: {
            authenticate() {
                this.$store.dispatch('login');

                login(this.$data.form)
                    .then((res) => {
                        this.$store.commit("loginSuccess", res);
                        this.error = false;
                        this.$router.push({path: '/dashboard'});
                    })
                    .catch((error) => {
                        this.$store.commit("loginFailed", {error})
                        this.error = true;
                    })
            },
            validate() {
                if(this.form.password.length < 6){
                    $('#txtpassword').addClass('input_danger');
                    this.error_password = true;
                    this.disable_submit = true;
                }
                else {
                    $('#txtpassword').removeClass('input_danger');
                    this.error_password = false;
                    this.disable_submit = false;
                }
            }
        }
    }
</script>

<style>
    #error_tk{
        color: red;
    }

    .has-success .input_success{
        border-color: #26dad2 !important;
    }

    .has-success .input_danger{
        border-color: #ef5350 !important;
    }

    .text-error{
        color: #ef5350 !important;
    }
</style>