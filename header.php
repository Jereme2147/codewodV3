<!DOCTYPE html>
<html lang="en">
<head>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({
        google_ad_client: "ca-pub-3519329254611036",
        enable_page_level_ads: true
    });
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head();?>
    <title>Code-wod Workouts for Firefighters Police EMS Military and everyone else</title>

</head>
<body>
    <div id="container">
        <nav id="nav">
            <div id="mobile-nav">
                <h1 class="code-wod">&lt;Code-Wod/&gt;</h1>
                <div id="mobile-search">
                    <i class="fas fa-search menu-hover"></i>
                </div>
                 <div id="menu-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div id="mobile-menu">
                <ul>
                    <li><a href="<?php echo site_url('');?>">Current Workout</a></li>
                    <li><a href="<?php echo site_url('/articles');?>">Articles</a></li>
                    <li><a href="<?php echo site_url('/resources');?>">Resources</a></li>
                    <li><a href="<?php echo site_url('/about');?>">About</a></li>
                </ul>
            </div>
            <div id="desktop-nav">
                <h1 class="code-wod">&lt;Code-Wod/&gt;</h1>
               <?php 
                $menu_name = 'header-menu';
                if ( ( $locations = get_nav_menu_locations() ) && isset( $locations[ $menu_name ] ) ) {
                    $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
 
                    $menu_items = wp_get_nav_menu_items($menu->term_id);
                    $menu_list = '<div id="nav-center">';
                    $menuLength = sizeof($menu_items);
                    for ($i = 0; $i < $menuLength; $i++) {
                        $title = $menu_items[$i]->title;
                        $url = $menu_items[$i]->url;
                        if ($i == 0) {
                            $menu_list .= '<h2';
                            if(is_front_page()){
                                $menu_list .= ' class="page-selected" ';
                            }
                            $menu_list .= '><a href="' . $url . '">' . $title . 
                                        '</a></h2></div><div id="nav-right"><ul>';
                        }
                        else {
                            $menu_list .= '<li class="menu-hover "><h2 ';
                            if(get_post_type() == 'article'){
                                $menu_list .= 'class="page-selected" ';
                            } else if (is_page($title)){
                                $menu_list .= 'class="page-selected" ';
                            }
                            $menu_list .= '><a href="' . $url .'">' . $title . '</a></h2></li>';
                        }
                    };
                } else {
                    $menu_list = '<ul><li>Menu "' . $menu_name . '" not defined.</li></ul>';
                }
                echo $menu_list . '<li >
                                    <div id="search-expand">
                                        <i class="fas fa-search menu-hover"></i>
                                    </div>
                                </li></ul></div>';
               ?>
            </div>
        </nav>
        <div id="search-div">
            <?php 
                get_search_form();
            ?>
        </div>
        <div id="top-space">
        </div>
        <!-- <div id="banner">
        </div> -->

        <div id="logo-div">
            <img src="<?php echo get_template_directory_uri(); ?>/img/logo900.png" alt="">
        </div>
        <main>