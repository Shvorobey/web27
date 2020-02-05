@extends ('layout')

@section('title', 'Блог - Контакты')

@section('content')
    <h1 class="my-4">О нас <br> <hr>

        @if (isset($page))
            <small>{!! $page->text !!}</small>
        @else
            <p>Мы работаем над нашим описанием</p>
        @endif

    </h1>
@endsection

@section ('advertising')
    <!-- Advertising Widget -->
    <div class="card my-4">
        <h5 class="card-header">Мы в соц. сетях</h5>

        @inject('network', 'App\Social_network')
        <div>

            Категории: <br> {{ $network->show_social_network() }}

        </div>
    </div>
@endsection
