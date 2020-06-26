<!DOCTYPE html>
<html>

    <head>
        <?php wp_head();?>

       </head>

<body <?php body_class();?>>

<header class="sticky-top">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <nav class="navbar navbar-light ">
                <a class="navbar-brand" href="#">
                    <img src="http://localhost:8080/wordpress/wp-content/uploads/2020/06/orange.png" width="30" height="30" class="d-inline-block align-top"  />
                    COOKBOOK
                </a>
            </nav>
        </div>
        <div class="col-md-6">
            <div class="menu">
                <?php wp_nav_menu (
                    array(
                        'theme_location' => 'top-menu',
                        //'menu' => 'Top Menu'
                        'menu_class' => 'top-bar'
                        )
                    );
                ?>
            </div>
        </div>
    </div>
</div>
    
</header>