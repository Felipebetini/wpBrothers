# Hello!

This is a brief summary of my journey through this assessment—it was quite an adventure! With only basic knowledge of WordPress, I took an approach where I built the application while learning how things worked along the way. I often thought, "Okay, I need this element to do that," and tried to implement it as I would in a framework, adapting the process to WordPress. This might not have been the best strategy, as I could have done things incorrectly or in ways that aren't considered best practice. However, I prefer learning through trial and error rather than leaving things unfinished. In the end, everything (almost) worked out. I encountered some issues and errors, but with some research, I was able to find solutions relatively easily.

---

## Day 01 – Thursday

After the interview, I sat down at my PC to start configuring the project. Since I had already been experimenting with WordPress, I had a general idea of what to do. I followed the project's README and was able to set everything up quite smoothly. Using LocalWP made the process even easier compared to XAMPP!

Great! I opened Figma to check the design and quickly realized the challenge ahead—there would be a lot of flexbox, CSS grid, pagination, and data filtering. Not an easy task. Time to get started.

I began with something simple: the navigation menu. I sketched out its structure and immediately ran into the dropdown menu and search functionality.

I attempted to implement them directly in WordPress but couldn't find any styling options for the dropdown and search. So, I decided to keep only the "Blog" section as a WordPress template and built the rest manually since I wasn't sure how to use JavaScript directly in WordPress.

Everything (almost) worked out. A quick Google search helped me figure out how to use the WordPress-generated "Blog" page in the navbar:

```wp_nav_menu([
  'theme_location' => 'primary_menu',
  'container' => false,
  'menu_class' => 'flex space-x-6',
  'fallback_cb' => false
]);
```

Since Tailwind is mobile-first, I tried making the navigation responsive right away. However, I noticed the Tailwind viewport classes weren't working. After a few minutes of searching, I found a simple yet crucial answer on Reddit: https://www.reddit.com/r/tailwindcss/comments/lfz6kp/am_i_the_only_one_who_sees_tailwind_css/

"Do you have the meta tag viewport in the HTML doc?

<meta name="viewport" content="width=device-width, initial-scale=1.0">
Without that, you won’t get any responsive features."

What a genius! I added the meta tag to header.php, and everything started working as expected.

Next, I worked on collapsing the dropdown items. This reminded me of how simple it is to handle this in Vue using v-if, but with vanilla JavaScript, it was a bit trickier. After some trial and error, I managed to get a partially functional, responsive navigation menu, though there were still some bugs to fix.

**What I accomplished today:**
Set up LocalWP, WordPress, and VS Code.
Built the navbar.
Adjusted head parameters.
Created my first custom link in WordPress.

**Challenges:**
Viewport settings.
Making the dropdown work properly (still not 100% there).

---

## Day 02 – Friday

Day 2 - Friday

I started by tweaking the Tailwind config since some fonts and colors didn't match Figma. I added btn-hover, text-font-body, and other classes to align the design.

I began working on the front page but realized it would be the easiest part of the project, as it mostly involved styling rather than logic. So, I decided to move on to the blog section and started exploring ACF (Advanced Custom Fields).

Since I had a lot to learn, I took a lunch break and watched some ACF tutorial videos, including this https://www.youtube.com/watch?v=MqIyZUTvYuk. It helped, but it didn’t fully solve my problem.

After lunch, I analyzed the design and saw that I needed a grid displaying three blog posts at a time. I found this tutorial on creating blog posts and setting up custom field groups. https://www.youtube.com/watch?v=8VXK4ISvBE8.

To avoid manually creating multiple posts, I implemented a loop to display the six test posts I created. However, I struggled with dynamically editing individual posts. Unlike Vue and React, I didn’t need a router to navigate to a specific post based on an index. Instead, I needed to handle it within WordPress itself.

Since I had worked a lot on the blog page, I decided to move on to the radio buttons and select inputs for filtering. To add a finishing touch, I created tooltips for "Location" and "Full-time" indicators.

Finally, I started working on the footer, implementing a rough version that I planned to refine later.

**What I accomplished today:**
Built the entire blog page to display clickable posts.
Updated the Tailwind config to match the Figma design.
Created the first section of the front page.
Started the footer.

**Challenges:**
Understanding ACF and how to create blog posts.

---

## Day 03 – Saturday

Since I had other commitments, I worried I wouldn’t get much done. I decided to complete the blog page by adding (hardcoded) pagination, radio buttons, and a select input.

At this point, I considered implementing a loop to automate pagination but realized it would require significant effort. Since I planned to revisit functionality later, I put this idea on hold.

Another challenge was figuring out how to navigate to a specific post upon clicking it. In Vue, I would use router parameters, but I wasn’t sure how WordPress handled this. Additionally, I had questions about pagination and filtering—filtering seemed easier, but I wasn’t sure how to fetch the required data efficiently.

