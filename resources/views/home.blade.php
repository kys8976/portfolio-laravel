<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!--==================== UNICONS ====================-->
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">

        <!--==================== SWIPER CSS ====================-->
        <link rel="stylesheet" href="assets/css/swiper-bundle.min.css">

        <!--==================== CSS ====================-->
        <link rel="stylesheet" href="assets/css/styles.css">

        <title>Responsive Portfolio Website</title>
    </head>
    <body>
        <!--==================== HEADER ====================-->
        <header class="header" id="header">
            <nav class="nav container">
                <a href="#home" class="nav_logo">
                    John Doe
                </a>

                <div class="nav_menu" id="nav-menu">
                    <ul class="nav_list">
                        <li class="nav-item">
                            <a href="#home" class="nav_link active_link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="#about" class="nav_link">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#skills" class="nav_link">Skills</a>
                        </li>
                        <li class="nav-item">
                            <a href="#services" class="nav_link">Services</a>
                        </li>
                        <li class="nav-item">
                            <a href="#portfolio" class="nav_link">Portfolio</a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="nav_link">Contact Me</a>
                        </li>
                        <li class="nav-item">
                            <a href="/admin/home" class="nav_link">Admin</a>
                        </li>
                    </ul>

                    <div class="nav_close" id="nav-close">
                        <i class="uil uil-times nav_close" id="nav-close"></i>
                    </div>
                </div>

                <div class="nav_btns">
                    <!--===== THEME CHANGE BUTTON =====-->
                    <i class="uil uil-moon change_theme" id="theme-button"></i>

                    <div class="nav_toogle" id="nav-toggle">
                        <i class="uil uil-bars"></i>
                    </div>
                </div>
            </nav>
        </header>

        <!--==================== MAIN ====================-->
        <main class="main">
            <!--==================== HOME ====================-->
            <section class="home section" id="home">
                <div class="home_container container grid">
                    <div class="home_img">
                        <img src="assets/img/home.png" alt="">
                    </div>

                    <div class="home_data">
                        <h1 class="home_title">Hi, I'am John Doe</h1>
                        <h3 class="home_subtitle">FullStack Web developer</h3>
                        <p class="home_description">
                            High level experience in web design,fornt-en and backend development, producing quality work.
                        </p>
                        <a href="#contact" class="button button--flex">
                            Contact Me <i class="uil uil-message button__icon"></i>
                        </a>
                        <div class="home_scroll">
                            <a href="#about" class="home_scroll-button button--flex"></a>
                            <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                            <span class="home_scroll-name">Scroll down</span>
                            <i class="uil uil-arrow-down home_scroll-arrow"></i>
                        </div>
                        <div class="home_social">
                            <span class="home_social-follow">Follow Me</span>
                            <div class="home_social-links">
                                <a href="https://www.linkedin.com" target="_blank" class="home_social-icon">
                                    <i class="uil uil-linkedin-alt"></i>
                                </a>
                                <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                                    <i class="uil uil-dribbble"></i>
                                </a>
                                <a href="https://www.github.com" target="_blank" class="home_social-icon">
                                    <i class="uil uil-github-alt"></i>
                                </a>
                            </div>
                        </div>

                        <div class="home_scroll_social">
                            <div class="home_scroll1">
                                <a href="#about" class="home_scroll-button button--flex"></a>
                                <i class="uil uil-mouse-alt home_scroll-mouse"></i>
                                <span class="home_scroll-name">Scroll down</span>
                                <i class="uil uil-arrow-down home_scroll-arrow"></i>
                            </div>
                            <div class="home_social1">
                                <div class="home_social-link">
                                    <a href="https://www.linkedin.com" target="_blank" class="home_social-icon">
                                        <i class="uil uil-linkedin-alt"></i>
                                    </a>
                                    <a href="https://www.dribbble.com" target="_blank" class="home_social-icon">
                                        <i class="uil uil-dribbble"></i>
                                    </a>
                                    <a href="https://www.github.com" target="_blank" class="home_social-icon">
                                        <i class="uil uil-github-alt"></i>
                                    </a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </section>

            <!--==================== ABOUT ====================-->
            <section class="about section" id="about">
               <h2 class="section__title">About Me</h2>
               <span class="section__subtitle">My introduction</span>

               <div class="about_container container grid">
                 <img src="assets/img/about-img.png" alt="" class="about_img">

                 <div class="about_data">
                    <p class="about_description">
                        FullStack Web developer, with extencive knowledge and years of experience,
                        working in web technologies and UI/UX design, delivering quality work
                    </p>
                    <div class="about_info">
                        <div>
                            <span class="about_info-title">08+</span>
                            <span class="about_info-name">Years <br>experience</span>
                        </div>
                        <div>
                            <span class="about_info-title">25+</span>
                            <span class="about_info-name">Completed <br>project</span>
                        </div>
                        <div>
                            <span class="about_info-title">04+</span>
                            <span class="about_info-name">Companies <br>worked</span>
                        </div>
                    </div>
                    <div class="about_buttons">
                        <a href="assets/pdf/johndoe-Cv.pdf" class="button button--flex">
                            Download CV <i class="uil uil-download-alt button_icon"></i>
                        </a>
                    </div>
                 </div>
               </div>
            </section>

            <!--==================== SKILLS ====================-->
            <section class="skills section" id="skills">
              <h2 class="section__title">Skills</h2>
              <span class="section__subtitle">My technical lever</span>

              <div class="skills_container container grid">
                <div>
                    <!--=========== SKILL 1 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-brackets-curly skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Frontend developer</h1>
                                <span class="skills_subtitle">More than 4 years</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">HTML</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_html"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">CSS</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_css"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">JavaScript</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_javascript"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--=========== SKILL 2 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Backend developer</h1>
                                <span class="skills_subtitle">More than 7 years</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">PHP</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_php"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Node J6</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_nodejs"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Python</h3>
                                    <span class="skills_number">60%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_python"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Ruby</h3>
                                    <span class="skills_number">55%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_ruby"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <!--=========== SKILL 3 ============-->
                    <div class="skills_content skills_open">
                        <div class="skills_header">
                            <i class="uil uil-server-network skills_icon"></i>

                            <div>
                                <h1 class="skills_title">Designer</h1>
                                <span class="skills_subtitle">More than 5 years</span>
                            </div>

                            <i class="uil uil-angle-down skills_arrow"></i>
                        </div>
                        <div class="skills_list grid">
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Figma</h3>
                                    <span class="skills_number">90%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_figma"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Sketch</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_sketch"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Adobe XD</h3>
                                    <span class="skills_number">80%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_adobexd"></span>
                                </div>
                            </div>
                            <div class="skills_data">
                                <div class="skills_titles">
                                    <h3 class="skills_name">Photoshop</h3>
                                    <span class="skills_number">85%</span>
                                </div>
                                <div class="skills_bar">
                                    <span class="skills_percentage skills_photoshop"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
              </div>
            </section>

            <!--==================== QUALIFICATION ====================-->
            <section class="qualification section">
              <h2 class="section__title">Qualification</h2>
              <span class="section__subtitle">My personal journel</span>

              <div class="qualification_container container">
                <div class="qualification_tabs">
                    <div class="qualificaction_button button--flex qualification_active" data-target="#education">
                      <i class="uil uil-graduation-cap qualification_icon"></i>
                      Education
                    </div>
                    <div class="qualificaction_button button--flex" data-target="#work">
                     <i class="uil uil-briefcase-alt qualification-icon"></i>
                     Work
                    </div>
                </div>

                <div class="qualification_sections">
                    <!--========== QUALIFICATION CONTENT 1 ==========-->
                    <div class="qualification_content qualification_active" data-content id="education">
                      <!--============= QUALIFICATION 1 ===========-->
                      <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Computer Science</h3>
                            <span class="qualification_subtitle">Germany-University</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2009 - 2014
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                      </div>
                      <!--============= QUALIFICATION 2 ===========-->
                      <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>

                        <div>
                            <h3 class="qualification_title">Web Design</h3>
                            <span class="qualification_subtitle">Germany-Institute</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2014 - 2017
                            </div>
                        </div>

                      </div>
                      <!--============= QUALIFICATION 3 ===========-->
                      <div class="qualification_data">
                        <div>
                            <h3 class="qualification_title">Web Development</h3>
                            <span class="qualification_subtitle">Germany-Institute</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2017 - 2019
                            </div>
                        </div>
                        <div>
                            <span class="qualification_rounder"></span>
                            <span class="qualification_line"></span>
                        </div>
                      </div>
                      <!--============= QUALIFICATION 4 ===========-->
                      <div class="qualification_data">
                        <div></div>

                        <div>
                            <span class="qualification_rounder"></span>
                            <!--<span class="qualification_line"></span>-->
                        </div>

                        <div>
                            <h3 class="qualification_title">Master in UI/UX</h3>
                            <span class="qualification_subtitle">Germany-Institute</span>
                            <div class="qualificaation_calender">
                                <i class="uil uil-calender-alt"></i>
                                2019 - 2021
                            </div>
                        </div>

                      </div>
                    </div>
                    <!--========== QUALIFICATION CONTENT 2 ==========-->
                    <div class="qualification_content" data-content id="work">
                        <!--============= QUALIFICATION 1 ===========-->
                        <div class="qualification_data">
                          <div>
                              <h3 class="qualification_title">Software Enginner</h3>
                              <span class="qualification_subtitle">Apple Inc - Germany</span>
                              <div class="qualificaation_calender">
                                  <i class="uil uil-calender-alt"></i>
                                  2016 - 2018
                              </div>
                          </div>
                          <div>
                              <span class="qualification_rounder"></span>
                              <span class="qualification_line"></span>
                          </div>
                        </div>
                        <!--============= QUALIFICATION 2 ===========-->
                        <div class="qualification_data">
                          <div></div>

                          <div>
                              <span class="qualification_rounder"></span>
                              <span class="qualification_line"></span>
                          </div>

                          <div>
                              <h3 class="qualification_title">Frontend Developer</h3>
                              <span class="qualification_subtitle">Apple Inc - Germany</span>
                              <div class="qualificaation_calender">
                                  <i class="uil uil-calender-alt"></i>
                                  2018 - 2020
                              </div>
                          </div>

                        </div>
                        <!--============= QUALIFICATION 3 ===========-->
                        <div class="qualification_data">
                          <div>
                              <h3 class="qualification_title">Ui Designer</h3>
                              <span class="qualification_subtitle">Figma - Germany</span>
                              <div class="qualificaation_calender">
                                  <i class="uil uil-calender-alt"></i>
                                  2017 - 2019
                              </div>
                          </div>
                          <div>
                              <span class="qualification_rounder"></span>
                              <!--<span class="qualification_line"></span>-->
                          </div>
                        </div>

                      </div>
                </div>
              </div>
            </section>

            <!--==================== SERVICES ====================-->
            <section class="services section" id="services">
              <h2 class="section__title">Services</h2>
              <span class="section__subtitle">What is offer</span>

              <div class="services_container container grid">
                <!--============== SERVICES 1 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Ui/Ux <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal ">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">UI/UX <br> Designer</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Web page development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I create ux element interactions</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 2 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Frontend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Frontend <br> Developer</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Web page development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I create ux element interactions</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 3 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Backend <br> Developer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Backend <br> Developer</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Web page development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I create ux element interactions</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--============== SERVICES 4 =============-->
                <div class="services_content">
                    <div>
                        <i class="uil uil-web-grid services_icon"></i>
                        <h3 class="services_title">Branding <br> Designer</h3>
                    </div>
                    <span class="button button--flex button--small button--link services_button">
                        View More
                        <i class="uil uil-arrow-right button_icon"></i>
                    </span>

                    <div class="services_modal">
                        <div class="services_modal-content">
                            <h4 class="services_modal-title">Branding <br> Designer</h4>
                            <i class="uil uil-times services_modal-close"></i>

                            <ul class="services_modal-services grid">
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I develop the user interface</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>Web page development</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I create ux element interactions</p>
                                </li>
                                <li class="services_modal-service">
                                    <i class="uil uil-check-circle services_modal-icon"></i>
                                    <p>I position your company brand.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
              </div>
            </section>

            <!--==================== PORTFOLIO ====================-->
            <section class="portfolio section" id="portfolio">
              <h2 class="section__title">Portfolio</h2>
              <span class="section__subtitle">Most recent work</span>

              <div class="portfolio_container container swiper-container">
                <div class="swiper-wrapper">
                    <!--============ PORTFOLIO 1 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/portfolio1.jpeg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Modern Website</h3>
                            <p class="portfolio_description">
                                Website adaptable to all devices,with ui description
                                and animated interactions.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============ PORTFOLIO 2 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/portfolio2.jpeg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">POS App</h3>
                            <p class="portfolio_description">
                                POS App description
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                    <!--============ PORTFOLIO 3 ==============-->
                    <div class="portfolio_content grid swiper-slide">
                        <img src="assets/img/portfolio3.jpeg" alt="" class="portfolio_img">

                        <div class="portfolio_data">
                            <h3 class="portfolio_title">Online Store</h3>
                            <p class="portfolio_description">
                                Website adaptable to all devices,with ui description
                                and animated interactions.
                            </p>
                            <a href="#" class="button button--flex button--small portfolio_button">
                                Demo
                                <i class="uil uil-arrow-right button__icon"></i>
                            </a>
                        </div>
                    </div>
                </div>

                <!--Add Arrow-->
                <div class="swiper-button-next">
                    <i class="uil uil-angle-right-b swiper-portfolio-icon"></i>
                </div>
                <div class="swiper-button-prev">
                    <i class="uil uil-angle-left-b swiper-portfolio-icon"></i>
                </div>
                <!--Add Pagination-->
                <div class="swiper-pagination"></div>
              </div>
            </section>

            <!--==================== PROJECT IN MIND ====================-->
            <section class="project section">
              <div class="project_bg">
                <div class="project_container container grid">
                    <div class="project_data">
                        <h2 class="project_title">You have new project</h2>
                        <p class="project_description">Contact me now and get a 50% discounted</p>
                        <a href="#contact" class="button button--flex button--white">
                            Contact Me
                            <i class="uil uil-message project_icon button_icon"></i>
                        </a>
                    </div>

                    <img src="assets/img/home.png" alt="" class="project_img">
                </div>
              </div>
            </section>

            <!--==================== TESTIMONIAL ====================-->
            <section class="testimonial section">
              <h2 class="section__title">Testimonial</h2>
              <span class="section__subtitle">My client saying</span>

              <div class="testimonial_container container swiper-container">
                <div class="swiper-wrapper">
                    <!--========= TESTIMONIAL 1 ==========-->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial1.jpeg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Jay Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    <!--========= TESTIMONIAL 2 ==========-->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial2.jpg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">John Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>
                    <!--========= TESTIMONIAL 3 ==========-->
                    <div class="testimonial_content swiper-slide">
                        <div class="testimonial_data">
                            <div class="testimonial_header">
                                <img src="assets/img/testimonial3.jpeg" alt="" class="testimonial_img">

                                <div>
                                    <h3 class="testimonial_name">Mike Smith</h3>
                                    <span class="testimonial_client">Client</span>
                                </div>
                            </div>

                            <div>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                                <i class="uil uil-star testimonial_icon-star"></i>
                            </div>
                        </div>
                        <p class="testimonial_description">
                            I get a good impression,I carry out my project with all the possible
                            quality and attention and support 24 hours a day.
                        </p>
                    </div>

                </div>
                <!--Add Pagination-->
                <div class="swiper-pagination swiper-pagination-testimonial"></div>
              </div>
            </section>

            <!--==================== CONTACT ME ====================-->
            <section class="contact section" id="contact">
              <h2 class="section__title">Contact Me</h2>
              <span class="section__subtitle">Get in touch</span>

              <div class="contact_container container grid">
                <div>
                    <div class="contact_information">
                        <i class="uil uil-phone contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Call Me</h3>
                            <span class="contact_subtitle">444-444-444</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-envelope contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Email</h3>
                            <span class="contact_subtitle">johndoe@gmail.com</span>
                        </div>
                    </div>
                    <div class="contact_information">
                        <i class="uil uil-map-marker contact_icon"></i>

                        <div>
                            <h3 class="contact_title">Location</h3>
                            <span class="contact_subtitle">Germany-Munich Av.munich #1234</span>
                        </div>
                    </div>
                </div>

                <form action="" class="contact_form grid">
                    <div class="contact_inputs grid">
                        <div class="contact_content">
                            <label for="" class="contact_label">Name</label>
                            <input type="text" class="contact_input">
                        </div>
                        <div class="contact_content">
                            <label for="" class="contact_label">Email</label>
                            <input type="email" class="contact_input">
                        </div>
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Project</label>
                        <input type="tetx" class="contact_input">
                    </div>
                    <div class="contact_content">
                        <label for="" class="contact_label">Project description</label>
                        <textarea name="" id="" cols="0" rows="7" class="contact_input"></textarea>
                    </div>
                    <div>
                        <a href="#" class="button button--flex">
                            Send Message
                            <i class="uil uil-message button_icon"></i>
                        </a>
                    </div>
                </form>
              </div>
            </section>
        </main>

        <!--==================== FOOTER ====================-->
        <footer class="footer">
          <div class="footer_bg">
            <div class="footer_container container grid">
                <div>
                    <h1 class="footer_title">John Doe</h1>
                    <span class="footer_subtitle">FullStack Web developer</span>
                    <p class="footer_subtitle">
                        High level experience in web design,
                        front-end and backend development,
                        producing quality work
                    </p>
                </div>
                <ul class="footer_links">
                    <li>
                        <a href="#services" class="footer_link">Services</a>
                    </li>
                    <li>
                        <a href="#portfolio" class="footer_link">Portfolio</a>
                    </li>
                    <li>
                        <a href="#contact" class="footer_link">Cantact Me</a>
                    </li>
                    <li>
                        <a href="/admin/home" class="footer_link">Admin</a>
                    </li>
                </ul>
                <div class="footer_socails">
                    <a href="https://www.facebook.com" target="_blank" class="footer_social">
                        <i class="uil uil-facebook-f"></i>
                    </a>
                    <a href="https://www.instagram.com" target="_blank" class="footer_social">
                        <i class="uil uil-instagram"></i>
                    </a>
                    <a href="https://www.twitter.com" class="footer_social">
                        <i class="uil uil-twitter-alt"></i>
                    </a>
                </div>
            </div>
            <p class="footer_copy">&#169; Share Tutorials. All right reserved</p>
          </div>
        </footer>

        <!--==================== SCROLL TOP ====================-->
        <a href="#" class="scrollup" id="scroll-up">
          <i class="uil uil-arrow-up scrollup_icon"></i>
        </a>

        <!--==================== SWIPER JS ====================-->
        <script src="assets/js/swiper-bundle.min.js"></script>

        <!--==================== MAIN JS ====================-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
