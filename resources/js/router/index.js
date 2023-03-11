import { createRouter, createWebHistory } from "vue-router";

//admin
import homeAdminIndex from '../components/admin/home/index.vue';
//pages
import homePageIndex from '../components/pages/home/index.vue';
//login
import login from '../components/auth/login.vue';

import notFound from '../components/pages/home/index.vue';

const routes= [
//admin
{
    path: '/admin/home',
    name: 'adminHome',
    component: homeAdminIndex,
    meta:{
        requiresAuth: true
    }
},
//pages
{
    path: '/',
    name: 'home',
    component: homePageIndex,
    meta:{
        requiresAuth: false
    }
},
//login
{
    path: '/login',
    name: 'Login',
    component: login,
    meta:{
        requiresAuth: false
    }
},
//notFount
{
    path: '/:pathMatch(.*)*',
    name: 'notFound',
    component: notFound,
    meta:{
        requiresAuth: false
    }
},
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

router.beforeEach((to,from) =>{
    if(to.meta.requiresAuth && !localStorage.getItem('token')){
        return { name : 'Login'}
    }
})

export default router
