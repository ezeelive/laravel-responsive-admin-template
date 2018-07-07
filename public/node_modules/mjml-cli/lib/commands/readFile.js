'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.flatMapPaths = undefined;

var _fs = require('fs');

var _fs2 = _interopRequireDefault(_fs);

var _glob = require('glob');

var _glob2 = _interopRequireDefault(_glob);

var _lodash = require('lodash');

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var flatMapPaths = exports.flatMapPaths = function flatMapPaths(paths) {
  return (0, _lodash.flatMap)(paths, function (p) {
    return _glob2.default.sync(p, { nodir: true });
  });
};

exports.default = function (path) {
  try {
    return { file: path, mjml: _fs2.default.readFileSync(path).toString() };
  } catch (e) {
    // eslint-disable-next-line
    console.warn('Cannot read file: ' + path + ' doesn\'t exist or no access', e);
    return {};
  }
};