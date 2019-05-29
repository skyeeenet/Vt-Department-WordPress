<?php

function get_schedule() {

    $args = array(
        'post_type' => 'schedule',
        'posts_per_page' => 0,
        'tax_query' => array(
            array(
                'taxonomy' => 'week',
                'field' => 'slug',
                'terms' => $_POST['week']
            ),
            array(
                'taxonomy' => 'day',
                'field' => 'slug',
                'terms' => $_POST['day']
            ),
            array(
                'taxonomy' => 'group',
                'field' => 'slug',
                'terms' => $_POST['group']
            )
        )
    );
    $loop = new WP_Query($args);

    $html = '';

    foreach ($loop as $item) {

        if ($item->ID) {

        $subject = get_the_terms($item->ID, 'subject');
        $number = get_the_terms($item->ID, 'number');
        $teacher = get_the_terms($item->ID, 'teacher');
        $type = get_the_terms($item->ID, 'pair-type');


        $html = $html . '<tr>
                            <td>
                                <b>'.$number[0]->name.'</b>
                            </td>
                            <td>
                                <p class="m-0">'.$subject[0]->name.'</p>
                            </td>
                            <td>
                                <p class="m-0">'.$type[0]->name.'</p>
                            </td>
                            <td>
                                <p><b>'.$teacher[0]->name.'</b></p>
                            </td>
                        </tr>';
    }

    }
    echo $html;
    die();
}

add_action('wp_ajax_get_schedule', 'get_schedule');
add_action('wp_ajax_nopriv_get_schedule', 'get_schedule');