@extends('layouts/app')

@section('title')Редактирование поста@endsection

@section('content')

  <div class="container-xxl mt-5">
    <h3>Изменить пост</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="exapleFormControlInput1" class="form-label">Тема</label>
        <input type="text" class="form-control" id="exapleFormControlInput1" name="title">
      </div>
      <div class="mb-3">
        <label for="exapleFormControlTextarea1" class="form-label">Текст сообщения</label>
        <textarea class="form-control" id="exapleFormControlTextarea1" rows="3" name="text"></textarea>
      </div>
      <input class="d-none" type="text" name="id" value="{{$_GET['id']}}">
      <button type="submit" class="btn btn-primary">Добавить</button>
      @csrf
    </form>
  </div>
    
@endsection