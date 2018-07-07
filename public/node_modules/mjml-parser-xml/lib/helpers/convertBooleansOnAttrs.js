'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = convertBooleansOnAttrs;

var _mapValues = require('lodash/mapValues');

var _mapValues2 = _interopRequireDefault(_mapValues);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * Convert "true" and "false" string attributes values
 * to corresponding Booleans
 */

function convertBooleansOnAttrs(attrs) {
  return (0, _mapValues2.default)(attrs, function (val) {
    if (val === 'true') {
      return true;
    }
    if (val === 'false') {
      return false;
    }

    return val;
  });
}
module.exports = exports['default'];