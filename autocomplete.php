<!DOCTYPE html>
<html lang="en" ng-app="people">
<head>
  <script>
	angular
  .module('MyApp',['ngMaterial', 'ngMessages', 'material.svgAssetsCache'])
  .controller('DemoCtrl', function($scope) {
    $scope.user = {
      title: 'Developer',
      email: 'ipsum@lorem.com',
      firstName: '',
      lastName: '',
      company: 'Google',
      address: '1600 Amphitheatre Pkwy',
      city: 'Mountain View',
      state: 'CA',
      biography: 'Loves kittens, snowboarding, and can type at 130 WPM.\n\nAnd rumor has it she bouldered up Castle Craig!',
      postalCode: '94043'
    };

    $scope.states = ('AL AK AZ AR CA CO CT DE FL GA HI ID IL IN IA KS KY LA ME MD MA MI MN MS ' +
    'MO MT NE NV NH NJ NM NY NC ND OH OK OR PA RI SC SD TN TX UT VT VA WA WV WI ' +
    'WY').split(' ').map(function(state) {
        return {abbrev: state};
      });
  })
  .config(function($mdThemingProvider) {

    // Configure a dark theme with primary foreground yellow

    $mdThemingProvider.theme('docs-dark', 'default')
      .primaryPalette('yellow')
      .dark();

  });


/**
Copyright 2016 Google Inc. All Rights Reserved. 
Use of this source code is governed by an MIT-style license that can be foundin the LICENSE file at http://material.angularjs.org/HEAD/license.
**/
  </script>
</head>
<body ng-controller="AppCtrl" layout="row" >


<div ng-controller="DemoCtrl" layout="column" ng-cloak="" class="md-inline-form inputdemoBasicUsage" ng-app="MyApp">

  <md-input-container class="md-block" flex-gt-sm="">
            <label>State</label>
            <md-select ng-model="user.state">
              <md-option ng-repeat="state in states" value="{{state.abbrev}}">
                {{state.abbrev}}
              </md-option>
            </md-select>
          </md-input-container>

</div>


<!-- process:template
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', '<%= ga.uid %>', '<%= ga.url %>');
  ga('send', 'pageview');
</script>
/process -->

</body>
</html>