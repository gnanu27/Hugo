<?php ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Abhaya+Libre&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif+TC&display=swap" rel="stylesheet"> 

    <link rel="stylesheet" href="./index.css">
    <title>Web design Agency</title>
</head>
<body <?php body_class(); ?> >
<script>
  AOS.init();
</script>
<div class="home">
    <header class="header">
        <div class="logo">
        <img src="<?php echo get_theme_mod('create_logo'); ?>" alt="Ham" class="logo-img">
        </div>

        <input type="checkbox" id="ham" />
        <label for="ham" class="ham-icon"> 
        <img src="<?php echo get_template_directory_uri(); ?>/img/ham.png" alt="Ham" class="ham-img"> </label>
       
        
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container'=> false, 'menu_class'=>'NavList'))  ?> 
         

     
        <ul class="NavList-social">
            <li class="Navitem">
                <a href="#" class="NavLink"> <img src="<?php echo get_template_directory_uri(); ?>/img/work/dribbble.svg" class="NavLink__img" />  </a>
            </li>
            <li class="Navitem"  >
                <a href="#" class="NavLink"> <img src="<?php echo get_template_directory_uri(); ?>/img/work/behance.svg" class="NavLink__img" /> </a>
            </li>
        </ul>
    </header>
    <div class="homeHero" data-aos="fade-down">
            <h1 class="heading-1">
                We design and build beautiful responsive website
            </h1>
            <p class="para mg-mb">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
            </p>
            <a href='#' class="btn">
                Get in Touch
            </a>
         </div>
         <div class="homeHeroImg" >
                <div class="homeHeroImg-svg" >
                    <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                            <path d="M1.01,-0.20 C122.74,74.60 -117.06,110.02 84.83,171.04 L76.09,148.40 L73.90,-3.16 Z" style="stroke: none;
                             fill:  #f7e7dc;"></path>
                             <path d="M23.61,-7.10 C-58.02,86.40 116.17,42.12 -20.13,169.08 L83.37,154.32 L80.46,0.78 Z" 
                             style="stroke: none; fill:  #f8d6bf;">

                </path></svg></div>

                <!-- #f7e7dc; -->

             <img src="<?php echo get_template_directory_uri(); ?>/img/creative_process.svg" alt="svg" class="homeImg" data-aos="fade-down">
         </div>
    </div>

    <main class="main">
        <div id='services' class="services" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500">
            <div class="services--hero">
                <h2 class="heading-2 mg-sm"> Amazing Services </h2>
                <p class="para"> Hugo provides a collection of pre-designed themes, 
                    carefully crafted elements and easily customizable templates  </p>
            </div>

            <div class="services__grid--container">
                <div class="services__grid">
                    <div class="services__grid-item">
                        <div class="services__grid--img">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/services/seo.svg" alt="" class="services__grid--svg">
                        </div>
                        <div class="services__grid--hero">
                            <h4 class="heading-4">
                                SEO
                            </h4>
                            <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>

                    <div class="services__grid-item">
                            <div class="services__grid--img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/marketing.svg" alt="" class="services__grid--svg">
                            </div>
                            <div class="services__grid--hero">
                                <h4 class="heading-4">
                                    Marketing
                                </h4>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                     sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>
                    <div class="services__grid-item">
                            <div class="services__grid--img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/social.svg" alt="" class="services__grid--svg">
                            </div>
                            <div class="services__grid--hero">
                                <h4 class="heading-4">
                                    Social
                                </h4>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>

                    <div class="services__grid-item">
                            <div class="services__grid--img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/mobile.svg" alt="" class="services__grid--svg">
                            </div>
                            <div class="services__grid--hero">
                                <h4 class="heading-4">
                                    Mobile
                                </h4>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>
                    



                    <div class="services__grid-item">
                            <div class="services__grid--img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/development.svg" alt="" class="services__grid--svg">
                            </div>
                            <div class="services__grid--hero">
                                <h4 class="heading-4">
                                   Design
                                </h4>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>

                    <div class="services__grid-item">
                            <div class="services__grid--img">
                                <img src="<?php echo get_template_directory_uri(); ?>/img/services/design.svg" alt="" class="services__grid--svg">
                            </div>
                            <div class="services__grid--hero">
                                <h4 class="heading-4">
                                    Development
                                </h4>
                                <p class="para">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            </div>
                    </div>

                </div>

            </div>
        </div>

        <div id="portfolio" class="portfolio" data-aos="fade-down">
            <div class="portfolio__hero">
                <h2 class="heading-2">Our Portfolio</h2>
            </div>

            <div class="portfolio__grid--container">
                <div class="portfolio__grid">
                    <div class="portfolio__grid-1 portfolio__grid--item"> 
                        <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app1.png" class="portfolio__grid-img" />

                        <div class="portfolio__grid-hero">
                            <div class="portfolio__grid-hero-tag">
                                    <p class="para"> Modern Design </p>
                                    <hr />
                                    <p class="para">Mobile</p>
                            </div>

                        </div>
                    </div>

                    <div class="portfolio__grid-2 portfolio__grid--item"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app2.png" class="portfolio__grid-img" />
                            <div class="portfolio__grid-hero">
                                    <div class="portfolio__grid-hero-tag">
                                            <p class="para"> Start Up  </p>
                                            <hr />
                                            <p class="para">Portfolio</p>
                                    </div>
        
                            </div>
                    </div>

                    <div class="portfolio__grid-3 portfolio__grid--item"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app3.png" class="portfolio__grid-img" />
                            <div class="portfolio__grid-hero">
                                    <div class="portfolio__grid-hero-tag">
                                            <p class="para"> Cultural </p>
                                            <hr />
                                            <p class="para">Portfolio</p>
                                    </div>
        
                            </div>
                    </div>

                    <div class="portfolio__grid-4 portfolio__grid--item"> 
                            <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app4.png" class="portfolio__grid-img" />
                            <div class="portfolio__grid-hero">
                                    <div class="portfolio__grid-hero-tag">
                                            <p class="para"> Modern Design </p>
                                            <hr />
                                            <p class="para">Mobile</p>
                                    </div>
        
                            </div>
                        </div>
    
                        <div class="portfolio__grid-5 portfolio__grid--item"> 
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app5.png"class="portfolio__grid-img" />

                                <div class="portfolio__grid-hero">
                                        <div class="portfolio__grid-hero-tag">
                                                <p class="para"> Realtor</p>
                                                <hr />
                                                <p class="para">Web / Mobile</p>
                                        </div>
            
                                </div>
                        </div>
    
                        <div class="portfolio__grid-6 portfolio__grid--item"> 
                                <img src="<?php echo get_template_directory_uri(); ?>/img/portfolio/app6.jpg" class="portfolio__grid-img" />

                                <div class="portfolio__grid-hero">
                                        <div class="portfolio__grid-hero-tag">
                                        <p class="para"> Education </p>
                                        <hr />
                                        <p class="para">Web / Mobile</p>
                                        </div>
                                    </div>
            
                                </div>
                        </div>


                </div>
                
            <div class="portfolio__hero">
                <a href="#portfolio" class="btn" > More Works </a>
        </div>
  

            </div>

            <div class="review">
                <div class="review__wrap">

              
                <div class="review__hero">
                    <h2 class="heading-2">
                        Our Happy Clients
                    </h2>

                    <p class="para">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>

                </div>

                <div class="review__grid--container" data-aos="zoom-in">
                    <div class="review__grid">
                        <div class="review__grid-item">
                            <div class="review__grid-item-hero" >
                                <img src="<?php echo get_template_directory_uri(); ?>/img/review/john.jpg" alt="#" class="review__grid-item-heroImg">
                                <div class="review__grid-item-heroName">
                                    <h4 class="heading-4">
                                        Bruce Wanye
                                    </h4>
                                    <p class="para">
                                        Photography
                                    </p>
                                </div>
                            </div>

                            <p class="para-sm">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            </p>
                        </div>

                        <div class="review__grid-item">
                                <div class="review__grid-item-hero" >
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/review/jane.jpg" alt="#" class="review__grid-item-heroImg">
                                    <div class="review__grid-item-heroName">
                                        <h4 class="heading-4">
                                            Alita Angel
                                        </h4>
                                        <p class="para">
                                            Developer
                                        </p>
                                    </div>
                                </div>
    
                                <p class="para-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                        </div>

                        <div class="review__grid-item">
                                <div class="review__grid-item-hero" >
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/review/katnese.jpg" alt="#" class="review__grid-item-heroImg">
                                    <div class="review__grid-item-heroName">
                                        <h4 class="heading-4">
                                            Natasha Romana
                                        </h4>
                                        <p class="para">
                                        Entrepreneur
                                        </p>
                                    </div>
                                </div>
    
                                <p class="para-sm">
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                        </div>
                    </div>
                </div>

                <div class="review__arrow">
                    <div class="review__left">
                            <p>&larr;</p>
                    </div>

                    <div class="review__right">
                            &#8594;
                    </div>
                </div>
            </div>

            </div>

            <div class="team" id="team" data-aos="fade-down"
     data-aos-easing="linear"
     data-aos-duration="1500" >
                <div class="team__wrap">

                    <div class="team__hero">
                        <h2 class="heading-2">
                           Meet Our Team
                        </h2>
                        <p class="para">
                                We focus on creating clean, modern & responsive interfaces that not only look good but also work great.
                        </p>

                    </div>
                    <div class="team__grid--container">
                        <div class="team__grid-wrap">
                            <!-- <div class="team__grid-innerImg">
                                <img src="./img/circle.svg" alt="circle" class="team__grid-img"/>
                            </div>
                            
                            <div class="team__grid-outerImg">
                                    <img src="./img/dots.svg" alt="dots" class="team__grid-img"/>
                            </div> -->
                            <div class="team__grid">
                                <div class="team__grid-item team__grid-item-img">
                                        <div class="team__grid-innerImg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/circle.svg" alt="circle" class="team__grid-img"/>
                                        </div>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/team/bruce.jpg" class="team__grid-img" />
                                    
                                    <div class="team__grid-hero">
                                        <h4 class="heading-4">
                                            Bruce Wayne
                                        </h4>
                                        <p class="para">
                                            Founder and CEO
                                        </p>
                                    </div>

                                </div>
                                <div class="team__grid-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/team/katnese.jpg" class="team__grid-img" />
                                        
                                        <div class="team__grid-hero">
                                            <h4 class="heading-4">
                                                Katnese Everden
                                            </h4>
                                            <p class="para">
                                                Founder and CEO
                                            </p>
                                        </div>
                                        
                                </div>

                                <div class="team__grid-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/team/tony.jpg" class="team__grid-img" />
                                        
                                        <div class="team__grid-hero">
                                            <h4 class="heading-4">
                                               John Doe
                                            </h4>
                                            <p class="para">
                                                Human Resource
                                            </p>
                                        </div>
                                        
                                </div>

                                <div class="team__grid-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/team/diana.jpg" class="team__grid-img" />
                                        
                                        <div class="team__grid-hero">
                                            <h4 class="heading-4">
                                                Bruce Wayne
                                            </h4>
                                            <p class="para">
                                                Designer
                                            </p>
                                        </div>
                                        
                                </div>

                                <div class="team__grid-item">
                                        <img src="<?php echo get_template_directory_uri(); ?>/img/team/dev.jpg" class="team__grid-img" />
                                        
                                        <div class="team__grid-hero">
                                            <h4 class="heading-4">
                                               John Doe
                                            </h4>
                                            <p class="para">
                                                Developer
                                            </p>
                                        </div>
                                        
                                </div>

                                <div class="team__grid-item team__grid-item-img">
                                        <div class="team__grid-outerImg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/dots.svg" alt="dots" class="team__grid-img"/>
                                        </div>

                                        <img src="<?php echo get_template_directory_uri(); ?>/img/team/jandoe.jpg" class="team__grid-img" />
                                        
                                        <div class="team__grid-hero">
                                            <h4 class="heading-4">
                                                Jane Doe
                                            </h4>
                                            <p class="para">
                                               Developer.
                                            </p>
                                        </div>
                                        
                                </div>

                            </div>

                        </div>


                    </div>

                </div>

            </div>

            <div>

            </div>

            <div class="work">
                <div class="work__wrap">
                    <div class="work--hero" data-aos="fade-right"
     data-aos-offset="300"
     data-aos-easing="ease-in-sine">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/work.svg" alt="work" class="work--hero-img" />

                    </div>

                    <div class="work--detail" data-aos="fade-left"
     data-aos-anchor="#example-anchor"
     data-aos-offset="500"
     data-aos-duration="500">
                        <div class="work--detail__wrap">
                            <div class="work--detail-hero" >

                                <h2 class="heading-2">  Why work with us ? </h2>
                                <p class="para">
                                        Also people love our app for these wonderfull and efficient features which give the user a complete freedom.
                                </p>
                            </div>

                            <div class="work--detail-info">
                                <div class="work--detail-item">
                                    <div  class="work--detail-icon-1" >
                                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="work--detail-icon"  width="32" height="32" viewBox="0 0 32 32">
                                                <title>rocket</title>
                                                <path d="M22 2l-10 10h-6l-6 8c0 0 6.357-1.77 10.065-0.94l-10.065 12.94 13.184-10.255c1.839 4.208-1.184 10.255-1.184 10.255l8-6v-6l10-10 2-10-10 2z"></path>
                                            </svg>
                                    </div>


                                    <div class="work-info">
                                        <h4 class="heading-4">
                                                We are Creative
                                        </h4>
                                        <p class="para">
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                    </div>

                                </div>
                                 
                                <div class="work--detail-item">
                                        <div  class="work--detail-icon-2" >
                                                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="work--detail-icon" width="32" height="32" viewBox="0 0 32 32">
                                                    <title>target</title>
                                                    <path d="M32 14h-3.154c-0.864-5.57-5.276-9.982-10.846-10.846v-3.154h-4v3.154c-5.57 0.864-9.982 5.276-10.846 10.846h-3.154v4h3.154c0.864 5.57 5.276 9.982 10.846 10.846v3.154h4v-3.154c5.57-0.864 9.982-5.276 10.846-10.846h3.154v-4zM24.776 14h-3.118c-0.603-1.705-1.953-3.056-3.658-3.658v-3.118c3.36 0.765 6.010 3.416 6.776 6.776zM16 18c-1.105 0-2-0.895-2-2s0.895-2 2-2c1.105 0 2 0.895 2 2s-0.895 2-2 2zM14 7.224v3.118c-1.705 0.603-3.056 1.953-3.658 3.658h-3.118c0.765-3.36 3.416-6.010 6.776-6.776zM7.224 18h3.118c0.603 1.705 1.953 3.056 3.658 3.658v3.118c-3.36-0.765-6.010-3.416-6.776-6.776zM18 24.776v-3.118c1.705-0.603 3.056-1.953 3.658-3.658h3.118c-0.765 3.36-3.416 6.010-6.776 6.776z"></path>
                                                </svg>
                                        </div>
    
                                        <div class="work-info">
                                            <h4 class="heading-4">
                                                    We are Creative
                                            </h4>
                                            <p class="para">
                                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                            </p>
                                        </div>
    
                                </div>

                                    <div class="work--detail-item">
                                            <div  class="work--detail-icon-3" >
                                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  class="work--detail-icon" width="32" height="32" viewBox="0 0 32 32">
                                                        <title>cogs</title>
                                                        <path d="M11.366 22.564l1.291-1.807-1.414-1.414-1.807 1.291c-0.335-0.187-0.694-0.337-1.071-0.444l-0.365-2.19h-2l-0.365 2.19c-0.377 0.107-0.736 0.256-1.071 0.444l-1.807-1.291-1.414 1.414 1.291 1.807c-0.187 0.335-0.337 0.694-0.443 1.071l-2.19 0.365v2l2.19 0.365c0.107 0.377 0.256 0.736 0.444 1.071l-1.291 1.807 1.414 1.414 1.807-1.291c0.335 0.187 0.694 0.337 1.071 0.444l0.365 2.19h2l0.365-2.19c0.377-0.107 0.736-0.256 1.071-0.444l1.807 1.291 1.414-1.414-1.291-1.807c0.187-0.335 0.337-0.694 0.444-1.071l2.19-0.365v-2l-2.19-0.365c-0.107-0.377-0.256-0.736-0.444-1.071zM7 27c-1.105 0-2-0.895-2-2s0.895-2 2-2 2 0.895 2 2-0.895 2-2 2zM32 12v-2l-2.106-0.383c-0.039-0.251-0.088-0.499-0.148-0.743l1.799-1.159-0.765-1.848-2.092 0.452c-0.132-0.216-0.273-0.426-0.422-0.629l1.219-1.761-1.414-1.414-1.761 1.219c-0.203-0.149-0.413-0.29-0.629-0.422l0.452-2.092-1.848-0.765-1.159 1.799c-0.244-0.059-0.492-0.109-0.743-0.148l-0.383-2.106h-2l-0.383 2.106c-0.251 0.039-0.499 0.088-0.743 0.148l-1.159-1.799-1.848 0.765 0.452 2.092c-0.216 0.132-0.426 0.273-0.629 0.422l-1.761-1.219-1.414 1.414 1.219 1.761c-0.149 0.203-0.29 0.413-0.422 0.629l-2.092-0.452-0.765 1.848 1.799 1.159c-0.059 0.244-0.109 0.492-0.148 0.743l-2.106 0.383v2l2.106 0.383c0.039 0.251 0.088 0.499 0.148 0.743l-1.799 1.159 0.765 1.848 2.092-0.452c0.132 0.216 0.273 0.426 0.422 0.629l-1.219 1.761 1.414 1.414 1.761-1.219c0.203 0.149 0.413 0.29 0.629 0.422l-0.452 2.092 1.848 0.765 1.159-1.799c0.244 0.059 0.492 0.109 0.743 0.148l0.383 2.106h2l0.383-2.106c0.251-0.039 0.499-0.088 0.743-0.148l1.159 1.799 1.848-0.765-0.452-2.092c0.216-0.132 0.426-0.273 0.629-0.422l1.761 1.219 1.414-1.414-1.219-1.761c0.149-0.203 0.29-0.413 0.422-0.629l2.092 0.452 0.765-1.848-1.799-1.159c0.059-0.244 0.109-0.492 0.148-0.743l2.106-0.383zM21 15.35c-2.402 0-4.35-1.948-4.35-4.35s1.948-4.35 4.35-4.35 4.35 1.948 4.35 4.35c0 2.402-1.948 4.35-4.35 4.35z"></path>
                                                        </svg>
                                                        
                                            </div>
        
                                            <div class="work-info">
                                                <h4 class="heading-4">
                                                        We are Creative
                                                </h4>
                                                <p class="para">
                                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                                        sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                                </p>
                                            </div>
        
                                    </div>
                            </div>

                        </div>

                    </div>
                </div>
            </div>

            <div class="contact" id="contact" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom">
                <div class="contact__hero">
                    <h1 class="heading-1">
                            Have an idea ? Work with us
                    </h1>

                </div>
                <div class="contact__detail">
                    <div class="contact__details--office">
                        <div class="contact__detail-1">
                            <h4 class="heading-4">
                                Office
                            </h4>

                            <p class="para">
                                Wanye Mansion,
                            </p>
                            <P class="para">
                                    Main Chamber, Justice League,
                            </P>
                            <p class="para">
                                Gotham,USA.
                            </p>
                        </div>

                        <div class="contact__detail-1">
                                <h4 class="heading-4">
                                   Contact
                                </h4>
    
                                <p class="para">
                                   Help@hugo.com
                                </p>
                                <P class="para">
                                        +56 789 8765 45
                                </P>
                            </div>
                    </div>

                    <div class="contact__details--form">
                        <form class="contact__details--form__wrap">
                            <div class="contact__details--form__name">
                                <input type="text" placeholder="Name" />
                                <input type="email" placeholder="Email Address" />

                            </div>
                            <div class="contact__details--form__message">
                                <textarea >Message. </textarea>

                            </div>

                            <input type="submit" class="btn-secondary" value="Submit" >
                        </form>

                    </div>

                </div>

            </div>


    </main>
</body>

</html>