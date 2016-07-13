<?php
include_once 'Controller.php';
$controller = new Controller();
?>
<html ng-app="ymLBs">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="lib/bootstrap.min.css">
        <link rel="stylesheet" href="lib/style.css">
        <script type="text/javascript" src="lib/angular.min.js"></script>
        <script type="text/javascript" src="lib/scope.js"></script>
        <script>
            var membersData = <?php echo $controller->pleaseMakeThatShitWorks() ?>;
        </script>
        <title>YML Binary System</title>
    </head>
    <body>
        <div class="container">
            <div class="col-md-12 text-center">
                <h2><i>YML Binary System</i></h2>
            </div>
            <div class="col-md-4 text-center">
                <h4>Filtro:</h4>
            </div>
            <div class="col-md-12">
                <input class="form-control" ng-model="membersSearch.id" placeholder="ID">
                <input class="form-control" ng-model="membersSearch.nome" placeholder="Nome">
                <input class="form-control" ng-model="membersSearch.supervisor" placeholder="Supervisor (ID)">
            </div>
        </div>
        <table ng-controller="ymLBsCtrl" class="table table-responsive table-bordered table-striped table-hover table-condensed">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Supervisor
                </th>
                <th>
                    Lado
                </th>
                <th>
                    Nível
                </th>
                <th>
                    Saldo
                </th>
                <th>
                    Perna Esquerda
                </th>
                <th>
                    Perna Direita
                </th>
            </tr>  
            <tr ng-repeat="member in membersData| filter: membersSearch">
                <td>
                    {{member.id}}
                </td>
                <td>
                    {{member.nome}}
                </td>
                <td>
                    {{member.supervisor}}
                </td>
                <td>
                    {{member.lado}}
                </td>
                <td>
                    {{member.level}}
                </td>
                <td>
                    {{member.bonus}}
                </td>
                <td class="members">
                    <span ng-repeat="memberLeft in member.left">
                        [{{memberLeft.id + '-' + memberLeft.nome}}] - 
                    </span>
                </td>
                <td class="members">
                    <span ng-repeat="memberRight in member.right">
                        [{{memberRight.id + '-' + memberRight.nome}}] - 
                    </span>
                </td>
            </tr>
        </table>
    </body>
</html>
