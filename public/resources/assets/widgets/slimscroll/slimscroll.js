!function(a){a.fn.extend({slimScroll:function(b){var c={width:"auto",height:"250px",size:"7px",color:"#000",position:"right",distance:"1px",start:"top",opacity:.4,alwaysVisible:!1,disableFadeOut:!1,railVisible:!1,railColor:"#333",railOpacity:.2,railDraggable:!0,railClass:"slimScrollRail",barClass:"slimScrollBar",wrapperClass:"slimScrollDiv",allowPageScroll:!1,wheelStep:20,touchScrollStep:200,borderRadius:"7px",railBorderRadius:"7px"},d=a.extend(c,b);return this.each(function(){function c(b){if(j){var b=b||window.event,c=0;b.wheelDelta&&(c=-b.wheelDelta/120),b.detail&&(c=b.detail/3);var f=b.target||b.srcTarget||b.srcElement;a(f).closest("."+d.wrapperClass).is(v.parent())&&e(c,!0),b.preventDefault&&!u&&b.preventDefault(),u||(b.returnValue=!1)}}function e(a,b,c){u=!1;var e=a,f=v.outerHeight()-B.outerHeight();if(b&&(e=parseInt(B.css("top"))+a*parseInt(d.wheelStep)/100*B.outerHeight(),e=Math.min(Math.max(e,0),f),e=a>0?Math.ceil(e):Math.floor(e),B.css({top:e+"px"})),p=parseInt(B.css("top"))/(v.outerHeight()-B.outerHeight()),e=p*(v[0].scrollHeight-v.outerHeight()),c){e=a;var g=e/v[0].scrollHeight*v.outerHeight();g=Math.min(Math.max(g,0),f),B.css({top:g+"px"})}v.scrollTop(e),v.trigger("slimscrolling",~~e),h(),i()}function f(a){window.addEventListener?(a.addEventListener("DOMMouseScroll",c,!1),a.addEventListener("mousewheel",c,!1)):document.attachEvent("onmousewheel",c)}function g(){o=Math.max(v.outerHeight()/v[0].scrollHeight*v.outerHeight(),s),B.css({height:o+"px"});var a=o==v.outerHeight()?"none":"block";B.css({display:a})}function h(){if(g(),clearTimeout(m),p==~~p){if(u=d.allowPageScroll,q!=p){var a=0==~~p?"top":"bottom";v.trigger("slimscroll",a)}}else u=!1;if(q=p,o>=v.outerHeight())return void(u=!0);B.stop(!0,!0).fadeIn("fast"),d.railVisible&&A.stop(!0,!0).fadeIn("fast")}function i(){d.alwaysVisible||(m=setTimeout(function(){d.disableFadeOut&&j||k||l||(B.fadeOut("slow"),A.fadeOut("slow"))},1e3))}var j,k,l,m,n,o,p,q,r="<div></div>",s=30,u=!1,v=a(this);if(v.parent().hasClass(d.wrapperClass)){var w=v.scrollTop();if(B=v.siblings("."+d.barClass),A=v.siblings("."+d.railClass),g(),a.isPlainObject(b)){if("height"in b&&"auto"==b.height){v.parent().css("height","auto"),v.css("height","auto");var x=v.parent().parent().height();v.parent().css("height",x),v.css("height",x)}else if("height"in b){var y=b.height;v.parent().css("height",y),v.css("height",y)}if("scrollTo"in b)w=parseInt(d.scrollTo);else if("scrollBy"in b)w+=parseInt(d.scrollBy);else if("destroy"in b)return B.remove(),A.remove(),void v.unwrap();e(w,!1,!0)}}else if(!(a.isPlainObject(b)&&"destroy"in b)){d.height="auto"==d.height?v.parent().height():d.height;var z=a(r).addClass(d.wrapperClass).css({position:"relative",overflow:"hidden",width:d.width,height:d.height});v.css({overflow:"hidden",width:d.width,height:d.height});var A=a(r).addClass(d.railClass).css({width:d.size,height:"100%",position:"absolute",top:0,display:d.alwaysVisible&&d.railVisible?"block":"none","border-radius":d.railBorderRadius,background:d.railColor,opacity:d.railOpacity,zIndex:90}),B=a(r).addClass(d.barClass).css({background:d.color,width:d.size,position:"absolute",top:0,opacity:d.opacity,display:d.alwaysVisible?"block":"none","border-radius":d.borderRadius,BorderRadius:d.borderRadius,MozBorderRadius:d.borderRadius,WebkitBorderRadius:d.borderRadius,zIndex:99}),C="right"==d.position?{right:d.distance}:{left:d.distance};A.css(C),B.css(C),v.wrap(z),v.parent().append(B),v.parent().append(A),d.railDraggable&&B.bind("mousedown",function(b){var c=a(document);return l=!0,t=parseFloat(B.css("top")),pageY=b.pageY,c.bind("mousemove.slimscroll",function(a){currTop=t+a.pageY-pageY,B.css("top",currTop),e(0,B.position().top,!1)}),c.bind("mouseup.slimscroll",function(a){l=!1,i(),c.unbind(".slimscroll")}),!1}).bind("selectstart.slimscroll",function(a){return a.stopPropagation(),a.preventDefault(),!1}),A.hover(function(){h()},function(){i()}),B.hover(function(){k=!0},function(){k=!1}),v.hover(function(){j=!0,h(),i()},function(){j=!1,i()}),v.bind("touchstart",function(a,b){a.originalEvent.touches.length&&(n=a.originalEvent.touches[0].pageY)}),v.bind("touchmove",function(a){if(u||a.originalEvent.preventDefault(),a.originalEvent.touches.length){e((n-a.originalEvent.touches[0].pageY)/d.touchScrollStep,!0),n=a.originalEvent.touches[0].pageY}}),g(),"bottom"===d.start?(B.css({top:v.outerHeight()-B.outerHeight()}),e(0,!0)):"top"!==d.start&&(e(a(d.start).position().top,null,!0),d.alwaysVisible||B.hide()),f(this)}}),this}}),a.fn.extend({slimscroll:a.fn.slimScroll})}(jQuery);