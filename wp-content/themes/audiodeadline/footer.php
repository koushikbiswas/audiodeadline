<div class="container-fluid footer_area">
    <div class="row">
       <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12 pull-left copyrightdiv">
         <p>©2017 COPYRIGHT by Audio Deadline</p>
       </div>
       <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 pull-right footerrightdiv">
           <div class="row">
                        <div class="col-lg-5 col-md-12 col-sm-12 col-xs-12">
                                <ul class="list-inline socialmediaftlinks">
                                    <li class="list-inline-item"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-fbicon.png"></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-gplusicon.png"></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-twicon.png"></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-blogicon.png"></a></li>
                                    <li class="list-inline-item"><a href="" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/images/ft-linkdinicon.png"></a></li>
                                </ul>
                        </div>
                        <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12 ">
                            <div class="footernav">
                                <ul>
                                    <?php
                                    $args = array(
                                        'sort_column' => 'post_date',
                                        'sort_order' => 'asc',
                                        'child_of' => '0',
                                        'post_type' => 'page',
                                        'post_status' => 'publish',
                                        'parent' => 0,

                                    );
                                    $pages = get_pages($args);

                                    if ($pages) {
                                        $ic=0;
                                        foreach ($pages as $page) :

                                            if($page->ID!=111){


                                                $args2 = array(
                                                    'sort_column' => 'post_date',
                                                    'sort_order' => 'asc',
                                                    'child_of' => '0',
                                                    'post_type' => 'page',
                                                    'post_status' => 'publish',
                                                    'parent' => $page->ID,

                                                );
                                                $pages2 = get_pages($args2);

                                                if (is_page($page->ID) || $post->post_parent == $page->ID) {
                                                    $active = 'active';
                                                } else {
                                                    $active = '';
                                                }


                                                if (count($pages2) > 0) {
                                                    // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                                    echo ' <li class="ssd dropdown lidiv' . $ic . '' . $active . ' " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                                                    echo "<ul class=dropdown-menu>";


                                                    foreach ($pages2 as $childpage) {


                                                        echo ' <li class="ln lidiv' . $ic . '' . $active . ' "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                                                    }
                                                    echo "</ul>";

                                                } else {
                                                    echo ' <li class="ssd lidiv' . $ic . ' ' . $active . '" ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                                }


                                                echo "</li>";

                                                $ic++;

                                            }
                                        endforeach;
                                    }
                                    ?>

                                </ul>
                            </div>

                        </div>
                    </div>
       </div>
    </div>
</div>






