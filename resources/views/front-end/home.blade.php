@include('front-end.includes.header')

<body>

<p class="t1">I'm Tanmoy Debnath</p>
<p class="t2">B.Sc in Computer Science and Engineering </p>

<img class="t3" src="{{ asset('/') }}/front-end/img/tdp.jpg"/>
<br/>
<br/>
<div id="marg">
    <p class="t4">About Me</p>
    <hr class="t5">
    <p class="p6">Love myself a lot. I don't want other people to decide who I am. I want to decide that for myself. My life motto is 'Do my best, so that I can't blame myself for anything'. I love that I have learned to trust people with my heart, even if it will get broken. I just find myself happy with the simple things. I am thankful to Almighty for everything he has provided for me.</p>

    <p class="p7">My skills</p>
    <hr class="t5">
    <div>
        <p style="color:#808080 ">HTML</p>
        <div class="container">
            <div style="color:#808080 " class="skills html">90%</div>
        </div>

        <p style="color:#808080 ">CSS</p>
        <div class="container">
            <div style="color:#808080 " class="skills css">90%</div>
        </div>

        <p style="color:#808080 ">JavaScript</p>
        <div class="container">
            <div style="color:#808080 " class="skills js">65%</div>
        </div>

        <p style="color:#808080 ">PHP</p>
        <div class="container">
            <div style="color:#808080 " class="skills php">60%</div>
        </div>
    </div>
    <p class="p7">I'm available in</p>
    <hr class="t6">

    <div class="new">

        <a href="#" target="_blank" class="fa fa-facebook"></a>
        <a href="#" target="_blank" class="fa fa-twitter"></a>
        <a href="#" target="_blank" class="fa fa-google"></a>
        <a href="#" target="_blank" class="fa fa-linkedin"></a>
        <a href="#" target="_blank" class="fa fa-youtube"></a>
        <a href="#" target="_blank" class="fa fa-instagram"></a>
    </div>
    <br/>
    <br/>
    <p class="p7">Contact Me</p>
    <hr class="tr7"/>
    <p class="p8">Lets get in touch. Send me a message:</p>

    <div id="tab">
        {{ Form::open(['route' => 'message-send', 'method'=>'POST']) }}
        <p class="p11">{{ $errors->has('name') ? $errors->first('name') : ' ' }}</p>
        <ul>

            <li> <input class="l1" type="text" name="name" placeholder="Name"> </li>
            <li> <input class="l1" type="text" name="mail" placeholder="Email"> </li>
            <li> <input class="l1" type="text" name="subject" placeholder="Subject">
            </li>
            <li><input class="l1" type="text" name="message" placeholder="Message"></li>

            <li>
                <button class="b1 btn-success" type="submit">
                   <a href="feedback" style="text-decoration: none; color: black;">
                       <span class="send" style="font-family: 'Bree Serif', serif; font-size: 20px; letter-spacing: 1px;">SEND MESSAGE</span>
                   </a>
                </button>
            </li>
        </ul>
        {{ Form::close() }}

    </div>
</div>
</body>
@include('front-end.includes.footer')
