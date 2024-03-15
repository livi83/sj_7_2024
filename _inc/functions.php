<?php

    function get_menu(array $pages){
        $menuItems = '';
        foreach($pages as $page_name => $page_url){
            $menuItems .='<li><a href = "'.$page_url.'">'.$page_name.'</a></li>';
        }
        return $menuItems;
    }

    function add_styles(){
        echo '<link rel="stylesheet" href="css/style.css">';
        echo '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">';
        $page_name = basename($_SERVER['SCRIPT_NAME'],'.php');
        switch($page_name){
            case 'index':
                echo '<link rel="stylesheet" href="css/slider.css">';
                break;
            case 'kontakt':
                echo '<link rel="stylesheet" href="css/banner.css">';
                echo '<link rel="stylesheet" href="css/form.css">';
                break;
            case 'qna':
                echo '<link rel="stylesheet" href="css/banner.css">';
                echo '<link rel="stylesheet" href="css/accordion.css">';
                break;
            case 'portfolio':
                echo '<link rel="stylesheet" href="css/banner.css">';
                echo '<link rel="stylesheet" href="css/portfolio.css">';
                break;
            case 'thankyou':
                echo '<link rel="stylesheet" href="css/banner.css">';
                break;
        }
    
    }

    function add_scripts(){
        echo('<script src="js/menu.js"></script>');
        $page_name = basename($_SERVER["SCRIPT_NAME"],'.php');
        switch($page_name){
        case 'index':
            echo('<script src="js/slider.js"></script>');
            break;
        case 'qna':
            echo('<script src="js/accordion.js"></script>');
            break;  
        }
    }

    function get_slides(array $headings, string $img_folder){
        echo '<section class="slides-container">';
        $img_files = glob($img_folder . '*.jpg');
          for($i = 0; $i < count($img_files); $i++){
            echo('<div class="slide fade">');
            echo('<img src="'.$img_files[$i].'">');
            echo('<div class="slide-text">');
            //sem pojde podmienka
            if(count($headings) == count($img_files)){
              //vypíšem i-ty nadpis
              echo($headings[$i]);
            }else{
                if($i<count($headings)){
                  echo($headings[$i]);
                }//inak nevypíšem nič
            }
            echo('</div>');
            echo('</div>');
          }    
        echo '<a id="prev" class="prev">❮</a>';
        echo '<a id="next" class="next">❯</a>';  
        echo '</section>';
    }

    function generate_portfolio(int $n_rows, int $n_cols){
        $n_portfolio = 1; // Počiatočná hodnota pre poradové číslo portfólia
        $col_class = round(100/$n_cols); // Výpočet šírky stĺpca na základe počtu stĺpcov
        for($i = 0; $i < $n_rows; $i++){
            echo('<div class="row">'); // Začiatok riadku
            for($j = 0; $j < $n_cols; $j++){
                echo('<div class="col-'.$col_class.' portfolio text-white text-center" id="portfolio-'.$n_portfolio.'">');
                echo('Web stránka '.$n_portfolio); // Text portfóliovej položky
                $n_portfolio++; // Inkrementuje poradové číslo portfólia
                echo('</div>'); // Ukončuje portfóliovú položku
            }
            echo('</div>'); // Ukončuje riadok
        }
    }
    
    function generate_qna(array $qna){
       foreach($qna as $question=>$answer){
            echo'<div class="accordion">';
            echo'<div class="question">'.$question.'</div>';
            echo'<div class="answer">'.$answer.'</div>';
            echo'</div>';
       } 
    }

?>