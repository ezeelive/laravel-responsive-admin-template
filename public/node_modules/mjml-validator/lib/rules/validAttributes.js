'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = validateAttribute;

var _concat = require('lodash/concat');

var _concat2 = _interopRequireDefault(_concat);

var _keys = require('lodash/keys');

var _keys2 = _interopRequireDefault(_keys);

var _includes = require('lodash/includes');

var _includes2 = _interopRequireDefault(_includes);

var _filter = require('lodash/filter');

var _filter2 = _interopRequireDefault(_filter);

var _ruleError = require('./ruleError');

var _ruleError2 = _interopRequireDefault(_ruleError);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var WHITELIST = ['mj-class', 'css-class'];

function validateAttribute(element, _ref) {
  var components = _ref.components;
  var attributes = element.attributes,
      tagName = element.tagName;


  var Component = components[tagName];

  if (!Component) {
    return null;
  }

  var availableAttributes = (0, _concat2.default)((0, _keys2.default)(Component.allowedAttributes), WHITELIST);
  var unknownAttributes = (0, _filter2.default)((0, _keys2.default)(attributes), function (attribute) {
    return !(0, _includes2.default)(availableAttributes, attribute);
  });

  if (unknownAttributes.length === 0) {
    return null;
  }

  var _attribute$illegal = {
    attribute: unknownAttributes.length > 1 ? 'Attributes' : 'Attribute',
    illegal: unknownAttributes.length > 1 ? 'are illegal' : 'is illegal'
  },
      attribute = _attribute$illegal.attribute,
      illegal = _attribute$illegal.illegal;


  return (0, _ruleError2.default)(attribute + ' ' + unknownAttributes.join(', ') + ' ' + illegal, element);
}
module.exports = exports['default'];