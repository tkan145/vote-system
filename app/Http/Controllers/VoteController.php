<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Session\Store;

use App\Vote;

class VoteController extends Controller
{
  public function getIndex(Store $session){
    $vote = new Vote();
    $votes = $vote->getVotes($session);
    return view('pages.index',['votes' => $votes]);
  }
}
