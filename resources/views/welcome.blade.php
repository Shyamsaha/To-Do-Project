<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Project</title>

       {{-- START Fonts --}}
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('frontend/css/fontawesome-free-6.0.0-web/css/all.css') }}">
         {{-- END Fonts --}}

        {{-- START Styles --}}
        <style>
            @import "{{ asset('frontend/css/bootstrap.min.css') }}";
            @import "{{ asset('frontend/css/shyam.css') }}";
        </style>
        {{-- END Styles --}}

        {{-- START Script --}}
         <script src="{{ asset('frontend/js/vendor/jquery.min.js') }}" rel="preload" as="script" crossorigin="anonymous"></script>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" integrity="sha512-fRVSQp1g2M/EqDBL+UFSams+aw2qk12Pl/REApotuUVK1qEXERk3nrCFChouag/PdDsPk387HJuetJ1HBx8qAg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- END Script --}}
    </head>
    <body class="body">
        <section class="main">
            <div class="container">
                <div class="row">
                    <div class="col-10">
                        <div class="mt-5">
                            <div class="form-row align-items-center style">
                                <div class="d-inline input">
                                    <input type="text" class="form-control mb-2" name="name" id="name" placeholder="Write Your Tasks ...">
                                </div>
                                <div class="d-inline style1">
                                    <button type="submit" class="btn mb-2 add-button" onclick="submitTask()">Add</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

         <section class="table">
            <div class="container">
                <div class="row">
                    <div class="col-4">
                       <div class="card">
                            <div class="card-header text-center">
                              <h3>To Do</h3>
                            </div>
                            <div class="card-body ">
                               @foreach ($tasks as $task )
                               @if ($task->	in_progress == '1')

                               @else<div class="d-none">
                                 <div class="btn btn-primary">{{ $task->name }}</div>
                                    <div class="action-button">
                                        <button class="btn btn-warning" onclick="InProgress('{{ $task->id }}')">In Progress</button>
                                    </div>
                                <hr>
                               </div>
                                 <div class="btn btn-primary">{{ $task->name }}</div>
                                    <div class="action-button">
                                        <button class="btn btn-warning" onclick="InProgress('{{ $task->id }}')">In Progress</button>
                                    </div>
                                <hr>
                               @endif

                               @endforeach

                            </div>
                        </div>
                    </div>
                <div class="col-4">
                       <div class="card">
                            <div class="card-header text-center">
                                <h3>In Progress</h3>
                            </div>
                            <div class="card-body">
                            @foreach ($tasks as $task )
                            @if ($task->in_progress == '0' && $task->done == '0')
                                <div class="d-none">
                                    <a href="#" class="btn btn-primary">{{ $task->name }}</a>
                                        <div class="action-button">
                                            <button class="btn btn-success" onclick="done('{{ $task->id }}')">Done</button>
                                        </div>
                                    <hr>
                                </div>
                            @elseif ($task->in_progress == '1' && $task->done == '1')
                                <div class="d-none">
                                    <a href="#" class="btn btn-primary">{{ $task->name }}</a>
                                        <div class="action-button">
                                            <button class="btn btn-success" onclick="done('{{ $task->id }}')">Done</button>
                                        </div>
                                    <hr>
                                </div>
                            @else
                                    <a href="#" class="btn btn-primary">{{ $task->name }}</a>
                                    <div class="action-button">
                                        <button class="btn btn-success" onclick="done('{{ $task->id }}')">Done</button>
                                    </div>
                                <hr>

                            @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                <div class="col-4">
                       <div class="card">
                            <div class="card-header text-center">
                                <h3>Done</h3>
                            </div>
                            <div class="card-body">
                            @foreach ($tasks as $task )
                            @if ($task->done == '1')
                                <a href="#" class="btn btn-primary">{{ $task->name }}</a>
                                <hr>
                            @else
                            <div class="d-none">
                                <a href="#" class="btn btn-primary">{{ $task->name }}</a>
                                <hr>
                            </div>
                            @endif
                            @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>

<script src=" {{asset('js/jquery.min.js') }}"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
        function submitTask() {
        //alert('Shyam');
        var name = $("#name").val();
        if(name.length > 0){

            $.post('{{ route('task.store') }}', {_token:'{{ csrf_token() }}', name:name,}, function(data){
               // alert('Data Saved');
               swal("Sucessful", "Task Added Sucessfully ", "success");
                location.reload();
                //loadList();
            });
        }else{
            swal("Error", "Something Went Wrong", "warning");
        }
    }

    function InProgress(id) {
        //alert(id);
        $.post('{{ route('task.inprogress') }}', {_token:'{{ csrf_token() }}', id:id}, function(data,txtstts,jxhr){
           // alert(orderID); return false;
           if(data ==='success'){
             swal("Error", "Something Went Wrong", "warning");
           }else{
               swal("Sucessful", "Task Is In Progress Sucessfully ", "success");
               location.reload();
           }
        });
    }
    function done(id) {
        //alert(id);
        $.post('{{ route('task.done') }}', {_token:'{{ csrf_token() }}', id:id}, function(data,txtstts,jxhr){

           if(data ==='success'){
             swal("Error", "Something Went Wrong", "warning");
           }else{
                swal("Sucessful", "Task Has Been Done Sucessfully ", "success");
               location.reload();
           }
        });
    }




</script>
    </body>
</html>
