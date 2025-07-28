<?php
/**
 * Template Name: Página Inicial
 *
 * @package TailPress
 */

get_header();
?>

<main class="py-16 sm:py-24 space-y-16 sm:space-y-24">

    <section class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
            
            <div class="w-full md:w-5/12">
                <div class="bg-card p-8 rounded-3xl flex justify-center items-center aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-aportefac.png" alt="Logo Aportefac" class="rounded-3xl w-full h-auto">
                </div>
            </div>

            <div class="w-full md:w-7/12">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">O QUE É A APORTEFAC?</h2>
                <p class="text-lg text-text-medium leading-relaxed">
                    Explore the cutting-edge innovations shaping the future of artificial intelligence. Join global leaders and visionaries for two days of insights, discussions, and breakthroughs.
                </p>
            </div>

        </div>
    </section>

    <section class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">

            <div class="w-full md:w-7/12 order-2 md:order-1">
                <h2 class="text-4xl lg:text-5xl font-bold mb-6">Quem somos nós?</h2>
                <p class="text-lg text-text-medium leading-relaxed">
                    Explore the cutting-edge innovations shaping the future of artificial intelligence. Join global leaders and visionaries for two days of insights, discussions, and breakthroughs. Explore the cutting-edge innovations shaping the future of artificial intelligence.
                </p>
            </div>

            <div class="w-full md:w-5/12 order-1 md:order-2">
                 <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-sobre.png" alt="Foto de um membro da equipa" class="rounded-3xl w-full h-auto">
            </div>

        </div>
    </section>

    <section class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                A Missão Da APORTEFAC
            </h2>

            <p class="text-lg text-text-medium leading-relaxed text-left md:text-justify">
                Explore the cutting-edge iBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because
            </p>

        </div>
    </section>

</main>

<?php
get_footer();