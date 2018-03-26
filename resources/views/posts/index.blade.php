@php
    $title = __('Posts');
@endphp
@extends('layouts.default')
@section('content')
<div class="container">
    <h1>{{ $title }}</h1>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>{{ __('Name') }}</th>
                    <th>{{ __('Created') }}</th>
                    <th>{{ __('Updated') }}</th>
                </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>
                        <a href="{{ url('posts/'.$post->id) }}">{{ $post->name }}</a>
                    </td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                 </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection