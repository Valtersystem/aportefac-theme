<?php
/**
 * Theme header template.
 *
 * @package TailPress
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>
<body <?php body_class('bg-background text-text-light antialiased'); ?>>
<?php do_action('tailpress_site_before'); ?>

<div id="page" class="min-h-screen flex flex-col">

    <header class="w-full">
        <div class="container mx-auto px-4">
            <div class="flex justify-between items-center py-6">
                <div class="text-lg font-bold">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="hover:opacity-80 transition-opacity no-underline">
                    APORTEFAC
                    </a>
                </div>

                <nav id="primary-navigation" class="hidden lg:flex items-center no-underline">
                    <?php
                    wp_nav_menu([
                        'container'       => false,
                        'menu_class'      => 'flex items-center gap-x-8 no-underline',
                        'theme_location'  => 'primary',
                        'li_class'        => '',
                        'fallback_cb'     => false,
                    ]);
                    ?>
                </nav>

                <div class="lg:hidden">
                    <button type="button" aria-label="Toggle navigation" id="primary-menu-toggle">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <div id="mobile-menu-container" class="lg:hidden hidden bg-card text-center p-4">
             <?php
                wp_nav_menu([
                    'container'       => 'nav',
                    'container_class' => 'mobile-navigation',
                    'menu_class'      => 'flex flex-col gap-y-4',
                    'theme_location'  => 'primary',
                    'li_class'        => '',
                    'fallback_cb'     => false,
                ]);
            ?>
        </div>
    </header>

    <div id="content" class="site-content grow">
        <?php do_action('tailpress_content_start'); ?>
        <main>