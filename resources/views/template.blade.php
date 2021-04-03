<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>


    <link rel='stylesheet' id='divi-fonts-css' href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext&#038;display=swap' type='text/css' media='all' />
    <link rel='stylesheet' id='et-builder-googlefonts-cached-css' href='https://fonts.googleapis.com/css?family=Poppins:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic|Montserrat:100,100italic,200,200italic,300,300italic,regular,italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic&#038;subset=latin,latin-ext&#038;display=swap' type='text/css' media='all' />

    <link rel='stylesheet' id='divi-style-css' href='{{asset('css/style.css?ver=4.9.2')}}' type='text/css' media='all' />
    <link rel='stylesheet' id='dashicons-css' href='{{asset('css/dashicons.min.css?ver=5.7')}}' type='text/css' media='all' />

    @yield('css')

    <script type='text/javascript' src='{{asset('js/jquery/jquery.min.js?ver=3.5.1')}}' id='jquery-core-js'></script>
    <script type='text/javascript' src='{{asset('js/jquery/jquery-migrate.min.js?ver=3.3.2')}}' id='jquery-migrate-js'></script>

</head>
<body class="page-template-default page page-id-213743 theme-Divi woocommerce-no-js et_pb_button_helper_class et_fullwidth_nav et_fixed_nav et_show_nav et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_header_style_left et_pb_footer_columns4 et_cover_background et_pb_gutter linux et_pb_gutters3 et_pb_pagebuilder_layout et_no_sidebar et_divi_theme et-db et_minified_js et_minified_css">
    <div id="page-container">
        <header id="main-header" data-height-onload="66">
            <div class="container clearfix et_menu_container" style="max-height: 50px !important;">
                <div class="title_container" >
                    <h1><a href="{{url('/')}}" >Pharmacy</a></h1>
                </div>
                <div id="et-top-navigation" data-height="66" data-fixed-height="40">
                    <nav id="top-menu-nav">
                        <ul id="top-menu" class="nav">
                            <li id="menu-item-213746" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213746
                                @if ($name == 'accueil')
                                    current-menu-item page_item page-item-213743 current_page_item
                                @endif">
                                <a href="{{url('')}}">Accueil</a>
                            </li>
                            <li id="menu-item-213750" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213750
                                @if ($name == 'about')
                                    current-menu-item page_item page-item-213743 current_page_item
                                @endif">
                                <a href="{{url('/about')}}">A propos</a>
                            </li>
                            <li id="menu-item-213742" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213742
                                @if ($name == 'services')
                                        current-menu-item page_item page-item-213743 current_page_item
                                @endif">
                                <a href="{{url('/services')}}">Nos services</a>
                            </li>
                            <li id="menu-item-213748" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-213748
                                @if ($name == 'contact')
                                    current-menu-item page_item page-item-213743 current_page_item
                                @endif">
                                <a href="{{url('/contact')}}">Contacter</a>
                            </li>
                        </ul> 
                    </nav>
                    <div id="et_mobile_nav_menu">
                        <div class="mobile_nav closed">
                            <span class="select_page">Select Page</span>
                            <span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
                        </div>
                    </div> 
                </div> 
            </div> 
            <div class="et_search_outer">
                <div class="container et_search_form_container">
                    <form role="search" method="get" class="et-search-form" action="https://www.elegantthemes.com/layouts/">
                        <input type="search" class="et-search-field" placeholder="Search &hellip;" value="" name="s" title="Search for:" /> 
                    </form>
                    <span class="et_close_search_field"></span>
                </div>
            </div>
        </header> 
        <div id="et-main-area">
            @yield('content')
        </div> 
    </div> 


    <script type="text/javascript">
        (function () {
        var c = document.body.className;
        c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
        document.body.className = c;
        })();
    </script>

    @yield('js')

    <script type='text/javascript' src='{{asset('js/custom.unified.js?ver=4.9.2')}}' id='divi-custom-script-js'></script>

</body>
</html>