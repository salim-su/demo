describe("", function() {
  var rootEl;
  beforeEach(function() {
    rootEl = browser.rootEl;
    browser.get("build/docs/examples/example-ng-cloak/index2.html");
  });
  
it('should remove the template directive and css class', function() {
  expect($('#template1').getAttribute('ng-cloak')).
    toBeNull();
  expect($('#template2').getAttribute('ng-cloak')).
    toBeNull();
});
});