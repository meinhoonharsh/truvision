<style>
    .contentdiv .about-p {
        font-family: var(--ptext);
        font-size: 1.2em;
        text-align: center !important;
        color: #fffc;
        word-spacing: 0.4;
    }

    
    .containergallery {
            font-family: var(--ptext);
            max-width: 950px;
            position: relative;
            margin: 0 auto;
            text-align: center;
            word-spacing: 0.4em;
            font-size: 1.2em;
            color: #fff9;
        }


        @media screen and (max-width: 768px) {
            .containergallery {
                margin: 20px auto;
                width: 95%;
            }
        }
</style>
<div  id="about"></div>
@include('mini.parallax', ['name' => 'About', 'random' => rand(1, 18)])

<div class="contentdiv">

    <div class="containergallery" style="border:none">

        <center style=" margin-bottom:20px;"><span
            style="font-family:var(--philosopher);font-size:2.2em !important;color:#fff">Sweet Memories Fade,
            Truvision Picture revives</span></center>
    <span class="about-p" style="line-height:1.4em">
        Truvision aims to deliver actual candid moments that will stay with you forever. Getting hitched is pretty
        special stuff, so we take an invite to your big day seriously !
        <br> We celebrate every story by being non-intrusive yet in the middle of the action !

        Our Beautiful images that caputure your life are not seen, nor touched, but are felt in the heart and to be
        cherished forever.


    </span>
        <hr class="type_1"
            style="
            border: 0;
            height: 55px;
            width: 100%;
            background-size: contain;
            aspect-ratio: 452/28;
            margin:6% 0;
            background-repeat: no-repeat;
            background-image: url('/static/assets/images/hrules/1.png') ;
            ">
        <div class="row my-3">
            
        <center style=" margin-bottom:20px;"><span
            style="font-family:var(--philosopher);font-size:1.2em !important;color:#fff">

            Thank you for Trusting us with your most precious Memories <br>
            <span style="color:var(--orange)">"Quality is Never an Accident"</span> <br>
            It is always the result of High Intention, Sincere Efforts, Intelligent Direction and Skillful
            Execution, It represents the Wise Choice of many Alternatives
        </span></center>
        </div>
    </div>



</div>
