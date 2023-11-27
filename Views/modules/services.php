<section class="ftco-counter ftco-section " id="enunciados">
    <style>
    .card {
      border: none;
      transition: transform 0.3s;
    }

    .card:hover {
      transform: scale(1.05);
    }

    .card-header {
      background-color: #01d28e; 
      color: #ffffff; 
    }

    
    #acordeon .card {
      border: none;
      margin-bottom: 10px;
    }

    #acordeon .card-header {
      background-color: #01d28e;
    }

    #acordeon .card-header .boton{
      color: #ffffff;
    }

    #acordeon .card-body {
      background-color: #f1f1f1;
    }
  </style>
    <div class="container">
    <h2>SERVICES</h2><br>
    <div class="row">

    <?php
    $arrayServices = ["SHARED SHUTTLE SERVICE", "TRANSFER FROM PORT OF MIAMI", "PORT OF MIAMI TO MIAMI AIRPORT","PORT OF MIAMI TO AIRPORT", "CRUISE PORT TO AIRPORT", "CRUISE PORT TO MIA"];
    
    foreach ($arrayServices as $services) {
      echo'<div class="col-md-4 mb-4">
           <div class="card">';
          echo'<div class="card-header">'.$services.'</div>';
          echo'<div class="card-body">
            <h5 class="card-title">details</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda voluptatem!</p>
          </div>
        </div>
      </div>';
    }

    ?>
      
    </div><!--  -->

    <?php
    $arrayServices2 = ["CRUISE PORT TO MIAMI INTERNATIONAL AIRPORT","TRANSFER FROM THE PORT OF MIAMI","TRANSPORTATION FROM THE PORT OF MIAMI","TRANSFER FROM CRUISER PORT","TRANSFER FROM MIAMI CRUISE PORT","SHARED SHUTTLE SERVICES FROM PORT OF MIAMI","ROYAL CARIBBEAN CRUISE POR TRANSFERS","TRANSFERS FROM ROYAL CARIBBEAN","NORWEGIAN CRUISE TRANSPORTATIONS","CARNIVAL CRUISES TRANSPORTATION SERVICES","CARNIVAL CRUISES SHUTTLE SERVICES","CARNIVAL CRUISES PORT TRANSFERS"];
    foreach($arrayServices2 as $services2){
      echo'<div id="acordeon">
      <div class="card">
        <div class="card-header" id="enunciado11">
          <h5 class="mb-0">
            <button class="btn btn-link boton" data-toggle="collapse" data-target="#collapseEnunciado11" aria-expanded="true" aria-controls="collapseEnunciado11">'
            .$services2.
            '</button>
          </h5>
        </div>

        <div id="collapseEnunciado11" class="collapse hide" aria-labelledby="enunciado11" data-parent="#acordeon">
          <div class="card-body">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio assumenda voluptatem!
          </div>
        </div>
      </div>
    </div>';
    }
    ?>

    
    </div>
  </section>