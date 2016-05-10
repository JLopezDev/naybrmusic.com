@extends('layouts.default')

@section('content')
    <div class="site-container">
        <figure class="symbol">
            <img src="/img/symbol.svg" alt="">
        </figure>

        <figure class="logo">
            <img src="/img/logo_naybr_white.svg" alt="Naybr Music Logo">
        </figure>
        <div class="soundcloud-embed">
            <iframe width="100%" height="300" scrolling="no" frameborder="no"
                    src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/playlists/115820844&amp;auto_play=false&amp;hide_related=true&amp;show_comments=true&amp;show_user=true&amp;show_reposts=true&amp;visual=true"></iframe>
        </div>
    </div>
    <footer class="site-footer">
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
    </footer>

@stop
