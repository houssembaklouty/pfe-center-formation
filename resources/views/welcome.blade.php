
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Welcome page</title>

    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">
  </head>

  <body>

    <main role="main">

      <div class="album py-5 bg-light">
        <div class="container">
            <div class="card-deck mb-3 text-center">
                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Espace Condidat</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('condidat.register') }}" class="btn btn-lg btn-block btn-outline-primary">Register</a>
                        <a href="{{ route('condidat.login') }}" class="btn btn-lg btn-block btn-primary">Login</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Espace Formateur</h4>
                    </div>
                    <div class="card-body">
                        <a href="{{ route('formateur.register') }}" class="btn btn-lg btn-block btn-outline-primary">Register</a>
                        <a href="{{ route('formateur.login') }}" class="btn btn-lg btn-block btn-primary">Login</a>
                    </div>
                </div>

                <div class="card mb-4 shadow-sm">
                    <div class="card-header">
                        <h4 class="my-0 font-weight-normal">Espace Admin</h4>
                    </div>
                    <div class="card-body">
                        <br>
                        <br>
                        <a href="{{ route('admin.login') }}" class="mt-2 btn btn-lg btn-block btn-primary">Login</a>
                    </div>
                </div>

            </div>

        </div>
      </div>


    </main>

    <footer class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p>PFE Center de Formation &copy; 2020</p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  </body>
</html>




