<?php
function get_protected_obj($protected_name) {
    $pages = get_pages();
    foreach ($pages as $page) {
        if (get_field('protected_name', $page->ID) == $protected_name) {
            return $page;
        }
    }
}
