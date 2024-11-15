

   <!-- Validation de formulaire via javascript -->

 <script >
    (function() {
             'use strict';
             window.addEventListener('load', function() {
               let forms = document.getElementsByClassName('needs-validation');
               let validation = Array.prototype.filter.call(forms, function(form) {
                 form.addEventListener('submit', function(event) {
                   if (form.checkValidity() === false) {
                     event.preventDefault();
                     event.stopPropagation();
                   }
                   form.classList.add('was-validated');
                 }, false);
               });
             }, false);
           })();
         </script>

 <!-- fin de Validation de formulaire via javascript -->
<div class="container mt-5">
   <section class="contact section-padding pt-0" id="contact">
      <div class="container">
        <div class="row">

          <div class="col-lg-6 col-md-6 col-12">
          <form action="?page=contact" method="post" class="needs-validation" novalidate>
                
                <div class="form-group d-flex flex-column">
                   <label for="text" >Nom</label>
                    <input type="text" class="form-control" name="nom" id="nom" placeholder="Votre nom" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="valid-feedback">Valeur correcte</div>

                    
                </div>

                <div class="form-group d-flex flex-column">
                    <label for="email" >E-mail</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Votre e-mail" required>
                    <div class="valid-feedback">Ok !</div>
                    <div class="valid-feedback">Valeur correcte</div>

                    
                </div>

                <div class="form-group d-flex flex-column">
                   <label for="message" >Message</label>
                    <textarea class="form-control" rows="5" name="message" id="message" placeholder="Votre message" required></textarea>
                    <div class="valid-feedback">Ok !</div>
                    <div class="valid-feedback">Valeur correcte</div>

                    
                </div>

                <input  type="submit" class="form-control" id="submit-button" name="btncon" value="Envoyer" class="btn btn-primary">
                
            </form>
          </div>

            <div class="mx-auto col-lg-4 col-md-6 col-12">
                <h3 class="my-4 pt-4 pt-lg-0">Maoulida Abdoulhafidhou </h3>

                <p class="mb-1">(+212) 6 49 76 96 46</p>

                <p>
                    <a href="#">
                    abdoulhafidhou.maoulida1999@gmail.com
                    <i class="fas fa-arrow-right custom-icon"></i>
                    </a>
                </p>

                <ul class="social-links mt-2">
                    <li><a href="https://www.facebook.com/people/Hafidhou-Maoulida/pfbid0RsM5YbPCkKQM2VKUK4ZtyBywF1HW5dPJ9mXtyxFxtaXT2XxTjMhGorf11mGZzs5Tl/?comment_id=Y29tbWVudDo0NzM0MjA4OTAxMDc2MTNfNDczNDYwMzI2NzcwMzM2" rel="noopener" class="fab fa-facebook"></a></li>
                    <li><a href="https://x.com/maoulidahafidh2" rel="noopener" class="fab fa-twitter"></a></li>
                    <li><a href="https://www.instagram.com/accounts/login/" rel="noopener" class="fab fa-instagram"></a></li>
                    <li><a href="https://www.linkedin.com/in/maoulida-abdoulhafidhou-20489b208/" rel="noopener" class="fab fa-linkedin"></a></li>
                    <li><a href="#" rel="noopener" class="fab fa-youtube"></a></li>
                </ul>
                
              <p class="copyright-text mt-5 pt-3">Edité en   2024 par  
                
                 <a href="#" title="free HTML templates" target="_blank">&copy; Haf-ma:</a></p>
            </div>

        </div>
      </div>
    </section>
</div>