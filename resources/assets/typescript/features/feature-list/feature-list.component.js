"use strict";
var core_1 = require('@angular/core');
var feature_service_1 = require('../shared/feature.service');
var FeatureListComponent = (function () {
    function FeatureListComponent(_featureService) {
        this._featureService = _featureService;
    }
    FeatureListComponent.prototype.ngOnInit = function () {
        this.features = this._featureService.getFeatures();
    };
    FeatureListComponent = __decorate([
        core_1.Component({
            template: require('./feature-list.component.html'),
            styles: [require('./feature-list.component.scss')]
        }), 
        __metadata('design:paramtypes', [feature_service_1.FeatureService])
    ], FeatureListComponent);
    return FeatureListComponent;
}());
exports.FeatureListComponent = FeatureListComponent;
//# sourceMappingURL=feature-list.component.js.map