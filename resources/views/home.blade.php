@extends('layouts.default')

@section('scripts')
    <a href="https://twitter.com/naybrmusic" class="twitter-follow-button" data-show-count="false" data-size="large"
       data-dnt="true">Follow @naybrmusic</a>
    <script>!function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
            if (!d.getElementById(id)) {
                js = d.createElement(s);
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore(js, fjs);
            }
        }(document, 'script', 'twitter-wjs');</script>

@stop
@section('content')
    <header class="site-header">
        {{--<div class="soundcloud__controls">--}}
        {{--<button class="soundcloud__control" id="prev"><span class="icon-prev"></span></button>--}}
        {{--<button class="soundcloud__control" id="play"><span class="icon-play"></span></button>--}}
        {{--<button class="soundcloud__control" id="next"><span class="icon-next"></span></button>--}}
        {{--</div>--}}
        <ul class="social-navi">
            <li>
                <a href="https://soundcloud.com/naybr" target="_blank" class="icon-soundcloud"></a>
            </li>
            <li>
                <a href="https://twitter.com/naybrmusic" target="_blank" class="icon-twitter"></a>
            </li>
            <li>
                <a href="https://www.facebook.com/naybrmusic" target="_blank" class="icon-facebook"></a>
            </li>
            <li>
                <a href="https://instagram.com/naybrmusic/" target="_blank" class="icon-instagram"></a>
            </li>
            <li>
                <a href="https://www.dropbox.com/sh/ofbjl10wfmhyh26/AABh_tG9noS3C3IvcfPJ8LD5a?dl=0" target="_blank"
                   class="btn-epk">EPK</a>
            </li>
        </ul>
    </header>

    <div class="background-image">

    </div>

    <div class="site-container">
        <section class="fold">
            <figure class="logo">
                <img src="/img/logo_naybr_2016.svg" alt="Naybr Music Logo">
            </figure>
            <div class="album">
                <figure class="album__artwork">
                    <img src="/img/image_savageEP.png" width="" alt="">
                </figure>
            </div>
            <div class="album__buttons">
                <div class="row">
                    <a href="https://itunes.apple.com/us/album/savage-ep/id1108152582#"
                       class="album__buttons__button"> <img src="/img/bttn_itunes.svg" alt=""> </a>
                    {{--<a href="https://itunes.apple.com/us/album/savage-ep/id1108152582" class="album__buttons__button"> <img src="/img/bttn_applemusic.svg" alt=""> </a>--}}
                </div>
                <div class="row">
                    <a href="https://twitter.com/naybrmusic" class="twitter-follow-button" data-show-count="false"
                       data-size="large" data-dnt="true">Follow @naybrmusic</a>
                    <iframe src="https://embed.spotify.com/follow/1/?uri=spotify:artist:2pjQGnHCgkxnrPEbEQ1VeD&size=basic&theme=dark&show-count=0"
                            width="92" height="25" scrolling="no" frameborder="0" style="border:none; overflow:hidden;"
                            allowtransparency="true"></iframe>
                </div>
            </div>
        </section>
        <section class="" , style="background-color: #0f0f0f;">
            <div class="soundcloud__embed">
                <iframe width="100%" height="340" scrolling="yes" frameborder="no"
                        src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/115820844&amp;auto_play=false&amp;hide_related=true&amp;show_comments=false&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
            </div>
        </section>

        <div class="site-footer">
            <p class="copyright">COPYRIGHT &copy; {{date('Y')}} NAYBRMUSIC</p>
            <p>CONTACT: <a href="mailto:naybrmusic@gmail.com">NAYBRMUSIC@GMAIL.COM</a></p>
        </div>

    </div>
@stop
