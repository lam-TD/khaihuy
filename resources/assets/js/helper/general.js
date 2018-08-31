export function initialize(store, router) {
    router.beforeEach((to, from, next) => {
        if ((!store.state.isLoggedIn || !store.state.currentUser) && to.path != '/') {
            next('/')
        } else if(to.path == '/' && store.state.currentUser){
            next('/dashboard');
        }
        else {
            next();
        }
    });

    axios.interceptors.response.use(null, (error) => {
        if(error.response.status == 401){
            store.commit('logout');
            router.push('/');
        }
    });
}