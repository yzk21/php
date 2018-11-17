@extends('layouts.default')

@section('title','$post->title')
@endsection('content')
<h1>
    <a href="{{ url('/') }}" class="header-menu">Back</a>
    {{ $post->title }}
</h1>
    <p>{!! n12br(e($post->body)) !!}</p>
    
<h2>comments</h2>
<ul>
                @forelse ($post->comments as $comment)
               <li>
                   {{ $comment->body }}
               </li>
                @empty
                <li>No comments yet</li>
                @endforelse
            </ul>
@endsection

