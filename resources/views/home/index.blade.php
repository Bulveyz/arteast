@extends('layouts.main')

@section('content')
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

        <!--Services Image-->
        <div class="col-md-6">
          {{--<img class="responsive-img" src="DSC08836.jpg" width="400" height="400" data-aos="fade-right">--}}
        </div>
        <!--End Services Image-->

        <!--Services Text-->
        <div class="col-md-6 service__item">
          <h2>О Нас</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias commodi consectetur corporis culpa cumque delectus, distinctio dolorum eaque ex exercitationem harum inventore, ipsum iure mollitia nisi praesentium quas temporibus!</p>
          <a class="service__links" href="/team">Подробнее</a>
        </div>
        <!--End Services Text-->

        <!--Services Text-->
        <div class="col-md-6 service__item">
          <h2>Наши Проекты</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A alias commodi consectetur corporis culpa cumque delectus, distinctio dolorum eaque ex exercitationem harum inventore, ipsum iure mollitia nisi praesentium quas temporibus!</p>
          <a class="service__links" href="/workshop">Подробнее</a>
        </div>
        <!--End Services Text-->

        <!--Services Image-->
        <div class="col-md-6 service__item">
          <img class="responsive-img" src="http://fakeimg.pl/400/" data-aos="fade-left">
        </div>
        <!--End Services Image-->

      </div>
    </div>
    <!--End Services-->

    <!--Video-->
    <img class="skew-top responsive-img hide-on-med-and-down" src="images/skew-top.svg" width="100%" alt="">
    <div class="video">
      <div class="center">

        <!--Video Title-->
        <h2 class="video__title">Видео</h2>
        <!--End Video Title-->

        <!--Video Items-->
        <div class="video__container d-flex justify-content-center flex-wrap">

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image" src="http://fakeimg.pl/200/">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image" src="http://fakeimg.pl/200/">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image" src="http://fakeimg.pl/200/">
          </div>
          <!--End Video Item-->

          <!--Video Item-->
          <div class="video__item">
            <img class="about__big-image" src="http://fakeimg.pl/200/">
          </div>
          <!--EndVideo Item-->

        </div>
        <!--End Video Items-->

        <!--Video Link-->
        <a class="video__link" href="#">Больше Видео <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
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
              {{csrf_field()}}
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
@endsection