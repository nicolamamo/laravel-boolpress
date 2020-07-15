@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>tutti i post</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>titolo</th>
                        <th>slug</th>
                        <th>azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td>{{$post->slug}}</td>
                            <a class="btn btn-small" href="#">dettaglio</a>
                            <a class="btn btn-small" href="#">modifica</a>
                            <a class="btn btn-small "href="#">elimina</a>
                        </tr>

                    @empty
                        <tr>
                            <td colspan="4">
                            NON è PRESENTE ALCUN POST</td>
                        </tr>

                    @endforelse
                </tbody>

            </table>

        </div>

    </div>

</div>
@endsection
