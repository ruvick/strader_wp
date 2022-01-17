<?
        //php7.2 domains/strader.asmi-studio.ru/wp-content/themes/strader/pars/getOne.php
        ini_set('max_execution_time', 9000);

        // echo dirname(dirname(dirname(dirname(dirname(__FILE__)))));
        // require_once("../../../../wp-config.php");
         require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) ."/wp-config.php");
        
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        include_once("simple_html_dom.php");

        $arrayLnk = [
            "https://strader-art.com/product/evah-pirazzi-%d0%bb%d1%8f-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8",
            "https://strader-art.com/product/evah-pirazzi-%d0%bb%d1%8f-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd",
            "https://strader-art.com/product/evah-pirazzi-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8",
            "https://strader-art.com/product/evah-pirazzi-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
            "https://strader-art.com/product/evah-pirazzi-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8",
            "https://strader-art.com/product/evah-pirazzi-4-4-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
            "https://strader-art.com/product/evah-pirazzi-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
            "https://strader-art.com/product/evah-pirazzi-4-4-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f",
            "https://strader-art.com/product/evah-pirazzi-gold-4-4-%d0%bb%d1%8f-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8%d0%b5",
            "https://strader-art.com/product/evah-pirazzi-gold-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
            "https://strader-art.com/product/evah-pirazzi-gold-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6",
            "https://strader-art.com/product/evah-pirazzi-gold-4-4-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8%d0%b5",

            "https://strader-art.com/product/evah-pirazzi-gold-4-4-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8%d0%b5",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d0%bb%d1%8f-%d0%b0%d0%bb%d1%8e%d0%bc%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d0%bb%d1%8f-%d1%85%d1%80%d0%be%d0%bc%d0%b8%d1%80%d0%be%d0%b2%d0%b0%d0%bd%d0%bd%d0%b0%d1%8f-%d1%81%d1%82%d0%b0%d0%bb%d1%8c-%d1%81%d1%80%d0%b5",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d0%bc%d0%b8-%d0%b7%d0%be%d0%bb%d0%be%d1%82%d0%be-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb%d1%91%d0%b9",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d0%bc%d0%b8-%d0%b7%d0%be%d0%bb%d0%be%d1%82%d0%be-%d1%81-%d1%88%d0%b0%d1%80%d0%b8%d0%ba%d0%be%d0%bc",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%80%d0%b5-%d0%b0%d0%bb%d1%8e%d0%bc%d0%b8%d0%bd%d0%b8%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%80%d0%b5-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%be",
"https://strader-art.com/product/pirastro-obligato-4-4-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%be",
"https://strader-art.com/product/pirastro-tonica-4-4-%d0%bb%d1%8f-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8%d0%b5-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb",
"https://strader-art.com/product/pirastro-tonica-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%b8%d1%81%d1%82%d0%b0%d1%8f-%d1%81%d1%82%d0%b0%d0%bb%d1%8c-%d1%81%d1%80%d0%b5%d0%b4%d0%bd",
"https://strader-art.com/product/pirastro-tonica-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%b8%d1%81%d1%82%d0%b0%d1%8f-%d1%81%d1%82%d0%b0%d0%bb%d1%8c-%d1%81%d1%80%d0%b5%d0%b4%d0%bd-2",
"https://strader-art.com/product/pirastro-tonica-4-4-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd%d0%b8%d0%b5-%d1%81-%d0%bf%d0%b5%d1%82%d0%bb",

"https://strader-art.com/product/pirastro-tonica-4-4-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d0%b0%d0%bb%d1%8e%d0%bc%d0%b8%d0%bd%d0%b8%d0%b9-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5",
"https://strader-art.com/product/pirastro-tonica-4-4-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%be-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6%d0%b5%d0%bd",
"https://strader-art.com/product/pirastro-tonica-4-4-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%be-%d1%81%d1%80%d0%b5%d0%b4%d0%bd%d0%b5%d0%b5-%d0%bd%d0%b0%d1%82%d1%8f%d0%b6",
"https://strader-art.com/product/thomastik-vision-%d0%bb%d1%8f-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-4-4-medium",
"https://strader-art.com/product/thomastik-vision-%d0%bc%d0%b8-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-4-4-medium",
"https://strader-art.com/product/thomastik-vision-%d1%80%d0%b5-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-4-4-medium",
"https://strader-art.com/product/thomastik-vision-%d1%81%d0%be%d0%bb%d1%8c-%d1%81%d1%82%d1%80%d1%83%d0%bd%d0%b0-4-4-medium",

"https://strader-art.com/product/accord-economic",
"https://strader-art.com/product/accord-economic-%d1%81-%d1%80%d1%8e%d0%ba%d0%b7%d0%b0%d1%87%d0%bd%d0%be%d0%b9-%d1%81%d0%b8%d1%81%d1%82%d0%b5%d0%bc%d0%be%d0%b9",
"https://strader-art.com/product/air-cell-%d1%80%d1%8e%d0%ba%d0%b7%d0%b0%d1%87%d0%bd%d0%b0%d1%8f-%d1%81%d0%b8%d1%81%d1%82%d0%b5%d0%bc%d0%b0",
"https://strader-art.com/product/arc-verona-1-2-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-2-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/arc-verona-1-2-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/arc-verona-1-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-8-%d1%87%d0%b5%d0%bb%d0%bb%d0%be-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-8-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-1-8-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9",

"https://strader-art.com/product/arc-verona-3-4-%d0%ba%d0%be%d0%bd%d1%82%d1%80%d0%b0%d0%b1%d0%b0%d1%81",
"https://strader-art.com/product/arc-verona-3-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-3-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/arc-verona-3-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-4-4",
"https://strader-art.com/product/arc-verona-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/arc-verona-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/arc-verona-classic-1-2",
"https://strader-art.com/product/arc-verona-classic-3-4",
"https://strader-art.com/product/arc-verona-classic-4-4",
"https://strader-art.com/product/bertoni-1-16-%d1%87%d0%b5%d1%85%d0%be%d0%bb",

"https://strader-art.com/product/bertoni-1-2-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/bertoni-1-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/bertoni-1-8-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/bertoni-%d1%87%d0%b5%d1%85%d0%be%d0%bb-3-4",
"https://strader-art.com/product/bertoni-%d1%87%d0%b5%d1%85%d0%be%d0%bb-4-4",
"https://strader-art.com/product/brack-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9",
"https://strader-art.com/product/brack-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/dimbath-performer-3-4",
"https://strader-art.com/product/dimbath-performer-4-4",
"https://strader-art.com/product/dimbath-performer-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/dimbath-protector-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-air-1-7-%d1%80%d1%8b%d0%b6%d0%b8%d0%b9",

"https://strader-art.com/product/gewa-air-1-7-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air",
"https://strader-art.com/product/gewa-air-1-7-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-1-7-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-1-7-%d1%84%d0%b8%d0%be%d0%bb%d0%b5%d1%82%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-1-7-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d0%b0%d0%bf%d0%b5%d0%bb%d1%8c%d1%81%d0%b8%d0%bd%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",

"https://strader-art.com/product/gewa-air-2-1-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d0%b2%d0%b8%d1%88%d0%bd%d1%91%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-2-1-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-diamond",
"https://strader-art.com/product/gewa-air-diamond-gold",
"https://strader-art.com/product/gewa-air-diamond-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-diamond-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-ergo",
"https://strader-art.com/product/gewa-air-prestige-%d0%ba%d0%b0%d0%bf%d0%bf%d1%83%d1%87%d0%b8%d0%bd%d0%be",
"https://strader-art.com/product/gewa-air-prestige-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-prestige-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9-%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80",
"https://strader-art.com/product/gewa-air-prestige-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",

"https://strader-art.com/product/gewa-air-prestige-%d1%84%d0%b8%d0%be%d0%bb%d0%b5%d1%82%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-prestige-%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-prestige-%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80-%d1%84%d0%b8%d0%be%d0%bb%d0%b5%d1%82%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-prestige-%d1%86%d0%b2%d0%b5%d1%82%d0%b0-%d0%ba%d0%b0%d0%bf%d0%bf%d1%83%d1%87%d0%b8%d0%bd%d0%be",
"https://strader-art.com/product/gewa-air-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d0%be%d1%80%d0%b0%d0%bd%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",

"https://strader-art.com/product/gewa-air-%d1%81%d0%b5%d1%80%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d1%84%d0%b8%d0%be%d0%bb%d0%b5%d1%82%d0%be%d0%b2%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-air-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-air-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-bio-i-s-4-4-%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80-%d0%b4%d0%bb%d1%8f-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b8",
"https://strader-art.com/product/gewa-bio-i-s-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-bio-i-s-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-concerto-4-4",
"https://strader-art.com/product/gewa-concerto-%d0%b0%d0%bb%d1%8c%d1%82-38%d1%81%d0%bc-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-concerto-39%d1%81%d0%bc-%d0%b0%d0%bb%d1%8c%d1%82-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-concerto-%d0%b0%d0%bb%d1%8c%d1%82-415-%d1%81%d0%bc-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",

"https://strader-art.com/product/gewa-concerto-%d0%b0%d0%bb%d1%8c%d1%82-43-%d1%81%d0%bc-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-concerto-%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80-%d0%b4%d0%bb%d1%8f-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b8-4-4",
"https://strader-art.com/product/gewa-concerto-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-idea-1-8",
"https://strader-art.com/product/gewa-idea-2-0",
"https://strader-art.com/product/gewa-idea-2-6",
"https://strader-art.com/product/gewa-idea-carbon-2-9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-idea-carbon-2-9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-carbon-2-9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-idea-comfort-%d1%80%d1%8e%d0%ba%d0%b7%d0%b0%d0%ba-%d1%81%d0%b8%d1%81%d1%82%d0%b5%d0%bc%d0%b0-%d0%b8-%d1%81%d1%83%d0%bc%d0%ba%d0%b0-%d0%b4%d0%bb%d1%8f-%d0%bd%d0%be%d1%82",
"https://strader-art.com/product/gewa-idea-futura-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-futura-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",


"https://strader-art.com/product/gewa-idea-futura-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-futura-%d1%81-%d1%80%d1%8e%d0%ba%d0%b7%d0%b0%d0%ba-%d1%81%d0%b8%d1%81%d1%82%d0%b5%d0%bc%d0%be%d0%b9-fiedler-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-futura-%d1%81-%d1%80%d1%8e%d0%ba%d0%b7%d0%b0%d0%ba-%d1%81%d0%b8%d1%81%d1%82%d0%b5%d0%bc%d0%be%d0%b9-fiedler-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-idea-futura-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-futura-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-idea-futura-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d0%bf%d0%b8%d1%85%d1%82%d0%be%d0%b2%d1%8b%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d1%81%d0%b5%d1%80%d1%8b%d0%b9-%d0%bc%d0%b5%d1%82%d0%b0%d0%bb%d0%bb%d0%b8%d0%ba-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-idea-x-lite-3-9-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",


"https://strader-art.com/product/gewa-liuteria-atlanta-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9",
"https://strader-art.com/product/gewa-liuteria-atlanta-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-liuteria-sport-style-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-liuteria-sport-style-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-liuteria-sport-style-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-maestro-venezia",
"https://strader-art.com/product/gewa-maestro-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-maestro-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-maestro-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-maestro-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-maestro-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-maestro-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",


"https://strader-art.com/product/gewa-maestro-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-maestro-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-original-jaeger-prestige-line-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-oxford-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-oxford-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-premium-1-16-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-premium-1-2",
"https://strader-art.com/product/gewa-premium-1-2-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-premium-1-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-premium-1-8-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-premium-3-4-2",
"https://strader-art.com/product/gewa-premium-3-4",

"https://strader-art.com/product/gewa-premium-4-4-2",
"https://strader-art.com/product/gewa-premium-4-4",
"https://strader-art.com/product/gewa-prestige-3-4",
"https://strader-art.com/product/gewa-prestige-3-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-prestige-4-4",
"https://strader-art.com/product/gewa-prestige-4-4-%d1%87%d0%b5%d1%85%d0%be%d0%bb",
"https://strader-art.com/product/gewa-prestige-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-2-4-%d0%b1%d0%b5%d0%bb%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-2-4-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-2-4-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-2-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-%d0%b2%d0%b8%d0%be%d0%bb%d0%be%d0%bd%d1%87%d0%b5%d0%bb%d1%8c",


"https://strader-art.com/product/gewa-pure-polycarbonate-4-6-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-polycarbonate-4-6-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-pure-polycarbonate-4-6-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-de-luxe-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9-2",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-strato-de-luxe-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-2",
"https://strader-art.com/product/gewa-strato-light-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-light-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82",

"https://strader-art.com/product/gewa-strato-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-strato-super-light-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-super-light-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d1%81%d0%b5%d1%80%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-strato-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/gewa-varianta-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/gewa-varianta-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/jaeger-prestige-%d0%b1%d0%be%d1%80%d0%b4%d0%be-%d1%81%d0%b5%d1%80%d0%b5%d0%b1%d1%80%d0%be",
"https://strader-art.com/product/jaeger-prestige-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be",
"https://strader-art.com/product/jaeger-prestige-line-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/jaeger-prestige-line-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/jaeger-prestige-line-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/jakob-winter-3024-luxus-super-light-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",

"https://strader-art.com/product/jakob-winter-3024-luxus-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/jakob-winter-3024-luxus-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/jakob-winter-3024-luxus-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/jakob-winter-3024-luxus-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/negri-milano-plus-%d0%ba%d0%be%d1%80%d0%b8%d1%87%d0%bd%d0%b5%d0%b2%d1%8b%d0%b9-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/negri-milano-plus-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/negri-milano-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%be%d0%bb%d0%b8%d0%b2%d0%ba%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/negri-milano-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/negri-monaco-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/negri-monaco-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/negri-venezia-advance-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/negri-venezia-advance-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%be%d0%bb%d0%b8%d0%b2%d0%ba%d0%be%d0%b2%d1%8b%d0%b9",

"https://strader-art.com/product/winter-1015-c%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b0-1-8",
"https://strader-art.com/product/winter-1015-va",
"https://strader-art.com/product/winter-1015-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b0-1-2",
"https://strader-art.com/product/winter-1015-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b0-1-4",
"https://strader-art.com/product/winter-1015-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b0-3-4",
"https://strader-art.com/product/winter-1015-%d1%81%d0%ba%d1%80%d0%b8%d0%bf%d0%ba%d0%b0-4-4",
"https://strader-art.com/product/winter-3024-super-light-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-3024-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%b5%d0%b6%d0%b5%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/winter-3024-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b7%d0%b5%d0%bb%d1%91%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/winter-3024-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%ba%d1%80%d0%b0%d1%81%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/winter-3024-super-light-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-compact-1-2-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",

"https://strader-art.com/product/winter-compact-3-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9",
"https://strader-art.com/product/winter-compact-4-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d0%b1%d0%be%d1%80%d0%b4%d0%be%d0%b2%d1%8b%d0%b9",
"https://strader-art.com/product/winter-compact-4-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-green-line-3-4-4-4-%d0%b0%d0%bd%d1%82%d1%80%d0%b0%d1%86%d0%b8%d1%82-%d0%b3%d0%be%d0%bb%d1%83%d0%b1%d0%be%d0%b9",
"https://strader-art.com/product/winter-green-line-carbon-desigh-4-4-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-green-line-carbon-design-3-4-4-4",
"https://strader-art.com/product/winter-green-line-carbon-design-4-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/winter-green-line-futura-black-3-4",
"https://strader-art.com/product/winter-green-line-futura-black-4-4",
"https://strader-art.com/product/winter-green-line-1-2-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-green-line-3-4-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9",
"https://strader-art.com/product/winter-green-line-3-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",

"https://strader-art.com/product/winter-green-line-4-4-%d1%87%d1%91%d1%80%d0%bd%d1%8b%d0%b9",
"https://strader-art.com/product/winter-green-line-%d1%81%d0%b8%d0%bd%d0%b8%d0%b9-4-4",
"https://strader-art.com/product/winter-greenline-carbon-design-4-4-%d1%82%d1%91%d0%bc%d0%bd%d0%be-%d0%b2%d0%b8%d1%88%d0%bd%d1%91%d0%b2%d1%8b%d0%b9",

        ];
        
        foreach($arrayLnk as $l) {

        

        $lnk = $l;

        echo "Обробатываем: ".$lnk. "\n\r";
            
        if (get_headers($lnk, 1)[0] === "HTTP/1.1 404 Not Found") {
            $wpdb->update( "lshop_parsed_tovars", array("post_id" => 9999999), array("lnk" => $lnk), array('%d'), array('%s') );
            return;
        }

        $context = stream_context_create(
            array(
                "http" => array(
                    "header" => "User-Agent: Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36"
                )
            )
        );

        $html = file_get_html($lnk, false, $context);

        $tovarInfo = array();
            
            

        $tovarInfo["cat"] = "Аксессуары";
        
        $tovarInfo["name"] = $html->find('h1')[0]->plaintext;

        $tovarInfo["price"] = trim(str_replace(array(" ","USD","руб.","₽","$",",00",".00", "₽", "&#8381;"), "", $html->find('.price .woocommerce-Price-amount')[0]->plaintext));
        // $tovarInfo["price"] = $html->find('.price .woocommerce-Price-amount')[0]->plaintext;
        
        $tovarInfo["sku"] = $html->find('.sku')[0]->plaintext;
        $tovarInfo["description"] = str_replace( array("Описание"),"", $html->find('.woocommerce-Tabs-panel--description')[0]->plaintext);

        $categories = str_replace( array("Категории: "),"", $html->find('.posted_in')[0]->plaintext);
        $tovarInfo["subcat"] = explode(", ", $categories);

        $tovarInfo["images"] = array();


        foreach($html->find('.woocommerce-product-gallery__image a') as $cr) {
            $img["lnk"] = $cr->href;
        
            $tovarInfo["images"][] =  $img;
        }
       

        $to_post_meta  = [ 
            '_offer_smile_descr' => "Товар: ".$tovarInfo["name"], 
            '_offer_type' => "", 
            '_offer_sku' => $tovarInfo["sku"], 
            '_offer_nal' => 'В наличии', 
            '_offer_price' => $tovarInfo["price"],
            '_offer_fulltext' => $tovarInfo["description"],
            '_offer_name' => $tovarInfo["name"],
            '_offer_allsearch' => $tovarInfo["name"]." ".$tovarInfo["sku"],
            '_offer_smile_charect' => $tovarInfo["description"],
        ];

        $post_id = wp_insert_post(  wp_slash( array(
            'post_type'     => 'ultra',
            'post_author'    => 1,
            'post_status'    => 'publish',
            'post_title' => $tovarInfo["name"],
            'post_excerpt'  => $tovarInfo["description"],
            'post_content'  => $tovarInfo["description"],
            'meta_input'     => $to_post_meta,
            'tax_input' => array( 'ultracat' => $postCat )
        ) ) );

        $postCat = [];

        $postCat[] = get_term_by('name', $tovarInfo["cat"], 'ultracat' )->term_id;

        foreach ($tovarInfo["subcat"] as $name) {
            $id = get_term_by('name', $name, 'ultracat' )->term_id;
            if (!empty($id))
                $postCat[] = $id;
        }

        wp_set_object_terms( $post_id, $postCat, "ultracat" );
        
        $indexImg = 0;
        foreach ($tovarInfo["images"] as $img) {
            $img1 = $img["lnk"];
            $ttl = $tovarInfo["name"]." - фото ".(string)($indexImg+1);
            $img_id = media_sideload_image( $img1, $post_id, $ttl, "id" );
            
            add_post_meta( $post_id, '_offer_picture|gal_img|'.$indexImg.'|0|value', $img_id, true );
            add_post_meta( $post_id, '_offer_picture|gal_img_sku|'.$indexImg.'|0|value', "", true );
            add_post_meta( $post_id, '_offer_picture|gal_img_alt|'.$indexImg.'|0|value', $ttl, true );
            
            if ($indexImg == 0) set_post_thumbnail($post_id, $img_id);
            
            $indexImg++;
        }

        

        print_r( $tovarInfo);
        print_r( $postCat);

    }

?>