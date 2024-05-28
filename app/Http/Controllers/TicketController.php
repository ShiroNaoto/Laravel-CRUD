<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Ticket;
use App\Models\Division;
use App\Models\User;


class TicketController extends Controller
{

                                                //USER//
    //Creates Ticket Request//
    public function addTicket(Request $request){
        $request->validate([
            'user_id' => ['required', 'integer'],
            'state' => ['required', 'string', 'max:255'],
            'staffname' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string'],
            'ticketdiv' => ['required', 'string'],
            'severity' => ['required', 'string'],
            'category' => ['required', 'string'],
            'description' => ['nullable'],
        ]);
        
        $ticket = new Ticket();
        $ticket->user_id = $request->input('user_id');
        $ticket->state = $request->input('state');
        $ticket->staffname = $request->input('staffname');
        $ticket->email = $request->input('email');
        $ticket->ticketdiv = $request->input('ticketdiv');
        $ticket->severity = $request->input('severity');
        $ticket->category = $request->input('category');
        $ticket->description = $request->input('description');

        $ticket->save();
        return redirect()->route('user.supticket')->with('success','Ticket has been created!');
    }

    //Posts 'tickets' table//
    public function index(){
        $divisions = Division::all();
        $tickets = Ticket::all();
        return view('user.supticket', ['tickets' => $tickets, 'divisions' => $divisions]);
    }

    //Posts 'tickets' table in compticket.php//
    public function indexFinish(){
        $divisions = Division::all();
        $tickets = Ticket::all();
        return view('user.compticket', ['tickets' => $tickets, 'divisions' => $divisions]);
    }

    //Deletes Sup Ticket (User)//
    public function destroyTicket(Request $request){
        
        $ticketId = $request->input('id');
        Ticket::destroy($ticketId);
        return redirect()->route('user.supticket')->with('success','Ticket has been deleted!');
        
    }

    //Deletes Comp Ticket (User)//
    public function destroycompTicket(Request $request){
        
        $ticketId = $request->input('id');
        Ticket::destroy($ticketId);
        return redirect()->route('user.compticket')->with('success','Ticket has been deleted!');
        
    }

    //Deletes Ticket dashboard.ver (Both Users)//
    public function destroyTickethome(Request $request){
        
        $ticketId = $request->input('id');
        Ticket::destroy($ticketId);
        return redirect()->route('home')->with('success','Ticket has been deleted!');
    }


                                                //ADMIN//
//Posts 'tickets' table in the supticket.php
public function adminindex(){
    $divisions = Division::all();
    $tickets = Ticket::all();
    return view('admin.supticket', ['tickets' => $tickets, 'divisions' => $divisions]);
}

//Posts 'tickets' table in admin compticket.php//
public function indexAdminFinish(){
    $divisions = Division::all();
    $tickets = Ticket::all();
    return view('admin.compticket', ['tickets' => $tickets, 'divisions' => $divisions]);
}

// Update Ticket Request//
public function updateAdminTicket(Request $request) {
    $request->validate([
        'state' => ['required', 'string', 'max:255'],
        'remark' => ['nullable'],
    ]);

    $ticket = Ticket::findOrFail($request->input('id'));
    $ticket->state = $request->input('state');
    $ticket->remark = $request->input('remark');
    $ticket->save();

    return redirect()->route('admin.supticket')->with('success','Ticket has been updated!');;
}

//Deletes Ticket//
public function destroyAdminTicket(Request $request){
        
    $ticketId = $request->input('id');
    Ticket::destroy($ticketId);
    return redirect()->route('admin.supticket')->with('success','Ticket has been deleted!');
}

// Update Ticket Request dashboard.ver//
public function updateAdminTickethome(Request $request) {
    $request->validate([
        'state' => ['required', 'string', 'max:255'],
        'remark' => ['nullable'],
    ]);

    $ticket = Ticket::findOrFail($request->input('id'));
    $ticket->state = $request->input('state');
    $ticket->remark = $request->input('remark');
    $ticket->save();

    return redirect()->route('home')->with('success','Ticket has been updated!');
}

//Deletes Comp Ticket (User)//
public function destroycompAdminTicket(Request $request){
        
    $ticketId = $request->input('id');
    Ticket::destroy($ticketId);
    return redirect()->route('admin.compticket')->with('success','Ticket has been deleted!');
    
}

// Update Ticket Request dashboard.ver//
public function updateComp(Request $request) {
    $request->validate([
        'state' => ['required', 'string', 'max:255'],
        'remark' => ['nullable'],
    ]);

    $ticket = Ticket::findOrFail($request->input('id'));
    $ticket->state = $request->input('state');
    $ticket->remark = $request->input('remark');
    $ticket->save();

    return redirect()->route('admin.compticket')->with('success','Ticket has been updated!');
}



//Deletes Ticket dashboard.ver//
public function destroyAdminTickethome(Request $request){
        
    $ticketId = $request->input('id');
    Ticket::destroy($ticketId);
    return redirect()->route('home')->with('success','Ticket has been deleted!');

}
}
