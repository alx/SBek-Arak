/*
 * jquery.elementStacks.
 * Stacks elements/images on top of each other with a funky transition.
 *
 * Jquery version of http://mootools.net/forge/p/elementstack 
 * by Oskar Krawczyk (http://nouincolor.com).
 *
 * Copyright (c) 2010 Marco Fucci
 * http://www.marcofucci.com
 *
 * Licensed under MIT
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Launch  : January 2010
 * Version : 1.0
 * Released: 10th Jan, 2010
 */

//START PLUGIN
(function($) {
    $.fn.elementStacks = function(options) {
        var opts = $.extend({}, $.fn.elementStacks.defaults, options);

        return this.each(function() {
            var pos, collapsed = false, stackItems = $(opts.items_selector, this).css({'z-index': 10});

            stackItems
                .each(function(index, img) {
                    $(img)
                        .attr('coords', this.offsetTop + ':' + this.offsetLeft)
                        .css({'top' : this.offsetTop, 'left' : this.offsetLeft });
												// Change position here to get everything going to the same place each time
                })
                .css({'position': 'absolute'})
                .click(function(e) {
                    var $this = $(this);
                    
                    if (!$this.attr('coords')) {
                        return;
                    };
                    
                    collapsed = !collapsed;
                    var target = (collapsed) ? $this.css({'z-index': 100}) : null;
                    $this.one('stackfinished', function() {
                        if (!target) {
                            stackItems.css({'z-index': 10});
                        }
                    });
                    stackItems.each(function(index, stackItem) {
                        setTimeout(function() {
                            $.fn.elementStacks.reStack.call($this, $(stackItem), collapsed, opts, target, index, index == stackItems.length -1);
                        }, opts.delay * index);
                    });
                });
        });
    };
    
    $.fn.elementStacks.defaults = {
        'items_selector': 'img',
        'rotationDeg': 20,
        'delay': 40,
        'duration': 900,
        'transaction': 'swing'
    };
    
    $.fn.elementStacks.random = function(min, max) {
        return Math.floor(Math.random() * (max - min + 1) + min);
    };
    
    $.fn.elementStacks.reStack = function(stackItem, collapsing, options, target, index, last) {
        var coords = (target ? target : stackItem).attr('coords').split(':');
        var rand = (collapsing ? $.fn.elementStacks.random(-options.rotationDeg, options.rotationDeg) : 0);
    
        var $that = this;
        stackItem.css({
            '-webkit-transform': 'rotate(' + rand + 'deg)',
            '-moz-transform': 'rotate(' + rand + 'deg)'
        }).animate({
                top: parseInt(coords[0]) + rand,
                left: parseInt(coords[1]) + rand
            }, options.duration,
            options.transaction,
           function() {
               if (last) {
                   $that.trigger('stackfinished');
               }
           }
        );
    };
})(jQuery);
//END PLUGIN


/*
 *    Easing Plugin (http://gsgd.co.uk/sandbox/jquery/easing/)
 *    NOT required but recommended.
*/
jQuery.extend(jQuery.easing, {
    easeOutBack: function (x, t, b, c, d, s) {
        if (s == undefined) s = 1.70158;
        return c*((t=t/d-1)*t*((s+1)*t + s) + 1) + b;
    }
});


//Usage
$('#wrapper').elementStacks({
    'transaction': 'easeOutBack'
});