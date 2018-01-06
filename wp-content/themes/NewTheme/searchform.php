<form action="<?php echo home_url($id); ?>" method="POST">
    <label for="search">Search in <?php echo home_url('/'); ?></label>
    <input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
    <input type="hidden" value="" >
    <button value="SEARCH" class="btn btn-primary"><?php _e( 'Search', 'MagicNg' ); ?></button>
</form>