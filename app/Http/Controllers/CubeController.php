<?php

namespace App\Http\Controllers;

use App\Model\Matrix3D;
use Request;

class CubeController extends Controller
{
    public function index()
    {

        return view('cube.index');
    }
	public function ejercicio()
    {

        return view('cube.ejercicio');
    }

    //In This function is assumed that the input is correct.
    public function execute(Request $request)
    {
        $lines = explode("\n", Request::input('input'));
        $headerLine = 1;
        $output = "";
        for ($i = 1; $i <= $lines[0]; $i++) {
            $lineSet = explode(" ", $lines[$headerLine]);
            $matrix = new Matrix3D($lineSet[0]);
            $headerLine++;
            for ($j = 0; $j < $lineSet[1]; $j++) {
                $comand = explode(" ", $lines[$headerLine]);
                if (strtolower($comand[0]) == "update") {
                    //EXECUTE UPDATE
                    $matrix->update($comand[1], $comand[2], $comand[3], $comand[4]);
                } else if (strtolower($comand[0]) == "query") {
                    //EXECUTE QUERY
                    $output = $output . $matrix->query($comand[1], $comand[2], $comand[3], $comand[4], $comand[5], $comand[6]) . "\n";
                }
                $headerLine++;
            }
        }
        return response()->json(['output' => $output]);
    }
}
