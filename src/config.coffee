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
      order:
        before: ['app/styles/wpbanner.css']
    templates:
      joinTo: 'app.js'
