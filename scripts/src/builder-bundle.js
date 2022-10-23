import DtFeatureBox from './modules/feature-box.jsx';

var modules = [
    DtFeatureBox,
];

(function( $ ) {
    
	'use strict';
    $(window).on('et_builder_api_ready', (event, API) => {

        API.registerModules(modules);

    });

})( jQuery );