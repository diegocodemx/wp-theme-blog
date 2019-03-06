<?php
class social_menu_walker extends Walker_Nav_Menu
{
    // Starts the element output
    public function start_el(&$output, $item, $depth, $args)
    {
        $classes = array("nav-item");
        // Open the element
        $output .= '<li class="' . trim(implode(' ', $classes)).'">';

        // Anchor atributes
        ! empty ($item->attr_title)
            and $item->attr_title !== $item->title
            and $attributes .= ' title="' . esc_attr($item->attr_title) . '"';

        ! empty ($item->url)
            and $attributes .= ' href="' . esc_attr($item->url) . '"';

        ! empty( $item->xfn )  
            and $attributes .= ' rel="' . esc_attr($item->xfn) . '"';

        $attributes .= ' class="nav-link"';
        $attributes .= ' target="_blank"';

        $attributes = trim($attributes);
        $title = apply_filters( 'the_title', $item->title, $item->ID );

        $anchor = "{$args->before}<a {$attributes}>{$args->link_before}<i class='fab fa-{$title} fa-2x'></i></a>"
            .$args->link_after . $args->after;

        // Add filter
        $output .= apply_filters(
            'walker_nav_menu_start_el'
            ,   $anchor
            ,   $item
            ,   $depth
            ,   $args
        );
    }

    function end_el( &$output )
    {
        $output .= '</li>';
    }
}
?>
