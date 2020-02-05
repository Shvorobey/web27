@extends ('layout')

@section('title', 'Блог - О нас')
@section('content')
    <h1 class="my-4">О нас <br></h1>
    <hr>
    @if (\Auth::check ())
        <ul class="pagination justify-content-center mb-4">
            <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
            <li class="page-item"><a class="page-link" href="#"> Редактировать категории </a></li>
            <li class="page-item"><a class="page-link" href="#"> Редактировать соц. сети </a></li>
        </ul>
        <form align="center">
            <input type="text" name="key" > Ключ
            <input type="text" name="caterories" > Название
            <input type="submit" value="Добавить">
        </form>
        <hr>
        <form align="center">
            <table bordercolor="blue" align="center">
                <tr>
                    <th>Id</th>
                    <th>Ключ</th>
                    <th>Название</th>
                    <th></th>
                </tr>
                @foreach($categories as $caregory)
                    <tr>
                        <td>{{$caregory->id}} </td>
                        <td><input type="text" value="{{$caregory->key}}"></td>
                        <td><input type="text" value="{{$caregory->categories}}"></td>
                        <td><input type="button" value="Delete"></td>
                    </tr>
                @endforeach
            </table>
            <input type="submit" value="Save all">
        </form>
    @endif
