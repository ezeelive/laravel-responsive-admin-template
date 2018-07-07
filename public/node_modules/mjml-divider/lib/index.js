'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = undefined;

var _extends2 = require('babel-runtime/helpers/extends');

var _extends3 = _interopRequireDefault(_extends2);

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

var _widthParser2 = require('mjml-core/lib/helpers/widthParser');

var _widthParser3 = _interopRequireDefault(_widthParser2);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var MjDivider = (_temp = _class = function (_BodyComponent) {
  (0, _inherits3.default)(MjDivider, _BodyComponent);

  function MjDivider() {
    (0, _classCallCheck3.default)(this, MjDivider);
    return (0, _possibleConstructorReturn3.default)(this, (MjDivider.__proto__ || (0, _getPrototypeOf2.default)(MjDivider)).apply(this, arguments));
  }

  (0, _createClass3.default)(MjDivider, [{
    key: 'getStyles',
    value: function getStyles() {
      var _this2 = this;

      var p = {
        'border-top': ['style', 'width', 'color'].map(function (attr) {
          return _this2.getAttribute('border-' + attr);
        }).join(' '),
        'font-size': 1,
        margin: '0px auto',
        width: this.getAttribute('width')
      };

      return {
        p: p,
        outlook: (0, _extends3.default)({}, p, {
          width: this.getOutlookWidth()
        })
      };
    }
  }, {
    key: 'getOutlookWidth',
    value: function getOutlookWidth() {
      var containerWidth = this.context.containerWidth;

      var paddingSize = this.getShorthandAttrValue('padding', 'left') + this.getShorthandAttrValue('padding', 'right');

      var width = this.getAttribute('width');

      var _widthParser = (0, _widthParser3.default)(width),
          parsedWidth = _widthParser.parsedWidth,
          unit = _widthParser.unit;

      switch (unit) {
        case '%':
          return parseInt(containerWidth, 10) * parseInt(parsedWidth, 10) / 100 - paddingSize + 'px';
        case 'px':
          return width;
        default:
          return parseInt(containerWidth, 10) - paddingSize + 'px';
      }
    }
  }, {
    key: 'renderAfter',
    value: function renderAfter() {
      return '\n      <!--[if mso | IE]>\n        <table\n          ' + this.htmlAttributes({
        align: 'center',
        border: '0',
        cellpadding: '0',
        cellspacing: '0',
        style: 'outlook',
        role: 'presentation',
        width: this.getOutlookWidth()
      }) + '\n        >\n          <tr>\n            <td style="height:0;line-height:0;">\n              &nbsp;\n            </td>\n          </tr>\n        </table>\n      <![endif]-->\n    ';
    }
  }, {
    key: 'render',
    value: function render() {
      return '\n      <p\n        ' + this.htmlAttributes({
        style: 'p'
      }) + '\n      >\n      </p>\n      ' + this.renderAfter() + '\n    ';
    }
  }]);
  return MjDivider;
}(_mjmlCore.BodyComponent), _class.tagOmission = true, _class.allowedAttributes = {
  'border-color': 'color',
  'border-style': 'string',
  'border-width': 'unit(px)',
  'container-background-color': 'color',
  padding: 'unit(px,%){1,4}',
  'padding-bottom': 'unit(px,%)',
  'padding-left': 'unit(px,%)',
  'padding-right': 'unit(px,%)',
  'padding-top': 'unit(px,%)',
  width: 'unit(px,%)'
}, _class.defaultAttributes = {
  'border-color': '#000000',
  'border-style': 'solid',
  'border-width': '4px',
  padding: '10px 25px',
  width: '100%'
}, _temp);
exports.default = MjDivider;
module.exports = exports['default'];