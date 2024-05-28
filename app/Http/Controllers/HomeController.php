<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Division;
use App\Models\Ticket;



class HomeController extends Controller
{
    public function verify()
    {
        if(Auth::id())
        {
            $acctype=Auth()->user()->acctype;
            if($acctype == 'user')
            {
                $divisions = Division::all();
                $tickets = Ticket::all();

                $userTickets = Ticket::where('user_id', Auth::id())->get();
                $userResolved = Ticket::where('user_id', Auth::id())->get();
                $userProcessing = Ticket::where('user_id', Auth::id())->get();
                $userPending = Ticket::where('user_id', Auth::id())->get();

                $ticketCount = $userTickets->count();
                $resolvedTickets = $userResolved->where('state', 'Resolved')->count();
                $processingTickets = $userProcessing->where('state', 'Processing')->count();
                $pendingTickets = $userPending->where('state', 'Pending')->count();

                return view('user.dashboard', [
                    'tickets' => $tickets, 
                    'divisions' => $divisions, 
                    'ticketCount' => $ticketCount,
                    'resolvedTickets' => $resolvedTickets,
                    'processingTickets' => $processingTickets,
                    'pendingTickets' => $pendingTickets
                ]);
            }

            else if($acctype == 'admin')
            {
                $divisions = Division::all();
                $tickets = Ticket::all();

                $ticketCount = $tickets->count();
                $resolvedTickets = $tickets->where('state', 'Resolved')->count();
                $processingTickets = $tickets->where('state', 'Processing')->count();
                $pendingTickets = $tickets->where('state', 'Pending')->count();

                return view('admin.dashboard', [
                    'tickets' => $tickets,
                    'divisions' => $divisions,
                    'ticketCount' => $ticketCount,
                    'resolvedTickets' => $resolvedTickets,
                    'processingTickets' => $processingTickets,
                    'pendingTickets' => $pendingTickets
                ]);
            }

            else
            {
                return redirect()->back();
            }
        }
    }
}
