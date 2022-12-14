<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    You're logged in!
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 py-5 py-xl-5 py-xxl-7">
                        <h1 class="display-3 text-1000 fw-normal">Let’s make a tour</h1>
                        <h1 class="display-3 text-primary fw-bold">Discover the beauty</h1>
                        <div class="pt-5">
                            <nav>
                                <div class="nav nav-tabs voyage-tabs" id="nav-tab" role="tablist">
                                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true"><i class="fas fa-map-marker-alt"></i></button>
                                    <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false"> <i class="fas fa-plane"></i></button>
                                    <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false"> <i class="fas fa-hotel"></i></button>
                                </div>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <form method="post" class="row g-4 mt-5">
                                            @csrf
                                            <div class="col-sm-6 col-md-6 col-xl-5">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputAddress1">Address 1</label>
                                                    <input class="form-control input-box form-voyage-control" id="inputAddress1" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-5">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputAddress2">Address 2</label>
                                                    <input class="form-control input-box form-voyage-control" id="inputAddress2" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-5">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputdateOne" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-5">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputDateTwo" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-sm-6 col-md-6 col-xl-5">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputPersonOne">Person</label>
                                                    <select class="form-select form-voyage-select input-box" id="inputPersonOne">
                                                        <option selected="selected">2 Adults</option>
                                                        <option>2 Adults 1 children</option>
                                                        <option>2 Adults 2 children</option>
                                                    </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 col-xl-10 col-lg-12 d-grid mt-6">
                                                <button class="btn btn-primary" type="submit" style="color: black">Search Packages</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                        <form method="post" class="row g-4 mt-5">
                                            @csrf
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputAddressThree">Address 1</label>
                                                    <input class="form-control input-box form-voyage-control" id="inputAddressThree" type="text" placeholder="From where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputAddressFour">Address 2</label>
                                                    <input class="form-control input-box form-voyage-control" id="inputAddressFour" type="text" placeholder="To where" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-map-marker-alt"> </i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputDateThree" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputDateFour" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputPeopleTwo">People</label>
                                                    <select class="form-select form-voyage-select input-box" id="inputPeopleTwo">
                                                        <option selected="selected">2 Adults</option>
                                                        <option>2 Adults 1 children</option>
                                                        <option>2 Adults 2 children</option>
                                                    </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-grid mt-6">
                                                <button class="btn btn-primary" type="submit" style="color: black">Search Packages</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                        <form method="post" class="row g-4 mt-5">
                                            @csrf
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputDateFive" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <input class="form-control input-box form-voyage-control" id="inputDateSix" type="date" /><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-calendar"></i></span>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="input-group-icon">
                                                    <label class="form-label visually-hidden" for="inputPeopleThree">Person</label>
                                                    <select class="form-select form-voyage-select input-box" id="inputPeopleThree">
                                                        <option selected="selected">2 Adults</option>
                                                        <option>2 Adults 1 children</option>
                                                        <option>2 Adults 2 children</option>
                                                    </select><span class="nav-link-icon text-800 fs--1 input-box-icon"><i class="fas fa-user"> </i></span>
                                                </div>
                                            </div>
                                            <div class="col-12 d-grid mt-6">
                                                <button class="btn btn-primary" type="submit" style="color: black">Search Packages</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </nav>
                        </div>
                    </div>
                    <div id="googleMap" class="col-lg-6 py-5 py-xl-5 py-xxl-7 shadow" style="height: auto"></div>

                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCqd1XS0Jt-VUrhm_x1nY9bmQEk5xwf8Sc&libraries=places"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="Scripts/jquery-3.1.1.min.js"></script>
    <script src="js\map.js"></script>
    <!-- maps End -->
</x-app-layout>
