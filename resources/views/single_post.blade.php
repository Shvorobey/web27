@extends ('layout')

@section('title', 'Блог - Главная')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>

        @include ('load')

        <div class="card mb-4">
                <img class="card-img-top" src="{{$post->img}}" alt="Card image cap">
                <div class="card-body">
                    <h2 class="card-title" style="color:#008000">{{$post->title}}</h2>
                    <p class="card-text">{{$post->body}} ...</p>
                </div>
                <div class="card-footer text-muted">
                    Создан: {{$post->created_at}} <br>
                    Автор: <a href="{{route('posts_by_autor', $post->author->key)}}">{{$post->author->name}}</a>
                    Категории:
                    @foreach($post->categories as $category)

                        <a href="{{route('posts_by_category', $category->key)}}">{{$category->categories}}   </a>
                    @endforeach
                </div>
            </div>
    </div>
@endsection

@section ('categories')
    <!-- Categories Widget -->
    <div class="card my-4">
        <h5 class="card-header">Категории:</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-unstyled mb-0">
                        @inject('categories', 'App\Category_for_sidebar')
                        <div>
                            {{ $categories->show_category() }}<br>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection

@section ('autors')
    @if(Auth::check())
        <!-- Categories Widget -->
        <div class="card my-4">
            <h5 class="card-header">Мы в соц. сетях</h5>
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-unstyled mb-0">
                            @inject('networks', 'App\Show_social_networks')
                            <div>
                                {{ $networks->show_social_network() }}<br>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
@endsection



    @section ('advertising')
        <!-- Advertising Widget -->
            <div class="card my-4">
                <h5 class="card-header">Рекламный блок</h5>
                <div class="card-body">
                    <strong style="color:#ff0000"> Покупайте наших слонов </strong>
                </div>
            </div>
@endsection
