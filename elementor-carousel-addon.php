<?php
//Elemtentor Options
$this->start_controls_section(
    'sldie_settings',
    [
        'label' => __( 'Slider Settings', 'EW-toolkit' ),
        'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
    ]
);
$this->add_control(
    'enable_dots',
    [
        'label' => __( 'Enable Dots?', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Yes', 'EW-toolkit' ),
        'label_off' => __( 'No', 'EW-toolkit' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]

);
$this->add_control(
    'enable_loop',
    [
        'label' => __( 'Enable Loop?', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Yes', 'EW-toolkit' ),
        'label_off' => __( 'No', 'EW-toolkit' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]

);
$this->add_control(
    'enable_fade',
    [
        'label' => __( 'Enable Fade Effect?', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Yes', 'EW-toolkit' ),
        'label_off' => __( 'No', 'EW-toolkit' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]

);
$this->add_control(
    'enable_nav',
    [
        'label' => __( 'Enable Nav?', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Yes', 'EW-toolkit' ),
        'label_off' => __( 'No', 'EW-toolkit' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]

);
$this->add_control(
    'enable_autoplay',
    [
        'label' => __( 'Enable Autoplay', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SWITCHER,
        'label_on' => __( 'Yes', 'EW-toolkit' ),
        'label_off' => __( 'No', 'EW-toolkit' ),
        'return_value' => 'yes',
        'default' => 'yes',
    ]

);
$this->add_control(
    'autoplayspeed',
    [
        'label' => __( 'Autoplay Speed', 'EW-toolkit' ),
        'type' => \Elementor\Controls_Manager::SELECT,
        'default' => '5000',
        'condition'=> [
            'enable_autoplay' => 'yes'
        ],
        'options' => [
            '1000'  => __( '1 Secound', 'EW-toolkit' ),
            '2000' => __( '2 Secound', 'EW-toolkit' ),
            '3000' => __( '3 Secound', 'EW-toolkit' ),
            '4000' => __( '4 Secound', 'EW-toolkit' ),
            '5000' => __( '5 Secound', 'EW-toolkit' ),
            '6000' => __( '6 Secound', 'EW-toolkit' ),
            '7000' => __( '7 Secound', 'EW-toolkit' ),
            '8000' => __( '8 Secound', 'EW-toolkit' ),
            '9000' => __( '9 Secound', 'EW-toolkit' ),
            '10000' => __( '10 Secound', 'EW-toolkit' ),
            '11000' => __( '11 Secound', 'EW-toolkit' ),
            '12000' => __( '12 Secound', 'EW-toolkit' ),
            '13000' => __( '13 Secound', 'EW-toolkit' ),
            '14000' => __( '14 Secound', 'EW-toolkit' ),
            '15000' => __( '15 Secound', 'EW-toolkit' ),
        ],
    ]
);



$this->end_controls_section();
//Elementor True/Flass
	if($settings['enable_dots'] == 'yes'){
        $dots = 'true';
    }else{
        $dots = 'false';
    }
    if($settings['enable_loop'] == 'yes'){
        $loop = 'true';
    }else{
        $loop = 'false';
    }
    if($settings['enable_fade'] == 'yes'){
        $fade = 'true';
    }else{
        $fade = 'true';
    }
    if($settings['enable_nav'] == 'yes'){
        $nav = 'true';
    }else{
        $nav = 'false';
    }
    if($settings['enable_autoplay'] == 'yes'){
        $autoplay = 'true';
    }else{
        $autoplay = 'false';
    }
