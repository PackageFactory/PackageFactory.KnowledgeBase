var ComponentDomParser = require("componentdomparser");

// Initialize a new instance of the ComponentDomParser.
var
  backboneView = function(View) {
    'use strict';

    return function(el) {
      new View({ el: el });
    };
  },

  Parser = new ComponentDomParser({
  dataSelector: 'app',
  componentIndex: {
  }
});

// Parse the document for all [data-app] nodes.
Parser.parse();
