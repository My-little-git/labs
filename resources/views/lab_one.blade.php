@extends('layouts/app')

@section('title')Лабораторная работа 1 @endsection

@section('content')
    <div class="container-xxl mt-5">
    <h3>Посты</h3>
    @foreach($posts as $post)
      <div class="card mt-4">
        <div class="card-header d-flex justify-content-between align-items-">
          <h5 class="card-title">{{$post->title}}</h5>
          <div class="card-edit">
            <a class="card-edit_pencil" href="{{route('edit_post', $post->id)}}">&#9998;</a>
            <a class="card-edit_pencil" href="{{route('del_post', $post->id)}}">&#10060;</a>
            <span class="font-weight-light">{{date_create($post->created_at)->Format('Y-m-d')}}</span>
          </div>
        </div>
        <div class="card-body">
          <p class="card-text">{{$post->message}}</p>
          <a data-toggle="collapse" href="#collapseExample{{$post->id}}" role="button" class="btn btn-primary" aria-expanded="false" aria-controls="collapseExample">Всего комментариев: {{$post->comments->count()}}</a>
        </div>
      </div>
      
      @auth
          <div class="collapse mt-2" id="collapseExample{{$post->id}}">
            <div class="card card-body">
              <h6 class="mb-3">Ваш комментарий</h6>
              <form action="#" method="POST">
                <div class="mb-3">
                  <h4>{{Auth::user()->name}}</h4>
                </div>
                <div class="mb-3">
                  <textarea name="text" class="form-control" placeholder="Комментарий" id="exampleFormControlTextarea1"
                    rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Отправить</button>
                @csrf
                <input name="post_id" class="d-none" type="text" value="{{$post->id}}">
                <input name="user_id" class="d-none" type="text" value="{{Auth::user()->id}}">
              </form>
            </div>
          </div>
      @endauth


      @foreach($post->comments as $comment)
      <div class="collapse mt-2" id="collapseExample{{$post->id}}">
        <div class="card card-body">
          <div class="d-flex justify-content-between">
            <h6>{{$comment->user->name}}</h6>
            <div>
              <a class="card-edit_pencil" href="{{route('edit_comment', 'id=' . $comment->id)}}">&#9998;</a>
              <a class="card-edit_pencil" href="{{route('del_comment', $comment->id)}}">&#10060;</a>
              <span class="font-weight-light">{{$comment->created_at}}</span>
            </div>
          </div>
          <p class="card-text">{{$comment->text}}</p>
        </div>
      </div>
      @endforeach
    @endforeach
      </div>
@endsection