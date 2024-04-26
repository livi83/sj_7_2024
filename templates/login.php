<?php
include('partials/header.php');
?> 
<main>

      <section class="container">
        <div class="row">
          <div class="col-100 text-center">
                <h1>Prihlásenie</h1>
                <form action="" method="POST">
                    <input type="email" name="email" placeholder="Vaše meno">
                    <br>
                    <input type="text" name="password" placeholder="Vaše heslo">
                    <br>
                    <input type="submit" value="Odoslať" name="user_login">
                </form>
               
          </div>
        </div>
      </section>
    </main>
    
<?php
    include_once('partials/footer.php')
?> 