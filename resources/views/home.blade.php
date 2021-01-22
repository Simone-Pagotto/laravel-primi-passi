@extends ('layouts.freelance')


@section('main')

    <main>

        <section class="portofolio">
            <div class="container h-600 text-center">

            <p class="f-title text-uppercase c-dark">portfolio</p>

            <span class="line-dark"><i class="fa fa-star fa-2x" aria-hidden="true"></i></span>

            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-4">


                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="plus img-rounded img-responsive" src="img/cabin.png" alt="cabina">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="img-rounded img-responsive" src="img/cake.png" alt="torta">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="img-rounded img-responsive" src="img/circus.png" alt="circo">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="img-rounded img-responsive" src="img/game.png" alt="joystick">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="img-rounded img-responsive" src="img/safe.png" alt="sicurezza">
                    </div>
                </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="portfolio-item">
                    <div class="overlay">
                    <img class="img-rounded img-responsive" src="img/submarine.png" alt="sottomarino">
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>

        <section class="about bg-light">
            <div class="container text-center h-300">

                <p class="f-title text-uppercase c-white">about</p>

                <span class="line-white"><i class="c-white fa fa-star fa-2x" aria-hidden="true"></i></span>

                <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                    <p class="f-text c-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 text-left">
                    <p class="f-text c-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                </div>

                <a class="buttonDownload" href="#" role="button">
                <span class="v-align f-text glyphicon glyphicon-cloud-download"> Free Download</span>
                </a>
            </div>
        </section>

        <section class="contact">
            <div class="container h-600">
            <h2 class="f-title text-uppercase text-center">contact us</h2>

            <span class="line-dark"><i class="c-dark fa fa-star fa-2x" aria-hidden="true"></i></span>

            <form class="" action="index.html" method="post">
                <div class="form-group text-left">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Name">
                </div>

                <div class="form-group text-left">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>

                <div class="form-group text-left">
                <label for="exampleInputPhoneNumber">Phone Number</label>
                <input type="text" class="form-control" id="exampleInputPhoneNumber" placeholder="Phone Number">
                </div>

                <div class="text-left">
                <label for="exampleInputMessage">Message</label>
                <textarea class="form-control" rows="3"></textarea>
                </div>

                <div class="row">
                <div class="col-md-2">
                    <input class="btn btn-default" type="submit" value="Submit">
                </div>
                </div>
            </form>
            </div>
        </section>
    </main>

@endsection


