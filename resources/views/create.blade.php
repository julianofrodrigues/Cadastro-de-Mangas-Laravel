<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <!-- Meta tags Obrigatórias -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Cadastro de Mangas</title>
  </head>
  <body style="background-color: black">
    <nav class="navbar navbar-dark bg-dark">
        <a style="color:white; text-decoration:none;" href="/">Lista de Mangas</a>
        <a class="btn btn-outline-danger my-2 my-sm-0" href="/" >Voltar</a>
    </nav>
    </br>

    <div class="d-flex justify-content-center">

        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h5 class="card-title">Cadastro de Mangas</h5>
                
                    <form method="post" action="{{route('manga.store')}}" enctype="multipart/form-data">{{ csrf_field() }}

                    <div class="form-group">
                        <label for="name">Titulo</label>
                        <input class="form-control" id="name" name="name" require>
                    </div>

                    <div class="form-group">
                        <label for="description">Descrição</label>
                        <textarea class="form-control" id="description" name="description" rows="3" require></textarea>
                    </div>

                    <div class="form-group">
                        <label for="image">Imagens</label>
                        <input class="form-control" id="image" name="image" require>
                        <!-- <input type="file" class="form-control-file" id="image" require> -->
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="reset" class="btn btn-danger">Limpar</button>


                    </form>

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