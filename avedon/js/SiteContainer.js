Avedon.SiteContainer = Backbone.View.extend({

  events: {
    'click #menuToggle': 'showMenu',
    'click .allSlides img': 'nextSlide'
  },

  initialize: function() {
    this.$homeSlides = $('.homeSlides');
    this.$menuToggle = $('#menuToggle');
    this.$menu = $('#menu');
  },

  render: function() {
    this.menu = new Avedon.Menu({
      el: this.$menu,
      menuToggle: this.$menuToggle,
      homeSlides: this.$homeSlides,
      siteContainer: this.$el
    });

    Mousetrap.bind('right', this.nextSlide);
    Mousetrap.bind('left', this.prevSlide);
    Mousetrap.bind('up', this.menu.hideMenu);
    Mousetrap.bind('down', this.menu.render);

    this.$homeSlides.cycle();
    this.$el.fadeIn(1800, function() {
      $('#intro').hide();
    });
  },

  showMenu: function() {
    this.menu.render();
  },

  prevSlide: function() {
    $('.allSlides').cycle('prev');
  },

  nextSlide: function() {
    $('.allSlides').cycle('next');
  }
});
