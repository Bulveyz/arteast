<?php $__env->startSection('content'); ?>
  <!--Content-->
  <main>

    <div class="promo">
      <div class="welcome-section content-hidden">
        <div class="content-wrap">
          <img class="logos" src="images/logos.jpg" alt="Logo" data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
        </div>
      </div>
    </div>
    
    <!--Services-->
    <div class="container service">
      <div class="row center">
        
        <!--Services Text-->
        
          
            
            
              
            
            
              
            
            
              
            
          
          
          
            
          
  
          
        
        <!--End Services Text-->
        
        <div class="col-12 relative d-none d-md-block">
          <div class="overt">
            <div class="overlayt d-flex justify-content-center align-items-center" data-aos="fade-down" data-aos-duration="2000" data-aos-delay="500" data-aos-once="true">
              <div>
                <h1>О Нас</h1>
                <ul class="list">
                  <li class="list_item">
                    1) Высокий уровень танцоров
                  </li>
                  <li class="list_item">
                    2) Превосходное исполнение
                  </li>
                  <li class="list_item">
                    3)фееричные, ювелирно проработанные костюмы
                  </li>
                </ul>
                <a class="video__link fsz20 border" href="/gallery">Подробнее <i class="fa fa-long-arrow-right t2" aria-hidden="true"></i></a>
              </div>
            </div>
            <div class="over" data-aos="fade-up" data-aos-once="true">
              <img class="responsive-img" src="images/DSC09004-min.jpg" >
            </div>
          </div>
        </div>
  
        <!--Services Image-->
        <div class="col-md-12 center d-block d-md-none">
          <h2>О Нас</h2>
          <ul class="list">
            <li class="list_item">
              1) Высокий уровень танцоров
            </li>
            <li class="list_item">
              2) Превосходное исполнение
            </li>
            <li class="list_item">
              3)фееричные, ювелирно проработанные костюмы
            </li>
          </ul>
          <div style="margin-bottom: 50px">
            <a class="service__links left-align" href="/team">Подробнее</a>
          </div>
          
        </div>
        <!--End Services Image-->

        <!--Services Text-->
        
        <!--End Services Text-->

        <!--Services Image-->
        
          
        
        <!--End Services Image-->

      </div>
    </div>
    <!--End Services-->

    <!--Video-->
    <img class="skew-top responsive-img hide-on-med-and-down" src="images/skew-top.svg" width="100%" alt="">
    <div class="video">
      <div class="center">

        <!--Video Title-->
        <h2 class="video__title">Галерея</h2>
        <!--End Video Title-->

        <!--Video Items-->
        <div class="video__container d-flex justify-content-center flex-wrap">

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image responsive-img materialboxed" src="images/1-48-min.jpg" width="500">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image responsive-img materialboxed" src="images/1-170-min.jpg" width="500">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image responsive-img materialboxed" src="images/1-263-min.jpg" width="500">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image responsive-img materialboxed" src="images/IMG-20170306-WA0038-min.jpg" width="500">
          </div>
          <!--EndVideo Item-->

        </div>
        <!--End Video Items-->

        <!--Video Link-->
        <a class="video__link" href="/gallery">Больше фотографий <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
        <!--End Video Link-->

      </div>
    </div>
    <img class="responsive-img hide-on-med-and-down" src="images/skew-bottom.svg" width="100%" alt="">
    <!--End Video-->

    <!--Contact Form-->
    <div class="contact-us container">

      <!--Contact Form Title-->
      <h2 class="center contact-us__title">Оставьте заявку</h2>
      <p class="flow-text center contact-us__subtitle">В ближайшее время мы свяжемся с вами</p>
      <!--End Contact Form Title-->

      <!--Contact Form form-->
      <form action="/mail" method="post">
        <div class="row">

          <!--Contact Form Item-->
          <div class="col-md-12">
            <div class="input-field">
              <?php echo e(csrf_field()); ?>

              <input id="tel" type="tel" required name="phone">
              <label for="tel" data-error="wrong" data-success="right">Ваш номер телефона</label>
            </div>
          </div>
          <!--End Contact Form Item-->

          <!--Contact Form Button-->
          <div class="col-12 center">
            <button class="contact-us__button" name="goSend" type="submit">Отправить</button>
          </div>
          <!--End Contact Form Button-->

        </div>
      </form>
    </div>
  </main>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>