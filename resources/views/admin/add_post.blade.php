@extends ('layout')

@section('title', 'Блог - Главная')
@section('content')
    <div class="col-md-8">
        <h1 class="my-4" style="color:#C71585">Добро пожаловать<br>
            <small>Пожалуй, самый лучший в мире блог</small>
        </h1>
    </div>


    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

<form action="add_post" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
    <h1>Добавить пост</h1>
    <input type="text" placeholder="author_name" name="author_name" value="{{old('author_name')}}"><br>
    <input type="text" placeholder="title" name="title" value="{{old('title')}}"><br>
    <textarea placeholder="body" name="body">{{old('body')}}</textarea><br>
    <input type="file" name="image"><br>
    <input type="submit" value="Сохранить">
</form>

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