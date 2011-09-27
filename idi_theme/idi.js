/*
Copyright 2011 OCAD University

Licensed under the Educational Community License (ECL), Version 2.0 or the New
BSD license. You may not use this file except in compliance with one these
Licenses.

You may obtain a copy of the ECL 2.0 License and BSD License at
https://github.com/fluid-project/infusion/raw/master/Infusion-LICENSE.txt
*/

// Declare dependencies
/*global idi:true, fluid, jQuery*/

// JSLint options 
/*jslint white: true, funcinvoke: true, undef: true, newcap: true, nomen: true, regexp: true, bitwise: true, browser: true, forin: true, maxerr: 100, indent: 4 */
var idi = idi || {};
(function ($) {

/*    fluid.demands("fluid.uiOptions.templatePath", "fluid.fatPanelUIOptions", {
        options: {
            value: "{fatPanelUIOptions}.options.prefix"
        }
    });
    
    fluid.demands("fluid.renderIframe", ["fluid.fatPanelUIOptions"], {
        options: {
            markupProps: {
                src: "http://dev.inclusivedesign.ca/wordpress/wp-content/themes/idi_theme/webapp/components/uiOptions/html/FatPanelUIOptionsFrame.html"
            }
        }
    });

    // Supply the table of contents' template URL
    fluid.demands("fluid.tableOfContents.levels", "fluid.tableOfContents", {
        options: {
            resources: {
                template: {
                    forceCache: true,
                    url: "http://dev.inclusivedesign.ca/wordpress/wp-content/themes/idi_theme/webapp/components/tableOfContents/html/TableOfContents.html"
                }
            }
        }
    });*/

    idi.init = function () {        
		fluid.pageEnhancer({
			//tocTemplate: "<?php bloginfo('template_url'); ?>/infusion/components/tableOfContents/html/TableOfContents.html"
			tocTemplate: "http://dev.inclusivedesign.ca/wordpress/wp-content/themes/idi_theme/infusion/components/tableOfContents/html/TableOfContents.html"
		});

		fluid.uiOptions.fatPanel(".flc-uiOptions-fatPanel", {
            prefix: "http://dev.inclusivedesign.ca/wordpress/wp-content/themes/idi_theme/infusion/components/uiOptions/html/"			
		});          
    };
})(jQuery);