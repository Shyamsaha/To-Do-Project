
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
                                <div class="btn btn-primary">{{ $task->name }}</div>
                                    <div class="action-button">
                                        <button class="btn btn-warning">In Progress</button>
                                        <button class="btn btn-success">Done</button>
                                    </div>
                                    <hr>
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
                                <a href="#" class="btn btn-primary">Task 2</a>
                                <div class="action-button">
                                    <button class="btn btn-success">Done</button>
                                </div>
                                <hr>
                            </div>
                        </div>
                    </div>
                <div class="col-4">
                       <div class="card">
                            <div class="card-header text-center">
                                <h3>Done</h3>
                            </div>
                            <div class="card-body">
                                <a href="#" class="btn btn-primary">Task 3</a>
                                <hr>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
