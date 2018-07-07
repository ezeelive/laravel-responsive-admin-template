'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _regenerator = require('babel-runtime/regenerator');

var _regenerator2 = _interopRequireDefault(_regenerator);

var _asyncToGenerator2 = require('babel-runtime/helpers/asyncToGenerator');

var _asyncToGenerator3 = _interopRequireDefault(_asyncToGenerator2);

var _promise = require('babel-runtime/core-js/promise');

var _promise2 = _interopRequireDefault(_promise);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var stdinSync = function stdinSync() {
  return new _promise2.default(function (res) {
    var buffer = '';

    var stream = process.stdin;

    stream.on('data', function (chunck) {
      buffer += chunck;
    });

    stream.on('end', function () {
      return res(buffer);
    });
  });
};

exports.default = (0, _asyncToGenerator3.default)( /*#__PURE__*/_regenerator2.default.mark(function _callee() {
  var mjml;
  return _regenerator2.default.wrap(function _callee$(_context) {
    while (1) {
      switch (_context.prev = _context.next) {
        case 0:
          _context.next = 2;
          return stdinSync();

        case 2:
          mjml = _context.sent;
          return _context.abrupt('return', { mjml: mjml });

        case 4:
        case 'end':
          return _context.stop();
      }
    }
  }, _callee, undefined);
}));
module.exports = exports['default'];