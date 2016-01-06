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

    _.bindAll(this, 'render', 'hideMenu');
  },

  render: function() {
    var _this = this;

    this.$menuToggle.fadeOut('fast');
    this.$screen.fadeIn('slow');

    this.$el.slideDown(400).promise().done(function() {
      $('#menu').on('mouseleave', function() {
        _this.hideMenu();
      });
    });

    this.$screen.click(this.hideMenu);
  },

  hideMenu: function() {
    var _this = this;

    this.$menuToggle.fadeIn('fast');
    this.$screen.fadeOut('slow');

    $('#menu').off('mouseleave');
    this.$el.slideUp(400);
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

  _updateActiveMenuItem: function($selected) {
    $('#menucontainer .album').removeClass('selected');
    $selected.addClass('selected');
  },

  _updateSlides: function(category) {
    var $categorySlides = $('.' + category + 'Slides');

    this.$homeSlides.cycle('pause');

    $('.mainElement').fadeOut(1000).promise().done(function() {
      $('#' + category).fadeIn(1200);
      $categorySlides.cycle();
      $categorySlides.cycle('goto', 0);
    });
  },

  changeCategory: function(e) {
    var category = $(e.target).data('category');

    this._updateActiveMenuItem($(e.target));
    this._updateSlides(category);
    this.hideMenu();
  }
});
