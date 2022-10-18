<?php

namespace App\Http\Controllers\Poll;

use App\Http\Requests\PollStoreRequest;
use App\Models\Poll;
use Illuminate\Routing\Controller;


class DownloadController extends Controller
{
    /**
     * Registro de usuario
     */
    public function __invoke()
    {
        $date = date('d-m-Y');
        $fileName = "reporte-arroz-$date.csv";

        $headers = array(
            "Content-type" => "text/csv",
            "Content-Disposition" => "attachment; filename=$fileName",
            "Pragma" => "no-cache",
            "Cache-Control" => "must-revalidate, post-check=0, pre-check=0",
            "Expires" => "0"
        );

        $columns = array(
            'Nombre',
            'Email',
            'Telefono',
            'Pregutna 1',
            'Pregutna 2',
            'Pregutna 3',
            'Pregutna 3 otros',
            'Pregutna 4',
            'Pregutna 4 otros',
            'Pregutna 5',
            'Pregutna 6',
            'Pregutna 7',
            'Pregutna 8',
            'Creado',
        );

        $data = Poll::get();

        $callback = function () use ($data, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($data as $d) {
                $row['name'] = $d['name'];
                $row['email'] = $d['email'];
                $row['phone'] = $d['phone'];
                $row['question1'] = $d['question1'];
                $row['question2'] = $d['question2'];
                $row['question3'] = $d['question3'];
                $row['question3_other'] = $d['question3_other'];
                $row['question4'] = $d['question4'];
                $row['question4_other'] = $d['question4_other'];
                $row['question5'] = $d['question5'];
                $row['question6'] = $d['question6'];
                $row['question7'] = $d['question7'];
                $row['question8'] = $d['question8'];
                $row['created_at'] = $d['created_at'];

                fputcsv($file, [
                    $row['name'],
                    $row['email'],
                    $row['phone'],
                    $row['question1'],
                    $row['question2'],
                    $row['question3'],
                    $row['question3_other'],
                    $row['question4'],
                    $row['question4_other'],
                    $row['question5'],
                    $row['question6'],
                    $row['question7'],
                    $row['question8'],
                    $row['created_at']
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}