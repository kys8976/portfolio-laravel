import { createRouter, createWebHistory } from "vue-router";

//admin
import homeAdminIndex from "../components/admin/home/index.vue";
import adminAboutIndex from "../components/admin/about/index.vue";
import adminServiceIndex from "../components/admin/services/index.vue";
import adminSkillIndex from "../components/admin/skills/index.vue";
import adminEducaionIndex from "../components/admin/education/index.vue";
import adminExperiencesIndex from "../components/admin/experience/index.vue";
import adminProjectIndex from "../components/admin/project/index.vue";
import adminProjectNew from "../components/admin/project/new.vue";
import adminProjectEdit from "../components/admin/project/edit.vue";
import adminTestimonialIndex from "../components/admin/testimonial/index.vue";
import adminTestimonialNew from "../components/admin/testimonial/new.vue";
import adminTestimonialEdit from "../components/admin/testimonial/edit.vue";
import adminMessagesIndex from "../components/admin/message/index.vue";
import adminUsersIndex from "../components/admin/user/index.vue";
import adminSettingIndex from "../components/admin/setting/index.vue";
import adminBoardIndex from "../components/admin/board/index.vue";
import adminBoardPost from "../components/admin/board/post.vue";



//login
import login from "../components/auth/login.vue";
//import notFound from "../components/pages/notFound.vue";

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
        //skills
        path: "/admin/skills",
        name: "adminSkills",
        component: adminSkillIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //educations
        path: "/admin/educations",
        name: "adminEducaion",
        component: adminEducaionIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Experience
        path: "/admin/experiences",
        name: "adminExperience",
        component: adminExperiencesIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Projects
        path: "/admin/projects",
        name: "adminProjects",
        component: adminProjectIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Project New
        path: "/admin/projects/new",
        name: "adminProjectNew",
        component: adminProjectNew,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Project Edit
        path: "/admin/projects/edit/:id",
        name: "adminProjectEdit",
        component: adminProjectEdit,
        meta: {
            requiresAuth: true,
        },
        props: true
    },
    {
        //Testimonial
        path: "/admin/testimonial",
        name: "adminTestimonial",
        component: adminTestimonialIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Testimonial New
        path: "/admin/testimonial/new",
        name: "adminTestimonialNew",
        component: adminTestimonialNew,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Testimonial Edit
        path: "/admin/testimonial/edit/:id",
        name: "adminTestimonialEdit",
        component: adminTestimonialEdit,
        meta: {
            requiresAuth: true,
        },
        props: true
    },
    {
        //Messages
        path: "/admin/message",
        name: "adminMessage",
        component: adminMessagesIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Users
        path: "/admin/user",
        name: "adminUser",
        component: adminUsersIndex,
        meta: {
            requiresAuth: true,
        },
    },
    {
        //Setting
        path: "/admin/setting",
        name: "adminSettin",
        component: adminSettingIndex,
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
    {
        //post
        path: "/admin/post",
        name: "adminPost",
        component: adminBoardPost,
        meta: {
            requiresAuth: true,
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
/*
    {
        path: "/:pathMatch(.*)*",
        name: "notFound",
        component: notFound,
        meta: {
            requiresAuth: false,
        },
    },
*/
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
