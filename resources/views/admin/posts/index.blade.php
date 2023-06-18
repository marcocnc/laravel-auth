@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <table class="table">
            <thead>

              <tr>
                <th scope="col">
                    <a class="text-black text-decoration-none"
                    href="{{route('admin.orderby', ['direction' => $direction]) }}">ID</a>
                </th>
                <th scope="col">Name</th>
                <th scope="col">Technologies</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
                <th scope="col">Dettagli</th>
              </tr>

            </thead>

            <tbody>

              @foreach ($posts as $post)
                <tr>
                    <td>{{$post['id']}}</td>
                    <td>{{$post['name']}}</td>
                    <td>{{$post['technologies']}}</td>
                    @php
                        $start_date = date_create($post->start);
                        $end_date = date_create($post->end);
                    @endphp
                    <td>{{date_format($start_date, 'd/m/Y')}}</td>
                    <td>{{date_format($end_date, 'd/m/Y')}}</td>
                    <td>
                        <a class="btn btn-primary" href="">Vai</a>
                    </td>
                </tr>
              @endforeach

            </tbody>
          </table>

          <div>
            {{$posts->links()}}
          </div>
    </div>
@endsection
