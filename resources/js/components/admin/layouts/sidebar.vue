<template>
    <!-- Nav Main -->
    <nav class="nav">
        <div class="nav_wrapper">
            <span class="nav_close">
                <i class="fas fa-window-close"></i>
            </span>
            <ul class="nav_list">
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminHome'}, 'nav_link']" to="/admin/home">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-home nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Home </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminAbout'}, 'nav_link']" to="/admin/about">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-address-card nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> About Us </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminService'}, 'nav_link']" to="/admin/services">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-desktop nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Services </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminSkills'}, 'nav_link']" to="/admin/skills">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-wrench nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Skills </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminEducaion'}, 'nav_link']"  to="/admin/educations">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-graduation-cap nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Education </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminExperience'}, 'nav_link']"  to="/admin/experiences">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-blind nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname">
                            Experiences
                        </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminProjects'}, 'nav_link']"  to="/admin/projects">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-folder-open nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Projects </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminTestimonial'}, 'nav_link']"  to="/admin/testimonial">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-home nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname">
                            Testimonial
                        </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminMessage'}, 'nav_link']"  to="/admin/message">
                        <span class="nav_link--span--icon">
                            <i class="fa fa-envelope nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Messages </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminUser'}, 'nav_link']"  to="/admin/user">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-user nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Users </span>
                    </router-link>
                </li>
 <!--
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminSetting'}, 'nav_link']"  to="/admin/setting">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-cog nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Setting </span>
                    </router-link>
                </li>
-->
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminBoard'}, 'nav_link']" to="/admin/boards">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-book nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Boards </span>
                    </router-link>
                </li>
                <li class="nav_item">
                    <router-link :class="[{'nav__active': $route.name === 'adminPost' }, 'nav_link']" :to="'/admin/post'" style="margin-left:5px;">
                        <span class="nav_link--span--icon">
                            <i class="fas fa-arrow-right nav__link--icon"> </i>
                        </span>
                        <span class="nav_link--span--navname"> Posts </span>
                    </router-link>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Nav Main -->
</template>
