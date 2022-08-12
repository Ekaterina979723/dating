@extends('layout.index')
@section('title','Dating Website')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-6">
            <img src="{{ URL::asset('img/main.jpg') }}" height="100%" width="100%">
        </div>
        <div class="col-6 align-self-center">

            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="simple-tab" data-bs-toggle="tab" data-bs-target="#simple-tab-pane" type="button" role="tab" aria-controls="simple-tab-pane" aria-selected="true">Simple Search</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="adv-tab" data-bs-toggle="tab" data-bs-target="#adv-tab-pane" type="button" role="tab" aria-controls="adv-tab-pane" aria-selected="false">Advanced Search</button>
                </li>
            </ul>


            <div class="tab-content" id="myTabContent">

                <!--  Tab Simple Content-->

                <div class="tab-pane fade show active" id="simple-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            I'm man and find woman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            I'm woman and find man
                        </label>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Age</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="from">
                        <input type="text" aria-label="Last name" class="form-control" placeholder="to">
                    </div>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>City</option>
                        <option value="1">Kyiv</option>
                        <option value="2">Kharkiv</option>
                        <option value="3">Odessa</option>
                    </select>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            near me
                        </label>
                    </div>
                    <button type="button" class="btn btn-outline-primary">Find</button>
                </div>

                <!--  /Tab Simple Content-->

                <!--  Tab Advanced Content-->

                <div class="tab-pane fade" id="adv-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            I'm man and find woman
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            I'm woman and find man
                        </label>
                    </div>

                    <div class="input-group">
                        <span class="input-group-text">Age</span>
                        <input type="text" aria-label="First name" class="form-control" placeholder="from">
                        <input type="text" aria-label="Last name" class="form-control" placeholder="to">
                    </div>

                    <select class="form-select" aria-label="Default select example">
                        <option selected>City</option>
                        <option value="1">Kyiv</option>
                        <option value="2">Kharkiv</option>
                        <option value="3">Odessa</option>
                    </select>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            near me
                        </label>
                    </div>

                    <div class="accordion" id="accordionPanelsStayOpenExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                                    Diagnos
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Diabet
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Joints
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                                    Zodiac
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Gemini
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Taurus
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                                    Goal
                                </button>
                            </h2>
                            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                                <div class="accordion-body">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label" for="flexCheckDefault">
                                            Frienship
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked">
                                        <label class="form-check-label" for="flexCheckChecked">
                                            Love
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-outline-primary">Find</button>
                </div>

                <!-- / Tab Advanced Content-->
            </div>

        </div>
    </div>


</div>


@endsection
