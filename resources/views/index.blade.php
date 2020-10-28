<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Lista de Mangas</title>
  </head>
  <body style="background-color: black">
    <nav class="navbar navbar-dark bg-dark">
        <a style="color:white; text-decoration: none;" href="/">Lista de Mangas</a>
        <a class="btn btn-outline-success my-2 my-sm-0" href="create" >Cadastrar novo Manga</a>
    </nav>
    </br>
    
    <div class="d-flex justify-content-center">
    <div class="container">
    <div class="row">

      @foreach($mangas as $manga)
        
        <div class="col-4">
              <div class="card text-white bg-dark mb-3" style="width: 18rem;">
                <img class="card-img-top" src="{{ url("storage/capas/{$manga->image}") }}"/>
              <div class="card-body">
                  <h5 class="card-title">{{$manga->name}}</h5>
                  <p class="card-text">{{$manga->description}}</p>
                  <a href="/edit/{{$manga->id}}" class="btn btn-primary">Editar</a>
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                    Excluir
                  </button>
                  <!-- <a href="/delete/{{$manga->id}}" method="get" class="btn btn-danger">Excluir</a> -->
              </div>
            </div>
        </div>

        <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">{{$manga->name}}</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  Deseja realmente excluir {{$manga->name}}?
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Não</button>
                  <a href="/delete/{{$manga->id}}" method="get" class="btn btn-success">Sim</a>
                </div>
              </div>
            </div>
          </div>
      @endforeach
      </div>
    </div>
    </div>

    <!-- JavaScript (Opcional) -->
    <!-- jQuery primeiro, depois Popper.js, depois Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>