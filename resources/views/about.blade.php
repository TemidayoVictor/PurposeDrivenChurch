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
            <img src="images/logo.jpg" alt="">
        </div>
        <div class="section-text">
            <h1>At The House of Purpose,</h1>
            <p>PDC Global is a cosmopolitan and metropolitan church, anchored in the lordship of Jesus Christ. Our influence expands through the transformative impact of the Gospel and deliberate discipleship. We serve as a divine platform nurturing purpose-driven, passionate, and empowered individuals.</p>
            <h3 class="title-3">Our Mission</h3>
            <p>Our mission is to preach the gospel of Christ Jesus to all men and build men who will eventually build society through the wisdom of God</p>
            <h3 class="title-3">Our Vision</h3>
            <p>The vision of Purpose Driven Church Intl is to cultivate a community of believers who serve as transformative agents in every aspect of life. 2 Timothy 1:8-11, Isaiah 61:1-3, and Ephesians 2:8-10.</p>
            
            <div class="buttons">
                <a href="{{ route('messages') }}" class="give" >Our Sermons</a>
            </div>
        </div>
    </section>

    <section class="tenets container">
        <h1 class="title">Our Tenets & Belief Systems</h1>
        <div class="tenets-container">
            <div class="content left filled">
                <h1 class="sub-title"> 1. The Birth and Lordship of Jesus Christ</h1>
                <p>We firmly believe that Jesus was miraculously conceived and born to the virgin Mary, fulfilling prophecies such as those found in Isaiah 9:6-7 and Matthew 1:18-25.</p>
            </div>

            <div class="content right">
                <h1 class="sub-title"> 2. The Holy Spirit's Role</h1>
                <p>We embrace the promised Holy Spirit as God's precious gift to His church. We affirm the baptism of believers in the Holy Spirit, evidenced by speaking in tongues.</p>
            </div>
        </div>

        <div class="tenets-container">
            <div class="content left filled">
                <h1 class="sub-title"> 3. Foundational Practices and Events</h1>
                <p>Our beliefs encompass a range of practices and events essential to our faith. These include healing, laying on of hands, baptism by immersion, resurrection from the dead, and the second coming of our Lord Jesus Christ.</p>
            </div>

            <div class="content right">
                <h1 class="sub-title"> 4. Judgment and Divine Gifts</h1>
                <p>We hold to the doctrines of the white throne judgment and the judgment seat of Christ, as described in Revelation 20:10-11, 2 Corinthians 5:10, Romans 14:10-12, and 1 Corinthians 3:10-15. </p>
            </div>
        </div>

        <div class="tenets-container mb-2">
            <div class="content left filled">
                <h1 class="sub-title"> 5. Evangelism and Faith</h1>
                <p> Central to our mission is the fervent commitment to reach the lost, and the unchurched, and to establish believers in the gospel of Christ.</p>
            </div>

            <!--<div class="content left">-->
            <!--    <h1 class="sub-title"></h1>-->
            <!--    <p> </p>-->
            <!--</div>-->
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

    {{-- <section class="department container">
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
    </section> --}}

    <section class="large-text container">
        <div class="border">
            <p>We Celebrate You!</p>
        </div>
    </section>

@endsection