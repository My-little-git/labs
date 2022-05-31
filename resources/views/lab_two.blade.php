@extends('layouts/app')

@section('title')Создать пост@endsection

@section('content')

  <div class="container-xxl mt-5">
    <h3>Добавить новый пост</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="exapleFormControlInput1" class="form-label">Тема</label>
        <input type="text" class="form-control" id="exapleFormControlInput1" name="title">
      </div>
      <div class="mb-3">
        <label for="exapleFormControlTextarea1" class="form-label">Текст сообщения</label>
        <textarea class="form-control" id="exapleFormControlTextarea1" rows="3" name="message"></textarea>
      </div>
      <button type="submit" class="btn btn-primary">Добавить</button>
      @csrf
    </form>
  </div>
    
@endsection