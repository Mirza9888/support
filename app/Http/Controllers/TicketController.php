<?php
namespace App\Http\Controllers;

use App\Http\Requests\TicketRequest;
use App\Models\User;
use App\Models\Ticket;
use Illuminate\Http\Request;
class TicketController extends Controller
{

    public function index()
    {
        $tickets = Ticket::with(['user'])->get();
        return view('tickets.index', compact('tickets'));
    }

    public function create()
    {

        return view('tickets.create');
    }

    public function store(TicketRequest $request)
    {
        $validatedData=$request->validated();
        $ticket = new Ticket;
        $ticket->name = $validatedData['name'];
        $ticket->description = $validatedData['description'];
        $ticket->urgency = $validatedData['urgency'];
        $ticket->user_id=auth()->id();

        $ticket->save();

        return redirect()->route('tickets.index',compact('ticket'))->with('Successfully added','good job');
    }
}