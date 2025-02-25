<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
    ?>

    <div class="container text-center sm:text-left">
        <section class="h-auto sm:h-screen grid grid-cols-1 md:grid-cols-2 grid-flow-col items-center my-10">
            <!-- Left Column: Text Content -->
            <div class="order-2 md:order-1">
                <p class="text-brand1-500 text-body-d-pLarge ">WP Brothers</p>
                <h1 class="text-head-d-h1 text-font-head font-extrabold row-span-3 md:pr-32 py-5">Welkom, WordPress
                    Tovenaar!</h1>
                <p class="text-font-body text-body-d-pBase md:pr-8">
                    Welkom bij WP Brothers, de plek waar jouw WordPress magie werkelijkheid wordt. Of je nu een
                    CSS-kunstenaar bent, een PHP-guru of een plug-in pionier, wij zijn op zoek naar jou! Bereid je voor
                    om deel uit te maken van een team waar innovatie en creativiteit hoog in het vaandel staan. Klaar om
                    de uitdaging aan te gaan? Laten we samen de mooiste WordPress wonderen creëren!
                </p>
            </div>

            <!-- Right Column: Image Container -->
            <div class="flex justify-center order-1 md:order-2">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/devices.svg" alt="Devices"
                    class="w-full md:w-auto">
            </div>
        </section>

        <section class="h-auto sm:h-screen grid items-center">
            <div class="-translate-y-0 sm:-translate-y-16">
                <div class="text-center mb-16">
                    <h2 class="text-head-d-h2 font-extrabold text-font-head">Herkenbaar?</h2>
                </div>
                <div
                    class="flex flex-col md:flex-row items-center justify-center text-center space-y-10 md:space-y-0 md:space-x-10">
                    <div class="h-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/ruler.svg" alt="Devices"
                            class="mx-auto">
                        <h3 class="text-head-d-h3 font-semibold text-brand1-500 my-5">Creatieve Probleemoplosser</h3>
                        <p class="text-body-d-pBase text-font-body">Je bent in staat om met out-of-the-box oplossingen te
                            komen voor complexe uitdagingen. Geen
                            enkele bug is veilig voor jouw innovatieve aanpak!</p>
                    </div>
                    <div class="h-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/plugins.svg" alt="Devices"
                            class="mx-auto">
                        <h3 class="text-head-d-h3 font-semibold text-brand1-500 my-5">Koning(in) van de Plugins</h3>
                        <p class="text-body-d-pBase text-font-body">Je hebt uitgebreide kennis van zowel populaire als
                            obscure plugins en weet precies welke te
                            gebruiken om een website naar een hoger niveau te tillen.</p>
                    </div>
                    <div class="h-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/play.svg" alt="Devices"
                            class="mx-auto">
                        <h3 class="text-head-d-h3 font-semibold text-brand1-500 my-5 px-2">Flexibele Teamspeler</h3>
                        <p class="text-body-d-pBase text-font-body">Je werkt net zo goed zelfstandig als in een team.
                            Samenwerken met designers, marketeers en andere
                            developers is voor jou een tweede natuur.</p>
                    </div>
                    <div class="h-auto">
                        <img src="<?= get_template_directory_uri(); ?>/assets/images/pen.svg" alt="Devices" class="mx-auto">
                        <h3 class="text-head-d-h3 font-semibold text-brand1-500 my-5">Nieuwsgierige Leerder</h3>
                        <p class="text-body-d-pBase text-font-body">Je bent altijd op de hoogte van de laatste trends en
                            ontwikkelingen binnen de WordPress-community
                            en past deze kennis toe in je werk.</p>
                    </div>
                </div>
            </div>
            <div class="block sm:grid grid-cols-1 md:grid-cols-2 grid-flow-col items-center my-5 sm:my-20">
                <div class="block sm:grid my-10 sm:my-0">
                    <p class="text-body-d-pLarge text-brand1-500">Over ons</p>
                    <h2 class="text-head-d-h2 font-extrabold text-font-head">Waarom WP Brothers?</h2>
                    <p class="text-body-d-pBase text-font-body row-span-3 py-5 pr-0 sm:pr-20">Bij WP Brothers draait alles
                        om
                        creativiteit, innovatie en
                        samenwerking. Wij zijn een dynamisch team
                        van WordPress fanaten die de grenzen van webontwikkeling opzoeken en verleggen. Werken bij ons
                        betekent deel uitmaken van een hechte familie die samenwerkt om de beste WordPress-oplossingen te
                        bieden aan onze klanten.
                    </p>
                    <div class="w-full justify-end">
                        <button
                            class="border border-brand1-500 text-brand1-500 px-4 py-3 rounded-full text-btn-base flex items-center mx-auto sm:mx-0">Over
                            ons
                            <span><i class="fa-solid fa-chevron-right text-brand1-500 h-3 w-3 ml-2"></i></span>
                        </button>
                    </div>
                </div>
                <div class="flex justify-center">
                    <img src="<?= get_template_directory_uri(); ?>/assets/images/meet.png" alt="Meeting"
                        class="w-full md:w-auto">
                </div>
            </div>
        </section>
        <section class="block sm:grid grid-cols-1 md:grid-cols-2 grid-flow-col items-center my-20">
            <div class="flex justify-center">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/graphics.png" alt="Meeting"
                    class="w-full md:w-auto">
            </div>
            <div class="grid md:pl-20">
                <p class="text-body-d-pLarge text-brand1-500">Soliciteren</p>
                <h2 class="text-head-d-h2 font-extrabold text-font-head">Sluit je aan bij WP Brothers</h2>
                <p class="text-body-d-pBase text-font-body row-span-3 py-5">Als je klaar bent om je carrière naar een
                    hoger niveau te
                    tillen
                    en deel wilt uitmaken van een team
                    dat streeft naar uitmuntendheid, dan is WP Brothers de plek voor jou. We zijn altijd op zoek naar
                    getalenteerde WordPress developers die onze passie voor webontwikkeling delen. Kom en ontdek waarom
                    werken bij WP Brothers niet zomaar een baan is, maar een avontuur vol kansen en groei.
                </p>
                <div class="w-full justify-end">
                    <button class="border border-brand1-500 text-brand1-500 p-3 rounded-full text-btn-base">Werken
                        bij</button>
                </div>
            </div>
        </section>
        <section class="cards grid grid-cols-1 md:grid-cols-3 gap-6 my-20">
            <?php
            $args = array(
                'posts_per_page' => 3,
                'post_type' => 'blog'
            );

            $query = new WP_Query($args);

            if ($query->have_posts()):
                while ($query->have_posts()):
                    $query->the_post();

                    // Get categories
                    $categories = wp_get_post_terms(get_the_ID(), 'category', ['fields' => 'names']);
                    $category_names = !empty($categories) ? implode(', ', $categories) : 'Uncategorized';
                    $category_slug = !empty($categories) ? implode(' ', array_map('strtolower', $categories)) : 'uncategorized';

                    // Prepare post data
                    $post_data = [
                        'title' => get_the_title(),
                        'permalink' => get_permalink(),
                        'thumbnail' => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : '',
                        'categories' => $category_names,
                        'location' => get_field('location'),
                        'fulltime' => get_field('fulltime'),
                    ];
                    ?>

                    <article class="post-item" data-category="<?php echo esc_attr($category_slug); ?>">
                        <?php include get_template_directory() . '/partials/cards.php'; ?>
                    </article>

                    <?php
                endwhile;
                wp_reset_postdata(); // Restore original post data
            else:
                echo '<p class="text-center col-span-3">Geen berichten gevonden.</p>';
            endif;

            ?>
        </section>

    </div>

    <?php
}

get_footer();