<?php

get_header();

the_post();

?>

<h2>Interview: <?php the_title(); ?> (<?php the_date('F Y'); ?>)</h2>

<?php

the_field('intro');
the_post_thumbnail('email');
the_content();

get_footer();
