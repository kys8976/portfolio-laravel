import { createRouter, createWebHistory } from "vue-router";

//admin
import homeAdminIndex from "../components/admin/home/index.vue";
import adminAboutIndex from "../components/admin/about/index.vue";
import adminServiceIndex from "../components/admin/services/index.vue";
import adminBoardIndex from "../components/admin/board/index.vue";

//pages
import homePageIndex from "../components/pages/home/index.vue";

//login
import login from "../components/auth/login.vue";

import notFound from "../components/pages/home/index.vue";

const routes = [
    {
        //admin
        path: "/admin/home",
        name: "adminHome",
        component: homeAdminIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //about
        path: "/admin/about",
        name: "adminAbout",
        component: adminAboutIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //service
        path: "/admin/services",
        name: "adminService",
        component: adminServiceIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //board
        path: "/admin/boards",
        name: "adminBoard",
        component: adminBoardIndex,
        meta: {
            requiresAuth: true,
        },
    },
    //pages
    {
        path: "/",
        name: "home",
        component: homePageIndex,
        meta: {
            requiresAuth: false,
        },
    },
    //login
    {
        path: "/login",
        name: "Login",
        component: login,
        meta: {
            requiresAuth: false,
        },
    },
    //notFount
    {
        path: "/:pathMatch(.*)*",
        name: "notFound",
        component: notFound,
        meta: {
            requiresAuth: false,
        },
    },
];

const router = createRouter({
    history: createWebHistory(),
    routes,
});

router.beforeEach((to, from) => {
    if (to.meta.requiresAuth && !localStorage.getItem("token")) {
        return { name: "Login" };
    }
});

export default router;
