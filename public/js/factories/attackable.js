angular
  .module('app')

  .factory('attackable', ['area', (area) => {
    var attackable = {};

    attackable.getArea = (coords, range) => {
      return area.get(coords, range, area.fill);
    };

    return attackable;
  }])
;
