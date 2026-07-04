<?php

namespace App\Http\Controllers;

use App\Models\Room;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::query()
            ->where('is_available', true)
            ->orderBy('floor')
            ->orderBy('sort_order')
            ->get();

        return view('rooms.index', compact('rooms'));
    }

    public function show(Room $room)
    {
        abort_unless($room->is_available, 404);

        $similarRooms = Room::query()
            ->where('is_available', true)
            ->where('id', '!=', $room->id)
            ->where(function ($query) use ($room) {
                $query->where('floor', $room->floor)
                    ->orWhere('capacity', $room->capacity);
            })
            ->orderBy('floor')
            ->orderBy('sort_order')
            ->limit(3)
            ->get();

        return view('rooms.show', compact('room', 'similarRooms'));
    }
}
