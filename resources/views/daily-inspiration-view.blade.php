@extends('layouts.baseLayout')

@section('title')
Daily Inspiration
@endsection

@section('header')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>Daily Inspiration</h1>
            <p>With Purpose Driven Church</p>
        </div>
    </section>

@endsection

@section('content')
    <div class="inspiration no-shadow">
        @forelse ($devotions as $devotion)
            <div class="post mt-1">
                <h3>{{ $devotion->topic }}</h3>
                <div class="post-details flex bod-bot">
                    <p>{{ $devotion->dateuploaded }}</p>
                    <p><a href="{{ route('dailyInspirationToday', ['id' => $devotion->id]) }}" class="read">Read</a></p>
                </div>
            </div>
        @empty
            <div class="status-info">
                <p>Stay tuned. The Daily Inspiration will be available here.</p>
            </div>    
        @endforelse
        
        <div class="page-links flex" style="margin-top: 30px">
            {{ $devotions->links('pagination.pagination') }}    
        </div>

    </div>
@endsection





