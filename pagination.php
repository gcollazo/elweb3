<?php

if (!defined('ABSPATH')) exit;

?>
<div class="row post-pagination">
    <?php
        $prev = get_previous_post();
        if($prev) {
            $p_link = get_permalink( $prev->ID );
        }

        $next = get_next_post();
        if($next) {
            $n_link =get_permalink( $next->ID );
        }
    ?>
    <?php if($prev): ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 post-navigation-older-wrapper">
            <a href="<?php echo $p_link; ?>" class="post-navigation-link older-link">&larr; Older</a>
        </div> <!-- .post-navigation-older-wrapper -->
    <?php endif; ?>

    <?php if($next): ?>
        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 post-navigation-newer-wrapper">
            <a href="<?php echo $n_link; ?>" class="post-navigation-link newer-link">Newer &rarr;</a>
        </div> <!-- .post-navigation-newer-wrapper -->
    <?php endif; ?>
</div> <!-- .post-pagination -->
