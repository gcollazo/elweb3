exports.config =
  paths:
    public: '../'
  files:
    javascripts:
      joinTo:
        'js/app.js': /^app/
        'js/vendor.js': /^(vendor|bower_components)/
    stylesheets:
      joinTo: 'style.css'
    templates:
      joinTo: 'app.js'
