/* global Mousetrap */
$(document).ready(function() {
  'use strict';

  var $siteContainer = $('#siteContainer');
  var $screen = $('#screen');
  var $introTitle = $('#introTitle');
  var $bioContainer = $('#bioContainer');
  var $contactCont = $('#contactCont');

  var Slides = function(selector) {
    var _this = this;

    this.$el = $(selector);
    this.setEvents = function() {
      this.find('img').on('click', function() {
        _this.$el.cycle('next');
      });
      Mousetrap.bind('right', function() {
        _this.$el.cycle('next');
      });
      Mousetrap.bind('left', function() {
        _this.$el.cycle('prev');
      });
    }
    this.activate = function() {
      this.$el.parent().addClass('active');
    };
    this.cycle = function() {
      this.$el.cycle();
    };
    this.pause = function() {
      this.$el.cycle('pause');
    };
    this.resume = function() {
      $('.active').fadeIn(function() {
        _this.$el.cycle('resume');
      });
    };
    this.restart = function() {
      this.$el.cycle('goto', 0);
    };
    this.find = function(s) {
      return this.$el.find(s);
    };
    this.cycle();
  };

  var Menu = function() {
    var _this = this;

    this.$el = $('#menu');
    this.$menuContainer = $('#menucontainer');
    this.menuToggle = new MenuToggle(this);
    this.showMenu = function() {
      this.$el.slideDown(400);
      $screen.fadeIn('slow');
    };
    this.hideMenu = function() {
      this.$el.slideUp(400);
      $screen.fadeOut('slow');
    };
    this.setEvents = function () {
      this.$el.mouseleave(function() {
        _this.hideMenu();
        _this.menuToggle.showToggle();
      });
      $screen.click(function() {
        _this.hideMenu();
        _this.menuToggle.showToggle();
      });
      // Menu container hide on click
      Mousetrap.bind('up', function() {
        _this.hideMenu();
        _this.menuToggle.showToggle();
      });
      Mousetrap.bind('down', function() {
        _this.showMenu();
        _this.menuToggle.hideToggle();
      });

      this.$menuContainer.find('p').click(function() {
        var $this = $(this);
        var $activeCategory = $('.active');
        var category = $this.data('category');
        var $categoryEl = $('#' + category);
        var $categorySlides = new Slides('.' + category + 'Slides');

        $categorySlides.setEvents();
        _this.hideMenu();
        $homeSlides.pause();
        $categorySlides.restart();
        $activeCategory.fadeOut(1000, function() {
          $categoryEl.fadeIn(1200, function() {
            $activeCategory.parent().removeClass('active');
            $categorySlides.activate();
            _this.$menuContainer.find('p.album').removeClass('selected');
            $this.addClass('selected');
            $categorySlides.find('img.first').removeClass('first');
          });
        });
        if ($this.hasClass('contactLink')) {
          $contactCont.animate({
            opacity: 1
          }, 900, function() {
            $(this).show();
          });
          $bioContainer.css('opacity', 0);
          $siteContainer.fadeOut(900);
          $homeSlides.pause();
        } else if ($this.hasClass('bioLink')) {
          $bioContainer.animate({
            opacity: 1
          }, 900, function() {
            $(this).show();
          });
          $contactCont.css('opacity', 0);
          $siteContainer.fadeOut(900);
          $homeSlides.pause();
        }
      });
    }
  };

  var MenuToggle = function(menu) {
    var _this = this;

    this.$el = $('#bottom');
    this.hideToggle = function() {
      _this.$el.fadeOut('fast');
    };
    this.showToggle = function() {
      _this.$el.fadeIn('fast');
    };
    this.$el.find('div p').click(function() {
      menu.showMenu();
      _this.hideToggle();
    });
  };

  var $menu = new Menu();
  $menu.setEvents();

  var $homeSlides = new Slides('.homeSlides');
  $homeSlides.setEvents();

  // Fade intro screen in
  $introTitle.fadeIn(1400, 'easeInQuint', function() {
    $introTitle.find('div').addClass('show', 500);
  });

  // Fade intro screen out
  $introTitle.find('div').click(function() {
    $introTitle.fadeOut(1200, function() {
      $homeSlides.cycle();
      $siteContainer.fadeIn(1800, function() {
        $('#intro').hide();
      });
    });
  });

  // Hide contact
  $('#closeContact').click(function() {
    $contactCont.hide();
    $siteContainer.fadeIn(900);
    $homeSlides.resume();
  });

  // Hide bio
  $('#closeBio').click(function() {
    $bioContainer.hide();
    $siteContainer.fadeIn(900);
    $homeSlides.resume();
  });
});
