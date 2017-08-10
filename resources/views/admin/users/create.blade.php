@extends('layouts.app');

@section('content')
    <div class="container">
        <div class="row">
            <h3>Novo Usuário</h3>
            {!! form($form->add('Salvar','submit',[
                'attr' => ['class' => 'btn btn-primary btn-block']
            ])) !!}
        </div>
    </div>
@endsection