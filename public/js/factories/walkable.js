angular
  .module('app')

  .factory('walkable', ['area', (area) => {
    var walkable = {};

    walkable.getArea = (coords, range) => {
      return area.get(coords, range, area.fill);
    };

    return walkable;
  }])
;
