<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | Here you can change the default title of your admin panel.
    |
    | For detailed instructions you can look the title section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'title' => '',
    'title_prefix' => 'Biblioteca | ',
    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    |
    | Here you can activate the favicon.
    |
    | For detailed instructions you can look the favicon section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | Here you can change the logo of your admin panel.
    |
    | For detailed instructions you can look the logo section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'logo' => '<b>Biblioteca</b> Sociologia',
    'logo_img' => 'vendor/adminlte/dist/img/AdminLTELogo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'AdminLTE',

    /*
    |--------------------------------------------------------------------------
    | User Menu
    |--------------------------------------------------------------------------
    |
    | Here you can activate and change the user menu.
    |
    | For detailed instructions you can look the user menu section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Here we change the layout of your admin panel.
    |
    | For detailed instructions you can look the layout section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => null,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication Views Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the authentication views.
    |
    | For detailed instructions you can look the auth classes section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_auth_card' => 'card-outline card-primary',
    'classes_auth_header' => '',
    'classes_auth_body' => '',
    'classes_auth_footer' => '',
    'classes_auth_icon' => '',
    'classes_auth_btn' => 'btn-flat btn-primary',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes
    |--------------------------------------------------------------------------
    |
    | Here you can change the look and behavior of the admin panel.
    |
    | For detailed instructions you can look the admin panel classes here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-warning elevation-50',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',

    /*
    |--------------------------------------------------------------------------
    | Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar of the admin panel.
    |
    | For detailed instructions you can look the sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'sidebar_mini' => 'lg',
    'sidebar_collapse' => true,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => false,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 100,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    |
    | Here we can modify the right sidebar aka control sidebar of the admin panel.
    |
    | For detailed instructions you can look the right sidebar section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Layout-and-Styling-Configuration
    |
    */

    'right_sidebar' => false,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'white',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Here we can modify the url settings of the admin panel.
    |
    | For detailed instructions you can look the urls section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Basic-Configuration
    |
    */

    'use_route_url' => false,
    'dashboard_url' => 'home',
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password/reset',
    'password_email_url' => 'password/email',
    'profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Mix
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Laravel Mix option for the admin panel.
    |
    | For detailed instructions you can look the laravel mix section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'enabled_laravel_mix' => false,
    'laravel_mix_css_path' => 'css/app.css',
    'laravel_mix_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Here we can modify the sidebar/top navigation of the admin panel.
    |
    | For detailed instructions you can look here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'menu' => [
        // Navbar items:
        [
            'type'         => 'navbar-search',
            'text'         => 'search',
            'topnav_right' => false,
        ],
        [
            'type'         => 'fullscreen-widget',
            'topnav_right' => false,
        ],

        // Sidebar items:

       [
            'text' => 'blog',
            'url'  => 'admin/blog',
            'can'  => 'manage-blog',
        ],

       /*  ['header' => 'account_settings'], no tocar , esta pendiente para otro uso
        [
            'text' => 'profile',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-user',
        ],
        [
            'text' => 'change_password',
            'url'  => 'admin/settings',
            'icon' => 'fas fa-fw fa-lock',
        ], */
        [
            'text'    => 'Administracion',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'Usuarios',
                    'icon' =>  'fa fa-users',
                    'route'  => 'user.index',
                    'can'=>'Gestion de Usuarios',
                ],
                [
                    'text' => 'Datos Institucion',
                    'icon' =>  'fa fa-university',
                    'url'  => 'institucion',

                ],
                [
                    'text' => 'Eventos',
                    'icon' =>  'fa fa-calendar',
                    'route'  => 'evento.index',

                ],
            ],

        ],
        ['br' => ' '],

        [
            'text'    => 'Asignaciones',
            'icon'    => 'fa fa-bookmark',
            'submenu' => [


        [
            'text' => 'Autores/Instituciones',
            'url'  => 'autor.index',
            'icon' => 'fa fa-book',


        ],
        [
            'text' => 'Asesores/Gui??s',
            'url'  => 'asesores.index',
            'icon' => 'fa fa-book',


        ],
        [
            'text' => 'Idiomas',
            'url'  => 'idioma.index',
            'icon' => 'fa fa-book',

        ],[
            'text' => 'Categor??as',
            'url'  => 'categoria.index',
            'icon' => 'fa fa-book',

        ],
    ],
   ],
        ['br' => ' '],
        [
            'text'    => 'Catalogar',
            'icon'    => 'fa fa-bookmark',

            'submenu' => [
                [
                    'text' => 'libros',
                    'icon' =>  'fa fa-book',
                    'url'  => 'libro.index',
                ],
                [
                    'text' => 'Revistas',
                    'icon' =>  'fa fa-address-book',
                    'url'  => 'revista.index',
                ],
               /*  [
                    'text' => 'Tesis',
                    'icon' =>  'fa fa-list-alt',
                    'route'  => 'tesis.index',
                ], */
               /*  [
                    'text' => 'Trabajo Dirigido',
                    'icon' =>  'fa fa-book',
                    'url'  => 'tdirigido.index',
                ], */
            ],


        ],
        [
            'text'    => 'Modalidad Graduaci??n',
            'icon'    => 'fa fa-bookmark',

            'submenu' => [
                [
                    'text' => 'Tesis',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'route'  => 'tesis.index',
                ],
                [
                    'text' => 'Perfil de tesis',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Tesis de Grado',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
               [
                    'text' => 'Trabajo Dirigido',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => 'tdirigido.index',
                ],
                [
                    'text' => 'Examen de Grado',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Proyecto de Grado',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],

            ],


        ],
        [
            'text'    => 'Materia',
            'icon'    => 'fa fa-bookmark',

            'submenu' => [
                [
                    'text' => 'Trabajo Comunitario',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],

                [
                    'text' => 'Taller de intervenci??n Social',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Monogr??fias',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => 'monografias.index',
                ],
                [
                    'text' => 'Planificaciones ',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Ensayo',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Practica Institucional',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Gestiones Sociales',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => '#',
                ],
                [
                    'text' => 'Proyectos',
                    'icon' =>  'fa fa-arrow-circle-right',
                    'url'  => 'tdirigido.index',
                ],
            ],


        ],
        ['br' => ' '],
        [
            'text'    => 'Catalogo Manual',
            'icon'    => 'fa fa-bookmark',

            'submenu' => [
                [
                    'text' => 'Investigaci??nes',
                    'icon' =>  'fa fa-book',
                    'url'  => 'investigacion.index',
                ],
                [
                    'text' => 'Planes',
                    'icon' =>  'fa fa-address-book',
                    'url'  => 'plan.index',
                ],
               /*  [
                    'text' => 'Proyectos',
                    'icon' =>  'fa fa-list-alt',
                    'url'  => 'proyecto.index',
                ], */
                [
                    'text' => 'PAP',
                    'icon' =>  'fa fa-book',
                    'url'  => 'pap.index',
                ],
               /*  [
                    'text' => 'Monogr??fias',
                    'icon' =>  'fa fa-book',
                    'url'  => 'monografias.index',
                ], */
                [
                    'text' => 'Cuadernos',
                    'icon' =>  'fa fa-book',
                    'url'  => 'cuaderno.index',
                ],
                [
                    'text' => 'Informes',
                    'icon' =>  'fa fa-book',
                    'url'  => 'informe.index',
                ],
                [
                    'text' => 'Historias',
                    'icon' =>  'fa fa-book',
                    'url'  => 'historia.index',
                ],
                [
                    'text' => 'Seminarios',
                    'icon' =>  'fa fa-book',
                    'url'  => 'seminario.index',
                ],
                [
                    'text' => 'Pasant??as',
                    'icon' =>  'fa fa-book',
                    'url'  => 'pasantia.index',
                ],


            ],


        ],





        [
            'text' => 'Estudiante',
            'route'  => 'estudiante.index',
            'icon' => 'fa fa-user-graduate',


        ],
        [
            'text' => 'Prestamos',
            'url'  => 'prestamo.index',
            'icon' => 'fa fa-book',


        ],
        

        ['br' => 'br'],

        [
            'text'    => 'Reporte',
            'icon'    => 'fas fa-fw fa-share',
            'submenu' => [
                [
                    'text' => 'Inventario',
                    'icon' =>  'fa fa-sitemap',
                    'url'  => '#',
                ],
                [
                    'text' => 'Bit??cora',
                    'icon' =>  'fa fa-cog',
                    'url'  => '#',
                ],

            ],


        ],
        [
            'text' => 'Estudiante',
            'route'  => 'estudiante.index',
            'icon' => 'fa fa-user-graduate',


        ],
        [
            'text' => 'Estudiante',
            'route'  => 'estudiante.index',
            'icon' => 'fa fa-user-graduate',


        ],
        /* ['header' => 'labels'],
        [
            'text'       => 'important',
            'icon_color' => 'red',
            'url'        => '#',
        ],
        [
            'text'       => 'warning',
            'icon_color' => 'yellow',
            'url'        => '#',
        ],
        [
            'text'       => 'information',
            'icon_color' => 'cyan',
            'url'        => '#',
        ], */
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Here we can modify the menu filters of the admin panel.
    |
    | For detailed instructions you can look the menu filters section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Menu-Configuration
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Here we can modify the plugins used inside the admin panel.
    |
    | For detailed instructions you can look the plugins section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Plugins-Configuration
    |
    */

    'plugins' => [
        'Datatables' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css',
                ],
            ],
        ],
        'Select2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js',
                ],
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.css',
                ],
            ],
        ],
        'Chartjs' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.0/Chart.bundle.min.js',
                ],
            ],
        ],
        'Sweetalert2' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdn.jsdelivr.net/npm/sweetalert2@8',
                ],
            ],
        ],
        'Pace' => [
            'active' => false,
            'files' => [
                [
                    'type' => 'css',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/themes/blue/pace-theme-center-radar.min.css',
                ],
                [
                    'type' => 'js',
                    'asset' => false,
                    'location' => '//cdnjs.cloudflare.com/ajax/libs/pace/1.0.2/pace.min.js',
                ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame
    |--------------------------------------------------------------------------
    |
    | Here we change the IFrame mode configuration. Note these changes will
    | only apply to the view that extends and enable the IFrame mode.
    |
    | For detailed instructions you can look the iframe mode section here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/IFrame-Mode-Configuration
    |
    */

    'iframe' => [
        'default_tab' => [
            'url' => null,
            'title' => null,
        ],
        'buttons' => [
            'close' => true,
            'close_all' => true,
            'close_all_other' => true,
            'scroll_left' => true,
            'scroll_right' => true,
            'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire
    |--------------------------------------------------------------------------
    |
    | Here we can enable the Livewire support.
    |
    | For detailed instructions you can look the livewire here:
    | https://github.com/jeroennoten/Laravel-AdminLTE/wiki/Other-Configuration
    |
    */

    'livewire' => false,
];
