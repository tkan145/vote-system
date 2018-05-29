<?php

namespace App;

class Vote {

  public function getVotes($session){
    if( !$session->has('votes')){
      $this->createDummyData($session);
    }
    return $session->get('votes');
  }

  public function getVote($session, $id){
    if( !$session->has('votes')){
      $this->createDummyData($session);
    }
    return $session->get('votes')[$id];
  }

  public function addVote($session,$title,$content){
    if( !$session->has('votes')){
      $this->createDummyData($session);
    }
    $votes = $session->get('votes');
    array_push($votes,['title' => $title, 'content' => $content]);
    $session->put('votes',$votes);
  }

  public function editVote($session,$id,$title,$content){
    $votes = $session->get('votes');
    $votes[$id] = ['title' => $title, 'content' => $content];
    $session->put('votes',$votes);
  }

  private function createDummyData($session){
    $votes = [
      [
        'title'   => 'Vote topic 1',
        'content' => 'this is the options list'
      ],
      [
        'title'   => 'Vote topic 2',
        'content' => 'this is the options list'
      ]
      ];

      $session->put('votes',$votes);
  }
}