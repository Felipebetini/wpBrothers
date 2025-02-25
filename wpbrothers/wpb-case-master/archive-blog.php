<?php defined('ABSPATH') || exit('Forbidden');

get_header(); ?>

<main class="container mt-20">
    <h1 class="text-head-m-h1 sm:text-head-d-h1 my-36 text-font-head text-center sm:text-left">Leesvoer</h1>

    <div class="block sm:flex items-center pb-4 mb-4 border-b border-b-neutral-300">
        <div class="flex space-x-4 flex-grow mb-5 sm:mb-0" id="category-filter">
            <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="category-filter" value="all" checked class="hidden peer">
                <span
                    class="w-5 h-5 border-2 border-primary rounded-full flex items-center justify-center peer-checked:border-brand1-500">
                    <span class="w-3 h-3 bg-brand1-500 rounded-full peer-checked:block"></span>
                </span>
                <span class="text-gray-700">Toon alles</span>
            </label>

            <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="category-filter" value="blog" class="hidden peer">
                <span
                    class="w-5 h-5 border-2 border-primary rounded-full flex items-center justify-center peer-checked:border-brand1-500">
                    <span class="w-3 h-3 bg-brand1-500 rounded-full peer-checked:block hidden"></span>
                </span>
                <span class="text-gray-700">Blog</span>
            </label>

            <label class="flex items-center space-x-2 cursor-pointer">
                <input type="radio" name="category-filter" value="expertise" class="hidden peer">
                <span
                    class="w-5 h-5 border-2 border-primary rounded-full flex items-center justify-center peer-checked:border-brand1-500">
                    <span class="w-3 h-3 bg-brand1-500 rounded-full peer-checked:block hidden"></span>
                </span>
                <span class="text-gray-700">Expertise</span>
            </label>
        </div>

        <div class="flex items-center space-x-3">
            <label class="text-font-head text-input-label ">Sorteer op</label>
            <div class="relative">
                <select class="px-4 py-2 border border-neutral-400 rounded-md text-font-body appearance-none w-64">
                    <option value="desc">Datum aflopend</option>
                    <option value="asc">Datum oplopend</option>
                </select>
                <div class="absolute inset-y-0 right-3 flex items-center pointer-events-none ">
                    <i class="fa-solid fa-chevron-down text-neutral-400 h-3 w-3"></i>
                </div>
            </div>
        </div>

    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 w-full">
        <?php
        if (have_posts()):
            while (have_posts()):
                the_post();

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
        else:
            echo '<p class="text-center col-span-3">Geen berichten gevonden.</p>';
        endif;
        ?>
    </div>
    <div class="flex justify-around items-center space-x-2 w-full my-32">
        <!-- Previous Button -->
        <button id="prev-btn"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-btn-primary-idle text-white disabled:opacity-50">
            <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- Page Numbers -->
        <div class="flex items-center space-x-3 text-center" id="pagination-container">
            <p class="flex items-center justify-center w-10 h-10">1</p>
            <p class="flex items-center justify-center w-10 h-10 rounded-full bg-brand1-500 text-white">2</p>
            <p class="flex items-center justify-center w-10 h-10 rounded-full bg-brand1-300">3</p>
            <p class="flex items-center justify-center w-10 h-10">...</p>
            <p class="flex items-center justify-center w-10 h-10">8</p>
        </div>

        <!-- Next Button -->
        <button id="next-btn"
            class="w-10 h-10 flex items-center justify-center rounded-full bg-btn-primary-idle text-white disabled:opacity-50">
            <i class="fa-solid fa-chevron-right"></i>
        </button>
    </div>


</main>

<?php get_footer(); ?>