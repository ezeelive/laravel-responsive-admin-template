var through = require('through');

/**
 * Promise constructor
 * @param callback
 */
var promise = function(callback) {
  if (callback) {
    this.promisecallback = callback;
  }

  this.promises = [];
};

/**
 * Holds the promise interface
 * @type {{promises: Array, promisecallback: Function, makePromises: Function}}
 */
promise.prototype = {

  /**
   * Make a set of promises
   * @param promises
   * @param callback
   */
  makePromises: function (promises, callback) {
    this.promises = promises;
    if (callback) {
      this.promisecallback = callback;
    }
  },

  /**
   * Make an incremental promise
   * @param promise
   */
  makePromise: function(promise) {
    this.promises.push(promise);
  },

  /**
   * Deliver a promise via gulp pipes
   * @param promise
   * @returns {*}
   */
  deliverGulpPromise: function (promise) {
    var prom = this.promises,
      cb = this.promisecallback;

    return through(function (file) {

    }, function () {

      for (var i = 0; i < prom.length; i++) {
        if (prom[i] == promise) {
          prom.splice(i--, 1);
        }
      }
      if (prom.length === 0) {
        process.nextTick(function() {
          cb();
        });
      }

      this.emit('end');
    });
  },

  /**
   * Deliver a single promise
   * @param promise
   */
  deliverPromise: function(promise) {
    var prom = this.promises,
      cb = this.promisecallback;

    for (var i = 0; i < prom.length; i++) {
      if (prom[i] == promise) {
        prom.splice(i--, 1);
      }
    }
    if (prom.length === 0) {
      process.nextTick(function() {
        cb();
      });
    }
  }
};

/**
 * Expose the API
 */
module.exports = promise;