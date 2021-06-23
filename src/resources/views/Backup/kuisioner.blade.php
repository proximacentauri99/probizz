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

</head>
<body>
    <div class="level0">
        <h2>Level0</h2>
        @php $counter = 1; @endphp
        @foreach($daftarPertanyaan['level0'] as $pertanyaan)
            <div class="group-pertanyaan">
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
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
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
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
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
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
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
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
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
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
                {{$counter}}. Pertanyaan : {{$pertanyaan->pertanyaan}}
                <div class="group-jawaban">
                    <input type="radio"  name="{{$pertanyaan->id}}" value="0"><span>Tidak sama sekali</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="33"><span>Sedikit</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="66"><span>Hampir</span><br>
                    <input type="radio"  name="{{$pertanyaan->id}}" value="100"><span>Sepenuhnya</span><br>
                </div>
            </div>
            <br>
            @php $counter += 1; @endphp
        @endforeach
    </div>

    <div>
        <button id="btn-hitung-hasil" type="button">Hitung Hasil</button>
    </div>

    <div class="hasil">
        <p>Maturity model : <span class="maturity-value">?</span></p>
    </div>

    <div class="detail-report">

    </div>

    <div>
        <input type="hidden" id="jumlah_level0" name="jumlah_level0" value="{{$daftarPertanyaan['jumlah_level0']}}">
        <input type="hidden" id="jumlah_level1" name="jumlah_level1" value="{{$daftarPertanyaan['jumlah_level1']}}">
        <input type="hidden" id="jumlah_level2" name="jumlah_level2" value="{{$daftarPertanyaan['jumlah_level2']}}">
        <input type="hidden" id="jumlah_level3" name="jumlah_level3" value="{{$daftarPertanyaan['jumlah_level3']}}">
        <input type="hidden" id="jumlah_level4" name="jumlah_level4" value="{{$daftarPertanyaan['jumlah_level4']}}">
        <input type="hidden" id="jumlah_level5" name="jumlah_level5" value="{{$daftarPertanyaan['jumlah_level5']}}">
    </div>

    <!-- Script -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
        $(function(){
            console.log('document ready');
            function hitungMaturity()
            {
                var sumLevel0 = 0;
                var jumlahPertanyaanLevel0 = 0;
                $('.level0').children('.group-pertanyaan').each(function () {
                    sumLevel0 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel0 += 1;
                });
                if(jumlahPertanyaanLevel0 != $('#jumlah_level0').val()) return false;

                var sumLevel1 = 0;
                var jumlahPertanyaanLevel1 = 0;
                $('.level1').children('.group-pertanyaan').each(function () {
                    sumLevel1 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel1 += 1;
                });
                if(jumlahPertanyaanLevel1 != $('#jumlah_level1').val()) return false;

                var sumLevel2 = 0;
                var jumlahPertanyaanLevel2 = 0;
                $('.level2').children('.group-pertanyaan').each(function () {
                    sumLevel2 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel2 += 1;
                });
                if(jumlahPertanyaanLevel2 != $('#jumlah_level2').val()) return false;

                var sumLevel3 = 0;
                var jumlahPertanyaanLevel3 = 0;
                $('.level3').children('.group-pertanyaan').each(function () {
                    sumLevel3 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel3 += 1;
                });
                if(jumlahPertanyaanLevel3 != $('#jumlah_level3').val()) return false;

                var sumLevel4 = 0;
                var jumlahPertanyaanLevel4 = 0;
                $('.level4').children('.group-pertanyaan').each(function () {
                    sumLevel4 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel4 += 1;
                });
                if(jumlahPertanyaanLevel4 != $('#jumlah_level4').val()) return false;

                var sumLevel5 = 0;
                var jumlahPertanyaanLevel5 = 0;
                $('.level5').children('.group-pertanyaan').each(function () {
                    sumLevel5 +=  parseFloat($('.group-jawaban input:checked', this).val());
                    jumlahPertanyaanLevel5 += 1;
                });
                if(jumlahPertanyaanLevel5 != $('#jumlah_level5').val()) return false;

                var tingkatCompliance0 = sumLevel0 / jumlahPertanyaanLevel0;
                var tingkatCompliance1 = sumLevel1 / jumlahPertanyaanLevel1;
                var tingkatCompliance2 = sumLevel2 / jumlahPertanyaanLevel2;
                var tingkatCompliance3 = sumLevel3 / jumlahPertanyaanLevel3;
                var tingkatCompliance4 = sumLevel4 / jumlahPertanyaanLevel4;
                var tingkatCompliance5 = sumLevel5 / jumlahPertanyaanLevel5;
                var totalCompliance = tingkatCompliance0 + tingkatCompliance1 + tingkatCompliance2 + tingkatCompliance3 + tingkatCompliance4 + tingkatCompliance5;

                // console.log(totalCompliance);

                var normalCompliance0 = tingkatCompliance0 / totalCompliance;
                var normalCompliance1 = tingkatCompliance1 / totalCompliance;
                var normalCompliance2 = tingkatCompliance2 / totalCompliance;
                var normalCompliance3 = tingkatCompliance3 / totalCompliance;
                var normalCompliance4 = tingkatCompliance4 / totalCompliance;
                var normalCompliance5 = tingkatCompliance5 / totalCompliance;


                var maturityValue = (normalCompliance0 * 0) + (normalCompliance1 * 1) + (normalCompliance2 * 2) + (normalCompliance3 * 3) + (normalCompliance4 * 4) + (normalCompliance5 * 5);

                return maturityValue;
            }


            $('.group-jawaban input').change(function(){
                console.log('loading...');
                var maturityValue = hitungMaturity();
                if(maturityValue == false)
                {
                    console.log("jumlah pertanyaan tidak sama");
                } else {
                    console.log("maturitynya adalah: " + maturityValue);
                    $('.maturity-value').text(maturityValue);
                }
                console.log('selesai');

            });

        });

    </script>

</body>
</html>
