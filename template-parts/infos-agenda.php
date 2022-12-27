<!-- <?php 
    $dateObject = get_field_object('date');
    $dateformat = 'l j F Y \à G\hi';
    $unixtimestamp = strtotime($dateObject['value']);
    $date = date_i18n($dateformat, $unixtimestamp )
?>

<li class="infos__row">
    <span class="infos__label"><?php echo $dateObject['label']; ?></span>
    <span class="infos__value"><?php echo $date; ?></span>
</li>
<?php 
    $taxonomies = get_post_taxonomies();
    foreach( $taxonomies as $taxonomie ) :
        $taxonomyObject = get_taxonomy( $taxonomie );
        $terms = get_the_terms( get_the_ID() , $taxonomie );
        // print_r($terms);
        if($terms) :
?>
    <li class="infos__row">
        <span class="infos__label"><?php echo $taxonomyObject->labels->name; ?></span>
        <span class="infos__value"> 
            <?php foreach($terms as $term) : ?>
                <a class="infos__link" href="<?php echo get_term_link( $term ); ?>"><?php echo $term->name; ?></a>
            <?php endforeach; ?>
        </span>
    </li>
<?php endif; endforeach; ?> -->