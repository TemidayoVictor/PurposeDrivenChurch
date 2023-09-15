@extends('layouts.adminLayout')

@section('title')
    Upload Daily Inspiration
@endsection

@section('content')

    <section class="heading">
        <div class="welcome-text">
            <h1>Daily Inspiration</h1>
            <p>Add a new Devotional for Today</p>
        </div>
    </section>

    <div class="btn-container">
        <a href="{{ route('allDevotionals') }}" class="btn">View all Devotionals</a>
    </div>

    <div class="container">

        @if (session('status'))
            <div class="message success">
                <p>{{ session('status') }}</p>
            </div>
        @endif

        <form action="{{ route('addDevotional') }}" method="post">
            @csrf
            
            <div class="input-field">
                <label for="">Devotional Topic</label>
                <input type="text" name="topic" placeholder="Devotional Topic" value="{{ old('topic') }}" id="editor" style="@error('topic') border: 1px solid red; @enderror" required>
            </div>

            @error('topic')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Devotional Body</label>
                <textarea name="body" id="" cols="30" rows="10" placeholder="Body of Daily Inspiration" style="@error('body') border: 1px solid red; @enderror" required> {{ old('body') }} </textarea>
            </div>

            @error('body')
                <div class="message warning ">
                    <p>{{ $message }}</p>
                </div>
            @enderror

            <div class="input-field">
                <label for="">Prayer / Counsel</label>
                <textarea name="prayer" id="" cols="30" rows="10" placeholder="Prayer / Counsel"> {{ old('prayer') }} </textarea>
            </div>

            <input type="submit" value="Upload Devotional" class="btn">

        </form>
    </div>

@endsection

@section('scriptJs')
    <script>
        tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
        });
    </script>
@endsection