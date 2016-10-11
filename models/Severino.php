<?php

include_once 'Model.php';
$GLOBALS['model'] = new Model();
$severino = new Severino();

if (isset(json_decode(file_get_contents('php://input'), true)['call'])) {
    $severino->getRede();
}

if (isset(json_decode(file_get_contents('php://input'), true)['nome'])) {
    $GLOBALS['model']->register(json_decode(file_get_contents('php://input'), true));
    echo json_encode(['class' => 'success', 'msg' => 'Cadastrado com sucesso!']);
}

if (isset(json_decode(file_get_contents('php://input'), true)['delete'])) {
    $GLOBALS['model']->delete(json_decode(file_get_contents('php://input'), true));
    echo json_encode(['class' => 'success', 'msg' => 'Deletado com sucesso!']);
}

class Severino {

    public function getRede() {
        $globalTree = $GLOBALS['model']->getAllMembers();
        foreach ($globalTree as &$memberTree) {
            $tree = [];
            $limiter = -1;
            $bonusLeft = 0;
            $bonusRight = 0;
            foreach ($GLOBALS['model']->getSubMembers($memberTree['id']) as $member) {
                if ($member['lado'] === 'e') {
                    $memberTree['left'] = $this->mountTree($member, $tree, $limiter);
                    array_unshift($memberTree['left'], $member);
                    $bonusLeft = count($memberTree['left']) * 500;
                } else {
                    $memberTree['right'] = $this->mountTree($member, $tree, $limiter);
                    array_unshift($memberTree['right'], $member);
                    $bonusRight = count($memberTree['right']) * 500;
                }
            }
            $memberTree['bonus'] = $bonusRight < $bonusLeft ? $bonusRight : $bonusLeft;
            $memberTree['level'] = $GLOBALS['model']->getLevel($memberTree['bonus']);
        }
        echo json_encode($globalTree);
    }

    public function mountTree($wantedMember, $tree, $limiter) {
        if ($limiter < count($tree)) {
            foreach ($GLOBALS['model']->getSubMembers($wantedMember['id']) as $subMembers) {
                $tree[] = $subMembers;
            }
            $limiter++;
            return isset($tree[$limiter]) ? $this->mountTree($tree[$limiter], $tree, $limiter) : $tree;
        } else {
            return $tree;
        }
    }

}
