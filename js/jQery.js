function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
      document.getElementById("sideNavShadow").style.background = "rgba(0,0,0,0.4)";
  }

  function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
      document.body.style.backgroundColor = "white";
      document.getElementById("main").style.marginLeft= "0";
      document.getElementById("sideNavShadow").style.background = "white";
  }

$(document).ready(function(){
    $(".lcw").mouseover(function(){
      document.getElementById("numlcw").style.color = "white";
    });
    
    $(".lcw").mouseout(function(){
      document.getElementById("numlcw").style.color = "transparent";
    });
     
    $(".hhc").mouseover(function(){
      document.getElementById("numhhc").style.color = "white";
    });
    
    $(".hhc").mouseout(function(){
      document.getElementById("numhhc").style.color = "transparent";
    });
     
    $(".hyt").mouseover(function(){
      document.getElementById("numhyt").style.color = "white";
    });
    
    $(".hyt").mouseout(function(){
      document.getElementById("numhyt").style.color = "transparent";
    });
     
    $(".cc").mouseover(function(){
      document.getElementById("numcc").style.color = "white";
    });
    
    $(".cc").mouseout(function(){
      document.getElementById("numcc").style.color = "transparent";
    });
     
    $(".lgc").mouseover(function(){
      document.getElementById("numlgc").style.color = "white";
    });
    
    $(".lgc").mouseout(function(){
      document.getElementById("numlgc").style.color = "transparent";
    });
     
});

$(window).load(function(){
      var $win = $(window),
          $ad = $('#abgne_float_ad').css('opacity', 0).show(),  // 讓廣告區塊變透明且顯示出來
          _width = $ad.width(),
          _height = $ad.height(),
          _diffY = 20, _diffX = 20, // 距離右及下方邊距
          _moveSpeed = 800; // 移動的速度

      // 先把 #abgne_float_ad 移動到定點
      $ad.css({
        top: $(document).height(),
        left: $win.width() - _width - _diffX,
        opacity: 1
      });

      // 幫網頁加上 scroll 及 resize 事件
      $win.bind('scroll resize', function(){
        var $this = $(this);

        // 控制 #abgne_float_ad 的移動
        $ad.stop().animate({
          top: $this.scrollTop() + $this.height() - _height - _diffY,
          left: $this.scrollLeft() + $this.width() - _width - _diffX
        }, _moveSpeed);
      }).scroll();  // 觸發一次 scroll()
    });

$(window).load(function() {
	$('.blueberry').blueberry();
});

(function($){
	$.fn.extend({
		blueberry: function(options) {

			//default values for plugin options
			var defaults = {
				interval: 5000,
				duration: 500,
				lineheight: 1,
				height: 'auto', //reserved
				hoverpause: false,
				pager: true,
				nav: true, //reserved
				keynav: true
			}
			var options =  $.extend(defaults, options);
 
			return this.each(function() {
				var o = options;
				var obj = $(this);

				//store the slide and pager li
				var slides = $('.slides li', obj);
				var pager = $('.pager li', obj);

				//set initial current and next slide index values
				var current = 0;
				var next = current+1;

				//get height and width of initial slide image and calculate size ratio
				var imgHeight = slides.eq(current).find('img').height();
				var imgWidth = slides.eq(current).find('img').width();
				var imgRatio = imgWidth/imgHeight;

				//define vars for setsize function
				var sliderWidth = 0;
				var cropHeight = 0;

				//hide all slides, fade in the first, add active class to first slide
				slides.hide().eq(current).fadeIn(o.duration).addClass('active');
				

				//build pager if it doesn't already exist and if enabled
				if(pager.length) {
					pager.eq(current).addClass('active');
				} else if(o.pager){
					obj.append('<ul class="pager"></ul>');
					slides.each(function(index) {
						$('.pager', obj).append('<li><a href="#"><span>'+index+'</span></a></li>')
					});
					pager = $('.pager li', obj);
					pager.eq(current).addClass('active');
				}

				//rotate to selected slide on pager click
				if(pager){
					$('a', pager).click(function() {
						//stop the timer
						clearTimeout(obj.play);
						//set the slide index based on pager index
						next = $(this).parent().index();
						//rotate the slides
						rotate();
						return false;
					});
				}

				//primary function to change slides
				var rotate = function(){
					//fade out current slide and remove active class,
					//fade in next slide and add active class
					slides.eq(current).fadeOut(o.duration).removeClass('active')
						.end().eq(next).fadeIn(o.duration).addClass('active').queue(function(){
							//add rotateTimer function to end of animation queue
							//this prevents animation buildup caused by requestAnimationFrame
							//rotateTimer starts a timer for the next rotate
							rotateTimer();
							$(this).dequeue()
					});

					//update pager to reflect slide change
					if(pager){
						pager.eq(current).removeClass('active')
							.end().eq(next).addClass('active');
					}

					//update current and next vars to reflect slide change
					//set next as first slide if current is the last
					current = next;
					next = current >= slides.length-1 ? 0 : current+1;
				};
				//create a timer to control slide rotation interval
				var rotateTimer = function(){
					obj.play = setTimeout(function(){
						//trigger slide rotate function at end of timer
						rotate();
					}, o.interval);
				};
				//start the timer for the first time
				rotateTimer();

				//pause the slider on hover
				//disabled by default due to bug
				if(o.hoverpause){
					slides.hover(function(){
						//stop the timer in mousein
						clearTimeout(obj.play);
					}, function(){
						//start the timer on mouseout
						rotateTimer();
					});
				}

				//calculate and set height based on image width/height ratio and specified line height
				var setsize = function(){
					sliderWidth = $('.slides', obj).width();
					cropHeight = Math.floor(((sliderWidth/imgRatio)/o.lineheight))*o.lineheight;

					$('.slides', obj).css({height: cropHeight});
				};
				setsize();

				//bind setsize function to window resize event
				$(window).resize(function(){
					setsize();
				});
				
				

				//Add keyboard navigation

				if(o.keynav){
					$(document).keyup(function(e){

						switch (e.which) {

							case 39: case 32: //right arrow & space

								clearTimeout(obj.play);

								rotate();

								break;


							case 37: // left arrow
								clearTimeout(obj.play);
								next = current - 1;
								rotate();

								break;
						}

					});
				}


			});
		}
	});
})(jQuery);
