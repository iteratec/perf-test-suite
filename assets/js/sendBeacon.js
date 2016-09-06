(function(root) {
  'use strict';

  function sendBeacon(url, data) {
    var xhr = ('XMLHttpRequest' in window) ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
    xhr.open('POST', url, false);
    xhr.setRequestHeader('Accept', '*/*');
    if (typeof data === 'string') {
      xhr.setRequestHeader('Content-Type', 'text/plain;charset=UTF-8');
      xhr.responseType = 'text/plain';
    } else if (Object.prototype.toString.call(data) === '[object Blob]') {
      if (data.type) {
        xhr.setRequestHeader('Content-Type', data.type);
      }
    }
    xhr.send(data);
    return true;
  }

  if (typeof exports !== 'undefined') {
    if (typeof module !== 'undefined' && module.exports) {
      exports = module.exports = sendBeacon;
    }
    exports.sendBeacon = sendBeacon;
  } else if (typeof define === 'function' && define.amd) {
    define([], function() {
      return sendBeacon;
    });
  } else if ('navigator' in root && !('sendBeacon' in root.navigator)) {
    root.navigator.sendBeacon = sendBeacon;
  }
})(this);

var RumReporter = (function(){
  "use strict";
  var beaconBaseUrl = "assets/images/beacon.jpg";

  function getDataAppendedUrl(data){
    var dataAppendedUrl = getBeaconBaseUrl().match(/\?$/g) ? getBeaconBaseUrl() : getBeaconBaseUrl() + "?"
    for (var metricName in data) {
      dataAppendedUrl += encodeURI(metricName) + "=" + encodeURI(data[metricName]) + "&";
    }
    return dataAppendedUrl.match(/\&$/g) ? dataAppendedUrl.substring(0, dataAppendedUrl.length-1) : dataAppendedUrl;
  }
  function sendBeacon(data){
    try {
      if (Object.keys(data).length > 0) {
        navigator.sendBeacon(getDataAppendedUrl(data), JSON.stringify(data));
      }
    } catch (e) {
      console.log("An exception occurred trying to send user timing metric via beacon api: " + e.message + " IN " + e.sourceURL + ": " + e.line)
    }
  }
  function setBeaconBaseUrl(beaconUrl){
    beaconBaseUrl = beaconUrl;
  }
  function getBeaconBaseUrl(){
    return beaconBaseUrl;
  }

  return {
    sendBeacon: sendBeacon,
    setBeaconBaseUrl: setBeaconBaseUrl,
    getBeaconBaseUrl: getBeaconBaseUrl
  };
 })();
