'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = validateTag;

var _lodash = require('lodash');

var _ruleError = require('./ruleError');

var _ruleError2 = _interopRequireDefault(_ruleError);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

// Tags that have no associated components but are allowed even so
var componentLessTags = ['mj-all', 'mj-class'];

function validateTag(element, _ref) {
  var components = _ref.components;
  var tagName = element.tagName;


  if ((0, _lodash.includes)(componentLessTags, tagName)) return null;

  var Component = components[tagName];

  if (!Component) {
    return (0, _ruleError2.default)('Element ' + tagName + ' doesn\'t exist or is not registered', element);
  }

  return null;
}
module.exports = exports['default'];