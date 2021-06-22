<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Probizz - Form Survey</title>
    
    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">
    
    <!-- FONT -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">

</head>
<body>
   <!-- CONTAINER -->
   <div class="container d-flex align-items-center min-vh-100">
      <div class="row g-0 justify-content-center">
          <!-- TITLE -->
          <div class="col-lg-4 offset-lg-1 mx-0 px-0">
              <div id="title-container">
                  <img class="covid-image" src="{{ asset('img/working.png')}}">
                  <h2>Probizz</h2>
                  <h3>Survey Maturity Level</h3>
                  <p>Sebuah platform untuk menentukan maturity level sebuah badan, lembaga atau perusahaan yang menekankan pada output stakeholder masing-masing</p>
              </div>
          </div>
          <!-- FORMS -->
          <div class="col-lg-7 mx-0 px-0">
              <div class="progress">
                  <div aria-valuemax="100" aria-valuemin="0" aria-valuenow="50" class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" style="width: 0%"></div>
              </div>
              <div id="qbox-container">
                  <form class="needs-validation" id="form-wrapper" method="post" name="form-wrapper" novalidate="">
                      <div id="steps-container">
                          <div class="step">
                              <h4>Data Diri</h4>
                              <div class="ps-0 q-box">
                                  <div class="q-box__question">
                                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama anda..">
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Data perusahaan</h4>
                              <div class="ps-0 q-box">
                                  <div class="q-box__question">
                                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nama perusahaan..">
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Data Stakeholder</h4>
                              <div class="ps-0 q-box">
                                  <div class="q-box__question">
                                       <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Stakeholder tujuan..">
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Beritahu kami tentang proses bisnis yang sedang anda pikirkan untuk perusahaan anda saat ini </h4>
                              <div class="form-check ps-0 q-box">
                                <!-- Example split danger button -->
                                <div class="row">
                                <div class="col-md-3"><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Finansial
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Penyediaan return yang optimal</a>
                                        <a class="dropdown-item" href="#">Manajemen resiko bisnis</a>
                                        <a class="dropdown-item" href="#">Meningkatkan Transparansi</a>
                                    </div>
                                    </div></div>
                                    <div class="col-md-3"><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Customer
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Meningkatkan orientasi pelanggan</a>
                                        <a class="dropdown-item" href="#">Menawarkan produk kompetitif </a>
                                        <a class="dropdown-item" href="#">Menetapkan pelayanan berkelanjutan</a>
                                        <a class="dropdown-item" href="#">Meningkatkan ketangkasan respon </a>
                                        <a class="dropdown-item" href="#">Memperoleh optimasi harga</a>
                                        <a class="dropdown-item" href="#">Mendapatkan informasi yang tepat</a>
                                    </div>
                                    </div></div>
                                    <div class="col-md-3"><div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Internal
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Memelihara proses bisnis</a>
                                        <a class="dropdown-item" href="#">Mengurangi biaya proses</a>
                                        <a class="dropdown-item" href="#">Menetapkan peraturan</a>
                                        <a class="dropdown-item" href="#">Menetapkan kebijakan internal</a>
                                        <a class="dropdown-item" href="#">Mengatur perubahan bisnis</a>
                                        <a class="dropdown-item" href="#">Memelihara operasional</a>
                                    </div>
                                    </div></div>
                                <div class="col-md-3"> <div class="dropdown">
                                    <button class="btn btn-secondary dropdown-toggle btn-danger" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                         Growth
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Inovasi produk</a>
                                        <a class="dropdown-item" href="#">Memelihara skill</a>
                                    </div>
                                    </div></div>
                                </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Are you experiencing a high fever, dry cough, tiredness and loss of taste or smell?</h4>
                              <div class="form-check ps-0 q-box">
                                  <div class="q-box__question">
                                      <input class="form-check-input question__input" id="q_2_yes" name="q_2" type="radio" value="Yes"> 
                                      <label class="form-check-label question__label" for="q_2_yes">Yes</label>
                                  </div>
                                  <div class="q-box__question">
                                      <input checked class="form-check-input question__input" id="q_2_no" name="q_2" type="radio" value="No"> 
                                      <label class="form-check-label question__label" for="q_2_no">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Are you experiencing a high fever, dry cough, tiredness and loss of taste or smell?</h4>
                              <div class="form-check ps-0 q-box">
                                  <div class="q-box__question">
                                      <input class="form-check-input question__input" id="q_2_yes" name="q_2" type="radio" value="Yes"> 
                                      <label class="form-check-label question__label" for="q_2_yes">Yes</label>
                                  </div>
                                  <div class="q-box__question">
                                      <input checked class="form-check-input question__input" id="q_2_no" name="q_2" type="radio" value="No"> 
                                      <label class="form-check-label question__label" for="q_2_no">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Are you having diarrhoea, stomach pain, conjunctivitis, vomiting and headache?</h4>
                              <div class="form-check ps-0 q-box">
                                  <div class="q-box__question">
                                      <input class="form-check-input question__input" id="q_3_yes" name="q_3" type="radio" value="Yes"> 
                                      <label class="form-check-label question__label" for="q_3_yes">Yes</label>
                                  </div>
                                  <div class="q-box__question">
                                      <input checked class="form-check-input question__input" id="q_3_no" name="q_3" type="radio" value="No"> 
                                      <label class="form-check-label question__label" for="q_3_no">No</label>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Have you traveled to any of these countries with the highest number of COVID-19 cases in the world for the past 2 weeks?</h4>
                              <div class="row">
                                  <div class="col-lg-6">
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input q-checkbox" id="q_4_uk" name="q_4" type="checkbox" value="uk"> 
                                              <label class="form-check-label question__label" for="q_4_uk">UK</label>
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_us" name="q_4" type="checkbox" value="us"> 
                                              <label class="form-check-label question__label" for="q_4_us">US</label>
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_br" name="q_3" type="checkbox" value="br"> 
                                              <label class="form-check-label question__label" for="q_4_br">Brazil</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-6">
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_de" name="q_4" type="checkbox" value="de"> 
                                              <label class="form-check-label question__label" for="q_4_de">Germany</label>
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_in" name="q_4" type="checkbox" value="in"> 
                                              <label class="form-check-label question__label" for="q_4_in">India</label>
                                          </div>
                                      </div>
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_eu" name="q_4" type="checkbox" value="eu"> 
                                              <label class="form-check-label question__label" for="q_4_eu">Europe</label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-lg-12">
                                      <div class="form-check ps-0 q-box">
                                          <div class="q-box__question">
                                              <input class="form-check-input question__input" id="q_4_none" name="q_4" type="checkbox" value="none"> 
                                              <label class="form-check-label question__label" for="q_4_none">I did not travelled to any of these countries</label>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Are you experiencing any of these serious symptoms of COVID-19 below?</h4>
                              <div class="row">
                                  <div class="form-check ps-0 q-box">
                                      <div class="q-box__question">
                                          <input class="form-check-input question__input" id="q_5_breathing" name="q_5_breathing" type="checkbox" value="breathing"> 
                                          <label class="form-check-label question__label" for="q_5_breathing">Difficulty breathing or shortness of breath</label>
                                      </div>
                                  </div>
                                  <div class="form-check ps-0 q-box">
                                      <div class="q-box__question">
                                          <input class="form-check-input question__input" id="q_5_chest" name="q_5_chest" type="checkbox" value="chest pain"> 
                                          <label class="form-check-label question__label" for="q_5_chest">Chest pain or pressure</label>
                                      </div>
                                  </div>
                                  <div class="form-check ps-0 q-box">
                                      <div class="q-box__question">
                                          <input class="form-check-input question__input" id="q_5_speech" name="q_5_speech" type="checkbox" value="speech problem"> 
                                          <label class="form-check-label question__label" for="q_5_speech">Loss of speech or movement</label>
                                      </div>
                                  </div>
                                  <div class="form-check ps-0 q-box">
                                      <div class="q-box__question">
                                          <input class="form-check-input question__input" id="q_5_pale" name="q_5_pale" type="checkbox" value="pale"> 
                                          <label class="form-check-label question__label" for="q_5_pale">Pale, gray or blue-colored skin, lips or nail beds</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <h4>Provide us with your personal information</h4>
                              <div class="mt-1">
                                  <label class="form-label">Complete Name:</label> 
                                  <input class="form-control" id="full_name" name="full_name" type="text">
                              </div>
                              <div class="mt-2">
                                  <label class="form-label">Complete Address:</label> 
                                  <input class="form-control" id="address" name="address" type="text">
                              </div>
                              <div class="mt-2">
                                  <label class="form-label">Email:</label> 
                                  <input class="form-control" id="email" name="email" type="email">
                              </div>
                              <div class="mt-2">
                                  <label class="form-label">Phone / Mobile Number:</label> 
                                  <input class="form-control" id="phone" name="phone" type="text">
                              </div>
                              <div class="row mt-2">
                                  <div class="col-lg-2 col-md-2 col-3">
                                      <label class="form-label">Age:</label>
                                      <div class="input-container">
                                          <input class="form-control" id="age" name="age" type="text">
                                      </div>
                                  </div>
                                  <div class="col-lg-8">
                                      <div id="input-container">
                                          <input class="form-check-input" name="gender" type="radio" value="male"> 
                                          <label class="form-check-label radio-lb">Male</label> 
                                          <input class="form-check-input" name="gender" type="radio" value="female"> 
                                          <label class="form-check-label radio-lb">Female</label> 
                                          <input checked class="form-check-input" name="gender" type="radio" value="undefined"> 
                                          <label class="form-check-label radio-lb">Rather not say</label>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <div class="step">
                              <div class="mt-1">
                                  <div class="closing-text">
                                      <h4>That's about it! Stay healthy!</h4>
                                      <p>We will assess your information and will let you know soon if you need to get tested for COVID-19.</p>
                                      <p>Click on the submit button to continue.</p>
                                  </div>
                              </div>
                          </div>
                          <div id="success">
                              <div class="mt-5">
                                  <h4>Success! We'll get back to you ASAP!</h4>
                                  <p>Meanwhile, clean your hands often, use soap and water, or an alcohol-based hand rub, maintain a safe distance from anyone who is coughing or sneezing and always wear a mask when physical distancing is not possible.</p>
                                  <a class="back-link" href="">Go back from the beginning ➜</a>
                              </div>
                          </div>
                      </div>
                      <div id="q-box__buttons">
                          <button id="prev-btn" type="button">Previous</button> 
                          <button id="next-btn" type="button">Next</button> 
                          <button id="submit-btn" type="submit">Submit</button>
                      </div>
                  </form>
              </div>
          </div>
      </div>
  </div><!-- PRELOADER -->
  <div id="preloader-wrapper">
      <div id="preloader"></div>
      <div class="preloader-section section-left"></div>
      <div class="preloader-section section-right"></div>
  </div>
   <script src="{{ asset('js/script.js')}}"></script>
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    
</body>
</html>
