<?php
/**
 * Reusable Card Component
 * 
 * @package WP Brothers Case
 */
?>

<?php
// Prevent direct access
defined('ABSPATH') || exit;

// Expecting $post_data array to be passed to this template
if (!isset($post_data))
    return;
?>

<article class="bg-white rounded-md overflow-hidden ">
    <a href="<?php echo esc_url($post_data['permalink']); ?>">
        <?php if (!empty($post_data['thumbnail'])): ?>
            <img src="<?php echo esc_url($post_data['thumbnail']); ?>" alt="<?php echo esc_attr($post_data['title']); ?>"
                class="w-full object-cover">
        <?php endif; ?>
    </a>
    <div class="py-5 px-6 bg-neutral-100 h-full">
        <h3 class="text-head-d-h3 font-semibold text-font-head">
            <a href="<?php echo esc_url($post_data['permalink']); ?>"><?php echo esc_html($post_data['title']); ?></a>
        </h3>

        <div class="flex mt-4 justify-between">
            <!-- Post Type Badge -->
            <div class="bg-brand1-300 px-4 py-1 rounded-full">
                <p class="text-font-body font-tag text-body-d-small"><?php echo esc_html($post_data['categories']); ?>
                </p>

            </div>

            <!-- Location with Tooltip -->
            <div class="relative flex items-center space-x-1 group">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/location.svg" alt="location" class="h-3">
                <p class="text-font-body text-body-d-small cursor-pointer">Location</p>
                <div
                    class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-max px-3 py-1 text-xs text-white bg-primary rounded opacity-0 group-hover:opacity-100 transition-opacity cursor-default">
                    <?php echo esc_html($post_data['location']); ?>
                </div>
            </div>

            <!-- Fulltime with Tooltip -->
            <div class="relative flex items-center space-x-1 group">
                <img src="<?= get_template_directory_uri(); ?>/assets/images/clock.svg" alt="clock" class="h-3">
                <p class="text-font-body text-body-d-small cursor-pointer">Fulltime</p>
                <div
                    class="absolute left-1/2 -translate-x-1/2 bottom-full mb-2 w-max px-3 py-1 text-xs text-white bg-primary rounded opacity-0 group-hover:opacity-100 transition-opacity cursor-default">
                    <?php echo esc_html($post_data['fulltime']); ?>
                </div>
            </div>
        </div>
    </div>
</article>