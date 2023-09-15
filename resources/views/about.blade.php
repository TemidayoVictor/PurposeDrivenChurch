@extends('layouts.baseLayout')

@section('title')
About Us
@endsection

@section('content')

    <section class="heading container flex">
        <div class="welcome-text">
            <h1>About Our Great House</h1>
            <p>Church motto, Watchword or Tagline</p>
        </div>
    </section>

    <section class="second flex container">
        <div class="image">
            <p>Image of Choice - something that can work here</p>
        </div>
        <div class="section-text">
            <h1>At The House of Purpose,</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <h3 class="title-3">Our Mission</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            <h3 class="title-3">Our Vision</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ipsum dolore porro possimus blanditiis facilis et impedit, repellendus labore eum amet doloribus eaque molestias vitae praesentium earum magni voluptas quo!</p>
            
            <div class="buttons">
                <a href="media.html" class="give" >Our Sermons</a>
            </div>
        </div>
    </section>

    <section class="tenets container">
        <h1 class="title">Our Tenets & Belief Systems</h1>
        <div class="tenets-container">
            <div class="content left filled">
                <h1 class="sub-title">Faith</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>

            <div class="content right">
                <h1 class="sub-title">Prayer</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>
        </div>

        <div class="tenets-container">
            <div class="content left">
                <h1 class="sub-title">The Blood of Jesus</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>

            <div class="content right filled">
                <h1 class="sub-title">Holy Ghost</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>
        </div>

        <div class="tenets-container mb-2">
            <div class="content left filled">
                <h1 class="sub-title">Evangelism</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>

            <div class="content right">
                <h1 class="sub-title">Discipleship</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, numquam ad! Unde voluptates enim laborum.</p>
            </div>
        </div>
    </section>

    <section class="pastors container">
        <h1 class="title">Meet Our Pastors</h1>
        <div class="pastors-container-box">
            
            <div class="content-pastor">
                <div class="image-pastor">
                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                    <div class="details-pastor flex">
                        <div class="text-details">
                            <h3>Pastor</h3>
                            <h3 class="name">OLANREWAJU NIYI</h3>
                            <h3>Senior Pastor, Purpose Driven Church</h3>
                        </div>
                        <a href="{{ route('pastorniyi') }}" class="inverted mobile-block">View Profile</a>
                    </div>
                </div>
            </div>

            <div class="content-pastor">
                <div class="image-pastor">
                    <img src="{{ asset('images/logo.jpg') }}" alt="">
                    <div class="details-pastor mama flex">
                        <a href="{{ route('pastorfunmi') }}" class="inverted mobile-block">View Profile</a>
                        <div class="text-details flex">
                            <h3 class="">Pastor</h3>
                            <h3 class="name">OLUFUNMI NIYI</h1>
                            <h3 class="">Senior Pastor, Purpose Driven Church</h3>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </section>

    <section class="department container">
        <h1 class="title">The Church Units</h1>
        <div class="department-container">
            <div class="department-content flex pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Music Team</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex reverse pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Protocol Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Media & Technical Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex reverse pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Sparkles Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Prayer Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex reverse pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Evangelism Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
            <div class="department-content flex pb-1">
                <div class="department-image">
                    <img src="images/logo.jpg" alt="">
                </div>
                <div class="department-details">
                    <h3>Follow-Up Unit</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus, modi inventore nemo ipsum amet maxime dolores repellat animi praesentium doloremque ut necessitatibus unde nisi facere. Ab ipsum fuga numquam totam, voluptas ad molestias. Atque quos corrupti, sit nisi temporibus quis.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="large-text container">
        <div class="border">
            <p>We Celebrate You!</p>
        </div>
    </section>

@endsection