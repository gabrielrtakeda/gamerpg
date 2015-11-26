angular
  .module('app')

  .factory('mageConfig', () => {
    var mageConfig = {};

    mageConfig.walkable = [0, 3];
    mageConfig.attackable = [
      mageConfig.walkable[1],
      mageConfig.walkable[1] + 5
    ];

    return mageConfig;
  })
;
