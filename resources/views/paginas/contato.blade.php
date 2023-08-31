@extends('template.index')
 @section('contents')
 <!-- ======= Contact Section ======= -->
 <section id="contact" class="contact section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Contato</h2>
          <p>Venha conhecer nosso Dojo</p>
        </div>

        <div class="row">

          <div class="col-lg-4">
            <div class="info d-flex flex-column justify-content-center" data-aos="fade-right">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Endereço:</h4>
                <p>R. Alfredo Ruíz, 9-62 - Vila Mesquita,<br>Bauru -SP</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Cell:</h4>
                <p>(14) 98808-3870</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form" data-aos="fade-left">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Digite seu nome..." required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Digite o E-mail..." required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Digite..." required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem..." required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Carregando</div>
                <div class="error-message"></div>
                <div class="sent-message">Muito obrigado!</div>
              </div>
              <div class="text-center"><button type="submit">Mensagem enviada</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->
  @endsection