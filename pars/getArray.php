<?
        //php7.2 domains/strader.asmi-studio.ru/wp-content/themes/strader/pars/getArray.php
        ini_set('max_execution_time', 9000);

        // echo dirname(dirname(dirname(dirname(dirname(__FILE__)))));
        // require_once("../../../../wp-config.php");
         require_once(dirname(dirname(dirname(dirname(dirname(__FILE__))))) ."/wp-config.php");
        
        require_once ABSPATH . 'wp-admin/includes/media.php';
        require_once ABSPATH . 'wp-admin/includes/file.php';
        require_once ABSPATH . 'wp-admin/includes/image.php';

        include_once("simple_html_dom.php");

        $arrayLnk = [];
        
        $lnk = "https://strader-art.com/product-category/%d1%84%d1%83%d1%82%d0%bb%d1%8f%d1%80%d1%8b-%d0%b8-%d1%87%d0%b5%d1%85%d0%bb%d1%8b/page/18";


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

        $allLnk = $html->find('.woocommerce-LoopProduct-link');
        
        echo "\n\r";
        echo "\n\r";

        foreach ($allLnk as $l) {
           echo '"'.$l->href.'",'."\n\r"; 
        }

        echo "\n\r";
        echo "\n\r";
?>