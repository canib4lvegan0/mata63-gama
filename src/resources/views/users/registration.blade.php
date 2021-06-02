<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Aluno - Sistema de Vagas - UFBA</title>

    <link rel="stylesheet" href="{{ asset('css/users/index.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</head>

<body>
<div class="page">
    @csrf
    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            @foreach($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    <div class="page">
        <div class="large-form">
            <form id="student-register-form" action="{{ route('cadastrar_aluno')   }}" method="post" enctype="multipart/form-data">
                @csrf
                <h2 class="text-center">Cadastro de Aluno</h2>
                <p>Nome completo:<p>
                <div class="form-group">
    {{--                <input type="text" class="form-control is-valid" name="nome" placeholder="Fulano Ciclano Deutrano" required="required">--}}
                    <input type="text" class="form-control" name="name"  placeholder="Fulano Ciclano Deutrano" required="required">
                </div>
                <p>E-mail institucional:</p>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="fulano@ufba.br" required="required">
                </div>
    {{--            <p>Cadastro de pessoa física (CPF):</p>--}}
    {{--            <div class="form-group">--}}
    {{--                <input type="text" class="form-control" name="cpf" placeholder="123.456.789-10" required="required">--}}
    {{--            </div>--}}
                <p>Curso:</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="course">
                </div>
                <div class="form-group row">
                    <div class="col">
                        <input type="text" class="form-control" name="registration_number" placeholder="Numéro de Matrícula" required="required">
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" name="semester" placeholder="Semestre de Ingresso" required="required">
                    </div>
                </div>
    {{--            <div class="form-group row">--}}
    {{--                <div class="col">--}}
    {{--                    <label for="historico-escolar">Historico escolar</label>--}}
    {{--                    <input type="file" class="form-control-file" id="historico-escolar">--}}
    {{--                </div>--}}
    {{--                <div class="col">--}}
    {{--                    <label for="curriculo">Currículo</label>--}}
    {{--                    <input type="file" class="form-control-file" id="curriculo">--}}
    {{--                </div>--}}
    {{--            </div>--}}
                <p>Senha: </p>
                <div class="form-group">
                    <input type="password" class="form-control" name="password" placeholder="Insira sua senha" required="required">
                </div>
    {{--            <div class="form-group">--}}
    {{--                <input type="password" class="form-control" name="senha" placeholder="Confirme sua senha" required="required">--}}
    {{--            </div>--}}
                <p>Selecione suas areas de interesse: </p>
                <div class="form-group">
                    <input type="text" class="form-control" name="areas_interest">
    {{--                <div class="col">--}}
    {{--                    <select id="area1" class="form-control">--}}
    {{--                        <option>Frontend</option>--}}
    {{--                        <option>Backend</option>--}}
    {{--                        <option>Fullstack</option>--}}
    {{--                    </select>--}}
    {{--                </div>--}}
    {{--                <div class="col">--}}
    {{--                    <select id="area2" class="form-control">--}}
    {{--                        <option>Frontend</option>--}}
    {{--                        <option>Backend</option>--}}
    {{--                        <option>Fullstack</option>--}}
    {{--                    </select>--}}
    {{--                </div>--}}
    {{--                <div class="col">--}}
    {{--                    <select id="area3" class="form-control">--}}
    {{--                        <option>Frontend</option>--}}
    {{--                        <option>Backend</option>--}}
    {{--                        <option>Fullstack</option>--}}
    {{--                    </select>--}}
    {{--                </div>--}}
                </div>
                <p>Perfil no Linkedin: </p>
                <div class="form-group">
                    <input type="url" class="form-control" name="link_social">
                </div>
                <div class="form-group">
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary btn-block" id="btn" name="submit">Cadastrar-se</button>
                    </div>
                    <div class="col">
                        <p>Ao efetuar o cadastro você confirma que leu e que está de acordo com nossos <a href="">Termos de Uso</a></p>
                    </div>
                </div>
            </form>
        </div>
</div>
</div>

</body>

</html>
