<section class="ftco-counter ftco-section img bg-light" id="section-counter">
<style>
.services {
  position: relative;
  overflow: hidden;
  transition: box-shadow 0.3s ease;
}

.tarjeta:hover .services {
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.8);
}

.icon {
  background-color: transparent;
  transition: background-color 0.3s ease, transform 0.3s ease;
}

.icon span {
  color: #000000;
  transition: color 0.3s ease;
}

.services:hover .icon {
  background-color: #01d28e;
  transform: scale(1.1);
}

.services:hover .icon span {
  color: #ffffff;
}

</style>

      <div class="container">
      <h2>SERVICES</h2><br>
        <div class="row">
    <?php
      $arrayServices = [
      "SHARED SHUTTLE SERVICE" => [
          'id' => 1,
          'descripcion' => 'Is an innovative transportation solution that optimizes mobility by providing efficient and convenient shared rides. Tailored to meet the needs of individuals seeking a cost-effective and comfortable alternative for commuting, this service brings together passengers with similar destinations in a shared vehicle, promoting resource efficiency and reducing environmental impact. Users benefit from the convenience of personalized transportation without bearing the full financial burden of a private trip, while the platform strives to maximize the efficiency of each journey. With a focus on sustainability and accessibility, the Shared Shuttle Service represents a smart and collaborative solution for modern transportation needs. Its professional and streamlined approach addresses the evolving demands of urban mobility, offering a practical and eco-conscious choice for commuters.',
      ],
      "TRANSFER FROM PORT OF MIAMI" => [
          'id' => 2,
          'descripcion' => 'Elevate your travel experience with our exceptional Transfer from Port of Miami service. Seamlessly designed for discerning travelers, our service ensures a smooth transition from the vibrant Port of Miami to your desired destination. Enjoy the luxury of stress-free and punctual transfers in a meticulously maintained fleet, accompanied by professional and courteous drivers. Whether you are disembarking from a cruise or arriving at the port for a departure, our service offers a blend of efficiency and comfort. With a commitment to excellence, we prioritize your convenience, providing a tailored and reliable transfer experience. Make every journey memorable and hassle-free with our Transfer from Port of Miami service, where sophistication meets unparalleled service.',
      ],
      "PORT OF MIAMI TO MIAMI AIRPORT" => [
          'id' => 3,
          'descripcion' => 'Embark on a seamless and exciting journey with our Port of Miami to Miami Airport service! We pride ourselves on delivering a professional yet vibrant transportation experience, ensuring you transition effortlessly from the bustling Port of Miami to the Miami Airport. Our team of friendly and skilled drivers is dedicated to providing you with a joyous ride, where comfort and punctuality take center stage. Picture a stress-free transfer in our sleek and well-maintained vehicles, designed to make your trip as enjoyable as the destination itself. Whether you are wrapping up a fantastic cruise or gearing up for your next adventure, our service adds a touch of flair to your travel plans. Trust us to transform the mundane into the extraordinary – because your journey should be as remarkable as the places you are headed!  Port of Miami to Miami Airport – where professionalism meets personality for an unforgettable ride.',
      ],
      "PORT OF MIAMI TO AIRPORT" => [
          'id' => 4,
          'descripcion' => 'Facilitating a seamless transition from the dynamic Port of Miami to the nearby airport requires a meticulous orchestration of logistics and a commitment to excellence. Our specialized service meticulously navigates this critical juncture of your journey, ensuring a smooth transfer between these two pivotal points. Our fleet, maintained to the highest standards, is manned by a cadre of seasoned drivers well-versed in optimizing routes for efficiency and timeliness. We recognize the importance of a streamlined and professional transport experience, allowing you to focus on the broader aspects of your travel agenda. Our commitment to precision and reliability distinguishes us, underscoring our dedication to providing a superior standard in the realm of transportation services. Rely on our expertise to elevate your travel experience, offering a seamless transition from the Port of Miami to the airport with the utmost professionalism and proficiency.',
      ],
      "CRUISE PORT TO AIRPORT" => [
          'id' => 5,
          'descripcion' => 'Embark on a journey of unparalleled convenience and reliability with our dedicated transfer service, seamlessly connecting cruise ports to airports. Our meticulous attention to detail ensures a flawless transition, allowing you to savor the culmination of your cruise experience without the burden of logistical concerns. Comprising a fleet of impeccably maintained vehicles and a team of experienced drivers, we prioritize efficiency and punctuality to redefine your travel expectations. Opting for our service means choosing a commitment to professionalism and a dedication to providing a stress-free, comfortable transition from cruise port to airport. Elevate your travel experience with us, where precision meets seamless connectivity, promising a departure as smooth and enjoyable as your entire cruise adventure.',
      ],
      "CRUISE PORT TO MIAMI" => [
          'id' => 6,
          'descripcion' => 'Embark on a voyage of unparalleled ease and reliability by choosing our dedicated transfer service for seamless connections from cruise ports to Miami. Our unwavering commitment to excellence ensures a hassle-free transition, allowing you to fully savor the concluding moments of your cruise adventure without the burden of logistical intricacies. With a fleet of meticulously maintained vehicles and a team of experienced drivers, we prioritize efficiency and punctuality to redefine your travel expectations. Opting for our service signifies a choice for professionalism and a dedication to providing a stress-free, comfortable journey from cruise port to Miami. Transform your travel experience with us, where precision meets seamless connectivity, promising an arrival in Miami that mirrors the comfort and enjoyment of your entire cruise experience.',
      ],
  ];

  $iconos = array('flaticon-transportation', 'flaticon-route', 'flaticon-wedding-car', 'flaticon-car');

  foreach ($arrayServices as $servicio => $detalles) {

    $indiceAleatorio = array_rand($iconos);
    // Obtener el nombre del icono aleatorio
    $iconoAleatorio = $iconos[$indiceAleatorio];

    echo '<div class="col-md-6 tarjeta mb-5">
            <div class="services services-2 w-100 text-center shadow py-3 px-2 border border-success">
              <div class="icon d-flex align-items-center justify-content-center"><span class="'.$iconoAleatorio.'"></span></div>
              <div class="text w-100">
                <h4 class="heading mb-2">'.$servicio.'</h4>
                <p class="text-justify">'.substr($detalles["descripcion"], 0, 150).'... 
                  <button class="btn btn-link read-more-btn" data-full-text="'.$detalles["descripcion"].'">Leer más</button>
                </p>
              </div>
            </div>
          </div>';
  }
?>
        </div>
      </div>
    </section>

    <!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Descripción completa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="modalBody">
        <!-- Contenido completo del servicio se insertará aquí dinámicamente -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function(){
    // Manejar el evento de clic en el botón "Leer más"
    $('.read-more-btn').click(function(){
      // Obtener el contenido completo del servicio desde el atributo data
      var fullText = $(this).data('full-text');

      // Establecer el contenido completo en el cuerpo del modal
      $('#modalBody').text(fullText);

      // Mostrar el modal
      $('#myModal').modal('show');
    });
  });
</script>