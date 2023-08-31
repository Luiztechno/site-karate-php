@extends('template.index')
 @section('contents')
<!-- ======= Pricing Section ======= -->
 <section id="pricing" class="pricing section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Preços</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
            <span class="recommended-badge">Recommended</span>
              <h3>Adulto</h3>
              <h4><sup>R$</sup>120<span> / Mes</span></h4>
              <ul>
                <li>Horários</li>
                <li>06-07H AM</li>
                <li>17-18H PM</li>
             
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Contratar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
            <div class="box recommended" data-aos="zoom-in">
              <h3>Kids</h3>
              <h4><sup>R$</sup>100<span> / Mes</span></h4>
              <ul>
                <li>Horários</li>
                <li>09-10H AM</li>
                <li>07 a 16 anos</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Contratar</a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
            <div class="box" data-aos="zoom-in" data-aos-delay="100">
              <h3>Senior</h3>
              <h4><sup>R$</sup>100<span> / Mes</span></h4>
              <ul>
                <li>Horário</li>
                <li>16-17H PM</li>
                <li>Aula para 50+</li>
              </ul>
              <div class="btn-wrap">
                <a href="#" class="btn-buy">Contratar</a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Pricing Section -->
    @endsection