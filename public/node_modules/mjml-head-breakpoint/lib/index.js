'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = undefined;

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

var _class, _temp;

var _mjmlCore = require('mjml-core');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var MjBreakpoint = (_temp = _class = function (_HeadComponent) {
  (0, _inherits3.default)(MjBreakpoint, _HeadComponent);

  function MjBreakpoint() {
    (0, _classCallCheck3.default)(this, MjBreakpoint);
    return (0, _possibleConstructorReturn3.default)(this, (MjBreakpoint.__proto__ || (0, _getPrototypeOf2.default)(MjBreakpoint)).apply(this, arguments));
  }

  (0, _createClass3.default)(MjBreakpoint, [{
    key: 'handler',
    value: function handler() {
      var add = this.context.add;


      add('breakpoint', this.getAttribute('width'));
    }
  }]);
  return MjBreakpoint;
}(_mjmlCore.HeadComponent), _class.endingTag = true, _class.allowedAttributes = {
  width: 'unit(px)'
}, _temp);
exports.default = MjBreakpoint;
module.exports = exports['default'];