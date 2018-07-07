"use strict";

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _promise = require("babel-runtime/core-js/promise");

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (_ref) {
  var html = _ref.compiled.html,
      file = _ref.file;
  return new _promise2.default(function (resolve) {
    // eslint-disable-next-line
    console.log("<!-- FILE: " + file + " -->\n" + html);
    resolve();
  });
};

module.exports = exports["default"];