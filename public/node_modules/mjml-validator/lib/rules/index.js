'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.validTag = exports.validChildren = exports.validAttributes = undefined;

var _validAttributes2 = require('./validAttributes');

var _validAttributes3 = _interopRequireDefault(_validAttributes2);

var _validChildren2 = require('./validChildren');

var _validChildren3 = _interopRequireDefault(_validChildren2);

var _validTag2 = require('./validTag');

var _validTag3 = _interopRequireDefault(_validTag2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.validAttributes = _validAttributes3.default;
exports.validChildren = _validChildren3.default;
exports.validTag = _validTag3.default;