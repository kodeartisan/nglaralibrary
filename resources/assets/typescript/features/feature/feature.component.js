"use strict";
var core_1 = require('@angular/core');
var feature_service_1 = require('../shared/feature.service');
var router_1 = require('@angular/router');
var FeatureComponent = (function () {
    function FeatureComponent(_route, _router, _featureService) {
        this._route = _route;
        this._router = _router;
        this._featureService = _featureService;
    }
    FeatureComponent.prototype.ngOnInit = function () {
        var _this = this;
        this._sub = this._route.params.subscribe(function (params) {
            var id = +params['id'];
            _this.feature = _this._featureService.getFeature(id);
        });
    };
    FeatureComponent.prototype.ngOnDestroy = function () {
        this._sub.unsubscribe();
    };
    FeatureComponent = __decorate([
        core_1.Component({
            template: require('./feature.component.html')
        }), 
        __metadata('design:paramtypes', [router_1.ActivatedRoute, router_1.Router, feature_service_1.FeatureService])
    ], FeatureComponent);
    return FeatureComponent;
}());
exports.FeatureComponent = FeatureComponent;
//# sourceMappingURL=feature.component.js.map