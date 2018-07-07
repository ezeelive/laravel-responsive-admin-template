'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.registerComponent = registerComponent;
exports.initComponent = initComponent;

var _kebabCase = require('lodash/kebabCase');

var _kebabCase2 = _interopRequireDefault(_kebabCase);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var components = {};

function registerComponent(Component) {
  components[(0, _kebabCase2.default)(Component.name)] = Component;
}

function initComponent(_ref) {
  var initialDatas = _ref.initialDatas,
      name = _ref.name;

  var Component = components[name];

  if (Component) {
    var component = new Component(initialDatas);

    if (component.headStyle) {
      component.context.addHeadSyle(name, component.headStyle);
    }
    if (component.componentHeadStyle) {
      component.context.addComponentHeadSyle(component.componentHeadStyle);
    }

    return component;
  }

  return null;
}

exports.default = components;