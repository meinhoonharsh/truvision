@php
    $services = [
        [
            'title' => 'Customize Gifting',
            'features' => [
                'Personalized photo gifts',
                'Unique designs for special occasions',
                'Custom frames and keepsakes',
                'Wide range of gift options',
            ],
            'image' => '/static/assets/images/services/1.svg',
        ],
        [
            'title' => 'Wedding Shoots',
            'features' => [
                'Professional wedding photography',
                'Engagement and pre-wedding shoots',
                'Candid and traditional styles',
                'High-quality photo and video packages',
            ],
            'image' => '/static/assets/images/services/2.svg',
        ],
        [
            'title' => 'Event Photography',
            'features' => [
                'Coverage for corporate and social events',
                'Expert photographers and videographers',
                'Fast turnaround on event photos',
                'On-site printing and digital copies available',
            ],
            'image' => '/static/assets/images/services/3.svg',
        ],
        [
            'title' => 'Printing',
            'features' => [
                'Custom photo albums',
                'High-quality poster prints',
                'Canvas and fine art printing',
                'Options for sizes and finishes',
            ],
            'image' => '/static/assets/images/services/4.svg',
        ],
    ];

@endphp
<style>
    :root {
        /* --primary: #631A51;
  --secondary: #992959;*/
        --primary: #061621;
        --secondary: #0d3149;
        --orange: #FFB250;
        --green: #85A562;
        --blue: #3D5189;


        --royal: blackchancery;
        /* --ptext:'Lobster Two', cursive; */
        --ptext: 'roboto';
        --philosopher: 'Philosopher', sans-serif;
    }

    .contentdiv {
        padding: 50px 0;
    }

    .servicebox {
        background: var(--primary);
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 3px var(--orange);
        margin-bottom: 20px;
        transition: all 0.3s;
    }

    .servicebox:hover {
        box-shadow: 0 0 5px var(--orange);
    }

    .serviceimg {
        text-align: center;
    }

    .serviceimg img {
        width: 50%;
        margin: 1em auto;
        min-height: 50px;
        aspect-ratio: 16/9;
    }

    .servicetitle h3 {
        color: var(--orange);
        font-family: var(--philosopher);
        font-size: 1.4em;
        text-align: center;
        margin: 1em 0;
    }

    .servicefeatures ul {
        list-style: none;
        padding: 0;
        text-align: center;
    }

    .servicefeatures ul li {
        color: white;
        font-family: var(--ptext);
        opacity: 0.8;
        font-size: 1em;
        text-align: center;
        margin: 0.5em 0;
    }
</style>
@include('mini.parallax', ['name' => 'Services', 'random' => rand(1, 18)])

<div class="contentdiv container" id="services">
    <div class="row">
        @foreach ($services as $service)
            <div class="col-md-3">
                <div class="servicebox">
                    <div class="serviceimg">
                        <img src="{{ asset($service['image']) }}" alt="{{ $service['title'] }}">
                    </div>
                    <div class="servicetitle">
                        <h3>{{ $service['title'] }}</h3>
                    </div>
                    <div class="servicefeatures">
                        <ul>
                            @foreach ($service['features'] as $feature)
                                <li>{{ $feature }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>

<script></script>
