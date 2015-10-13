jQuery(document).ready(function() {
 	var $ = jQuery,
		$window = $(window),
    	screenWidth = $window.width(),
        screenHeight = $window.height();

    $window.on('resize', function() {
        screenWidth = $window.width();
        screenHeight = $window.height();
    });

	$window.on('load', function() {
		$window.resize();
	});

// IE<8 Warning
    if ($('html').hasClass('oldie')) {
        $('body').empty().html('Please, Update your Browser to at least IE8');
    }

// Disable Empty Links
    $('[href=#], .btn.disabled').on('click', function(event) {
        event.preventDefault();
    });

// Tooltip
    $("[data-toggle='tooltip']").tooltip();

// Placeholders
    if ($('[placeholder]').length) {
        $.Placeholder.init();
    }

// Smooth Scroll to Anchors
	$('.anchor[href^="#"]').on('click', function(e) {
		e.preventDefault();
		var speed = 1,
			boost = 1,
			offset = 5,
			target = $(this).attr('href'),
			currPos = parseInt($window.scrollTop(), 10),
			targetPos = target!="#" && $(target).length==1 ? parseInt($(target).offset().top, 10)-offset : currPos,
			distance = targetPos-currPos,
			boost2 = Math.abs(distance*boost/1000);
		$("html, body").animate({ scrollTop: targetPos }, parseInt(Math.abs(distance/(speed+boost2)), 10));
	});

// Underline Titles
	$('.title.underlined, .post-tags.underlined').each(function(index, element) {
		underlineTitle(element);

		$window.on('scroll', function() {
			underlineTitle(element);
		});
	});

	function underlineTitle(element) {
		var $this = $(element),
			offset = $this.offset().top,
			scrollTop = $window.scrollTop();

		if (scrollTop + screenHeight > offset + screenHeight * .4) {
			$this.addClass('shown');
		}
	}

// Search Widget
/*	$('.widget-search').each(function() {
		var $this = $(this),
			input = $this.find('.search'),
			label = $this.find('label');

		input.on('blur', function() {
			if(input.val()) {
				label.addClass('hidden');
			} else {
				label.removeClass('hidden');
			}
		});
	});*/

	$('.widget-search').each(function() {
		var $this = $(this),
			input = $this.find('.input');

		input.on('blur', function() {
			if(input.val()) {
				input.addClass('filled');
			} else {
				input.removeClass('filled');
			}
		});
	});

// Comment Form
	$('.comment-form').each(function() {
		var $this = $(this),
			input = $this.find('.input');

		input.each(function(index, el) {
			var element = $(el);

			element.find('input').on('blur', function() {
				if(element.find('input').val()) {
					element.addClass('filled');
				} else {
					element.removeClass('filled');
				}
			});
		});
	});

// Posts Slider Widget
	function postsSlider(item) {
		var image = item.find('.item.active').find('img'),
			controls = item.find('.carousel-indicators');

		controls.css('top', image.height() + 9);
	}

	$('.popular-posts-slider').each(function() {
		var $this = $(this);

		$window.on('resize', function() {
			postsSlider($this);
		});

		$this.closest('.tabs').find('[data-toggle="tab"]').on('shown.bs.tab', function() {
			postsSlider($this);
		});
	});

// Navigation Master
	var navigationMaster = $('.navigation-master');

//	navigationMaster.css({top: screenHeight / 2 - 80});
	navigationMaster.addClass('fixed');

/*	$window.on('scroll', function() {
		if ($window.scrollTop() > 20) {
			navigationMaster.addClass('fixed');
		} else {
			navigationMaster.removeClass('fixed');
		}
	});*/

// Open/Close Menu
	var menuButton = $('#menuButton'),
		navContainer = $('.nav-container'),
		menuItems = $('.nav-menu > li'),
		socialIcons = $('.social-menu > li'),
		isAnimating = false;

	menuButton.on('click', function() {
		if (isAnimating) return;

		isAnimating = true;

		if (navContainer.hasClass('active')) {
			menuButton.removeClass('active');

			if ($('body').hasClass('sidebar-left')) {
				menuButton.css({left: - menuButton.width()});
			}

			menuItems.removeClass('fadeInUpSmall').addClass('fadeOutDownSmall');
			socialIcons.removeClass('fadeInDownSmall').addClass('fadeOutUpSmall');

			if (Modernizr.cssanimations && screenWidth > 1000) {
				menuItems.eq(0).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					menuItems.removeClass('fadeOutDownSmall').addClass('hidden');
					socialIcons.removeClass('fadeOutUpSmall').addClass('hidden');
					navContainer.css({width: 0}).removeClass('active meet-sidebar');
					menuItems.eq(0).off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
				});
			} else {
				menuItems.removeClass('fadeOutUpSmall').addClass('hidden');
				socialIcons.removeClass('fadeOutUpSmall').addClass('hidden');
				navContainer.css({width: 0}).removeClass('active meet-sidebar');
			}

			if (Modernizr.csstransitions && screenWidth > 1000) {
				navContainer.one('webkitTransitionEnd mozTransitionEnd MSTransitionEnd otransitionend transitionend', function(){
					isAnimating = false;
					navContainer.off('webkitTransitionEnd mozTransitionEnd MSTransitionEnd otransitionend transitionend');
				});
			} else {
				isAnimating = false;
			}

		} else {
			menuButton.addClass('active');

			if ($('body').hasClass('sidebar-left')) {
				menuButton.css({left: $('.nav-controls').width()});
			}

			navContainer.addClass('active');

			function meetSidebar() {
				var sidebar = $('.sidebar'),
					sidebarOffset = sidebar.length ? sidebar.offset().top : 0,
					sidebarWidth = sidebar.length ? sidebar.width() : 0;

				if ($window.scrollTop() - sidebarOffset > -1 && screenWidth > 1260 && sidebar.length) {
					navContainer.css({width: screenWidth - $('.nav-controls').width() - sidebarWidth});
					navContainer.addClass('meet-sidebar');
				} else {
					navContainer.css({width: screenWidth - $('.nav-controls').width()}).removeClass('meet-sidebar');
				}
			}

			meetSidebar();

			$window.on('scroll resize', function() {
				if (navContainer.hasClass('active')) {
					meetSidebar();
				}
			});

			if (Modernizr.csstransitions && screenWidth > 1000) {
				navContainer.one('webkitTransitionEnd mozTransitionEnd MSTransitionEnd otransitionend transitionend', function(){
					menuItems.removeClass('hidden').addClass('fadeInUpSmall');
					socialIcons.removeClass('hidden').addClass('fadeInDownSmall');
					navContainer.off('webkitTransitionEnd mozTransitionEnd MSTransitionEnd otransitionend transitionend');
				});
			} else {
				menuItems.removeClass('hidden');
				socialIcons.removeClass('hidden');
				isAnimating = false;
			}

			if (Modernizr.cssanimations && screenWidth > 1000) {
				menuItems.eq(0).one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					menuItems.removeClass('fadeInUpSmall');
					socialIcons.removeClass('fadeInDownSmall');
					isAnimating = false;
					menuItems.eq(0).off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
				});
			}
		}
	});

