angular
  .module('app')

  .factory('area', () => {
    var area = {};

    area.get = (coords, range, callback) => {
      var cx = coords[0];
      var cy = coords[1];
      var r  = { i: range[0], e: range[1] };

      var areas = '';
      for (var c = r.e, i = c, j = 0; c > 0; c--, i--, j++) {
        var op = { i: i, j: j, r: r };

        // dm -> descending minus
        // dp -> descending plus
        // am -> ascending minus
        // ap -> ascending plus
        var x = {
          dm: (cx-i), dp: (cx+i),
          am: (cx-j), ap: (cx+j)
        };
        var y = {
          dm: (cy-i), dp: (cy+i),
          am: (cy-j), ap: (cy+j)
        };

        areas += callback(x, y, op);
      }
      return areas.replace(/\,$/, '');
    };

    area.edge = (x, y) => {
      return area.land(x.dm, y.am)  // top left
           + area.land(x.ap, y.dm)  // top right
           + area.land(x.dp, y.ap)  // bottom right
           + area.land(x.am, y.dp); // bottom left
    };

    area.fill = (x, y, op) => {
      var areas = '';
      var isWalkable = op.r.i === 0;
      var condition = (!isWalkable
        ? (op.i > op.r.e - op.r.i) ? op.r.e - op.r.i : op.i
        : op.i);

      for (var p = 0; p < condition; p++) {
        areas += area.land(x.dm+p, y.am); // top left
        areas += area.land(x.ap, y.dm+p); // top right
        areas += area.land(x.dp-p, y.ap); // bottom right
        areas += area.land(x.am, y.dp-p); // bottom left
      }
      return areas;
    };

    area.land = (x, y, op) => {
      return x < 1 || x > 28 || y < 1 || y > 28
        ? ''
        : '.land[data-coordinates="{x},{y}"],'
          .replace('{x}', x)
          .replace('{y}', y);
    };

    return area;
  })
;
