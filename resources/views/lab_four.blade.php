@extends('layouts/app')

@section('title')Лабораторная работа 4 @endsection

@section('content')

<div class="container-xxl">

  <form class="mt-4 mb-4" action="search-employee" method="POST">
  <div class="row">
    <div class="col">
      <input type="text" name="name" value="{{isset($_POST['name']) ? $_POST['name'] : ''}}" class="form-control" placeholder="Имя">
    </div>
    <div class="col">
      <input type="text" name="surname" value="{{isset($_POST['surname']) ? $_POST['surname'] : ''}}" class="form-control" placeholder="Фамилия">
    </div>
    <div class="col">
      <select name="id" class="form-select" aria-label="Default select example">
        <option value="" class="d-none">Выбирете отдел</option>
        @foreach ($departments as $department)
          <option @if(isset($_POST['id'])) @selected($department->id == $_POST['id']) @endif value="{{$department->id}}">{{$department->name}}</option>
        @endforeach
      </select>
    </div>
    <div class="col">
      <button type="submit" class="btn btn-primary">Поиск</button>
    </div>
  </div>
  @csrf
</form>

  <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Отдел</th>
      <th scope="col">Имя</th>
      <th scope="col">Фамилия</th>
      <th scope="col">Почта</th>
      <th scope="col">Пароль</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($persons as $person)
      <tr>
        <td>{{$person->id}}</td>
        <th scope="row">{{$person->department ? $person->department->name : ''}}</th>
        <td>{{$person->name}}</td>
        <td>{{$person->surname}}</td>
        <td>{{$person->email}}</td>
        <td>{{$person->password}}</td>
      </tr>
    @endforeach
  </tbody>
</table>
</div>

@endsection