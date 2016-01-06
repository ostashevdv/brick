'use strict';

var gulp = require('gulp');
var browserSync = require('browser-sync');
var bower = require('gulp-bower');
var less = require('gulp-less');
var include = require('gulp-include');

gulp.task('bower', function () {
    return bower({directory: '../../vendor/bower'}).pipe(gulp.dest('../../vendor/bower'))
});