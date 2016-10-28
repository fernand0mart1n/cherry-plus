@extends('layouts.layout')

@section('head')
    <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
    <script src="{{ asset('js/prefixfree.min.js') }}"></script>
@endsection

@section('content')
<div class="body"></div>
        
        <div class="header">
            <div>Cherry<span>+</span></div>
        </div>
        <br>
        <div class="login">
            <?= Former::framework('Nude') ?>

            <?= Former::open()
            ->method('POST')
            ->action('/login')
            ->rules(array(
                'user'     => 'required',
                'password' => 'required'
            )); ?>            

                <?= Former::text('name')
                ->label('')
                ->placeholder('Usuario')
                ->required() ?><br>

                <?= Former::password('password')
                ->label('')
                ->placeholder('Contraseña')
                ->required() ?><br>

                <?= Former::submit('Ingresar') ?>

            <?= Former::close() ?>
        </div>

  <script src='http://codepen.io/assets/libs/fullpage/jquery.js'></script>
@endsection
