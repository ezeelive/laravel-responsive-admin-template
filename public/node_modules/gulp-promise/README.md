Gulp Promises
===================
Ensure reliable callbacks of multiple streams within a task.
### Installation &nbsp;  [![npm version](https://badge.fury.io/js/gulp-promise.svg)](http://badge.fury.io/js/gulp-promise)
```sh
npm install gulp-promise
```
### Simple Usage
```javascript
var promise = require("gulp-promise");

// the list of project
var projectsToBuild = {
  "proj1": true,
  "proj2": true
  "proj3": true
};

/**
 * Build JS
 */
gulp.task('js', function (cb) {

  var myProm = new promise();

  // Build the promise list
  var promiselist = [];
  for (var proj in projectsToBuild) {
    promiselist.push(proj);
  }
  // Set up the promises
  myProm.makePromises(promiselist, function () {
    if (cb) {
      cb();
    }
  });

  for (var proj in projectsToBuild) {
    gulp.src(['/src/**/*.js'])
      .pipe(gulp.dest('./out'))
      .pipe(myProm.deliverGulpPromise(proj));
  }

});
```
### API
The constructor can be called plain or with a success callback. Eg:
```javascript
var myProm = new promise();

// or
myProm = new promise(function() {
  // Done!
});
```
You can resolve promises manually (``myProm.deliverPromise()``) or via gulp streams (``myProm.deliverGulpPromise()``).
### Breaking Change
In 1.0, this was changed to be a proper class and can no longer be used statically. Also, ``prom.deliverPromise()`` for gulp pipes has been replaced by ``prom.deliverGulpPromise()``.