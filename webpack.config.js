'use strict';

var path = require('path');
var webpack = require('webpack');
var babel_loader = require('babel-loader');

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

    //watch: true,


    module: {
        loaders: [
            {
                test: /.jsx?$/,
                loader: 'babel-loader',
                exclude: /node_modules/,
                query: {presets: ['es2015', 'react']},
            }

        ],
    }

};