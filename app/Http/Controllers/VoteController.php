<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vote;

class VoteController extends Controller
{
  public function getIndex(){
    $votes = Vote::orderBy('created_at','desc')->get();
    return view('pages.index',['votes' => $votes]);
  }

  public function getVote($id) {
    $vote = Vote::find($id);
    return ;
  }

  public function getAdminCreate(){
    return view('pages.create-vote');
  }

  public function getAdminEdit($id){
    $vote = Vote::find($id);
    return view('pages.edit-vote',['vote' => $vote,'voteId' => $id]);
  }

  public function getAdminDelete($id){
    $vote = Vote::find($id);
    $vote->delete();
    return redirect()->route('admin.index')->with('info','Vote deleted' );
  }

  // Call when 'Create' from submit button pressed
  public function postAdminCreate(Request $request){
    $this->validate($request,[
      'title' => 'required|min:5',
    ]);

    $vote = new Vote([
      'title'       => $request->input('title'),
      'description' => $request->input('description'),
    ]);

    $vote->save();
    //$vote->addVote($session,$request->input('title'), $request->input('content'));
    return redirect()->route('admin.index')->with('info','New Vote created, Title is:' . $request->input('title'));
  }

  // Call when 'Update' from submit button pressed
  public function postAdminUpdate( Request $request){
    $this->validate($request,[
      'title' => 'required|min:5',
    ]);
    $vote = Vote::find($request->input('id'));
    $vote->title = $request->input('title');
    $vote->description = $request->input('description');
    $vote->save();
    return redirect()->route('admin.index')->with('info','Vote edited, Title is:' . $request->input('title'));
  }
}
