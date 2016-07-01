<html lang="en" >
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Angular Material style sheet -->
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.css">
        <link rel="stylesheet" href="app/index.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,900italic,900,700italic,700,500italic,500,400italic' rel='stylesheet' type='text/css'>   <link href='https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css' rel='stylesheet' type='text/css'>

    </head>
    <body ng-app="mainApp" ng-cloak>
        <div ng-controller="mainAppCtrl as mainApp">
            <nav class="top-nav-1"> 
                navigation for management
            </nav> 
            <div class="top-nav-2">
                <div>
                    <div class="tool-nav-link">Dashboard</div>
                    <div class="tool-nav-link">Basic Management</div>
                    <div class="tool-nav-link">Administration</div>
                </div>
            </div>
            <div class="container" layout="row" layout-wrap>
                <md-sidenav
                    class="side-nav scroll"
                    md-component-id="left"
                    md-is-locked-open="$mdMedia('gt-md')"
                    md-disable-backdrop
                    >
                    <div class="nav-option">
                        <span class="option-title"> Student management </span>
                        <div class="option-tabs">
                            <div class="option-tab"> 
                                <i class="fa fa-user-plus" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Student Registration
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-users" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Student list
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Student operations
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="nav-option">
                        <span class="option-title"> Exam management </span>
                        <div class="option-tabs">
                            <div class="option-tab"> 
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Exam Registration
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Exam list
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Exam operations
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="nav-option">
                        <span class="option-title"> Course management </span>
                        <div class="option-tabs">
                            <div class="option-tab"> 
                                <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Course Registration
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-list" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Course list
                                </span>
                            </div>
                            <div class="option-tab">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Course operations
                                </span>
                            </div>
                        </div>
                    </div>


                    <div class="nav-option">
                        <span class="option-title"> Result management </span>
                        <div class="option-tabs">
                            <div class="option-tab">
                                <i class="fa fa-cog" aria-hidden="true"></i>
                                <span class="option-tab-text">
                                    Result operations
                                </span>
                            </div>
                        </div>
                    </div>

                </md-sidenav>
                <div flex> 
                    <div style="height: calc( 100% - 40px);padding: 20px" ui-view>
                        <div>
                            <div class="card-header">Student registration</div>

                        </div>
                        <div class="card-body md-whiteframe-1dp" layout="row" layout-wrap>
                            <table>
                                <tr>
                                    <td>First name:</td>
                                    <td><input></td>
                                </tr>
                                <tr>
                                    <td>M initial:</td>
                                    <td><input></td>
                                </tr>
                                <tr>
                                    <td>Last name:</td>
                                    <td><input></td>
                                </tr>
                                
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div> 
        <!-- Angular Material requires Angular.js Libraries -->
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-animate.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-aria.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.3/angular-messages.min.js"></script>
        <!-- Angular Material Library -->
        <script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0-rc2/angular-material.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-router/0.3.1/angular-ui-router.min.js"></script>

        <!-- Your application bootstrap  -->
        <script src="app/index.js"></script>
        <script src="app/core/core.js"></script>
        <script src="app/dashboard/dashboard.js"></script>
    </body>
</html>