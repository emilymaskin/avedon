Avedon.InfoScreen = Backbone.View.extend({
  events: {
    'click .closeScreen': 'hideScreen'
  },

  initialize: function(opts) {
    this.$siteContainer = $(opts.siteContainer);
    this.$homeSlides = $(opts.homeSlides);
  },

  render: function() {
    var _this = this;

    this.$siteContainer.fadeOut(800, function() {
      _this.$el.show();
      _this.$el.animate({
        opacity: 1
      }, 900, function() {
        _this.$homeSlides.cycle('pause');
      });
    });
  },

  hideScreen: function() {
    var _this = this;

    this.$el.animate({
      opacity: 0
    }, 900, function() {
      _this.$el.hide();
      _this.$siteContainer.fadeIn(900);
      _this.$homeSlides.cycle('resume');
    });
  }
});
