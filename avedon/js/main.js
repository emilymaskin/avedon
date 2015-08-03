/* global Mousetrap */
(function() {
  'use strict';

  var $menu;
  var $homeSlides;
  var $categorySlides;

  var Slideshow = function(selector) {
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
    };
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
    this.setEvents();
  };

  var Menu = function(selector) {
    var _this = this;

    this.$el = $(selector);
    this.$menuContainer = $('#menucontainer');
    this.menuToggle = new MenuToggle(this);
    this.$screen = $('#screen');

    this.changeCategory = function(category) {
      var $activeCategory = $('.active');
      var $categoryEl = $('#' + category);

      $categorySlides = new Slideshow('.' + category + 'Slides');
      $categorySlides.cycle();

      $categorySlides.setEvents();
      $homeSlides.pause();
      $categorySlides.restart();
      $activeCategory.fadeOut(1000, function() {
        $categoryEl.fadeIn(1200, function() {
          $activeCategory.parent().removeClass('active');
          $categorySlides.activate();
          _this.$menuContainer.find('p.album').removeClass('selected');
          _this.$menuContainer.find('p.' + category).addClass('selected');
          $categorySlides.find('img.first').removeClass('first');
        });
      });
    };

    this.showSplashScreen = function(infoType) {
      $('#siteContainer').fadeOut(900, function() {
        $('.splash-container.' + infoType).fadeIn(900);
      });
    };

    this.showMenu = function() {
      this.$el.slideDown(400);
      this.$screen.fadeIn('slow');
    };
    this.hideMenu = function() {
      this.$el.slideUp(400);
      this.$screen.fadeOut('slow');
    };
    this.setEvents = function () {
      this.$el.mouseleave(function() {
        _this.hideMenu();
        _this.menuToggle.showToggle();
      });
      this.$screen.click(function() {
        _this.hideMenu();
        _this.menuToggle.showToggle();
      });
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

        _this.hideMenu();
        if ($this.hasClass('album')) {
          _this.changeCategory($(this).data('category'));
        } else {
          $homeSlides.pause();
          _this.showSplashScreen($this.data('type'));
        }
      });
      $('.close-toggle').click(function() {
        $('.splash-container').hide();
        $('#siteContainer').fadeIn(900);
        if (typeof $categorySlides === 'undefined') {
          $homeSlides.resume();
        }
      });
    };
    this.setEvents();
  };

  var MenuToggle = function() {
    var _this = this;

    this.$el = $('#bottom');
    this.hideToggle = function() {
      _this.$el.fadeOut('fast');
    };
    this.showToggle = function() {
      _this.$el.fadeIn('fast');
    };
    this.$el.find('div p').click(function() {
      $menu.showMenu();
      _this.hideToggle();
    });
  };

  var setupIntro = function() {
    var $introTitle = $('#introTitle');
    var $enterLink = $introTitle.find('.enter');

    $introTitle.fadeIn(1400, 'easeInQuint', function() {
      $enterLink.addClass('show', 500);
    });

    $enterLink.click(function() {
      $introTitle.fadeOut(1200, function() {
        $homeSlides.cycle();
        $('#siteContainer').fadeIn(1800, function() {
          $introTitle.hide();
          $menu = new Menu('#menu');
        });
      });
    });
  };

  $(document).ready(function() {
    $homeSlides = new Slideshow('.homeSlides');
    setupIntro();
  });
}());
