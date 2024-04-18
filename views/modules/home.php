<div class="content-wrapper">

    <h1>

      Dashboard


    </h1>

    <ol class="breadcrumb">

      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>

      <li class="active">Dashboard</li>

    </ol>

  </section>

  <section class="content">

    <div class="row">
      
      <?php

        if($_SESSION["profile"] =="administrator" || $_SESSION["profile"] =="Administrator"){

          include "home/top-boxes.php";

        }

      ?>
    
    </div>
    
    <div class="row">

      <div class="col-lg-12">
      
      </div>

      <div class="col-lg-12">
           
        <?php

        if($_SESSION["profile"] =="Seller" || $_SESSION["profile"] =="seller"){

           echo '<div class="box box-default">

           <div class="box-header">

           <h1>Welcome ' .$_SESSION["name"].'</h1>

           </div>

           </div>';

        }

        ?>

      </div>

    </div>

  </section>

</div>
<!-- Log on to codeastro.com for more projects! -->
