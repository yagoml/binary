<?php

include_once 'Model.php';

class Controller extends Model {

    public function pleaseMakeThatShitWorks() {
        $globalTree = $this->getAllMembers();
        foreach ($globalTree as &$memberTree) {
            $limiter = -1;
            $tree = [];
            $bonusLeft = 0;
            $bonusRight = 0;
            foreach ($this->getSubMembers($memberTree['id']) as $member) {
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
            $memberTree['level'] = $this->getLevel($memberTree['bonus']);
        }
        return json_encode($globalTree);
    }

    private function mountTree($wantedMember, $tree, $limiter) {
        if ($limiter < count($tree)) {
            foreach ($this->getSubMembers($wantedMember['id']) as $subMembers) {
                $tree[] = $subMembers;
            }
            $limiter++;
            return isset($tree[$limiter]) ? $this->mountTree($tree[$limiter], $tree, $limiter) : $tree;
        } else {
            return $tree;
        }
    }

    public function getLevel($bonus) {
        $levels = array(
            'Distribuidor' => 0,
            'Bronze' => 500,
            'Prata' => 1000,
            'Ouro' => 3000,
            'Diamante' => 10000
        );
        $prevLvl = 'Distribuidor';
        foreach ($levels as $lvl => $minScore) {
            if ($bonus < $minScore) {
                return $prevLvl;
            } else if ($bonus === $minScore || $lvl === 'Diamante') {
                return $lvl;
            } else {
                $prevLvl = $lvl;
            }
        }
    }

}
