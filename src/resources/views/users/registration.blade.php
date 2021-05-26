<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno - Sistema de Vagas - UFBA</title>

    <link rel="stylesheet" href="{{ asset('css/users/index.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<div class="page">
    <h1>Cadastrar Aluno</h1>
        <form action="{{ route('cadastrarAluno')   }}" method="post">
            @csrf
            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    @foreach($errors->all() as $error)
                        {{ $error }}<br>
                    @endforeach
                </div>
            @endif
            <div class="form-group">
                <label>Nome Completo</label>
                <label>
                    <input type="text" class="form-control" name="name"  value="nestor">
                </label>
            </div>
            <div class="form-group">
                <label>Endereço de e-mail</label>
                <label>
                    <input type="email" class="form-control" name="email"  value="nestor@nestor.com">
                </label>
            </div>
            <div class="form-group">
                <label>Senha</label>
                <label>
                    <input type="password" class="form-control" name="password"  value="1234567">
                </label>
            </div>
            <div class="form-group">
                <label>Curso</label>
                <label>
                    <input type="text" class="form-control" name="course"  value="computação">
                </label>
            </div>
            <div class="form-group">
                <label>Número de Matrícula</label>
                <label>
                    <input type="text" class="form-control" name="registration_number"  value="212121211">
                </label>
            </div>
            <div class="form-group">
                <label>Semestre</label>
                <label>
                    <input type="text" class="form-control" name="semester"  value="2021.1">
                </label>
            </div>
{{--            <div class="form-group">--}}
{{--                <label>Histórico Acadêmico</label>--}}
{{--                <input type="file" class="form-control-file" name="historic">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Currículo</label>--}}
{{--                <input type="file" class="form-control-file" name="curriculum">--}}
{{--            </div>--}}
{{--            <div class="form-group">--}}
{{--                <label>Áres de interesse</label>--}}
{{--                <label>--}}
{{--                    <input type="text" class="form-control-file" name="areas_interest">--}}
{{--                </label>--}}
{{--            </div>--}}
            <div class="form-group">
                <label>Linkedin</label>
                <label>
                    <input type="url" class="form-control" name="link_social" value="https://www.google.com/">
                </label>
            </div>

            <button type="submit" class="btn btn-primary">Cadastrar-se</button>
        </form>
</div>

</body>

</html>
