/**
 * 
 * @authors Your Name (you@example.org)
 * @date    2015-07-23 21:11:02
 * @version $Id$
 */

app.directive('scrollTop', function() {
  return {
    restrict: 'A',
    link: function(scope, $elm) {
      $elm.on('click', function() {
        $("html, body").animate({scrollTop: 0}, "slow");
      });
    }
  }
});