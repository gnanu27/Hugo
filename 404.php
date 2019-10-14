<?php ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>$04 Error</title>
</head>
<body>
 
<div class="home">
    <header class="header">
        <div class="logo">
        <img src="<?php echo get_theme_mod('create_logo'); ?>" alt="Ham" class="logo-img">
        </div>

        <input type="checkbox" id="ham" />
        <label for="ham" class="ham-icon"> <img src="<?php echo get_template_directory_uri(); ?>/img/ham.png" alt="Ham" class="ham-img"> </label>
       
        
        <?php wp_nav_menu( array('theme_location' => 'primary', 'container'=> false, 'menu_class'=>'NavList'))  ?> 
         

     
        <ul class="NavList-social">
            <li class="Navitem">
                <a href="#" class="NavLink"> <img src="img/work/dribbble.svg" class="NavLink__img" />  </a>
            </li>
            <li class="Navitem"  >
                <a href="#" class="NavLink"> <img src="./img/work/behance.svg" class="NavLink__img" /> </a>
            </li>
        </ul>
    </header>
    <div class="homeHero">

        <h3 class='heading-3'> Opps Page Can't be found.  </h3>

    </div>

</div>



    
</body>
</html>