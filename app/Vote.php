<?php

namespace App;

class Vote {

  public function getVotes($session){
    if( !$session->has('votes')){
      $this->createDummyData($session);
    }
    return $session->get('votes');
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