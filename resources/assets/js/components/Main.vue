<template>
    <div id="main-wrapper">
        <top-bar v-show="isLoggedIn"></top-bar>
        <left-bar v-show="isLoggedIn"></left-bar>
        <router-view></router-view>
    </div>
</template>

<script>
    import TopBar from './navbar/Topbar';
    import LeftBar from './navbar/Leftbar';
    import BottomBar from './navbar/BottomBar'
    export default {
        name: 'main-app',
        components: {LeftBar, TopBar},
        mounted() {

        },
        computed:{
            isLoggedIn: function () {
                return this.$store.state.isLoggedIn;
            }
        },
        methods:{
            getuser() {
                console.log(localStorage.getItem("user"));
            }
        }
    }
</script>
