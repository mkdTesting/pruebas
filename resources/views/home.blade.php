@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="container">
            <div class="card card-outline-primary mb-3 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-md-1">
                            <a href="http://www.powerhispania.net"> <img src="{{asset('images/AEP.jpeg')}}" width="100"></a>
                        </div>
                        <div class="col-md-11">
                            <md-content class="md-scrollbar" style="max-width: 900px;
                        max-height: 100px;
                        overflow: auto;">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus esse sequi
                                    voluptate? Aliquid aspernatur at eligendi, est itaque laboriosam natus
                                    necessitatibus nobis, obcaecati omnis quod rem suscipit tempora? Blanditiis,
                                    ullam?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate expedita
                                    qui rerum? At autem eius quas, quis ratione unde! Cumque ducimus ex excepturi
                                    facilis fugiat ipsa perferendis possimus sed veniam.Lorem ipsum dolor sit amet,
                                    consectetur adipisicing elit. Animi architecto beatae corporis doloribus harum neque
                                    optio quidem quis saepe similique! Beatae ipsa iure minus quasi quia quisquam
                                    reiciendis repellendus repudiandae!</p>


                            </md-content>
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div class="row mt-5">
            <div class="col-md-4">
                <card-component img="{{asset('images/bench.jpg')}}" title="BENCH" description=""></card-component>
            </div>
            <div class="col-md-4">
                <card-component img="{{asset('images/squat.jpg')}}" title="SQUAT" description=""></card-component>
            </div>
            <div class="col-md-4">
                <card-component img="{{asset('images/deadlift.jpg')}}" title="DEADLIFT" description=""></card-component>
            </div>
        </div>

        <div class="card card-outline-primary mb-3 text-center mt-5">
            <form>
                <div class="form-group">
                    <label for="formGroupExampleInput">Example label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Example input">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Another label</label>
                    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Another input">
                </div>
            </form>
        </div>
    </div>


@endsection
