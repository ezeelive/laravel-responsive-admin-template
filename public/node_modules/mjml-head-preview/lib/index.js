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

var MjPreview = (_temp = _class = function (_HeadComponent) {
  (0, _inherits3.default)(MjPreview, _HeadComponent);

  function MjPreview() {
    (0, _classCallCheck3.default)(this, MjPreview);
    return (0, _possibleConstructorReturn3.default)(this, (MjPreview.__proto__ || (0, _getPrototypeOf2.default)(MjPreview)).apply(this, arguments));
  }

  (0, _createClass3.default)(MjPreview, [{
    key: 'handler',
    value: function handler() {
      var add = this.context.add;


      add('preview', this.getContent());
    }
  }]);
  return MjPreview;
}(_mjmlCore.HeadComponent), _class.endingTag = true, _temp);
exports.default = MjPreview;
module.exports = exports['default'];