**What I accomplished today:**
Adjusted Tailwind config.
Finalized the blog page.

**Challenges:**
Balancing social life and not constantly thinking about the project!

---

## Day 04 – Sunday

I started the day early—not at my computer, but out on skates, brainstorming ideas. Between skating, I watched some WordPress tutorials on YouTube, which made me question my approach since most of the videos used Gutenberg blocks (something I wasn’t familiar with). After getting home, I watched a series of tutorials that clarified many doubts about programming with WordPress. https://www.youtube.com/watch?v=lNtw4yxEydM&list=PLD8nQCAhR3tT3ehpyOpoYeUj3KHDEVK9h

Despite some lingering uncertainties about whether I was on the right path, I continued with my approach since it was working. I then began building the single post page.

I encountered some confusion regarding editing posts directly within WordPress or plugins. To experiment, I created a test page to style and view the post. This test page included related posts at the bottom, which led me to think about componentizing the post cards for reuse. Initially, I hard-coded the page to see how it would render when a post was clicked.

I even experimented by copying the HTML into the WordPress HTML editor, wondering if Tailwind would still work—and it did. However, the hard-coded cards didn’t display the dynamic PHP functions. That’s when I discovered that creating a `single-blog.php` file allows WordPress to render a custom template for individual posts. Although I wasn’t sure if using AJAX and the REST API would be a better approach, I kept the solution as is for now. https://www.youtube.com/watch?v=S35EVpDvPoU&t=275s

I also had some questions about taxonomies and custom post types, but since everything was functioning and the ACF data was displaying correctly, I left those aspects unchanged.

**Challenges:**

- Fetching and displaying post data using WordPress functions.
- Implementing dynamic post rendering.

---

## Day 05 – Monday

Fueled by a good cup of coffee, I decided to componentize my post cards since I knew they’d be used on both the front page and the blog page. I started with a basic “Hello World” in `cards.php` and included it in the front page using:

```php
<?php include get_template_directory() . '/partials/cards.php'; ?>
```

Everything was working, but I needed the component to be dynamic. I set up a loop to pass the necessary parameters so that each card would render correctly:

```php
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
            'title'      => get_the_title(),
            'permalink'  => get_permalink(),
            'thumbnail'  => has_post_thumbnail() ? get_the_post_thumbnail_url(get_the_ID(), 'medium') : '',
            'categories' => $category_names,
            'location'   => get_field('location'),
            'fulltime'   => get_field('fulltime'),
        ];
        ?>

        <article class="post-item" data-category="<?php echo esc_attr($category_slug); ?>">
            <?php include get_template_directory() . '/partials/cards.php'; ?>
        </article>

        <?php
    endwhile;
    wp_reset_postdata();
else:
    echo '<p class="text-center col-span-3">No posts found.</p>';
endif;
?>
```

I’m not entirely satisfied with this solution—hardcoding some of the arguments wasn’t ideal—but it allowed me to move forward. On the `archive-blog.php` page, I didn’t need the extra query parameters, so I learned a bit more about how WordPress handles these templates.

After componentizing the cards, I made some adjustments to the front page layout and debated whether to implement the search page (since it would involve additional logic). I decided to tackle the search layout the next day.

**What I accomplished today:**

- Componentized the post cards.
- Fetched posts dynamically from WordPress.
- Made layout adjustments on both the archive and single post pages.

**Challenges:**

- Learning PHP syntax and how to properly modularize components.

---

## Day 06 – Tuesday

I focused on enhancing the functionality of the site by first tackling the mobile view and the hamburger menu. Although I’m experienced with building menus, I usually rely on frameworks to handle these interactions. This time, I needed to manually ensure the menu stayed hidden until the hamburger icon was clicked. I achieved this by changing the classes on my elements via their IDs—and I even added functionality to close the menu when clicking outside of it (with a little help from ChatGPT).

Next, I worked on the filtering feature. My main concern was linking the radio buttons to the data fetched from WordPress. The toughest part was getting the indicator to update properly; I tried several approaches but ultimately ran short on time.

I also created a basic layout for the search page (essentially a copy of the blog page) even though I wasn’t ready to implement full search logic yet. After a final overall review of the site—tweaking sizes, colors, hovers, and fonts, I finally sat down to write this report.

**What I accomplished today:**

- Improved page responsiveness.
- Built the mobile hamburger menu.
- Implemented post filtering.
- Reviewed and refined the overall layout.

**Challenges:**

- The radio button indicator was especially tricky and left me a bit frustrated.

---

## Final Thoughts

This project was both challenging and rewarding. Although I feel I only scratched the surface of what WordPress can do, the experience was invaluable. I’m satisfied with the layout and overall result, even if some functionalities still need refinement. I look forward to diving deeper into WordPress in future projects.

Felipe Betini Ribeiro
