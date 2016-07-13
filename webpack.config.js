var path = require('path');

module.exports = {
  entry: './assets/scripts/app.js',
  output: {
    path: path.join(__dirname, 'dist/scripts'),
    filename: 'bundle.js'
  },
  devtool: 'inline-source-map',
  module: {
    loaders: [
      {
        test: /\.js$/,
        loader: 'babel',
        exclude: /(node_modules|bower_components)/,
        query: {
          presets: ['es2015']
        }
      }
    ]
  }
};
