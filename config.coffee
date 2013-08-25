exports.config =
  files:
    javascripts:
      joinTo:
        'js/app.js': /^app/
        'js/vendor.js': /^(vendor|bower_components)/
    stylesheets:
      joinTo: 'css/elweb.css'
    templates:
      joinTo: 'app.js'
