@extends('layouts.master')

@section('content')
<section id="knowus">
  <div class="container">
    <h1 class="border"><span>Nous connaître</span></h1>
    <div class="row number">
      <div class="col-md-3 col-xs-6">
        <p>1632</p>
        <p>médaillés</p>
        <p>meilleurs apprentis</p>
      </div>

      <div class="col-md-3 col-xs-6">
        <p>3200</p>
        <p>médaillés</p>
        <p>meilleurs ouvriers</p>
      </div>

      <div class="col-md-3 col-xs-6">
        <p>3500</p>
        <p>inscrits</p>
        <p>chaque année en france</p>
      </div>

      <div class="col-md-3 col-xs-6">
        <p>200</p>
        <p>médaillés</p>
        <p>représentés chaque année</p>
      </div>
    </div>

    <div class="row text-col">
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
      <div class="col-md-6">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
      </div>
    </div> <!-- /row text-col-->
    <div class="row text-center">
      <a href ="" class="btna">En savoir plus</a>
    </div>
</section>

<section>
  <div class="container">
    <h1 class="border"><span>Actus a la une</span></h1>
  </div>
  <div class="container-fluid">
        <div class="row wrapperslider">
          <span id="slider-next"></span>
            <ul class="bxslider">
                <li><a href="">
                  <figure class="newsslide">
                      <img src="img/slide_left.jpg" alt="">
                      <figcaption>
                        <p class="figfirstline">Ouverture des inscriptions aux concours 2017</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                      </figcaption>
                  </figure></a>
                </li>
                <li><a href="">
                  <figure class="newsslide">
                        <img src="img/slide_right.jpg" alt="">
                        <figcaption>
                          <p>Cérémonie des remises de récompenses aux lauréats</p>
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                        </figcaption>
                      </figure></a>
                </li>
                <li><img src="http://placehold.it/550X365"></li>
                <li><img src="http://placehold.it/550X365"></li>
            </ul>
            <span id="slider-prev"></span>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
                <a href="#" class="btna">Voir toutes les actualités</a>
           </div>
         </div>
      </div> <!-- /container -->
    </section>


    <section>
      <div class="container-fluid">
        <div class="row introduce">

          <div class="fourheads blockm">
              <figure>
                <img src="img/cyril.jpg" alt="">
                <figcaption>
                  <a href=""><span class="glyphicon glyphicon-plus plusm" aria-hidden="true"></span></a>
                </figcaption>
              </figure>
              <div class="rowdown">
                <h6>Un des meilleurs apprentis de France 2016</h6>
                <p class="name_m">Cyril Fauvel</p>
                <p class="legendtext_m">Peinture en carosserie option: décor</p>
              </div>
          </div>

          <div class="fourheads blockw">
              <div class="rowup">
                <figure>
                  <img src="img/lucie.jpg" alt="">
                  <figcaption>
                    <a href=""><span class="glyphicon glyphicon-plus plusw" aria-hidden="true"></span></a>
                  </figcaption>
                </figure>
              </div>
              <div class="rowdown">
                <h6>Un des meilleurs apprentis de France 2016</h6>
                <p class="name_w">Lucie Cases</p>
                <p class="legendtext_w">Signalétique, enseigne et décor</p>
              </div>
          </div>

          <div class="fourheads blockm">
              <div class="rowup">
                <figure>
                  <img src="img/florian.jpg" alt="">
                  <figcaption>
                    <a href=""><span class="glyphicon glyphicon-plus plusm" aria-hidden="true"></span></a>
                  </figcaption>
                </figure>
              </div>
              <div class="rowdown">
                <h6>Un des meilleurs apprentis de France 2016</h6>
                <p class="name_m">Florian Trochou</p>
                <p class="legendtext_m">Construction d'ensemble chaudronnés</p>
              </div>
          </div>

          <div class="fourheads blockw">
              <div class="rowup">
                <figure>
                  <img src="img/sophie.jpg" alt="">
                  <figcaption>
                    <a href=""><span class="glyphicon glyphicon-plus plusw" aria-hidden="true"></span></a>
                  </figcaption>
                </figure>
              </div>
              <div class="rowdown">
                <h6>Un des meilleurs apprentis de France 2016</h6>
                <p class="name_w">Sophie Grudot</p>
                <p class="legendtext_w">Esthéthique maquillage</p>
              </div>
          </div>
        </div>
      </div>
    </section>


    <section class="jobs">

      <div class="jobsleft">
        <figure class="figmaquillage">
          <img src="img/maquillage.jpg" alt="">
          <figcaption class="legendR maquillage">
            <h5>Atelier</h5>
            <p>A la découverte du maquillage</p>
            <a href=""><span class="glyphicon glyphicon-plus buttonplusB" aria-hidden="true"></span></a>
          </figcaption>
        </figure>

        <figure class="figsculpture">
          <img src="img/sculpture.jpg" alt="">
          <figcaption class="legendR sculpture">
            <h5>Notre héritage</h5>
            <p>Des techniques qu'on oublie</p>
            <a href=""><span class="glyphicon glyphicon-plus buttonplusB" aria-hidden="true"></span></a>
          </figcaption>
        </figure>

      </div> <!--/jobsleft-->

      <div class="jobsright">
        <div class="jobsrightup">
          <figure class="figevent">
            <img src="img/evenement.jpg" alt="">
            <figcaption class="legendB event">
              <h5>Expositions</h5>
              <p>L'excellence de nos métiers exposés devant vous</p>
              <a href=""><span class="glyphicon glyphicon-plus buttonplusR" aria-hidden="true"></span></a>
            </figcaption>
          </figure>
        </div> <!-- /jobsrightup -->

        <div class="jobsrightdown">
          <figure class="figcook">
            <img src="img/cuisinier.jpg" alt="">
            <figcaption class="legendB cook">
              <h5>maf</h5>
              <p>Rentrez en immersion dans notre concours accompagnés de notre jurys de professionnels</p>
              <a href=""><span class="glyphicon glyphicon-plus buttonplusR" aria-hidden="true"></span></a>
            </figcaption>
          </figure>

          <figure class="fighair">
            <img src="img/coiffeur.jpg" alt="">
            <figcaption class="legendR hair">
              <h5>En atelier</h5>
              <p>A la découverte de la coiffure</p>
              <a href=""><span class="glyphicon glyphicon-plus buttonplusB" aria-hidden="true"></span></a>
            </figcaption>
          </figure>
        </div> <!-- /jobsrightdown -->
      </div> <!-- /jobsright -->


    </section>
  <div class="container">
    <div class="row devise">
      <p class="text-center">"Plus qu'un métier, une passion"</p>
    </div>
  </div>







@endsection
