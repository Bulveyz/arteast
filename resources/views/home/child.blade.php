@extends('layouts.main')

@section('content')
  <br><br><br><br>
  <ul class="tabs col-12 tab-demo">
    <li class="tab"><a class="active" href="#tab1"><h5 class="flow-text">Contemporary</h5></a></li>
    <li class="tab"><a href="#tab2"><h5 class="flow-text">Hip-Hop</h5></a></li>
    <li class="tab"><a href="#tab3"><h5 class="flow-text">Chore</h5></a></li>
  </ul>

  <div class="container">
    <div class="row">
        <div class="col-12" id="tab1">
          <table class="responsive-table highlight">
            <thead>
            <tr>
              <th>Дни</th>
              <th>Время</th>
            </tr>
            </thead>

            <tbody>
            <tr>
              <th>Понедельник</th>
              <th>11:30</th>
            </tr>
            <tr>
              <th>Вторник</th>
              <th>12:30</th>
            </tr>
            <tr>
              <th>Среда</th>
              <th>15:30</th>
            </tr>
            <tr>
              <th>Четверг</th>
              <th>16:30</th>
            </tr>
            <tr>
              <th>Пятница</th>
              <th>17:30</th>
            </tr>
            <tr>
              <th>Суббота</th>
              <th>11:30</th>
            </tr>
            <tr>
              <th>Воскресенье</th>
              <th>11:00</th>
            </tr>
            </tbody>
          </table>
        </div>
        <div class="col-12" id="tab2">
          <table class="responsive-table highlight">
            <thead>
            <tr>
              <th>Дни</th>
              <th>Время</th>
            </tr>
            </thead>

            <tbody>
            <tr>
              <th>Понедельник</th>
              <th>11:30</th>
            </tr>
            <tr>
              <th>Вторник</th>
              <th>12:30</th>
            </tr>
            <tr>
              <th>Среда</th>
              <th>19:30</th>
            </tr>
            <tr>
              <th>Четверг</th>
              <th>16:30</th>
            </tr>
            <tr>
              <th>Пятница</th>
              <th>17:30</th>
            </tr>
            <tr>
              <th>Суббота</th>
              <th>18:30</th>
            </tr>
            <tr>
              <th>Воскресенье</th>
              <th>10:00</th>
            </tr>
            </tbody>
          </table>
      </div>
        <div class="col-12" id="tab3">
          <table class="responsive-table highlight">
            <thead>
            <tr>
              <th>Дни</th>
              <th>Время</th>
            </tr>
            </thead>

            <tbody>
            <tr>
              <th>Понедельник</th>
              <th>11:30</th>
            </tr>
            <tr>
              <th>Вторник</th>
              <th>12:30</th>
            </tr>
            <tr>
              <th>Среда</th>
              <th>15:30</th>
            </tr>
            <tr>
              <th>Четверг</th>
              <th>18:30</th>
            </tr>
            <tr>
              <th>Пятница</th>
              <th>13:30</th>
            </tr>
            <tr>
              <th>Суббота</th>
              <th>15:30</th>
            </tr>
            <tr>
              <th>Воскресенье</th>
              <th>09:00</th>
            </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection