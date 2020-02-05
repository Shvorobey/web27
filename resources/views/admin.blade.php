@extends ('layout')

@section('title', 'Блог - О нас')
@section('content')
    <h1 class="my-4">О нас <br></h1>
    <hr>
    @if (\Auth::check ())
    <ul class="pagination justify-content-center mb-4">
        <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
        <li class="page-item"><a class="page-link" href="{{route('admin_category')}}"> Редактировать категории </a></li>
        <li class="page-item"><a class="page-link" href="#"> Редактировать соц. сети </a></li>
    </ul>
    @endif
@endsection