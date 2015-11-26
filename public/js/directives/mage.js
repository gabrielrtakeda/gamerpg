angular
  .module('app', [])

  .directive('mage',
    [ 'mageConfig',
      'walkable',
      'attackable',
    ( mageConfig,
      walkable,
      attackable
    ) => {
    return {
      restrict: 'E',
      // templateUrl: '/gamerpg/template/characters/mage.html',
      template: '<div class="mage"></div>',
      scope: {},
      controller: ($scope, $element, $attrs, $rootScope) => {
        $attrs.$observe('fixed');

        $element.bind('mouseenter', () => {
          var coords = $element.parent().attr('data-coordinates')
            .split(',')
            .map(x => parseInt(x));

          $element
            .closest('.field')
            .find(walkable.getArea(coords, mageConfig.walkable))
            .addClass('walkable');

          $element
            .closest('.field')
            .find(attackable.getArea(coords, mageConfig.attackable))
            .addClass('attackable');
        });


        $element.bind('mouseleave', () => {
          if (!$attrs.fixed) {console.log($attrs);
            $element
              .closest('.field')
              .find('.walkable, .attackable')
              .removeClass('walkable attackable');
          }
        });

        $element.bind('click', () => {
          attrs.fixed = true;
          $element.addClass('fixed');
        });
      }
    };
  }])
;
