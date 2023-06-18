@extends('layouts.app')

@section('content')
    <div class="container pt-5">
        <table class="table">
            <thead>

              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Technologies</th>
                <th scope="col">Start</th>
                <th scope="col">End</th>
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
                </tr>
              @endforeach

            </tbody>
          </table>

          <div>
            {{$posts->links()}}
          </div>
    </div>
@endsection
