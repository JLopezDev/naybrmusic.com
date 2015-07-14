'use strict';

module.exports = function(app){
    var site = require('../controllers/site.controller');
    app.route('/').get(site.index);
};
