'use strict';

Object.defineProperty(exports, "__esModule", {
  value: true
});

var _fs = require('fs');

var _fs2 = _interopRequireDefault(_fs);

var _path = require('path');

var _path2 = _interopRequireDefault(_path);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

var includeRegexp = /<mj-include\s+path=['"](.*[.mjml]?)['"]\s*(\/>|>\s*<\/mj-include>)/g;

var ensureIncludeIsMJMLFile = function ensureIncludeIsMJMLFile(file) {
  return file.trim().match(/.mjml/) && file || file + '.mjml';
};
var error = function error(e) {
  return console.error(e.stack || e);
}; // eslint-disable-line no-console

exports.default = function (baseFile) {
  var filesIncluded = [];

  var readIncludes = function readIncludes(dir, file, base) {
    var currentFile = _path2.default.resolve(dir ? _path2.default.join(dir, ensureIncludeIsMJMLFile(file)) : ensureIncludeIsMJMLFile(file));
    var currentDirectory = _path2.default.dirname(currentFile);
    var includes = new RegExp(includeRegexp);

    var content = void 0;
    try {
      content = _fs2.default.readFileSync(currentFile, 'utf8');
    } catch (e) {
      error('File not found ' + currentFile + ' from ' + base);
      return;
    }

    var matchgroup = includes.exec(content);
    while (matchgroup != null) {
      var includedFile = ensureIncludeIsMJMLFile(matchgroup[1]);
      var includedFilePath = _path2.default.resolve(_path2.default.join(currentDirectory, includedFile));

      filesIncluded.push(includedFilePath);

      readIncludes(_path2.default.dirname(currentFile), includedFile, currentFile);
      matchgroup = includes.exec(content);
    }
  };

  readIncludes(null, baseFile, baseFile);

  return filesIncluded;
};

module.exports = exports['default'];