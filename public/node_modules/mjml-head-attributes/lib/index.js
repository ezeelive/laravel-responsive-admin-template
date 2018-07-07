'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = undefined;

var _defineProperty2 = require('babel-runtime/helpers/defineProperty');

var _defineProperty3 = _interopRequireDefault(_defineProperty2);

var _extends3 = require('babel-runtime/helpers/extends');

var _extends4 = _interopRequireDefault(_extends3);

var _getPrototypeOf = require('babel-runtime/core-js/object/get-prototype-of');

var _getPrototypeOf2 = _interopRequireDefault(_getPrototypeOf);

var _classCallCheck2 = require('babel-runtime/helpers/classCallCheck');

var _classCallCheck3 = _interopRequireDefault(_classCallCheck2);

var _createClass2 = require('babel-runtime/helpers/createClass');

var _createClass3 = _interopRequireDefault(_createClass2);

var _possibleConstructorReturn2 = require('babel-runtime/helpers/possibleConstructorReturn');

var _possibleConstructorReturn3 = _interopRequireDefault(_possibleConstructorReturn2);

var _inherits2 = require('babel-runtime/helpers/inherits');

var _inherits3 = _interopRequireDefault(_inherits2);

var _forEach = require('lodash/forEach');

var _forEach2 = _interopRequireDefault(_forEach);

var _omit = require('lodash/omit');

var _omit2 = _interopRequireDefault(_omit);

var _reduce = require('lodash/reduce');

var _reduce2 = _interopRequireDefault(_reduce);

var _mjmlCore = require('mjml-core');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var MjAttributes = function (_HeadComponent) {
  (0, _inherits3.default)(MjAttributes, _HeadComponent);

  function MjAttributes() {
    (0, _classCallCheck3.default)(this, MjAttributes);
    return (0, _possibleConstructorReturn3.default)(this, (MjAttributes.__proto__ || (0, _getPrototypeOf2.default)(MjAttributes)).apply(this, arguments));
  }

  (0, _createClass3.default)(MjAttributes, [{
    key: 'handler',
    value: function handler() {
      var add = this.context.add;
      var children = this.props.children;


      (0, _forEach2.default)(children, function (child) {
        var tagName = child.tagName,
            attributes = child.attributes,
            children = child.children;


        if (tagName === 'mj-class') {
          add('classes', attributes.name, (0, _omit2.default)(attributes, ['name']));

          add('classesDefault', attributes.name, (0, _reduce2.default)(children, function (acc, _ref) {
            var tagName = _ref.tagName,
                attributes = _ref.attributes;
            return (0, _extends4.default)({}, acc, (0, _defineProperty3.default)({}, tagName, attributes));
          }, {}));
        } else {
          add('defaultAttributes', tagName, attributes);
        }
      });
    }
  }]);
  return MjAttributes;
}(_mjmlCore.HeadComponent);

exports.default = MjAttributes;
module.exports = exports['default'];