"use strict";
var router_1 = require('@angular/router');
var feature_list_component_1 = require('./features/feature-list/feature-list.component');
var feature_component_1 = require('./features/feature/feature.component');
var home_component_1 = require('./home/home.component');
var appRoutes = [
    { path: '', component: home_component_1.HomeComponent },
    { path: 'features', component: feature_list_component_1.FeatureListComponent },
    { path: 'features/:id', component: feature_component_1.FeatureComponent }
];
exports.appRoutingProviders = [];
exports.routing = router_1.RouterModule.forRoot(appRoutes);
//# sourceMappingURL=app.routing.js.map