// Dropdown Menu
	$(".nav-menu").find('ul').addClass('hidden');
	$(".nav-menu li").has('ul').addClass('parent');

	$(".nav-menu li").hover(function() {
		if (screenWidth > 1006) {
			var $this = $(this),
				dropdown = $this.children('ul');

			if(dropdown.length) {
				dropdown.removeClass('hidden');

				if (Modernizr.cssanimations) {
					dropdown.addClass('fadeInUpSmall').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
						dropdown.removeClass('fadeInUpSmall hidden');
						dropdown.off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
					});
				}
			}

			// Set Dropdown (Level 1) to the center of the parent Item
			if($this.parent().hasClass('nav-menu') && dropdown.length) {
				var menuItemWidth = $this.outerWidth(),
					menuItemOffset = parseInt($this.offset().left, 10),
					submenuItemWidth = dropdown.outerWidth();

				if (menuItemOffset + menuItemWidth/2 + submenuItemWidth/2 >= screenWidth) {
					dropdown.css('left' , screenWidth - submenuItemWidth - menuItemOffset);
				}
				else if (menuItemOffset + menuItemWidth/2 - submenuItemWidth/2 < 0) {
					dropdown.css('left' , - menuItemOffset);
				}
/*				else {
					dropdown.css('left' , (menuItemWidth-submenuItemWidth)/2);
				}*/
			}

			// Move Dropdown (Level 2+) to the left side of its Parent if it doesn't fit to the screen
			else
			{
				if(($this).hasClass('parent')) {
					var dropdownWidth = dropdown.outerWidth(),
						dropdownOffset = parseInt(dropdown.offset().left, 10);

					if (dropdownWidth + dropdownOffset > screenWidth - 5) {
						dropdown.addClass('left');
					}
				}
			}
		}
	}, function() {
		if (screenWidth > 1006) {
			var $this = $(this),
				dropdown = $this.children('ul');

			if (Modernizr.cssanimations) {
				dropdown.removeClass('fadeInUpSmall hidden').addClass('fadeOutDownSmall').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
					dropdown.removeClass('fadeOutDownSmall').addClass('hidden');
					dropdown.off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
				});
			} else {
				dropdown.addClass('hidden');
			}
		}
	});

