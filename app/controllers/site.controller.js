'use strict';

exports.index = function(req, res){
    return res.render('home', {
        page: 'Home Page'
    });
};
