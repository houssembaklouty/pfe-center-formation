<?php

namespace App\Http\Controllers\Condidat;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Formation;
use App\Models\Peyement;
use App\Condidat;

class PaymentController extends Controller
{
    public function store(Request $request) {

        $Formation = Formation::find($request->formation_id);

        $Peyement = Peyement::create([
            'mode_payement' => $request->mode_payement,
            'formation_id' => $Formation->id,
            'condidat_id'=> $request->condidat_id,
            'prix' => $Formation->prix,
        ]);
        
        if(!is_null($Peyement)) {
            return response()->json(['success'=> $Peyement], 200);
        }

        return response()->json(['error'=> 'paiment non valide'], 404);
    }
}
