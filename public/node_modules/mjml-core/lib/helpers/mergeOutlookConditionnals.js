'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

// # OPTIMIZE ME: — check if previous conditionnal is `<!--[if mso | I`]>` too
exports.default = function (content) {
  return content.replace(/(<!\[endif]-->\s*?<!--\[if mso \| IE]>)/gm, '');
};

module.exports = exports['default'];