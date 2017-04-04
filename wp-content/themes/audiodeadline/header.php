<div class="container-fluid topheaderblock">
    <div class="row">
                <div class="container topheaderblockwrapper">
                    <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 topheaderblocklogo">
                        <div class="toplogo">
                            <a href="/home">  <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="logo"></a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 topheadercaptionblock">
                        <h2>GREAT THINGS</h2>
                        <h3>ARE COMING!</h3>
                    </div>
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 topheaderblockinfo">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/icon-microphone.png" alt="logo">
                        <div class="topheaderblockright">
                            <h2>Tentatively Launching August 15th !</h2>
                        </div>
                    </div>
                </div>
            </div>
    <div class="clearfix"></div>


</div>

<div class="container-fluid topmenublock">
    <div class="container-fluid topmenu">
        <nav class="navbar navbar-default">


            <div class="navbar-header">

                <span class="responsivemenu">MENU</span>
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>


            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" data-hover="dropdown" data-animations="fadeInDown">
                <ul class="nav navbar-nav">


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


                                if ( is_page( $page->ID ) || $post->post_parent == $page->ID ) {
                                    $active = 'active';
                                } else {
                                    $active = '';
                                }


                                if(count($pages2)>0) {
                                    // echo ' <li class="ssd dropdown lidiv'.$ic.' " ><a data-toggle="dropdown" class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                    echo ' <li class="ssd dropdown  lidiv '.$ic.' '.$active.'  " ><a data-toggle="dropdown" class="dropdown-toggle" href="javascript:void(0)"> ' . $page->post_title . ' </a>';

                                    echo "<ul class=dropdown-menu>";


                                    foreach($pages2 as $childpage){

                                        if ( is_page( $childpage->ID ) ) {
                                            $active = 'activechild';
                                        } else {
                                            $active = '';
                                        }


                                        echo ' <li class="ln lidiv'.$ic.' '.$active.' "><a href="' . get_page_link($childpage->ID) . '"> ' . $childpage->post_title . ' </a></li>';

                                    }
                                    echo "</ul>";

                                }else{
                                    echo ' <li class="ssd lidiv'.$ic.' '.$active.'" ><a  class="dropdown-toggle" href="' . get_page_link($page->ID) . '"> ' . $page->post_title . ' </a>';
                                }


                                echo "</li>";

                                $ic++;

                            }
                        endforeach;

                    }
                    ?>







                </ul>



            </div>

        </nav>
    </div>

    <div class="clearfix"></div>


</div>

<div class="border1"></div>



