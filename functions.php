<?php
// Inclussão do Arquivo para menu responsivo
// require_once get_template_directory(). '/inc/wp-bootstrap-navwalker.php';
// Carregamento de Css e js
function load_scripts()
{
    // wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i');
    wp_enqueue_style('bootstrap-min-css', get_template_directory_uri() . '/assets/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all');
    wp_enqueue_style('icofont', get_template_directory_uri() . '/assets/vendor/icofont/icofont.min.css');
    wp_enqueue_style('boxicons', get_template_directory_uri() . '/assets/vendor/boxicons/css/boxicons.min.css');
    wp_enqueue_style('venobox', get_template_directory_uri() . '/assets/vendor/venobox/venobox.css');
    wp_enqueue_style('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/assets/owl.carousel.min.css');
    wp_enqueue_style('css', get_template_directory_uri() . '/assets/css/style.css');

    wp_register_script('jquery-tow', 'https://code.jquery.com/jquery-3.5.1.min.js', array(), '3.5.1', true);
    // wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/vendor/jquery/jquery.min.js', array('jquery-tow'), null, true );
    wp_enqueue_script('bootstrap-bundle-min', get_template_directory_uri() . '/assets/vendor/bootstrap/js/bootstrap.bundle.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('jquery-easing', get_template_directory_uri() . '/assets/vendor/jquery.easing/jquery.easing.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('validate', get_template_directory_uri() . '/assets/vendor/php-email-form/validate.js', array('jquery-tow'), null, true);
    wp_enqueue_script('jquery-sticky', get_template_directory_uri() . '/assets/vendor/jquery-sticky/jquery.sticky.js', array('jquery-tow'), null, true);
    wp_enqueue_script('venobox-min', get_template_directory_uri() . '/assets/vendor/venobox/venobox.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri() . '/assets/vendor/owl.carousel/owl.carousel.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('isotope-pkgd', get_template_directory_uri() . '/assets/vendor/isotope-layout/isotope.pkgd.min.js', array('jquery-tow'), null, true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/assets/vendor/aos/aos.js', array('jquery-tow'), null, true);
    wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array('jquery-tow'), null, true);
}
add_action('wp_enqueue_scripts', 'load_scripts');

add_action('widgets_init', 'my_sidebars');
function my_sidebars(){
    register_sidebar(
        array(
            'name'          => 'Banner',
            'id'            => 'banner',
            'description'   => 'Type any text here',
            'before_widget' => '<h2">',
            'after_widget'  => '</h2>',
            'before_title'  => '<h1>',
            'after_title'   => '</h1>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Banner Main',
            'id'            => 'banner-card-main',
            'description'   => 'Type any text here',
            'before_widget' => '<p class="widget-wrapper">',
            'after_widget'  => '</p>',
            'before_title'  => '<h3>',
            'after_title'   => '</h3>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Banner Card 01',
            'id'            => 'banner01',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => ' <h4>',
            'after_title'   => ' </h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Banner Card 02',
            'id'            => 'banner02',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => ' <h4>',
            'after_title'   => ' </h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Banner Card 03',
            'id'            => 'banner03',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => ' <h4>',
            'after_title'   => ' </h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sobre',
            'id'            => 'about',
            'description'   => 'Type any text here',
            'before_widget' => '<h3>',
            'after_widget'  => '</h3>',
            'before_title'  => ' <h4>',
            'after_title'   => ' </h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'detalhes sobre ',
            'id'            => 'details-about',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            // 'before_title'  => ' <h4>',
            // 'after_title'   => ' </h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sub Tópico (Sobre) ',
            'id'            => 'sub-topic-1',
            'description'   => 'Type any text here',
            'before_widget' => '<p class="description">',
            'after_widget'  => '</p>',
            'before_title'  => '<h4><a href="title">',
            'after_title'   => '</a></h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sub Tópico (Sobre) ',
            'id'            => 'sub-topic-2',
            'description'   => 'Type any text here',
            'class'         => 'title description',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4><a href="">',
            'after_title'   => '</a></h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Sub Tópico (Sobre) ',
            'id'            => 'sub-topic-3',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4">',
            'after_title'   => '</h4>',
        )
    );
    // Widget de Serviços
    register_sidebar(
        array(
            'name'          => 'Serviço (Seção)',
            'id'            => 'service-section',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h2>',
            'after_title'   => '</h2>',
        )
    );
   


    register_sidebar(
        array(
            'name'          => 'Serviço 01 (Titulo)',
            'id'            => 'service-tilte-01',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4 class="widget-wrapper"><a href="">',
            'after_title'   => '</a></h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Descrição de Serviço 01',
            'id'            => 'service-description-01',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4">',
            'after_title'   => '</h4>',
        )
    );

    register_sidebar(
        array(
            'name'          => 'Serviço 02 (Titulo)',
            'id'            => 'service-tilte-02',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4 class="widget-wrapper"><a href="">',
            'after_title'   => '</a></h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Descrição de Serviço 02',
            'id'            => 'service-description-02',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4">',
            'after_title'   => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Serviço 03 (Titulo)',
            'id'            => 'service-tilte-03',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4 class="widget-wrapper"><a href="">',
            'after_title'   => '</a></h4>',
        )
    );
    register_sidebar(
        array(
            'name'          => 'Descrição de Serviço 03',
            'id'            => 'service-description-03',
            'description'   => 'Type any text here',
            'before_widget' => '<p>',
            'after_widget'  => '</p>',
            'before_title'  => '<h4">',
            'after_title'   => '</h4>',
        )
    );

    // F.A.Q
    register_sidebar(
        array(
            'name'          => ' F.A.Q',
            'id'            => 'faq-int',
            'description'   => 'Type any text here',
            'before_widget' => '<p data-aos="fade-up">',
            'after_widget'  => '</p>',
            'before_title'  => ' <h2 data-aos="fade-up">',
            'after_title'   => '</h2>',
        )
    );

    register_sidebar(
        array(
        'name'           => 'Pergunta 01',
        'id'             => "question-01",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Resposta 01',
        'id'             => "response-01",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Pergunta 02',
        'id'             => "question-02",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Resposta 02',
        'id'             => "response-02",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Pergunta 03',
        'id'             => "question-03",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Resposta 03',
        'id'             => "response-03",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Pergunta 04',
        'id'             => "question-04",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Resposta 04',
        'id'             => "response-04",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    
    register_sidebar(
        array(
        'name'           => 'Pergunta 05',
        'id'             => "question-05",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Resposta 05',
        'id'             => "response-05",
        'class'          => 'faq faq-list collapse',
        'description'    => '',
        'before_widget'  => '<i class="widget-wrapper">',
        'after_widget'   => "</i>",
        'before_title'   => '<a class="widget-title">',
        'after_title'    => "</a>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Sessão Contato',
        'id'             => 'section-contact',
        'description'    => '',
        'before_widget'  => '<p>',
        'after_widget'   => "</p>",
        'before_title'   => '<h2>',
        'after_title'    => "</h2>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Endereço',
        'id'             => 'address-contact',
        'description'    => '',
        'before_widget'  => '<p>',
        'after_widget'   => "</p>",
        'before_title'   => '<h3>',
        'after_title'    => "</h3>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'E-mail',
        'id'             => 'email-contact',
        'description'    => '',
        'before_widget'  => '<p>',
        'after_widget'   => "</p>",
        'before_title'   => '<h3>',
        'after_title'    => "</h3>",
        )
    );

    register_sidebar(
        array(
        'name'           => 'Telefone',
        'id'             => 'phone-contact',
        'description'    => '',
        'before_widget'  => '<p>',
        'after_widget'   => "</p>",
        'before_title'   => '<h3>',
        'after_title'    => "</h3>",
        )
    );

    
    register_sidebar(
        array(
        'name'           => 'Rodapé',
        'id'             => 'section-footer',
        'description'    => '',
        'before_widget'  => '<p>',
        'after_widget'   => "</p>",
        'before_title'   => '<h3>',
        'after_title'    => "</h3>",
        )
    );

    register_sidebar(
        array(
        'name'           => ('Formulario de Contato'),
        'id'             => 'contact',
        'description'    => ('Adicione o código do Formulário de contato com um campo de texto.'),
        'before_widget'  => '<div>',
        'after_widget'   => "</div>",
        )
    );


   

}



add_theme_support('post-thumbnails');
