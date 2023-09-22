<?php
namespace App\Http\Controllers;
use App\Models\Ticket;
use Illuminate\Http\Request;
class SupportController extends Controller
{
    public function index()
    {
        $tickets = Ticket::all();
        return view('tickets.support.index', compact('tickets'));
    }
}
