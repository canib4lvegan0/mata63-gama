<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Vagas - UFBA</title>

  <link rel="stylesheet" href="{{ asset('css/positions/index.css') }}">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
  <div class="page">
    <h1>Sistema de Vagas - UFBA</h1>
    <h5>{{ $positions->count() > 0 ? $positions->count() : 'Sem' }} Vagas Disponíveis</h5>
    <p></p>
    <form action="{{ route('positions.index') }}" class="form-inline my-2 my-lg-0" style="margin: auto;">
        <input class="form-control mr-sm-2" style="width: 35vw" type="search" placeholder="Search" aria-label="Search" name="searchText" value="{{ $searchText ?? '' }}">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    <p></p>
    <div class="vagas">
        @if ($positions->count() == 0)
            <div class="space"></div>
            <div>
              <span class="material-icons" style="font-size: 200px; color: gray;">search</span>
              <p>Não foi possível encontrar resultados para essa busca.</p>
            </div>
        @endif
        @foreach ($positions as $position)
            <div class="vaga">
              <img width="150px" height="150px">
              <div class="info">
                <p><span style="font-size: 20px; font-weight: 500;">{{ $position->title }}</span> em {{ $position->company }}</p>
                <p>{{ $position->description }}</p>
                <div class="buttons">
                  <button type="button" class="btn btn-primary" style="text-align: right;">Seguir</button>
                  <button type="button" class="btn btn-primary" style="text-align: right;">Mais informações...</button>
                </div>
              </div>
            </div>
        @endforeach
    </div>
    <p></p>
    <ul class="pagination" style="margin: auto;">
      <li class="page-item disabled"><a class="page-link" href="#">Previous</a></li>
      <li class="page-item active"><a class="page-link" href="#">1</a></li>
      <li class="page-item"><a class="page-link" href="#">2</a></li>
      <li class="page-item"><a class="page-link" href="#">3</a></li>
      <li class="page-item"><a class="page-link" href="#">Next</a></li>
    </ul>
    <p></p>
  </div>

</body>

</html>