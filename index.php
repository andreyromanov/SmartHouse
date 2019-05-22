<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">

  <title>SMART Будинок!</title>
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col-sm">
      </div>
      <div class="col-md-10 border rounded mt-3 pb-3 mb-3">
        <h1 class="text-center mb-5 mt-3">Система керування розумним будинком!</h1>
        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Вікна та двері</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Температура то вологість</a>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
           <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Кімната</th>
                <th scope="col">Статус</th>
                <th scope="col">Дія</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1-24</td>
                <td><input class="form-check-input" type="radio" name="d1" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="d1" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>1-24</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>1-25</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>1-26</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>1-29</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>1-30</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>1-30</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>1-32</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>1-33</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">10</th>
                <td>1-33</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">11</th>
                <td>1-33</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">12</th>
                <td>1-34</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">13</th>
                <td>1-34</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
              <tr>
                <th scope="row">14</th>
                <td>1-36</td>
                <td><input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label>ON</label>
                  <input class="form-check-input ml-4" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="ml-5">OFF</label>
                </td>
                <td><button class="btn btn-success">SEND</button></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Кімната</th>
                <th scope="col">Температура</th>
                <th scope="col">Вологість</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td>1-24</td>
                <td>20°C</td>
                <td>45%</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>1-25</td>
                <td>23°C</td>
                <td>43%</td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td>1-26</td>
                <td>21°C</td>
                <td>45%</td>
              </tr>
              <tr>
                <th scope="row">4</th>
                <td>1-27</td>
                <td>20°C</td>
                <td>41%</td>
              </tr>
              <tr>
                <th scope="row">5</th>
                <td>1-29</td>
                <td>23°C</td>
                <td>44%</td>
              </tr>
              <tr>
                <th scope="row">6</th>
                <td>1-30</td>
                <td>19°C</td>
                <td>42%</td>
              </tr>
              <tr>
                <th scope="row">7</th>
                <td>1-32</td>
                <td>22°C</td>
                <td>45%</td>
              </tr>
              <tr>
                <th scope="row">8</th>
                <td>1-32</td>
                <td>20°C</td>
                <td>43%</td>
              </tr>
              <tr>
                <th scope="row">9</th>
                <td>1-34</td>
                <td>19°C</td>
                <td>47%</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <h3 class="text-center mt-5">Схема будинку</h3>
      <img class="rounded mx-auto d-block img-plan pt-3 pl-3 pr-3" src="plan.jpg">

    </div>
    <div class="col-sm">

    </div>
  </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>