<html ng-app="ymLBs">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="lib/bootstrap.min.css">
        <link rel="stylesheet" href="lib/style.css">
        <script type="text/javascript" src="lib/angular.min.js"></script>
        <script type="text/javascript" src="lib/scope.js"></script>
        <script type="text/javascript">var base_url = '<?php echo 'http://' . $_SERVER['HTTP_HOST'] . '/binary/' ?>';</script>

        <title>YML Binary System</title>
    </head>
    <body ng-controller="ymLBsCtrl">
        <div class="container">
            <div class="col-md-12 text-center">
                <h2><i>YML Binary System</i></h2>
            </div>
            <div class="col-sm-6 col-xs-12">
                <h4>Filtro:</h4>
                <input class="form-control" ng-model="membersSearch.id" placeholder="ID">
                <input class="form-control" ng-model="membersSearch.nome" placeholder="Nome">
                <input class="form-control" ng-model="membersSearch.supervisor" placeholder="Supervisor (ID)">
            </div>

            <div class="col-sm-6 col-xs-12">
                <form name="newMemberForm">
                    <h4>Cadastro:</h4>
                    <input class="form-control" ng-model="member.nome" placeholder="Nome">
                    <input class="form-control" ng-model="member.supervisor" placeholder="Supervisor (ID">
                    <input class="form-control" ng-model="member.lado" placeholder="Lado">

                    <button class="btn btn-primary" ng-click="register(member)" ng-disabled="newMemberForm.$invalid">Cadastrar</button>
                </form>
            </div>

        </div>

        <table class="table table-responsive table-bordered table-hover table-condensed">
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
                <th>
                    Deletar
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
                <td>
                    <button ng-click="delete(member)" class="btn btn-danger">X</button>
                </td>
            </tr>
        </table>
    </body>
</html>
