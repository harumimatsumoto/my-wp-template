<?php

function wp_get_categories_posts($title){
    $dbh = new PDO('mysql:host=127.0.0.1;dbname=test;charset=utf8', 'username', 'password');
    $dbh->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

    $sql = "SELECT object_id FROM wp_term_relationships 
            WHERE term_taxonomy_id = ANY(
            SELECT term_id FROM wp_terms 
            WHERE name = ?)";
    
    $sth = $dbh->prepare($sql);
    $sth->bindParam(1, $title, PDO::PARAM_STR);
    
    return $result;

    mysql_close($link);
}
<?php
$categories = get_categories();
foreach($categories as $category) :
?>
<div><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></div>
<ul>
<?php
query_posts('cat='.$category->cat_ID);
if (have_posts()) : while (have_posts()) : the_post();
?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
</ul>
<?php endforeach; ?>

<?php
$categories = get_categories('parent=0');
foreach($categories as $category) :
?>
<div><a href="<?php echo get_category_link( $category->term_id ); ?>"><?php echo $category->cat_name; ?></a></div>
<ul>
<?php
query_posts('cat='.$category->cat_ID);
if (have_posts()) : while (have_posts()) : the_post();
?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
</ul>
<?php endforeach; ?>
?>

