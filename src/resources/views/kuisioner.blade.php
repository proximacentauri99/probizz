<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Kuisioner</title>

    <!-- CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" type="text/css">

	<!-- FONT -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
</head>
<body>
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
                <div id="qbox-container">
    <div class="level0">
        <h2>Level0</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level0'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>
    <hr>
    <div class="level1">
        <h2>Level1</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level1'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>
    <hr>
    <div class="level2">
        <h2>Level2</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level2'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>
    <hr>
    <div class="level3">
        <h2>Level3</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level3'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>
    <hr>
    <div class="level4">
        <h2>Level4</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level4'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>
    <hr>
    <div class="level5">
        <h2>Level5</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level5'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : <span class="teks-pertanyaan">{{$pertanyaan->pertanyaan}}</span>
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0.66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="1"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>

    <div>
        <button id="btn-hitung-hasil" type="button">Hitung Hasil</button>
    </div>

    <div class="detail-report">
        <div class="hasil" style="border: #0a53be">
        </div>
    </div>

    <div>
        <input type="hidden" id="jumlah_level0" name="jumlah_level0" value="{{$daftarPertanyaan['jumlah_level0']}}">
        <input type="hidden" id="jumlah_level1" name="jumlah_level1" value="{{$daftarPertanyaan['jumlah_level1']}}">
        <input type="hidden" id="jumlah_level2" name="jumlah_level2" value="{{$daftarPertanyaan['jumlah_level2']}}">
        <input type="hidden" id="jumlah_level3" name="jumlah_level3" value="{{$daftarPertanyaan['jumlah_level3']}}">
        <input type="hidden" id="jumlah_level4" name="jumlah_level4" value="{{$daftarPertanyaan['jumlah_level4']}}">
        <input type="hidden" id="jumlah_level5" name="jumlah_level5" value="{{$daftarPertanyaan['jumlah_level5']}}">
        <input type="hidden" id="level_wanted" name="level_wanted" value="{{$daftarPertanyaan['level_wanted']}}">
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(function(){
            console.log('document ready');

            function createReport(maturityValue, currentLevel, levelWanted, selisihMaturity, jawaban0, jawaban1, jawaban2)
            {
                var reportElement = "";
                reportElement += `<p>Maturity model : <span class="maturity-value">${maturityValue}</span></p>`;
                reportElement += `<p>Level anda saat ini: <span class="current-maturity-level">${currentLevel}</span></p>`;
                reportElement += `<p>Level yang anda inginkan: <span>${levelWanted}</span></p>`;
                reportElement += `<p>Selisih nilai maturyity saat ini dengan yang akan datang adalah: <span class="selisih-maturity">${selisihMaturity}</span></p>`;
                reportElement += `<p>Pertanyaan yang dijawab dengan jawaban tidak sama sekali: </p>`;
                reportElement += `<ul>`;
                var i = 0;
                for(i = 0; i < jawaban0.length; i++)
                {
                    reportElement += `<li>${jawaban0[i]}</li>`;
                }
                reportElement += `</ul>`;

                reportElement += `<p>Pertanyaan yang dijawab dengan jawaban kurang: </p>`;
                reportElement += `<ul>`;
                for(i = 0; i < jawaban1.length; i++)
                {
                    reportElement += `<li>${jawaban1[i]}</li>`;
                }
                reportElement += `</ul>`;

                reportElement += `<p>Pertanyaan yang dijawab dengan jawaban hampir: </p>`;
                reportElement += `<ul>`;
                for(i = 0; i < jawaban2.length; i++)
                {
                    reportElement += `<li>${jawaban2[i]}</li>`;
                }
                reportElement += `</ul>`;


                return reportElement;
            }

            function hitungMaturity()
            {
                var jawaban0 = [];
                var jawaban1 = [];
                var jawaban2 = [];
                var jawaban3 = [];


                var sumLevel0 = 0;
                var jumlahPertanyaanLevel0 = 0;
                $('.level0').children('.group-pertanyaan').each(function () {
                    sumLevel0 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel0 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;

                    }
                });
                if(jumlahPertanyaanLevel0 != $('#jumlah_level0').val()) return false;

                var sumLevel1 = 0;
                var jumlahPertanyaanLevel1 = 0;
                $('.level1').children('.group-pertanyaan').each(function () {
                    sumLevel1 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel1 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;
                    }
                });
                if(jumlahPertanyaanLevel1 != $('#jumlah_level1').val()) return false;

                var sumLevel2 = 0;
                var jumlahPertanyaanLevel2 = 0;
                $('.level2').children('.group-pertanyaan').each(function () {
                    sumLevel2 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel2 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;

                    }
                });
                if(jumlahPertanyaanLevel2 != $('#jumlah_level2').val()) return false;

                var sumLevel3 = 0;
                var jumlahPertanyaanLevel3 = 0;
                $('.level3').children('.group-pertanyaan').each(function () {
                    sumLevel3 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel3 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;

                    }
                });
                if(jumlahPertanyaanLevel3 != $('#jumlah_level3').val()) return false;

                var sumLevel4 = 0;
                var jumlahPertanyaanLevel4 = 0;
                $('.level4').children('.group-pertanyaan').each(function () {
                    sumLevel4 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel4 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;

                    }
                });
                if(jumlahPertanyaanLevel4 != $('#jumlah_level4').val()) return false;

                var sumLevel5 = 0;
                var jumlahPertanyaanLevel5 = 0;
                $('.level5').children('.group-pertanyaan').each(function () {
                    sumLevel5 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel5 += 1;

                    var nilai = parseFloat($('.group-jawaban input:checked', this).val());
                    switch (nilai){
                        case 0:
                            jawaban0.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.33:
                            jawaban1.push($('.teks-pertanyaan', this).text());
                            break;
                        case 0.66:
                            jawaban2.push($('.teks-pertanyaan', this).text());
                            break;
                        case 1:
                            jawaban3.push($('.teks-pertanyaan', this).text());
                            break;

                    }
                });
                if(jumlahPertanyaanLevel5 != $('#jumlah_level5').val()) return false;

                var tingkatCompliance0 = sumLevel0 / jumlahPertanyaanLevel0;
                var tingkatCompliance1 = sumLevel1 / jumlahPertanyaanLevel1;
                var tingkatCompliance2 = sumLevel2 / jumlahPertanyaanLevel2;
                var tingkatCompliance3 = sumLevel3 / jumlahPertanyaanLevel3;
                var tingkatCompliance4 = sumLevel4 / jumlahPertanyaanLevel4;
                var tingkatCompliance5 = sumLevel5 / jumlahPertanyaanLevel5;
                var totalCompliance = tingkatCompliance0 + tingkatCompliance1 + tingkatCompliance2 + tingkatCompliance3 + tingkatCompliance4 + tingkatCompliance5;

                console.log(totalCompliance);

                var normalCompliance0 = tingkatCompliance0 / totalCompliance;
                var normalCompliance1 = tingkatCompliance1 / totalCompliance;
                var normalCompliance2 = tingkatCompliance2 / totalCompliance;
                var normalCompliance3 = tingkatCompliance3 / totalCompliance;
                var normalCompliance4 = tingkatCompliance4 / totalCompliance;
                var normalCompliance5 = tingkatCompliance5 / totalCompliance;
                console.log(normalCompliance0 + normalCompliance1 + normalCompliance2 + normalCompliance3 + normalCompliance4 + normalCompliance5);


                var maturityValue = (normalCompliance0 * 0) + (normalCompliance1 * 1) + (normalCompliance2 * 2) + (normalCompliance3 * 3) + (normalCompliance4 * 4) + (normalCompliance5 * 5);

                if(isNaN(maturityValue)) return false;
                console.log(maturityValue);
                return [maturityValue, jawaban0, jawaban1, jawaban2, jawaban3];
            }

            function hitungSelisihMaturity(maturityValue, levelWanted)
            {

                switch (parseInt(levelWanted)) {
                    case 0:
                        return 0 - maturityValue;
                        break;
                    case 1:
                        return 0.1 - maturityValue;
                        break;
                    case 2:
                        return 1.1 - maturityValue;
                        break;
                    case 3:
                        return 2.1 - maturityValue;
                        break;
                    case 4:
                        return 3.1 - maturityValue;
                        break;
                    case 5:
                        return 4.1 - maturityValue;
                        break;
                    default:
                        return maturityValue - maturityValue;
                }
            }

            function hitungLevelMaturity(maturityValue)
            {
                maturityValue = parseFloat(maturityValue);
                if (maturityValue < 0) {
                    return false
                } else if(maturityValue < 0.1) {
                    return 0;
                } else if (maturityValue < 1.1) {
                    return 1;
                } else if (maturityValue < 2.1) {
                    return 2;
                } else if (maturityValue < 3.1) {
                    return 3;
                } else if (maturityValue < 4.1) {
                    return 4;
                } else {
                    return 5;
                }
            }

            $('#btn-hitung-hasil').click(function(){
                console.log('loading...');
                var result = hitungMaturity();
                if(result == false)
                {
                    console.log("jumlah pertanyaan tidak sama");
                    $('.hasil').empty();
                    $('.hasil').append('<span> Silahkan lengkapi survey terlebih dahulu. </span>');
                } else {
                    var maturityValue = result[0];
                    console.log("maturitynya adalah: " + maturityValue);
                    $('.maturity-value').text(maturityValue);
                    var currentLevel = hitungLevelMaturity(maturityValue);
                    if(currentLevel != false)
                    {
                        var levelWanted = parseInt($('#level_wanted').val());
                        var selisihMaturity = hitungSelisihMaturity(parseFloat(maturityValue), levelWanted);
                        if(selisihMaturity < 0)
                        {
                            selisihMaturity = 0;
                        }
                        var reportElement = createReport(maturityValue, currentLevel, levelWanted, selisihMaturity, result[1], result[2], result[3]);
                        $('.hasil').empty();
                        $('.hasil').append(reportElement);
                    }
                }
                console.log('selesai');
            });

        });

    </script>
</div>
            </div>
        </div>
    </div>

</body>
</html>
