var ComponentDomParser = require("componentdomparser");

// Initialize a new instance of the ComponentDomParser.
var Parser = new ComponentDomParser({
  dataSelector: 'app',
  componentIndex: {
  }
});

// Parse the document for all [data-app] nodes.
Parser.parse();
