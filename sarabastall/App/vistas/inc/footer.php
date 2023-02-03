  <!-- ======= Footer ======= -->
  <footer id="footer">

    

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy; Copyright <strong><span>Knight</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/" target="_blank">BootstrapMade</a>
      </div>
      <div class="credits">
        Distributed by <a href="https://themewagon.com/" target="_blank">Themewagon</a>
      </div>
      <br>
      <div class="credits">
        <button type="button" 
          data-bs-toggle="modal"
          data-bs-target="#modalCerrarAccion" 
          class="" style="background-color: #262626; border:0;">
          <img src="public/assets/img/icons8-accesibilidad-2-96.png" alt="" style="width: 50px; ">
      
      </div>
    </div>
  </footer><!-- End Footer -->



  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="public/assets/vendor/aos/aos.js"></script>
  <script src="public/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="public/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="public/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="public/assets/vendor/php-email-form/validate.js"></script>
  <script src="public/assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="public/assets/js/main.js"></script>

  <div class="modal fade" id="modalCerrarAccion" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title " id="modalCerrarAccionLabel">
            Configuración de Accesibilidad
          </h5>
          
        </div><br>
        <div class="m-3">
        <form method="POST" action="">
          <select class="form-select" aria-label="Default select example">
            <option value="1">Fuente predeterminada</option>
            <option value="2">Fuente para accesibilidad (dislexia)</option>
          </select><br>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="check" name="check" value="1" onchange="javascript:showContent()">
            <label class="form-check-label" for="exampleCheck1">Habilitar barra de herramientas de accesibilidad</label>
          </div>
        
        </div>
      
        
      </div>
    </div>
  </div>

<script src="<?php echo RUTA_URL?>/js/main.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>