<?php
include_once('partials/header.php');
?>    
    <main>
      <section class="slides-container">
        <?php
          $headings = array('Prvý nadpis','Druhý nadpis');
          $img_folder = 'img/carousel/';
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
        ?>

        <a id="prev" class="prev">❮</a>
        <a id="next" class="next">❯</a>
        
      </section>
      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
              <p><strong><em>Elit culpa id mollit irure sit. Ex ut et ea esse culpa officia ea incididunt elit velit veniam qui. Mollit deserunt culpa incididunt laborum commodo in culpa.</em></strong></p>
          </div>
        </div>
      </section>
      <section class="container">
        <div class="row">
          <div class="col-50">
            <h2>Mollit cupidatat velit quis irure non eiusmod culpa cillum velit magna est aliquip.</h2>
          </div>
          <div class="col-50">
            <p>Nulla dolore sit esse pariatur culpa sint nulla fugiat nulla ut. Sit adipisicing fugiat id consequat qui est. Nulla ea aliquip culpa nulla mollit do excepteur ex ullamco consequat tempor consectetur. Tempor et ea voluptate irure est magna magna reprehenderit qui non dolore. Consequat id ad cillum do qui. Proident ipsum enim eiusmod fugiat quis anim consequat ullamco mollit excepteur. Eiusmod eu ad irure anim velit laborum commodo nostrud pariatur id ea ad.</p>
            <p>Incididunt pariatur ipsum in culpa sit cillum consequat nostrud do. Esse commodo ad qui ea. Pariatur elit mollit deserunt aute do culpa eu veniam pariatur in adipisicing qui adipisicing irure. Est minim sint ipsum nulla eiusmod. Amet do officia consectetur labore. Id aute labore culpa aliquip. Adipisicing mollit excepteur Lorem quis elit ipsum irure quis occaecat qui consectetur ad irure dolor.</p>
          </div>
        </div>
      </section>
    </main>
<?php
  include_once('partials/footer.php')
?>  
  