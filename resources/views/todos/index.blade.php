@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Todoリスト</h1>
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>タイトル</td>
          <td>メモ</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($todos as $todo)
        <tr>
            <td>{{$todo-> id}}</td>
            <td>{{$todo-> title}}</td>
            <td>{{$todo-> memo}}</td>
            <td>
                <a href="{{ route('todos.edit',$todo->id)}}" class="btn btn-primary">編集</a>
            </td>
            <td>
                <form action="{{ route('todos.destroy', $todo->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">完了</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection