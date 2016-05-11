(function () {
    var iframeElement = $('iframe')[0];
    var widget = SC.Widget(iframeElement);
    var $controlWrap = $('.soundcloud__controls');
    var $prevBtn = $controlWrap.find('#prev');
    var $playBtn = $controlWrap.find('#play');
    var $nextBtn = $controlWrap.find('#next');

    widget.bind(SC.Widget.Events.READY, function () {
        var $el = $playBtn.find('span');
        var playClass = 'icon-play';
        var pauseClass = 'icon-pause';

        $controlWrap.removeClass('invisible');
        
        $playBtn.on('click', function () {
            widget.toggle();
        });

        $prevBtn.on('click', function () {
            widget.prev();
        });

        $nextBtn.on('click', function () {
            widget.next();
        });
        
        widget.bind(SC.Widget.Events.PLAY, function () {
            $el.removeClass(playClass);
            $el.addClass(pauseClass);
            
            widget.getCurrentSound(function (currentSound) {
                // var art = 'url(' + currentSound.artwork_url + ')';
                // $('.site-container').css('background-image', art);
                // console.log(art);
            });
        });

        widget.bind(SC.Widget.Events.PAUSE, function () {
            $el.removeClass(pauseClass);
            $el.addClass(playClass);
        });
    });
}());
