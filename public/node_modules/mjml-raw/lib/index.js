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

var MjRaw = (_temp = _class = function (_BodyComponent) {
  (0, _inherits3.default)(MjRaw, _BodyComponent);

  function MjRaw() {
    (0, _classCallCheck3.default)(this, MjRaw);
    return (0, _possibleConstructorReturn3.default)(this, (MjRaw.__proto__ || (0, _getPrototypeOf2.default)(MjRaw)).apply(this, arguments));
  }

  (0, _createClass3.default)(MjRaw, [{
    key: 'render',
    value: function render() {
      return this.getContent();
    }
  }]);
  return MjRaw;
}(_mjmlCore.BodyComponent), _class.endingTag = true, _class.rawElement = true, _temp);
exports.default = MjRaw;
module.exports = exports['default'];