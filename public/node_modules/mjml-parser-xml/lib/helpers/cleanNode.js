'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _keys = require('babel-runtime/core-js/object/keys');

var _keys2 = _interopRequireDefault(_keys);

exports.default = cleanNode;

var _lodash = require('lodash');

var _lodash2 = _interopRequireDefault(_lodash);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function cleanNode(node) {
  delete node.parent;

  // Delete children if needed
  if (node.children && node.children.length) {
    _lodash2.default.forEach(node.children, cleanNode);
  } else {
    delete node.children;
  }

  // Delete attributes if needed
  if (node.attributes && (0, _keys2.default)(node.attributes).length === 0) {
    delete node.attributes;
  }
}
module.exports = exports['default'];