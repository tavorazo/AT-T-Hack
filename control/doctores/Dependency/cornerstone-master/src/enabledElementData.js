(function (cornerstone) {

    "use strict";

    function getElementData(el, dataType) {
        var ee = cornerstone.getEnabledElement(el);
        if(ee.data.hasOwnProperty(dataType) === false)
        {
            ee.data[dataType] = {};
        }
        return ee.data[dataType];
    }

    function removeElementData(el, dataType) {
        var ee = cornerstone.getEnabledElement(el);
        delete ee.data[dataType];
    }

    // module/private exports
    cornerstone.getElementData = getElementData;
    cornerstone.removeElementData = removeElementData;

}(cornerstone));