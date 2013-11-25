<?php

if (!defined('ABSPATH')) exit;

?>
<div class="row social-buttons-wrapper">
    <ul class="social-buttons-list">
        <li class="social-button-item social-button-twitter"><a href="http://twitter.com/share" class="twitter-share-button" data-count="horizontal" data-via="<?php echo $GLOBALS['_DEFAULT_TWITTER_USERNAME']; ?>">Tweet</a><script type="text/javascript" src="http://platform.twitter.com/widgets.js"></script></li>
        <li class="social-button-item social-button-plus"><g:plusone size="medium" style="display:inline"></g:plusone><script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script></li>
        <li class="social-button-item social-button-facebook"><iframe src="http://www.facebook.com/plugins/like.php?app_id=<?php echo $GLOBALS['_DEFAULT_FACEBOOK_APP_ID']; ?>&amp;href=<?php the_permalink() ?>&amp;send=false&amp;layout=button_count&amp;width=100&amp;show_faces=false&amp;action=like&amp;colorscheme=light&amp;font&amp;height=21" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100px; height:21px;" allowTransparency="true"></iframe></li>
    </ul> <!-- .social-buttons-list -->
</div> <!-- .social-buttons-wrapper -->
