var fs = require('fs'),
    args = require('system').args,
    page = require('webpage').create();
    
page.content = fs.read(args[1]);

page.viewPortSize = {
    width: 768,
    height: 1024
};

page.paperSize = {
    format: 'A2',
    orientation: 'portrait',
    margin: '1cm'
};

window.setTimeout(function() {
    page.render(args[1]);
    phantom.exit();
}, 1000);