<?php

/**
 * Theme footer template.
 *
 * @package TailPress
 */
?>
</main>

<?php do_action('tailpress_content_end'); ?>
</div>

<?php do_action('tailpress_content_after'); ?>

<footer id="colophon" class="bg-background pt-16 pb-8" role="contentinfo">
    <div class="container mx-auto px-4">
        <div class="rounded-[50px] overflow-hidden shadow-lg">
            <div class="flex flex-col lg:flex-row bg-light">

                <div class="w-full lg:w-2/3 bg-light text-dark p-8 md:p-12">
                    <h4 class="text-xl font-bold">Next-Gen AI Summit 2052</h4>

                    <div class="grid grid-cols-2 gap-x-8 gap-y-2 mt-8 text-zinc-600">
                        <a href="#" class="hover:text-primary transition-colors">Agenda</a>
                        <a href="#" class="hover:text-primary transition-colors">Terms & Conditions</a>
                        <a href="#" class="hover:text-primary transition-colors">Speakers</a>
                        <a href="#" class="hover:text-primary transition-colors">Privacy Policy</a>
                        <a href="#" class="hover:text-primary transition-colors">Register</a>
                        <a href="#" class="hover:text-primary transition-colors">Cookie Policy</a>
                        <a href="#" class="hover:text-primary transition-colors">Venue</a>
                        <span></span> <a href="#" class="hover:text-primary transition-colors">FAQ</a>
                    </div>

                    <p class="mt-12 pt-8 border-t border-zinc-300 text-sm text-zinc-500">
                        &copy; <?php echo esc_html(date_i18n('Y')); ?> Next-Gen AI Summit. All rights reserved.
                    </p>
                </div>

                <div class="w-full lg:w-1/3 bg-primary p-8 md:p-12 rounded-[50px]">
                    <h4 class="font-semibold uppercase tracking-wider text-light">Stay Updated</h4>
                    <p class="text-light/80 mt-2 text-sm">
                        Subscribe for event updates & exclusive content.
                    </p>

                    <form action="#" method="POST" class="mt-6">
                        <input type="email" name="email" placeholder="Email" class="w-full bg-transparent border-b border-light/50 py-2 text-light placeholder:text-light/70 focus:outline-none focus:border-light transition-colors">
                        <button type="submit" class="w-full mt-6 bg-light text-dark font-bold py-3 px-8 rounded-full transition-transform hover:scale-105">
                            Stay updated
                        </button>
                    </form>

                    <h4 class="font-semibold uppercase tracking-wider text-light mt-12">
                        Follow Us
                    </h4>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>
</body>

</html>