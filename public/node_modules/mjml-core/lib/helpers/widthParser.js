'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = widthParser;
var unitRegex = /[\d.,]*(\D*)$/;

function widthParser(width) {
  var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var _options$parseFloatTo = options.parseFloatToInt,
      parseFloatToInt = _options$parseFloatTo === undefined ? true : _options$parseFloatTo;


  var widthUnit = unitRegex.exec(width.toString())[1];
  var unitParsers = {
    default: parseInt,
    px: parseInt,
    '%': parseFloatToInt ? parseInt : parseFloat
  };
  var parser = unitParsers[widthUnit] || unitParsers.default;

  return {
    parsedWidth: parser(width),
    unit: widthUnit || 'px'
  };
}
module.exports = exports['default'];