if($(window).width()>1024){!function(e){var t,i=[],a=!1,r=!1,n={interval:250,force_process:!1},o=e(window);function s(){r=!1;for(var a=0;a<i.length;a++){var n=e(i[a]).filter(function(){return e(this).is(":appeared")});if(n.trigger("appear",[n]),t){var o=t.not(n);o.trigger("disappear",[o])}t=n}}e.expr[":"].appeared=function(t){var i=e(t);if(!i.is(":visible"))return!1;var a=o.scrollLeft(),r=o.scrollTop(),n=i.offset(),s=n.left,c=n.top;return c+i.height()>=r&&c-(i.data("appear-top-offset")||0)<=r+o.height()&&s+i.width()>=a&&s-(i.data("appear-left-offset")||0)<=a+o.width()},e.fn.extend({appear:function(t){var o=e.extend({},n,t||{}),c=this.selector||this;if(!a){var d=function(){r||(r=!0,setTimeout(s,o.interval))};e(window).scroll(d).resize(d),a=!0}return o.force_process&&setTimeout(s,o.interval),i.push(c),e(c)}}),e.extend({force_appear:function(){return!!a&&(s(),!0)}})}(jQuery);var isMobile=!1;!function(e){"use strict";e(function(){function t(){e(".animated:appeared").each(function(t){var i=e(this),a=e(this).data("animated");setTimeout(function(){i.addClass(a)},100*t)})}(navigator.userAgent.match(/Android/i)||navigator.userAgent.match(/webOS/i)||navigator.userAgent.match(/iPhone/i)||navigator.userAgent.match(/iPad/i)||navigator.userAgent.match(/iPod/i)||navigator.userAgent.match(/BlackBerry/i))&&(isMobile=!0),1==isMobile&&(e(".animated").removeClass("animated"),e(".op0").removeClass("op0")),0==isMobile&&e("*[data-animated]").addClass("animated"),0==isMobile&&(t(),e(window).scroll(function(){t()}))})}(jQuery)}