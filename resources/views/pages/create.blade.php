@extends('layouts.app')

@section('content')
    <h1>Criar novo usuário</h1>
    {!! Form::open(['action' => 'UsersController@store', 'method' => 'post']) !!}
        <div class="form-group col-md-6">
            {{Form::label('name', 'Nome')}}
            {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Nome', 'required']) }}
        </div>
        <div class="form-group col-md-6">
            {{Form::label('last_name', 'Sobrenome')}}
            {{Form::text('last_name', '', ['class' => 'form-control', 'placeholder' => 'Sobrenome', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('cpf', 'CPF')}}
            {{Form::text('cpf', '', ['class' => 'form-control', 'placeholder' => '00000000', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('birth_date', 'Data de nascimento')}}
            {{Form::date('birth_date', null, ['class' => 'form-control', 'placeholder' => '01/01/1991', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('phone', 'Celular')}}
            {{Form::text('phone', '', ['class' => 'form-control', 'placeholder' => '71987654321', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('email', 'Email')}}
            {{Form::email('email', '', ['class' => 'form-control', 'placeholder' => 'enzo@mail.com', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('profile', 'Perfil')}}
            {{Form::select('profile', ['1' => 'Admin', '2' => 'Supervisor', '3' => 'Operário'], null, ['class' => 'form-control', 'placeholder' => 'Selecione o perfil', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('password', 'Senha')}}
            {{Form::password('password', ['class' => 'form-control', 'placeholder' => 'senha', 'required']) }}
        </div>


        <div class="form-group col-md-2">
            {{Form::label('cep', 'CEP')}}
            {{Form::text('cep', '', ['class' => 'form-control', 'placeholder' => '00000000', 'required']) }}
        </div>
        <div class="form-group col-md-4">
            {{Form::label('street', 'Rua')}}
            {{Form::text('street', '', ['class' => 'form-control', 'placeholder' => 'Rua dos bobos', 'required']) }}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('complement', 'Complemento')}}
            {{Form::text('complement', '', ['class' => 'form-control', 'placeholder' => 'Casa, apartamento, andar', 'required']) }}
        </div>
        <div class="form-group col-md-2">
            {{Form::label('number', 'Número')}}
            {{Form::number('number', '', ['class' => 'form-control', 'placeholder' => '00000000', 'required']) }}
        </div>
        <div class="form-group col-md-1">
            {{Form::label('state', 'Estado')}}
            {{Form::text('state', '', ['class' => 'form-control', 'placeholder' => 'BA', 'required']) }}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('city', 'Cidade')}}
            {{Form::text('city', '', ['class' => 'form-control', 'placeholder' => 'Salvador', 'required']) }}
        </div>
        <div class="form-group col-md-3">
            {{Form::label('country', 'País')}}
            {{Form::text('country', '', ['class' => 'form-control', 'placeholder' => 'Brasil', 'required']) }}
        </div>
        <div class="form-group col-md-12">
            {{{Form::submit('Salvar', ['class' => 'btn btn-primary']) }}}
        </div>
    {!! Form::close() !!}
@endsection