'use strict';

var path = require('path');
var webpack = require('webpack');

function isDebug(){
    return false;
}

module.exports = {
    //context: __dirname + '/ui',
    entry: './ui/app.js',
    output: {
        path: './ui/build',
        filename: 'app.bundle.js',
        library: 'app'
    },

    watch: true,
};