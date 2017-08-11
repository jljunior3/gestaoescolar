@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Usuário</h3>
            {!! form($form->add('Editar','submit',[
                'attr' => ['class' => 'btn btn-warning btn-block']
            ])) !!}
        </div>
    </div>
@endsection