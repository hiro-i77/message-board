@extends('layouts.app')

@section('content')

    <h1>メッセージ一覧</h1>
    
    @if (count($messages) > 0)
        <ul>
            @foreach ($messages as $message)
                <!-- 追加 -->
                <li>{!! link_to_route('messages.show', $message->id, ['id' => $message->id]) !!} : {{ $message->title }} > {{ $message->content }}</li>
            @endforeach
        </ul>

    @endif
    @if (count($messages) >= 0)
        {!! link_to_route('messages.create', 'メッセージの新規作成') !!}
    @endif    

@endsection