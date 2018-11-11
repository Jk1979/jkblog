@extends('admin.layouts.app_admin')
@section('content')
  <h1>Admin panel</h1>
<div class="container">
  <div class="row">
    <div class="jumbotron">
    <p  class="lead"><span class="label label-primary">Категорий 0 </span></p>
    <hr class="my-4">
    </div>
    <div class="jumbotron">
    <p class="lead"><span class="label label-primary">Материалов 0 </span></p>
    <hr class="my-4">
    </div>
    <div class="jumbotron">
    <p class="lead"><span class="label label-primary">Посетителей 0 </span></p>
    <hr class="my-4">
    </div>
    <div class="jumbotron">
    <p class="lead"><span class="label label-primary">Сегодня 0 </span></p>
    <hr class="my-4">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6">
      <a href="{{route('admin.category.create')}}" class="btn btn-secondary btn-block">Создать категорию</a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Категория первая</h4>
        <p class="list-group-item-text">Количество материалов</p>
      </a>
    </div>
    <div class="col-sm-6">
      <a href="#" class="btn btn-secondary btn-block">Создать материал</a>
      <a href="#" class="list-group-item">
        <h4 class="list-group-item-heading">Материал первый</h4>
        <p class="list-group-item-text">Категория</p>
      </a>
    </div>
  </div>
</div>
@endsection