// Dropdown Menu for Mobiles
	$(".nav-menu a").on('click', function() {
		if (screenWidth < 1007) {
			var $this = $(this),
				menuItem = $this.parent('li'),
				dropdown = $this.siblings('ul');

			if (menuItem.hasClass('active')) {
				dropdown.addClass('hidden');
				menuItem.removeClass('active');
			} else {
				dropdown.removeClass('hidden');
				menuItem.addClass('active');
			}
		}
	});

// Menu Centering
	function menuCentering() {
		var navLogoWidth = $('.navigation-logo').width(),
			navContainer = $('.nav-container');

		if (screenWidth > 1260) {
			navContainer.find('.nav-menu').css({paddingRight: navLogoWidth});
			navContainer.find('.social-menu').css({paddingRight: navLogoWidth});
		} else {
			navContainer.find('.nav-menu').css({paddingRight: 0});
			navContainer.find('.social-menu').css({paddingRight: 0});
		}
	}

	$window.on('resize', function() {
		menuCentering();
	});

// Full Screen Menu
	var navContainerFull = $('.nav-container-full');

	$('#menuButtonOpen').on('click', function() {
		navContainerFull.removeClass('hidden').addClass('zoomIn');
		$('body').addClass('overflow-hidden');
	});

	$('#menuButtonClose').on('click', function() {
		$('body').removeClass('overflow-hidden');

		if (Modernizr.cssanimations) {
			navContainerFull.removeClass('zoomIn').addClass('zoomOut').one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function(){
				navContainerFull.removeClass('zoomOut').addClass('hidden');
				navContainerFull.off('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend');
			});
		} else {
			navContainerFull.addClass('hidden');
		}
	});

// Masonry Gallery
	$window.on('load', function() {
		$('.masonry').each(function() {
			$(this).removeClass('hidden').isotope({
				itemSelector: '.masonry-item',
				masonry: {
					isFitWidth: false
				}
			});
		});
	});

// Video Player Ratio
	function videoRatio() {
		$('.video-player').each(function() {
			var $this = $(this),
				ratio = $this.attr('width') && $this.attr('height') ? $this.attr('width') / $this.attr('height') : 16/9,
				videoWidth = $this.width();

			$this.css({height: videoWidth / ratio});
		});
	}

	videoRatio();

	$window.on('resize', function() {
		videoRatio();
	});

