'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = setEmptyAttributes;

var _forEach = require('lodash/forEach');

var _forEach2 = _interopRequireDefault(_forEach);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function setEmptyAttributes(node) {
  if (!node.attributes) {
    node.attributes = {};
  }
  if (node.children) {
    (0, _forEach2.default)(node.children, setEmptyAttributes);
  }
}
module.exports = exports['default'];