"use strict";
var core_1 = require('@angular/core');
var Feature = (function () {
    function Feature(id, description) {
        this.id = id;
        this.description = description;
    }
    return Feature;
}());
exports.Feature = Feature;
var FeatureService = (function () {
    function FeatureService() {
        this._features = [
            new Feature(1, 'Easy installation via script'),
            new Feature(2, 'Bundling with Webpack'),
            new Feature(3, 'Require Angular templates and styles external files')
        ];
    }
    FeatureService.prototype.getFeatures = function () { return this._features; };
    FeatureService.prototype.getFeature = function (id) {
        return this._features.find(function (feature) { return feature.id === +id; });
    };
    FeatureService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [])
    ], FeatureService);
    return FeatureService;
}());
exports.FeatureService = FeatureService;
//# sourceMappingURL=feature.service.js.map