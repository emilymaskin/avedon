Avedon.Intro = Backbone.View.extend({
  events: {
    'click .enter': 'enterSite'
  },

  initialize: function() {

  },

  render: function() {
    var _this = this;

    this.$el.fadeIn(1400, 'easeInQuint', function() {
      _this.$('.enter').addClass('show', 500);
    });
  },

  enterSite: function() {
    this.$el.fadeOut(500, function() {
      new Avedon.SiteContainer({
        el: '#siteContainer'
      }).render();
    });
  }
});
