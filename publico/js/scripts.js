$('img').hide().one("load",function(){
    $(this).fadeIn(1000);
}).each(function(){
    if(this.complete) $(this).trigger("load");
});







	$('#s2').cycle({ 
    fx:     'fade',
    speed:  'slow', 
    timeout: 10000, 
    next:   '#next', 
    prev:   '#prev' 
});

            $('#s3').cycle({ 
    fx:     'scrollLeft', 
    speed:  'slow', 
    timeout: 8000, 
     next:   '#next', 
    prev:   '#prev' 
  
});

			Shadowbox.init({
				language : 'pt',
				player : ['img', 'html', 'swf']
			});



// Avoid `console` errors in browsers that lack a console.
(function() {
    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.
