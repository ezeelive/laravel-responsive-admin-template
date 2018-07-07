'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

exports.default = function (content) {
  if (content === '') {
    return '';
  }

  return '\n    <div style="display:none;font-size:1px;color:#ffffff;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;">\n      ' + content + '\n    </div>\n  ';
};

module.exports = exports['default'];