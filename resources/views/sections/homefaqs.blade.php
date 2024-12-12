<style>
    @import url("https://fonts.googleapis.com/css?family=Hind:300,400&display=swap");

    * {
        box-sizing: border-box;
    }

    *::before,
    *::after {
        box-sizing: border-box;
    }


    .accordion-container {
        margin: 0 auto;
        padding: 4rem;
        width: 48rem;
        max-width: 100%;
    }

    .accordion .accordion-item {
        border-bottom: 1px solid var(--orange);
    }

    .accordion .accordion-item button[aria-expanded=true] {
        border-bottom: 1px solid var(--orange);
    }

    .accordion button {
        font-family: var(--philosopher);
        position: relative;
        display: block;
        text-align: left;
        width: 100%;
        padding: 1em 0;
        color: #fffc;
        font-size: 1.15rem;
        font-weight: 400;
        border: none;
        background: none;
        outline: none;
    }

    .accordion button:hover,
    .accordion button:focus {
        cursor: pointer;
        color: var(--orange);
    }

    .accordion button:hover::after,
    .accordion button:focus::after {
        cursor: pointer;
        color: #03b5d2;
        border: 1px solid #03b5d2;
    }

    .accordion button .accordion-title {
        padding: 1em 1.5em 1em 0;
    }

    .accordion button .icon {
        display: inline-block;
        position: absolute;
        top: 18px;
        right: 0;
        width: 22px;
        height: 22px;
        border: 1px solid;
        border-radius: 22px;
    }

    .accordion button .icon::before {
        display: block;
        position: absolute;
        content: "";
        top: 9px;
        left: 5px;
        width: 10px;
        height: 2px;
        background: currentColor;
    }

    .accordion button .icon::after {
        display: block;
        position: absolute;
        content: "";
        top: 5px;
        left: 9px;
        width: 2px;
        height: 10px;
        background: currentColor;
    }

    .accordion button[aria-expanded=true] {
        color: var(--orange);
    }

    .accordion button[aria-expanded=true] .icon::after {
        width: 0;
    }

    .accordion button[aria-expanded=true]+.accordion-content {
        opacity: 1;
        max-height: 13em;
        transition: all 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content {
        opacity: 0;
        max-height: 0;
        overflow: hidden;
        transition: opacity 200ms linear, max-height 200ms linear;
        will-change: opacity, max-height;
    }

    .accordion .accordion-content p {
        font-size: 1rem;
        font-weight: 300;
        margin: 2em 0;
        color: #fff;
        word-spacing: 0.2em;
        font-family: var(--ptext);
    }
</style>

@include('mini.parallax', ['name' => 'FAQs', 'random' => rand(1, 18)])
<div class="accordion-container">
    <div class="accordion">

        @php
            $faqs = [
                ['Where is The Truvision based?', 'Truvision is based in Bhopal, MP, India.'],
                ['Do you travel worldwide?', 'We cover PAN India, Destination coverages - Rajasthan, Udaipur, Goa, Jaipur. We have a team to cater to international wedding coverages like Thailand, Bangkok, Switzerland, Turkey, Dubai.'],
                ['Is Truvision into wedding planning or just coverage?', 'Currently, we are only into coverage (photos and videos) but having worked with some of the top wedding management teams, we are happy to suggest some names at no extra cost. We are into wedding photography & video coverages.'],
                ['Is there a need to hire another photographer?', 'No, we have in-house sufficient professional teams, who are highly expert in their respective (photography & videography) fields. They have huge experience of their expertise.'],
                ['What is a pre-wedding shoot and how do we go about it?', "A pre-wedding shoot is a photo/video shoot of the couple done before the wedding that portrays the bond they share with each other. Since the wedding is a hectic time to be together, the couple get this day off with each other to shoot some 'Relaxed, Together & Fun' images and videos and these can be used in the highlight film or as a separate two-minute pre-wedding film that can be shown during the sangeet or the wedding."],
                ['When and where should the audio bytes be ideally recorded?', 'Anywhere with silence in the background. Any time during the wedding. We can also do any interviews/audio bytes before and after the wedding. At any convenient time of the couple/family. These bytes can be used in making a good cinematic film.'],
            ];
        @endphp

        @foreach ($faqs as $faq)
            <div class="accordion-item">
                <button id="accordion-button-1" aria-expanded="false"><span
                        class="accordion-title">{{ $faq[0] }}</span><span class="icon"
                        aria-hidden="true"></span></button>
                <div class="accordion-content">
                    <p>{{ $faq[1] }}</p>
                </div>
            </div>
        @endforeach
    </div>
    {{-- <center>
        @include('mini.anchor', ['name' => 'View More...'])
    </center> --}}
</div>


<script>
    const items = document.querySelectorAll(".accordion button");

    function toggleAccordion() {
        const itemToggle = this.getAttribute('aria-expanded');

        for (i = 0; i < items.length; i++) {
            items[i].setAttribute('aria-expanded', 'false');
        }

        if (itemToggle == 'false') {
            this.setAttribute('aria-expanded', 'true');
        }
    }

    items.forEach(item => item.addEventListener('click', toggleAccordion));
</script>
