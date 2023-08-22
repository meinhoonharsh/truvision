<style>
    .contentdiv p {
        font-family: var(--ptext);
        font-size: 1.5em;
        text-align: center !important;
        color: #fffc;
        word-spacing: 0.4;
    }
</style>
@include('mini.parallax', ['name' => 'About', 'random' => rand(1, 18)])
<div class="contentdiv">
    <div class="container-80">
        <center style=" margin-bottom:20px;"><span
                style="font-family:var(--philosopher);font-size:2.2em !important;color:#fff">Sweet Memories Fade,
                Truvision Picture revives</span></center>
        <p style="line-height:1.4em">
            Truvision aims to deliver actual candid moments that will stay with you forever. Getting hitched is pretty
            special stuff, so we take an invite to your big day seriously !
            <br> We celebrate every story by being non-intrusive yet in the middle of the action !

            Our Beautiful images that caputure your life are not seen, nor touched, but are felt in the heart and to be
            cherished forever.


        </p>
        <center>
            {{-- {{ anchor('View More...', '#') }} --}}
        </center>


    </div>
</div>
