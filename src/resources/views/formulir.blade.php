<!-- Business Goals -->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="_token" content="{{csrf_token()}}" />
    <title>Formulir Awal</title>
</head>

<body>

    <h2>Select Business Goal</h2>
    <select name="business-goals" id="select-business-goal">
        <option value=""></option>
    </select>

    <br>

    <h2>Select Stakeholder</h2>
    <select name="stakeholder" id="select-stakeholder">
        <option value=""></option>
    </select>

    <br>

    <h2>Select IT Goals</h2>
    <select name="it-goal" id="select-it-goal">
        <option value=""></option>
    </select>

    <br>

    <form action="{{route('kuisioner')}}" method="get">
        <h2>Select IT Process</h2>
        <select name="it_process" id="select-it-process" required>
            <option value=""></option>
        </select>
        <h2>Level yang diinginkan</h2>
        <select name="level_wanted" id="select-it-process" required>
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
        </select>
        <button type="submit">Tampilkan kuisioner</button>
    </form>




    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>

        $(function(){
           'use strict'

            function loadBusinessGoals()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('getBusinessGoals')}}",
                    method: 'get',
                    data: {
                    },
                    beforeSend: function() {
                        console.log('loading business goal');
                    },
                    success: function(result) {
                        // trigger.removeClass('d-flex justify-content-center');
                        if(result.success) {
                            // console.log(result.data);
                            var daftarBusinessGoals = JSON.parse(result.data);
                            var i;
                            var optionElement = "";
                            optionElement += `<option value=""> Pilih salah satu</option>`;
                            console.log(daftarBusinessGoals);
                            for (i=0; i< daftarBusinessGoals.length; i++)
                            {
                                optionElement += `<option value="${daftarBusinessGoals[i].id}">${daftarBusinessGoals[i].business_goals}</option>`;

                            }
                            $('#select-business-goal').empty();
                            $('#select-business-goal').append(optionElement);
                        } else {
                            console.log("ERROR AJAX GET BUSINESS GOAL");
                        }
                    },
                    complete: function(){
                    }
                });
            }

            function loadStakeholder()
            {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                    }
                });
                $.ajax({
                    url:"{{route('getStakeholder')}}",
                    method: 'get',
                    data: {
                    },
                    beforeSend: function() {
                        console.log('loading stakeholder');
                    },
                    success: function(result) {
                        // trigger.removeClass('d-flex justify-content-center');
                        if(result.success) {
                            // console.log(result.data);
                            var daftarStakeholder = JSON.parse(result.data);
                            var i;
                            var optionElement = "";
                            optionElement += `<option value=""> Pilih salah satu</option>`;
                            console.log(daftarStakeholder);
                            for (i=0; i< daftarStakeholder.length; i++)
                            {
                                optionElement += `<option value="${daftarStakeholder[i].id}">${daftarStakeholder[i].jabatan_stakeholder}</option>`;

                            }
                            $('#select-stakeholder').empty();
                            $('#select-stakeholder').append(optionElement);
                        } else {
                            console.log("ERROR AJAX GET BUSINESS GOAL");
                        }
                    },
                    complete: function(){
                    }
                });
            }

            loadBusinessGoals();
           loadStakeholder();

           $('#select-business-goal').change(function (){
               var idBusinessGoal = $(this).val();
               console.log($(this).val());
               $.ajaxSetup({
                   headers: {
                       'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                   }
               });
               $.ajax({
                   url:"{{route('getItGoals')}}",
                   method: 'get',
                   data: {
                       id_business_goal: idBusinessGoal,
                   },
                   beforeSend: function() {
                   },
                   success: function(result) {
                       var daftarItGoals = JSON.parse(result.data);
                       var i;
                       var optionElement = "";
                       console.log(daftarItGoals);
                       optionElement += `<option value=""> Pilih salah satu</option>`;
                       for (i=0; i< daftarItGoals.length; i++)
                       {
                           optionElement += `<option value="${daftarItGoals[i].id}">${daftarItGoals[i].it_goals}</option>`;
                       }
                       $('#select-it-goal').empty();
                       $('#select-it-goal').append(optionElement);
                       if(result.success) {

                       } else {

                       }
                   },
                   complete: function(){
                   }
               });
           });

            $('#select-it-goal').change(function (){
                var idItGoal = $(this).val();
                var idStakeholder = $('#select-stakeholder').val();

                if(idItGoal != null && idItGoal !== "" && idStakeholder != null && idStakeholder !== "")
                {
                    console.log($(this).val());
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                        }
                    });
                    $.ajax({
                        url:"{{route('getItProcess')}}",
                        method: 'get',
                        data: {
                            id_it_goal: idItGoal,
                            id_stakeholder: idStakeholder,
                        },
                        beforeSend: function() {
                        },
                        success: function(result) {
                            var daftarItProcess = JSON.parse(result.data);
                            var i;
                            var optionElement = "";
                            console.log(daftarItProcess);
                            optionElement += `<option value=""> Pilih salah satu</option>`;
                            for (i=0; i< daftarItProcess.length; i++)
                            {
                                optionElement += `<option value="${daftarItProcess[i].id}">${daftarItProcess[i].kode}</option>`;
                            }
                            $('#select-it-process').empty();
                            $('#select-it-process').append(optionElement);
                            if(result.success) {

                            } else {

                            }
                        },
                        complete: function(){
                        }
                    });
                }
            });

            $('#select-stakeholder').change(function (){
                $('#select-it-goal').change();
            });

        });

        {{--$.ajaxSetup({--}}
        {{--    headers: {--}}
        {{--        'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')--}}
        {{--    }--}}
        {{--});--}}
        {{--$.ajax({--}}
        {{--    url:"{{route('getBusinessGoals')}}",--}}
        {{--    method: 'post',--}}
        {{--    data: {--}}
        {{--        id_business_goal:--}}
        {{--    },--}}
        {{--    beforeSend: function() {--}}
        {{--    },--}}
        {{--    success: function(result) {--}}
        {{--        // trigger.removeClass('d-flex justify-content-center');--}}
        {{--        trigger.empty();--}}
        {{--        if(result.success) {--}}

        {{--        } else {--}}

        {{--        }--}}
        {{--    },--}}
        {{--    complete: function(){--}}
        {{--    }--}}
        {{--});--}}
    </script>
</body>
</html>
