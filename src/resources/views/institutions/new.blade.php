<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Vagas - UFBA</title>

  <link rel="stylesheet" href="{{ asset('css/institutions/new.css') }}">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
  @if($errors->any())
    <div id="error" class="alert alert-danger">
      @foreach($errors->all() as $error)
        {{ $error }}<br>
      @endforeach
    </div>
  @endif

  <div class="page">
    <div class="large-form">
      <form action="{{ route('cadastrarInstituicao') }}" method="POST" id="institution-register-form">
        @csrf

        <h2 class="text-center">Cadastro de Institução</h2>
        <p>Razão social:<p>
        <div class="form-group">
          <input type="text" class="form-control" name="corporate_name" placeholder="Empresa Fulana" required="required">
        </div>
        <p>Nome Fantasia:<p>
        <div class="form-group">
          <input type="text" class="form-control" name="trading_name" placeholder="Empresa Fulana" required="required">
        </div>
        <div class="form-group row">
          <div class="col">
            <input type="text" class="form-control" name="website" placeholder="Site da Empresa" required="required">
          </div>
          <div class="col">
            <input type="text" class="form-control" name="linkedin" placeholder="LinkedIn" required="required">
          </div>
        </div>
        <p>Telefone:</p>
        <div class="form-group">
            <input type="text" class="form-control" name="phone" placeholder="Telefone" required="required">
        </div>
        <p>E-mail institucional:</p>
        <div class="form-group">
          <input type="email" class="form-control" name="email" placeholder="admin@fulana.com.br" required="required">
        </div>
        <p>Cadastro nacional de pessoa jurídica (CNPJ):</p>
        <div class="form-group">
          <input type="text" class="form-control" name="cnpj" placeholder="12.345.678/0001-23" required="required">
        </div>
        <p>Senha: </p>
        <div class="form-group">
          <input type="password" class="form-control" name="password" placeholder="Insira sua senha" required="required">
        </div>
        <p>Selecione suas areas de contratação: </p>
        <div class="form-group row">
          <div class="col">
            <select id="area" name="area" class="form-control">
              <option>Frontend</option>
              <option>Backend</option>
              <option>Fullstack</option>
            </select>
          </div>
        </div>
        <p>Número de Funcionários: </p>
        <div class="form-group row">
          <div class="col">
            <input type="number" class="form-control" name="employees_number" min=0 required="required">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-md-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Cadastrar-se</button>
          </div>
          <div class="col">
            <p>Ao efetuar o cadastro você confirma que leu e que está de acordo com nossos <a href="">Termos de Uso</a></p>
          </div>
        </div>  
      </form>
    </div>
  </div>

</body>

</html>