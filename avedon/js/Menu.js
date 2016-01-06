Avedon.Menu = Backbone.View.extend({
  events: {
    'click .infoLink': 'showInfoScreen',
    'click #menucontainer .album': 'changeCategory'
  },

  initialize: function(opts) {
    var _this = this;

    this.$screen = $('#screen');
    this.$menuToggle = $(opts.menuToggle);
    this.$homeSlides = $(opts.homeSlides);
    this.$siteContainer = $(opts.siteContainer);

    // Menu container hide on mouseleave
    this.$el.mouseleave(function() {
      _this.hideMenu();
    });

    _.bindAll(this, 'render', 'hideMenu');
  },

  render: function() {
    var _this = this;

    $(this.$menuToggle).fadeOut('fast', function() {
      _this.$el.slideDown(400);
      _this.$screen.fadeIn('slow');
    });
    $('#screen').click(this.hideMenu);
  },

  hideMenu: function() {
    var _this = this;

    $('#menu').slideUp(400, function() {
      _this.$menuToggle.fadeIn('fast');
    });
    _this.$screen.fadeOut('slow');
  },

  showInfoScreen: function(e) {
    var category = $(e.currentTarget).data('category');

    this.hideMenu();
    new Avedon.InfoScreen({
      el: '#' + category + 'Container',
      siteContainer: this.$siteContainer,
      homeSlides: this.$homeSlides,
      menu: this
    }).render();
  },

  changeCategory: function(e) {
    var _this = this;
    var category = $(e.target).data('category');
    var $categorySlides = $('.' + category + 'Slides');

    this.hideMenu();

    $('#menucontainer .album').removeClass('selected');
    $(e.target).addClass('selected');

    this.$homeSlides.cycle('pause');

    $('.active').fadeOut(1000).promise().done(function() {
      $('#' + category).fadeIn(1200, function() {
        $('.category').removeClass('active');
        $(this).addClass('active');
      });
      _this.$menuToggle.fadeIn(600);
      $categorySlides.cycle();
      $categorySlides.cycle('goto', 0);
    });
  }
});
