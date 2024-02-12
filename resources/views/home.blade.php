@extends('layouts.baseLayout')

@section('title')
Home
@endsection

@section('content')

    <section class="swiper hero-container">
        <div class="section swiper-wrapper">
            <section class="swiper-slide hero container" style="background-image:linear-gradient(to right, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{ asset('images/2.png') }}); background-repeat: no-repeat; background-size: cover; background-position: top; Background-attachment: fixed">
                <div class="welcome-text">
                    <h1>Welcome Home </h1>
                    <p>We are a Vibrant Church deeply rooted in our knowledge of the lordship of Jesus </p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="{{ route('messages') }}" class="inverted">Latest sermons</a>
                    </div>
                </div>
            </section>

            <section class="swiper-slide hero container" style="background-image:linear-gradient(to right, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{ asset('images/5.png') }}); background-repeat: no-repeat; background-size: cover; background-position: top; Background-attachment: fixed">
                <div class="welcome-text">
                    <h1>We live the Gospel </h1>
                    <p>We ensure that Jesus resonates with every culture and society, all while upholding the foundational truths of Scripture. </p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="{{ route('messages') }}" class="inverted">Latest sermons</a>
                    </div>
                </div>
            </section>

            <section class="swiper-slide hero container" style="background-image:linear-gradient(to right, rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url({{ asset('images/6.png') }}); background-repeat: no-repeat; background-size: cover; background-position: top; Background-attachment: fixed">
                <div class="welcome-text">
                    <h1>We are builders</h1>
                    <p>We are committed to fostering a community of believers as transformative agents. </p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="{{ route('messages') }}" class="inverted">Latest sermons</a>
                    </div>
                </div>
            </section>

        </div>

        <div class="swiper-pagination"></div>
    </section>


    <section class="second flex container">
        <div class="image">
            <img src="images/logo.jpg" alt="">
        </div>
        <div class="section-text">
            <h1>We Raise a People for Christ</h1>
            <p>PDC Global is a church established by God to raise people of purpose, passion, and power. We are not just another church down the street, we are driven by an unusual and uncommon passion for lost souls.  We are very strategic in our approach through deliberate discipleship, reaching the unchurched and those who are hurting in our society.  We recognized our prophetic destiny in the book of Isaiah 61:1-3 and 2 Timothy 1:8-11. </p>
            <div class="buttons">
                <a href="{{ route('messages') }}" class="give" >Our Sermons</a>
            </div>
        </div>
    </section>

    <section class="faith container">
        <h1 class="title">Statement of Faith</h1>
        <p class="container">Our testimony is the grace bestowed on us to cut Across every sector of society with centres in both cosmopolitan and metropolitan areas and contextualize the gospel, believing that Jesus can resonate with any culture or society without compromising the foundational truths of Scripture.</p>
    </section>

    <section class="expressions container">
        <h1 class="title">Our expressions</h1>
        <div class="expressions-container">
            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Vantage Hub</h3>
                        <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis culpa adipisci sed corporis nihil sunt odit accusantium impedit totam quos.</p>
                        <a href="{{ route('tvh') }}" class="btn">Read More</a>
                    </div>
                </div>
            </div>

            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Lifegate Institute</h3> 
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque obcaecati unde nemo odit quibusdam temporibus deleniti ad distinctio aut.</p>
                        <a href="{{ route('lgi') }}" class="btn">Read More</a>
                    </div>
                </div>
                
            </div>
            
            <div class="expression-box">
                <div class="expression-image">
                    <img src="images/logo.jpg" alt="">
                    <div class="expression-content flex">
                        <h3>The Life Gate Church </h3>
                        <p class="">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos eaque obcaecati unde nemo odit quibusdam temporibus deleniti ad distinctio aut.</p>
                        <a href="{{ route('bol') }}" class="btn">Read More</a>
                    </div>
                </div>
                
            </div>
        </div>
    </section>

    <section class="month flex container">
        <div class="month-content">
            <h1>{{ $utility->title }}</h1>
            <p>{{ $utility->subtopic }}</p>
            <p>Anchor Scripture: " {{ $utility->body }} "</p>
        </div>

        <div class="month-image">
            <img src="{{ asset('images/'.$utility->image) }}" alt="">
        </div>
    </section>

    <section class="give-online flex container">
        
        <div class="give-image">
            <img src="images/logo.jpg" alt="">
        </div>
        
        <div class="give-content">
            <h1>Put Your Money where Your Faith is</h1>
            <p>Giving transcends mere financial transactions; it's about investing—both emotionally and materially—in what resonates with your core values. <br><br>Every decision to allocate your resources to the kingdom becomes a testament to your convictions. It's a transformative act that amplifies your voice, signaling a commitment that goes beyond words. <br><br> After all, when you align your resources with your faith, you're not just spending; you're making a statement, shaping a legacy, and, most importantly, living a life of purpose and integrity. </p>
            <div class="buttons mt-1">
                <a href="{{ route('give') }}" class="give msg-btn mobile-block-inline mb-1" >Give online</a>
            </div>
        </div>

    </section>

@endsection