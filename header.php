<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body>
        <div class="navbar">
        <div class="logo">
    <img src="<?php echo get_template_directory_uri(); ?>/img/cubetechlogo.jpg" alt="logo">
    <span class="company-name">CubeTech Innovations</span>
</div>


        <div class="menu">
        <select onchange="location = this.value;">
            <option disabled selected>Services</option>
            <option value="<?php echo esc_url(home_url('/sample-page')); ?>">Service1</option>
            <option value="<?php echo esc_url(home_url('/this-is-a-new-page')); ?>">Service2</option>
        </select>

        <select onchange="location = this.value;">
            <option disabled selected>Product</option>
            <option value="<?php echo esc_url(home_url('/sample-page')); ?>">Product1</option>
            <option value="<?php echo esc_url(home_url('/this-is-a-new-page')); ?>">Product2</option>
        </select> 
        <a href="<?php echo esc_url(home_url('/sample-page')); ?>">About Us</a>
        <a href="<?php echo esc_url(home_url('/sample-page')); ?>">Blog</a>
        <button>Contact Us</button>
        </div>

        </div>

