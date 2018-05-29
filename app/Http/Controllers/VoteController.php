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

  public function getVote(Store $session, $id) {
    $vote = new Vote();
    $vote = $post->getPost($session, $id);
    return ;
  }

  public function getAdminCreate(){
    return view('admin.create');
  }

  public function getAdminEdit(Store $session, $id){
    $vote = new Vote();
    $vote = $vote->get($session,$id);
    return view('admin.edit',['vote' => $vote,'voteId' => $id]);
  }

  // Call when 'Create' from submit button pressed
  public function postAdminCreate(Store $session, Request $request){
    $this->validate($request,[
      'title' => 'required|min:5',
    ]);

    $vote = new Vote();
    $vote->addVote($session,$request->input('title'), $request->input('content'));
    return redirect()->route('admin.index')->with('info','Vote created, Title is:' . $request->input('title'));
  }

    // Call when 'Update' from submit button pressed
    public function postAdminUpdate(Store $session, Request $request){
      $this->validate($request,[
        'title' => 'required|min:5',
      ]);
      $vote = new Vote();
      $vote->editVote($session,$request->input('id'),$request->input('title'), $request->input('content'));
      return redirect()->route('admin.index')->with('info','Vote edited, Title is:' . $request->input('title'));
    }
}
