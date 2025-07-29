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
                <div class="bg-card p-8 rounded-[50px] flex justify-center items-center aspect-square">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-aportefac.png" alt="Logo Aportefac" class="rounded-[50px] w-full h-auto">
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
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/foto-sobre.png" alt="Foto de um membro da equipa" class="rounded-[50px] w-full h-auto">
            </div>

        </div>
    </section>

    <section class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto text-center">

            <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                A Missão Da APORTEFAC
            </h2>

            <p class="text-lg text-text-medium leading-relaxed text-justify border-l-4 pl-4 border-primary">
                Explore the cutting-edge iBut I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because
            </p>

        </div>
    </section>

    <section class="container mx-auto px-4">
        <h2 class="text-4xl lg:text-5xl font-bold mb-16 text-center">
            Defendemos Que
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mx-auto">

            <div class="relative bg-card border border-white/5 rounded-[50px] p-8 overflow-hidden">
                <span class="absolute -bottom-4 -right-2 text-9xl font-bold text-primary/10 pointer-events-none">01</span>
                <div class="relative z-10">
                    <h3 class="font-semibold uppercase tracking-wider mb-4">Cutting-Edge Insights</h3>
                    <p class="text-text-medium leading-relaxed">
                        Gain firsthand knowledge from top AI experts and pioneers shaping the industry.
                    </p>
                </div>
            </div>

            <div class="relative bg-card border border-white/5 rounded-[50px] p-8 overflow-hidden">
                <span class="absolute -bottom-4 -right-2 text-9xl font-bold text-primary/10 pointer-events-none">02</span>
                <div class="relative z-10">
                    <h3 class="font-semibold uppercase tracking-wider mb-4">Hands-On Learning</h3>
                    <p class="text-text-medium leading-relaxed">
                        Participate in interactive workshops, live demos, and deep-dive sessions to sharpen your skills.
                    </p>
                </div>
            </div>

            <div class="relative bg-card border border-white/5 rounded-[50px] p-8 overflow-hidden">
                <span class="absolute -bottom-4 -right-2 text-9xl font-bold text-primary/10 pointer-events-none">03</span>
                <div class="relative z-10">
                    <h3 class="font-semibold uppercase tracking-wider mb-4">Exclusive Networking</h3>
                    <p class="text-text-medium leading-relaxed">
                        Connect with AI leaders, investors, startups, and fellow professionals at curated networking events.
                    </p>
                </div>
            </div>

            <div class="relative bg-card border border-white/5 rounded-[50px] p-8 overflow-hidden">
                <span class="absolute -bottom-4 -right-2 text-9xl font-bold text-primary/10 pointer-events-none">04</span>
                <div class="relative z-10">
                    <h3 class="font-semibold uppercase tracking-wider mb-4">Innovation Showcase</h3>
                    <p class="text-text-medium leading-relaxed">
                        Explore groundbreaking AI solutions, from emerging startups to tech giants redefining the future.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4">
        <div class="relative max-w-5xl mx-auto">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/maps.png" alt="Mapa da localização da Aportefac" class="rounded-[50px] w-full h-auto">

            <div class="absolute bottom-0 top-full left-8 flex items-center">
                <img class="h-16 w-16 rounded-full border-4 border-background object-cover" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-1.png" alt="Avatar 1">
                <img class="h-16 w-16 rounded-full border-4 border-background object-cover -ml-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-2.png" alt="Avatar 2">
                <img class="h-16 w-16 rounded-full border-4 border-background object-cover -ml-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-3.png" alt="Avatar 3">
                <img class="h-16 w-16 rounded-full border-4 border-background object-cover -ml-5" src="<?php echo get_template_directory_uri(); ?>/assets/images/avatar-4.png" alt="Avatar 4">
            </div>
        </div>

        <div class="text-end mt-12 max-w-5xl mx-auto">
            <div class="flex flex-col justify-end items-end">
                <h2 class="text-4xl lg:text-5xl font-bold mb-8">
                    Estamos Perto De Você
                </h2>

                <div class="flex flex-col sm:flex-row items-center justify-center gap-6 max-w-xl">
                    <a href="#" class="bg-amber-50 flex-shrink-0 h-20 w-20 bg-card rounded-full flex items-center justify-center transition-transform hover:scale-110">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-8 h-8 text-primary">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 19.5 15-15m0 0H8.25m11.25 0v11.25" />
                        </svg>
                    </a>
                    <p class="text-text-medium leading-relaxed text-left">
                        Hear from global AI leaders, researchers, and entrepreneurs who are defining the future of artificial intelligence.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section class="container mx-auto px-4">
        <div class=" bg-[#1A1A1A] rounded-[50px] p-8 sm:p-12 lg:p-16">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-16">

                <div>
                    <h2 class="text-4xl lg:text-5xl font-bold leading-tight">Estamos Aqui Para Contactar E Ajudar Você!</h2>
                    <p class="mt-4 text-lg text-text-medium">
                        Tem dúvidas sobre nosso trabalho? Precisa de ajuda com a inscrição? Nossa equipa está pronta para ajudar.
                    </p>

                    <div class="flex flex-col sm:flex-row gap-10 sm:gap-16 mt-12">
                        <div>
                            <h4 class="font-semibold uppercase tracking-wider mb-4">Nos Siga</h4>
                            <div class="flex gap-5 items-center">
                                <a href="#" class="text-text-medium hover:text-primary transition-colors" title="Facebook">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                                <a href="#" class="text-text-medium hover:text-primary transition-colors" title="LinkedIn">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                                    </svg>
                                </a>
                                <a href="#" class="text-text-medium hover:text-primary transition-colors" title="Instagram">
                                    <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                                        <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427C2.013 14.743 2 14.403 2 11.685v-.08c0-2.643.012-2.987.06-4.043.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.24 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.06-1.03.048-1.599.21-1.995.372a3.09 3.09 0 00-1.116.875 3.09 3.09 0 00-.875 1.116c-.162.396-.324.965-.372 1.995-.049 1.022-.06 1.359-.06 3.807v.468c0 2.456.011 2.784.06 3.807.048 1.03.21 1.599.372 1.995a3.09 3.09 0 00.875 1.116 3.09 3.09 0 001.116.875c.396.162.965.324 1.995.372 1.022.049 1.359.06 3.807.06h.468c2.456 0 2.784-.011 3.807-.06 1.03-.048 1.599-.21 1.995-.372a3.09 3.09 0 001.116-.875 3.09 3.09 0 00.875-1.116c.162-.396.324-.965.372-1.995.049-1.022.06-1.359.06-3.807v-.468c0-2.456-.011-2.784-.06-3.807-.048-1.03-.21-1.599-.372-1.995a3.09 3.09 0 00-.875-1.116 3.09 3.09 0 00-1.116-.875c-.396-.162-.965-.324-1.995-.372C14.743 3.813 14.403 3.802 11.685 3.802h-.468zM12 6.805a5.195 5.195 0 100 10.39 5.195 5.195 0 000-10.39zm0 1.802a3.395 3.395 0 110 6.79 3.395 3.395 0 010-6.79zM16.95 6.502a1.2 1.2 0 100 2.4 1.2 1.2 0 000-2.4z" clip-rule="evenodd" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div>
                            <h4 class="font-semibold uppercase tracking-wider mb-4">Email</h4>
                            <a href="mailto:info@nexus.com" class="text-text-medium hover:text-primary transition-colors">info@nexus.com</a>
                        </div>
                    </div>
                </div>

                <div class="bg-light rounded-[50px] p-8 text-dark">
                    <h3 class="font-bold text-2xl mb-2">ENTRE EM CONTATO</h3>
                    <p class="text-zinc-600 mb-8">
                        Entre em contato conosco para tirar dúvidas sobre ingressos, parcerias ou detalhes do evento.
                    </p>

                    <form action="#" method="POST" class="space-y-8">
                        <div>
                            <input type="text" name="nome" placeholder="Nome" class="w-full bg-transparent border-b border-zinc-400 py-2 focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <input type="email" name="email" placeholder="Email" class="w-full bg-transparent border-b border-zinc-400 py-2 focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <input type="text" name="assunto" placeholder="Assunto" class="w-full bg-transparent border-b border-zinc-400 py-2 focus:outline-none focus:border-primary transition-colors">
                        </div>
                        <div>
                            <textarea name="mensagem" rows="4" placeholder="Mensagem" class="w-full bg-transparent border-b border-zinc-400 py-2 focus:outline-none focus:border-primary transition-colors"></textarea>
                        </div>
                        <div>
                            <button type="submit" class="bg-gradient-to-br from-[#599188] to-[#6ab3a6] font-bold py-3 px-8 rounded-full transition-transform hover:scale-105 text-light">
                                Enviar mensagem
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

</main>

<?php
get_footer();
