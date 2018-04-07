<?php
/**
 * Simplesite functions and definitions
 *
 * @package Simplesite
 */
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
?>