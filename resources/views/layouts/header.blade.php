
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-xxl">
    <a class="navbar-brand" href="{{route('home')}}">Лабораторные работы</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link" href="{{route('lab_one')}}">Лаба 1</a>
        <a class="nav-link" href="{{route('lab_two')}}">Лаба 2</a>
        <a class="nav-link disabled" href="{{route('lab_three')}}">Лаба 3</a>
        <a class="nav-link" href="{{route('lab_four')}}">Лаба 4</a>
        <a class="nav-link disabled" href="{{route('lab_five')}}">Лаба 5</a>
      </div>
    </div>
  </div>
</nav>