// Share Buttons
	var $shareButtons=$(".share-button")
		,$toggleButton=$(".share-toggle-button")

		,menuOpen=false
		,buttonsNum=$shareButtons.length
		,buttonsMid=(buttonsNum/2)
		,spacing=75
		;

	function openShareMenu(){
		TweenMax.to($toggleButton,0.1,{
			scaleX:1.2,
			scaleY:0.6,
			ease:Quad.easeOut,
			onComplete:function(){
				TweenMax.to($toggleButton,.8,{
					scale:0.6,
					ease:Elastic.easeOut,
					easeParams:[1.1,0.6]
				})
				TweenMax.to($toggleButton.children(".share-icon"),.8,{
					scale:1.4,
					ease:Elastic.easeOut,
					easeParams:[1.1,0.6]
				})
			}
		})
		$shareButtons.each(function(i){
			var $cur=$(this);
			var pos=i-buttonsMid;
			if(pos>=0) pos+=1;
			var dist=Math.abs(pos);
			$cur.css({
				zIndex:buttonsMid-dist
			});
			TweenMax.to($cur,1.1*(dist),{
				x:pos*spacing,
				scaleY:0.6,
				scaleX:1.1,
				ease:Elastic.easeOut,
				easeParams:[1.01,0.5]
			});
			TweenMax.to($cur,.8,{
				delay:(0.2*(dist))-0.1,
				scale:0.6,
				ease:Elastic.easeOut,
				easeParams:[1.1,0.6]
			})

			TweenMax.fromTo($cur.children(".share-icon"),0.2,{
				scale:0
			},{
				delay:(0.2*dist)-0.1,
				scale:1,
				ease:Quad.easeInOut
			})
		})
	}
	function closeShareMenu(){
		TweenMax.to([$toggleButton,$toggleButton.children(".share-icon")],1.4,{
			delay:0.1,
			scale:1,
			ease:Elastic.easeOut,
			easeParams:[1.1,0.3]
		});
		$shareButtons.each(function(i){
			var $cur=$(this);
			var pos=i-buttonsMid;
			if(pos>=0) pos+=1;
			var dist=Math.abs(pos);
			$cur.css({
				zIndex:dist
			});

			TweenMax.to($cur,0.4+((buttonsMid-dist)*0.1),{
				x:0,
				scale:.95,
				ease:Quad.easeInOut
			});

			TweenMax.to($cur.children(".share-icon"),0.2,{
				scale:0,
				ease:Quad.easeIn
			});
		})
	}

	function toggleShareMenu(){
		menuOpen=!menuOpen;

		menuOpen?openShareMenu():closeShareMenu();
	}
	$toggleButton.on("mousedown",function(){
		toggleShareMenu();
	});

// Footer Slider
	$('.slider-instagram').each(function() {
		var instagramSlider = $(this),
			frame = instagramSlider.find('.frame'),
			scrollBar = instagramSlider.find('.scrollbar');

		var sly = new Sly(frame, {
			horizontal: true,
			itemNav: 'basic',
			smart: true,
			activateOn: 'click',
			mouseDragging: true,
			touchDragging: true,
			releaseSwing: true,
			startAt: 0,
			scrollBar: scrollBar,
			scrollBy: 1,
			activatePageOn: 'click',
			speed: 300,
			elasticBounds: true,
			easing: 'easeOutExpo',
			dragHandle: true,
			dynamicHandle: false,
			clickBar: true,
			cycleBy: 'items',
			cycleInterval: 10000,
			pauseOnHover: true
		}).init();

		$window.on('resize', function() {
			sly.reload();
		});
	});

// 404 Page Container
	var container404 = $('.page-404'),
		sidebarTabs = $('.sidebar').children('.tabs');

	$window.on('load resize', function() {
		if (container404.length && sidebarTabs.length && screenWidth > 1000) {
			var sidebarTabsHeight = sidebarTabs.height();
			container404.css({minHeight: sidebarTabsHeight + 100});

			sidebarTabs.find('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
				sidebarTabsHeight = sidebarTabs.height();
				container404.css({minHeight: sidebarTabsHeight + 100});
			})
		}
	});

// Sticky Sidebar
	function stickySideBar() {
		var sidebar = $('.sidebar');

		if(!sidebar.length) return;

		var sidebarHeight = sidebar.height(),
			sidebarOffset = sidebar.offset().top,
			footerOffset = $('.footer').offset().top,
			headerHeight = $('.header').length ? $('.header').outerHeight() : 0,
			contentHeight = $('.content').height() + 106;

		if (sidebarHeight < contentHeight && screenWidth > 1006) {
			if (sidebarOffset + sidebarHeight < $window.scrollTop() + screenHeight) {
				sidebar.addClass('fixed');
			}

			if (headerHeight + sidebarHeight > $window.scrollTop() + screenHeight) {
				sidebar.removeClass('fixed');
			}

			if (footerOffset < $window.scrollTop() + screenHeight) {
				sidebar.addClass('absolute');
			} else {
				sidebar.removeClass('absolute');
			}
		} else {
			sidebar.removeClass('fixed absolute');
		}
	}

	stickySideBar();

	$window.on('scroll resize', function() {
		stickySideBar();
	});

// LightBox
	$('.swipebox').swipebox({
		removeBarsOnMobile: false
	});

});
