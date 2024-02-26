<?php
class STH_Nav_Walker extends Walker_Nav_Menu
{

    public function start_el(&$output, $item, $depth = 0, $args = array(), $id = 0)
    {
        global $wp_query;
        $indent = ($depth > 0 ? str_repeat("\t", $depth) : ''); // code indent

        $classes = array();
        if (!is_array($args)) {
            if (in_array('current_page_item', $item->classes)) {
                array_push($classes, "sth__menu--active");
            }
        }

        $output .= '<li class="mb-4 lg:mb-0 lg:ml-7 hover:opacity-60">';

        // Link attributes.
        $attributes = !empty($item->title) ? ' title="' . esc_attr($item->title) . '"' : '';
        $attributes .= !empty($item->target) ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn) ? ' rel="' . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url) ? ' href="' . esc_attr($item->url) . '"' : '';

        $before = "";
        $after = "";
        $link_before = "";
        $link_after = "";
        $item_output = sprintf(
            '%1$s<a%2$s>%3$s%4$s%5$s</a>%6$s',
            $before,
            $attributes,
            $link_before,
            apply_filters('the_title', $item->title, $item->ID),
            $link_after,
            $after
        );
        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }


}

?>