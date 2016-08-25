var PerfTestSuite = PerfTestSuite || {};
PerfTestSuite.reportEvent = function() {
  var data = JSON.stringify({
    "time": performance.now()
  });
  navigator.sendBeacon('assets/images/beacon.jpg', data);
}
