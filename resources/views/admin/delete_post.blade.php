@extends ('layout')

@section('title', 'Блог - Главная')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>

        {{--                @include ('load')--}}

        <a href=" {{route('add_post_get')}} "> Добавить пост </a>
        <div class="card mb-4">
            <h2>Удаление постов</h2>
            <table class="table table-hover table-dark">
                <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                <a ></a>
                @foreach( $posts as $post)
                    <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->title}}</td>
                        <td>
                            <form action="/admin/edit_post/{{$post->id}}" method="get">
                          <input type="hidden" name="id" value="{{$post->id}}">--}}
                                <button type="submit" class="btn btn-outline-danger">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                {{ csrf_field() }}
                                {{ method_field('delete') }}
                                <input type="hidden" name="id" value="{{$post->id}}">
                                <button type="submit" class="btn btn-outline-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
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

    @section ('search')
        <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Курсы валют</h5>
                <div class="card-body">
                    @inject('currency', 'App\Get_currency')
                    {{ $currency->show_currency() }}<br>
                </div>
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
