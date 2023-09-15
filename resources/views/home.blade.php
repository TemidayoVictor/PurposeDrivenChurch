@extends('layouts.baseLayout')

@section('title')
Home
@endsection

@section('content')

    <section class="swiper hero-container">
        <div class="section swiper-wrapper">
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>
                
                <div class="image">
                    <img src="images/bible-1.jpg" alt="">
                </div>

            </section>
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>

                <div class="image">
                    <img src="images/bible-2.jpg" alt="">
                </div>

            </section>
            <section class="swiper-slide hero container">
                <div class="welcome-text">
                    <h1>Welcome to the House of Purpose</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt nihil praesentium dolorum similique fugiat nam pariatur.</p>
                    <div class="buttons">
                        <a href="{{ route('about') }}" class="inverted">Who we are</a>
                        <a href="#" class="inverted">Latest sermons</a>
                    </div>
                </div>

                <div class="image">
                    <img src="images/Jesus.jpg" alt="">
                </div>

            </section>
        </div>

        <div class="swiper-pagination"></div>
    </section>


    <section class="second flex container">
        <div class="image">
            <img src="images/jesus.jpg" alt="">
        </div>
        <div class="section-text">
            <h1>We Raise a People for Christ</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <div class="buttons">
                <a href="#" class="give" >Our Sermons</a>
            </div>
        </div>
    </section>

    <section class="faith container">
        <h1 class="title">Statement of Faith</h1>
        <p class="container">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse distinctio illo aliquid repellat libero iure beatae sed expedita quos quam, delectus est excepturi ducimus optio rerum voluptatibus cumque officia vel modi eligendi voluptate unde laudantium.</p>
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
                        <h3>The Breath of Life</h3>
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
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed labore adipisci ex, sint facere, ipsa culpa aut repudiandae nulla eligendi vel ea. Quasi nemo unde quaerat impedit necessitatibus odio amet.</p>
            <div class="buttons mt-1">
                <a href="give.html" class="give msg-btn mobile-block-inline mb-1" >Give online</a>
            </div>
        </div>

    </section>

@endsection