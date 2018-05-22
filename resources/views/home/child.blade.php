@extends('layouts.main')

@section('content')
  <br><br><br><br>
  <div class="container">
    <ul class="tabs col-12 tab-demo">
      <li class="tab"><a class="active" href="#tab1"><h5 class="flow-text">Contemporary</h5></a></li>
      <li class="tab"><a href="#tab2"><h5 class="flow-text">Hip-Hop chore</h5></a></li>
    </ul>
  </div>

  <div class="container">
    <div class="row">
        <div class="col-12" id="tab1">
          <h3>Мадина</h3>
          <div class="row">
            <div class="col-md-6">
              <h5>Младшая группа</h5>
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
                  <th>19:00 - 20:00</th>
                </tr>
                <tr>
                  <th>Среда</th>
                  <th>19:00 - 20:00</th>
                </tr>
                <tr>
                  <th>Пятница</th>
                  <th>19:00 - 20:00</th>
                </tr>
                </tbody>
              </table>
            </div>
            <div class="col-md-6">
              <h5>Старшая группа</h5>
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
                  <th>20:00 - 21:30</th>
                </tr>
                <tr>
                  <th>Среда</th>
                  <th>20:00 - 21:30</th>
                </tr>
                <tr>
                  <th>Пятница</th>
                  <th>20:00 - 21:30</th>
                </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="col-12" id="tab2">
        
        </div>
      </div>
    </div>
  <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
@endsection