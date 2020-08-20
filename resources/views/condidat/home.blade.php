
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}" />

    <title>Condidat</title>

    <!-- Bootstrap 4.1.1 -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.1/examples/album/album.css" rel="stylesheet">

    <style>
    .alert { position: relative; padding: .5rem .8rem; margin-bottom: 0; }
    .alert_success_popup { margin-bottom: .5rem; }
    .alert-dismissible .close { padding: .5rem .8rem;}
    </style>
  </head>

  <body>

    <header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">Add some information about the album below, the author, or any other background context. Make it a few sentences long so folks can pick up some informative tidbits. Then, link them off to some social networking sites or contact information.</p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                Album example
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark shadow-sm">
        <div class="container d-flex justify-content-between">
          <a href="#" class="navbar-brand d-flex align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path><circle cx="12" cy="13" r="4"></circle></svg>
            PFE 
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>

    <main role="main">

      <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Center de Formation PFE</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don't simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">BTN 1</a>
            <a href="#" class="btn btn-secondary my-2">BTN 2</a>
          </p>
        </div>
      </section>

      <div class="album py-5 bg-light">
        <div class="container">

        <h3 class="mb-4">Formations</h3>

        <input type="hidden" name="current_condidat" id="current_condidat" value="{{ Auth::guard('condidat')->user()->id }}" >

          <div class="row">
            @foreach($formations as $formation)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ asset('images/global-img-formation.jpg') }}" alt="img formation">
                    
                    <div class="card-header">
                        <h4 class="card-title">{{ $formation->title }}</h4>
                    </div>

                    <div class="card-body">
                    <p class="card-text text-justify">{{ $formation->description }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary" data-toggle="modal" data-target="#formation_id_{{ $formation->id }}">
                                Acheter ({{ $formation->prix }} DT)
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="formation_id_{{ $formation->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Payement du {{ $formation->title }}</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">

                                    <div class="alert alert_success_popup alert-success alert-dismissible fade" role="alert">
                                      <strong>Paiement validé!</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>

                                    <p class="card-text text-justify">Description: {{ $formation->description }}</p>
                                    <p>Prix: {{ $formation->prix }} DT</p>

                                    <div class="form-group">
                                        <label for="mode_de_payement_{{ $formation->id }}">Mode de Payement</label>
                                        <select name="mode_de_payement" class="form-control" id="mode_de_payement_{{ $formation->id }}">
                                            <option value="Espèce">Espèce</option>
                                            <option value="Chèque">Chèque</option>
                                            <option value="Virement bancaire">Virement bancaire</option>
                                        </select>
                                    </div>

                                    <div class="alert alert_error_popup alert-danger alert-dismissible fade" role="alert">
                                      <strong>Erreur, paiement non valide!</strong>
                                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                                    <button type="button" data-id="{{ $formation->id }}" class="button_save btn btn-primary">Save</button>
                                </div>
                                </div>
                            </div>
                            </div>

                        </div>
                        <small class="text-muted">
                            Le: {{ $formation->date->format('d-m-Y') }}
                                <div class="text-right">
                                    {{ $formation->duree }} jour(s)
                                </div>
                        </small>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>

          {{ $formations->links() }}

        </div>
      </div>

      <div class="py-5">
        <div class="container">
            <h3 class="mb-4">Actualités</h3>

          <div class="row">
            @foreach($actualites as $actualite)
            <div class="col-md-4">
                <div class="card mb-4 shadow-sm">
                    <img class="card-img-top" src="{{ asset('images/ACTUALITES.jpg') }}" alt="img formation">
                    
                    <div class="card-header">
                        <h4 class="card-title">{{ $actualite->nom }}</h4>
                    </div>

                    <div class="card-body">
                    <p class="card-text text-justify">{{ $actualite->description }}</p>
                    <div class="text-right">
                        <small class="text-muted">
                            Created_at: {{ $actualite->created_at->format('d-m-Y à h:m') }}
                        </small>
                    </div>
                    </div>
                </div>
            </div>
            @endforeach
          </div>

            {{ $actualites->links() }}
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

    <script>
        $(document).ready(function() {
            $('.button_save').on('click', function() {
                var formation_id = $(this).attr("data-id"),
                    selected_option_id = 'mode_de_payement_'+formation_id,
                    selected_option_value = $( "#"+selected_option_id ).val(),
                    current_condidat_id = $( "#current_condidat" ).val()
                ;
                
                console.log('formation_id= ', formation_id);
                console.log('selected_option_value= ', selected_option_value);
                console.log('current_condidat_id= ', current_condidat_id);


                $.ajaxSetup({
                  headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                  }
                });

                $.ajax({
                  type:'POST',
                  url:'/condidat/store/payment',
                  data:{
                    formation_id:formation_id, 
                    mode_payement:selected_option_value, 
                    condidat_id:current_condidat_id
                  },
                  success:function(data){
                    // alert('DONE!');
                    $( ".alert_success_popup" ).removeClass('show');
                    $( ".alert_success_popup" ).addClass('show');
                  },

                  error : function(resultat, statut, erreur){
                    $( ".alert_error_popup" ).removeClass('show');
                    $( ".alert_error_popup" ).addClass('show');
                  }
                });

            });
        });
    </script>



  </body>
</html>
