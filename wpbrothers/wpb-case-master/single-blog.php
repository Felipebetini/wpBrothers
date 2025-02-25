<?php defined('ABSPATH') || exit('Forbidden');

get_header();

while (have_posts()) {
    the_post();
    ?>

    <div class="container px-4 mt-28">
        <article class="mx-auto ">
            <header class="flex flex-col md:flex-row flex-wrap">
                <div class="block sm:flex gap-10 text-center sm:text-left ">
                    <div class="w-full sm:w-1/2 grid items-center pr-0 sm:pr-20">
                        <h1 class="text-head-m-h1 sm:text-head-d-h1 font-extrabold text-head ">
                            <?php the_title(); ?>
                        </h1>
                        <p class="text-font-body text-body-d-pBase flex items-end">
                            Bij WP Brothers is geen enkele dag hetzelfde, en dat maakt werken hier zo ontzettend leuk.
                            Vandaag neem ik je mee in een typische werkdag van mij, Bas, een van de WordPress developers bij
                            WP Brothers.
                        </p>
                    </div>

                    <!-- Image Section -->
                    <div class="w-full sm:w-1/2  mx-auto sm:mx-0">
                        <img class="w-full h-auto rounded-sm"
                            src="http://wpb-case.local/wp-content/uploads/2025/02/Image-1-300x226.png"
                            alt="Bas met roze badmuts" />
                    </div>
                </div>



            </header>


            <section class="mt-20 flex flex-col md:flex-row gap-6">
                <div class="mt-2">
                    <h2 class="text-head-d-h4 font-semibold text-font-body mb-5">Inhoudsopgave</h2>


                    <div class="flex items-center gap-2">
                        <a class="flex items-center  hover:underline" href="#start">
                            <img class="w-6 h-6 mr-2" src="<?= get_template_directory_uri(); ?>/assets/images/anchor.svg"
                                alt="Anchor" />
                            <p class="text-font-body text-body-d-pBase">De start</p>
                        </a>
                    </div>
                    <div class="flex items-center gap-2 mt-1">
                        <a class="flex items-center text-font-body text-body-base hover:underline" href="#einde-middag">
                            <img class="w-6 h-6 mr-2" src="<?= get_template_directory_uri(); ?>/assets/images/anchor.svg"
                                alt="Anchor" />
                            <p class="text-font-body text-body-d-pBase">Einde middag</p>
                        </a>
                    </div>
                    <div class="mt-5 pr-36">
                        <p class="text-font-body text-body-d-pBase">De dag begint met een kop koffie en een
                            stand-up meeting met het hele team. We bespreken de
                            projecten waar we aan werken en de uitdagingen die we tegenkomen. Vandaag werk ik aan een custom
                            plugin voor een grote klant. De eisen zijn uitdagend, maar dat maakt het juist zo interessant.
                        </p>
                    </div>
                </div>
                <div class="grid grid-cols-1 gap-3 place-items-center">
                    <p class="text-head-d-h6 font-semibold text-font-head">DEEL</p>

                    <a href="#" class="hover:text-gray-400 w-12 h-12 flex items-center justify-center">
                        <i class="fab fa-facebook text-primary text-2xl"></i>
                    </a>

                    <a href="#" class="hover:text-gray-400 w-12 h-12 flex items-center justify-center">
                        <i class="fab fa-instagram text-primary text-2xl"></i>
                    </a>

                    <a href="#" class="hover:text-gray-400 w-12 h-12 flex items-center justify-center">
                        <i class="fa-brands fa-whatsapp text-primary text-2xl"></i>
                    </a>

                    <a href="#" class="hover:text-gray-400 w-12 h-12 flex items-center justify-center">
                        <i class="fa-regular fa-envelope text-primary text-2xl"></i>
                    </a>
                </div>
            </section>


            <section id="start" class="mt-10">
                <h2 class="text-head-d-h2 font-extrabold text-font-body ">De start</h2>
                <p class="text-body-d-pLarge mt-4 text-font-body pr-0 sm:pr-52">
                    Na de meeting duik ik meteen in de code. Het is geweldig om te zien hoe mijn ideeën vorm krijgen en de
                    website van onze klant tot leven brengen.
                    Soms loop ik tegen een probleem aan dat mijn hersens laat kraken, maar gelukkig staat mijn team altijd
                    klaar om mee te denken.
                    Samen vinden we altijd een oplossing.
                </p>
            </section>

            <section id="einde-middag" class="mt-10">
                <h2 class="text-head-d-h2 font-extrabold text-font-body ">Einde middag</h2>
                <p class="text-body-d-pBase text-font-body mt-4">Voor gedefinieerd moet de website minimaal een structuur
                    hebben
                    bestaande uit:
                </p>

                <ul class="list-disc list-inside text-font-body text-body-d-pBase mt-2">
                    <li>H1 t/m H6 + Subheading</li>
                    <li>Intro tekst</li>
                    <li>Brood tekst + Kleine tekst</li>
                    <li>Knoppen</li>
                    <li>Caption</li>
                </ul>
                <ol class="list-decimal list-inside text-font-body text-body-d-pBase mt-10">
                    <li>H1 t/m H6 + Subheading</li>
                    <li>Intro tekst</li>
                    <li>Brood tekst + Kleine tekst</li>
                    <li>Knoppen</li>
                    <li>Caption</li>
                </ol>
                <button
                    class="mt-4 px-4 py-3 bg-btn-primary-idle hover:bg-btn-primary-hover text-btn-base text-white font-semibold rounded-full transition-all w-full sm:w-auto">
                    Button
                </button>

            </section>

            <div class="mt-10 p-4 bg-brand2-50 border-l-4 border-brand2-500 flex">
                <div class="mr-5">
                    <img class="w-10 h-10" src="<?= get_template_directory_uri(); ?>/assets/images/info.svg" alt="info" />
                </div>
                <div class="pt-2">
                    <h3 class="text-head-d-h3 font-semibold text-font-body">Info</h3>
                    <p class="text-body-d-pBase text-font-body mt-2">Werken bij WP Brothers betekent constant leren en
                        groeien.
                        De dynamische
                        omgeving en het supportieve team zorgen ervoor dat ik elke dag met plezier naar mijn werk ga.
                        Als jij ook houdt van uitdagingen en graag deel uitmaakt van een innovatief team, dan is WP Brothers
                        de
                        perfecte plek voor jou!</p>
                </div>


            </div>

            <div class="my-20 flex justify-center">
                <img class="w-full" src="<?= get_template_directory_uri(); ?>/assets/images/DogBig.png"
                    alt="Bas met roze badmuts" />
            </div>

            <section class="cards grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 py-10">
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

        </article>
    </div>

    <?php
}

get_footer();
