<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
<div class="container">

    {{ Form::open(['route' => 'cadastro.save', 'class' => 'form-cadastro', 'id' => 'form-cadastro']) }}

    <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
                {{ Form::label('usuario', 'Usuario', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('usuario', '', ['required'=>'required', 'maxlength'=>50, 'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('nome', 'Nome', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('nome', '', ['required'=>'required', 'maxlength'=>255,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('email', 'E-mail', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::email('email', '', ['required'=>'required','maxlength'=>200,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('data_nascimento', 'Data nascimento', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('data_nascimento', '', ['required'=>'required','maxlength'=>10,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('cpf', 'CPF', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('cpf', '', ['required'=>'required','maxlength'=>12,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('rg', 'RG', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('rg', '', ['required'=>'required','maxlength'=>20,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('telefone', 'Telefone', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('telefone', '', ['required'=>'required','maxlength'=>25,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('celular', 'Celular', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('celular', '', ['required'=>'required','maxlength'=>25,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('carteira_bitcoin', 'Carteira Bitcoin', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('carteira_bitcoin', '', ['required'=>'required','maxlength'=>255,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('senha', 'Senha', ['class' => 'col-lg-4 control-label']) }}
                <div class="col-lg-8">
                    {{ Form::text('senha', '', ['required'=>'required','maxlength'=>20,'class' => 'form-control required']) }}
                </div>
            </div>
            <div class="form-group">
                {{ Form::label('sexo', 'Sexo', array('class' => 'col-lg-4 control-label')) }}

                <div class="col-lg-8">
                    <select name="sexo" id="sexo" class="form-control input-sm select2">
                        <option value="">---</option>
                        @foreach (array('m'=>'Masculino','f'=>'Feminino') as $k => $sexo)
                            <option value="{{ $k }}">{{ $sexo }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
    </div>
    {{ Form::close()}}

</div>
</body>
</html>
