describe("RumReporters sendBeacon function", function() {

  beforeEach(function() {
    navigator = {
      sendBeacon: function(beaconBaseUrl, data) {}
    };
    spyOn(navigator, 'sendBeacon');
    RumReporter.setBeaconBaseUrl("https://develop.otto.de/static/all/img/latest/global-resources/beacons/ottorum-ut.gif?");
  });

  it("sends beacon data correctly when it contains just one metric", function() {

    var beaconData = {"rum_userMetric1":2500.06};
    RumReporter.sendBeacon(beaconData);

    expect(navigator.sendBeacon.calls.count()).toEqual(1);
    expect(navigator.sendBeacon).toHaveBeenCalledWith(
      'https://develop.otto.de/static/all/img/latest/global-resources/beacons/ottorum-ut.gif?rum_userMetric1=2500.06',
      JSON.stringify(beaconData)
    );

  });

  it("sends beacon data correctly when it contains multiple metrics", function() {

    var beaconData = {
      "rum_userMetric1":2500.06,
      "rum_userMetric2":1256,
      "rum_userMetric3":7856.89
    };
    RumReporter.sendBeacon(beaconData);

    expect(navigator.sendBeacon.calls.count()).toEqual(1);
    expect(navigator.sendBeacon).toHaveBeenCalledWith(
      'https://develop.otto.de/static/all/img/latest/global-resources/beacons/ottorum-ut.gif?rum_userMetric1=2500.06&rum_userMetric2=1256&rum_userMetric3=7856.89',
      JSON.stringify(beaconData)
    );

  });

  it("sends beacon data URI encoded when it contains invalid url characters", function() {

    var beaconData = {
      "rum_userMetricÜberwichtig":2500.06,
      "rum_userMetric§":1256,
      "rum_user Metric":7856.89
    };
    RumReporter.sendBeacon(beaconData);

    expect(navigator.sendBeacon.calls.count()).toEqual(1);
    expect(navigator.sendBeacon).toHaveBeenCalledWith(
      'https://develop.otto.de/static/all/img/latest/global-resources/beacons/ottorum-ut.gif?rum_userMetric%C3%9Cberwichtig=2500.06&rum_userMetric%C2%A7=1256&rum_user%20Metric=7856.89',
      JSON.stringify(beaconData)
    );

  });

  it("sends no beacon data when it is called with invalid data json: null", function() {

    var beaconData = null;
    RumReporter.setBeaconBaseUrl("https://develop.otto.de/static/all/img/latest/global-resources/beacons/ottorum-ut.gif?");
    RumReporter.sendBeacon(beaconData);

    expect(navigator.sendBeacon.calls.count()).toEqual(0);

  });

  it("sends no beacon data when it is called without metrics at all", function() {

    var beaconData = {};
    RumReporter.sendBeacon(beaconData);

    expect(navigator.sendBeacon.calls.count()).toEqual(0);

  });

});
